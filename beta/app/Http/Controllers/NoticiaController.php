<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreNoticiaRequest;
use App\Http\Requests\UpdateNoticiaRequest;
use App\Models\Categoria;
use App\Models\Empresa;
use App\Models\Etiqueta;
use App\Models\Noticia;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;


class NoticiaController extends Controller
{

    public function index()
    {
        return view('intranet.noticias.index', [
            'noticias' => Noticia::orderBy('fecha', 'desc')->get()
        ]); 
    }
    public function bibliotecaNoticias()
    {
        // Obtener todas las noticias
        $noticias = Noticia::orderBy('fecha', 'desc')->get();
        // Formatear todas las fechas en la colección a 'dd/mm/yyyy'
        $noticias = $noticias->map(function ($noticia) {
            $noticia->fecha = \Carbon\Carbon::parse($noticia->fecha)->format('d/m/Y');
            return $noticia;
        });
        return view('biblioteca.noticias', [
            
            'noticias' => $noticias->paginate(12),
            'empresas' => Empresa::orderBy('id', 'asc')->get(),
            'categorias' => Categoria::orderBy('id', 'asc')->get(),
            'etiquetas' => Etiqueta::orderBy('id', 'asc')->get()
        ]);        
    }

    public function create()
    {
        return view('intranet.noticias.create', [
            'noticias' => Noticia::orderBy('id', 'desc')->paginate(15),
            'empresas' => Empresa::orderBy('id', 'asc')->get(),
            'categorias' => Categoria::orderBy('id', 'asc')->get(),
            'etiquetas' => Etiqueta::orderBy('id', 'asc')->get()
        ]);
    }

    public function store(StoreNoticiaRequest $request)
    {
        $usuario = Auth::user()->id;

        $request->validate([
            'empresa_id' => 'nullable',
            'categoria_id' => 'nullable',
            'fecha' => 'required',
            'titulo' => 'required',
            'cuerpo' => 'required',
            'imagen' => 'nullable|image',
            "adjunto" => "nullable|mimetypes:application/pdf|max:10000",
        ]);

        $rutaImagen = null;
        if ($request->hasFile('imagen')) {
            $imagen = $request->file('imagen');
            $imagenNombre = Str::slug($request->titulo) . '.' . $imagen->getClientOriginalExtension();

            $imagenDirectory = public_path('storage/noticias/imagenes');
            if (!File::isDirectory($imagenDirectory)) {
                File::makeDirectory($imagenDirectory, 0755, true);
            }
            $rutaImagen = $imagen->storeAs('noticias/imagenes', $imagenNombre, 'public');
        }

        $rutaAdjunto = null;
        if ($request->hasFile('adjunto')) {
            $adjunto = $request->file('adjunto');
            $adjuntoNombre = Str::slug($request->titulo) . '.' . $adjunto->getClientOriginalExtension();

            $adjuntoDirectory = public_path('storage/noticias/adjuntos');
            if (!File::isDirectory($adjuntoDirectory)) {
                File::makeDirectory($adjuntoDirectory, 0755, true);
            }
            $rutaAdjunto = $adjunto->storeAs('noticias/adjuntos', $adjuntoNombre, 'public');
        }

        $noticia = Noticia::create(array_merge($request->all(), [
            'imagen' => $rutaImagen,
            'adjunto' => $rutaAdjunto,
            'user_id' => $usuario,
            'empresa_id' => $request->empresa,
            'categoria_id' => $request->categoria
        ]));

        if ($request->has('etiquetas')) {
            $noticia->etiquetas()->attach($request->etiquetas);
        }

        return redirect(route('intranet.noticias.index'))->with('message', 'Noticia Añadida Correctamente');
    }

    public function show(Noticia $noticia)
    {
        //
    }

    public function edit(Noticia $noticia)
    {
        return view('intranet.noticias.edit', [
            'noticias' => Noticia::orderBy('id', 'desc')->paginate(15),
            'empresas' => Empresa::orderBy('id', 'asc')->get(),
            'categorias' => Categoria::orderBy('id', 'asc')->get(),
            'etiquetas' => Etiqueta::orderBy('id', 'asc')->get()
        ], compact('noticia'));
    }

    public function update(UpdateNoticiaRequest $request, Noticia $noticia)
    {
        $validated = $request->validate([
            'empresa' => ['required', 'exists:empresas,id'],
            'categoria' => ['required', 'exists:categorias,id'],
            'fecha' => ['required'],
            'titulo' => ['required'],
            'cuerpo' => ['required'],
        ]);

        // Actualizar la noticia
        $noticia->fecha = $request->fecha;
        $noticia->titulo = $request->titulo;
        $noticia->cuerpo = $request->cuerpo;
        $noticia->save();

        // Actualizar la empresa relacionada
        $empresa = Empresa::find($request->empresa);
        $noticia->empresa()->associate($empresa);
        $noticia->save();

        // Actualizar la categoría relacionada
        $categoria = Categoria::find($request->categoria);
        $noticia->categoria()->associate($categoria);
        $noticia->save();

        // Actualiza las etiquetas
        $noticia->etiquetas()->sync($request->etiquetas);

        $noticia->update($validated);

        return to_route('intranet.noticias.index')->with('message', 'Noticia Actualizada Correctamente');
    }

    public function destroy(Noticia $noticia)
    {
        $noticia->etiquetas()->detach();

        if ($noticia->imagen && Storage::disk('public')->exists($noticia->imagen)) {
            Storage::disk('public')->delete($noticia->imagen);
        }
        if ($noticia->adjunto && Storage::disk('public')->exists($noticia->adjunto)) {
            Storage::disk('public')->delete($noticia->adjunto);
        }

        $noticia->delete();

        return to_route('intranet.noticias.index')->with('message', 'Noticia Eliminada.');
    }
}
