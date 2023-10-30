<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreNoticiaRequest;
use App\Http\Requests\UpdateNoticiaRequest;
use App\Models\Categoria;
use App\Models\Empresa;
use App\Models\Etiqueta;
use App\Models\Noticia;
use Illuminate\Support\Facades\Auth;
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
        return view('biblioteca.noticias', [
            
            'noticias' => Noticia::orderBy('updated_at', 'desc')->paginate(12),
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
            'adjunto' => 'nullable|pdf',
        ]);

        $rutaImagen = null;
        if ($request->hasFile('imagen')) {
            $imagen = $request->file('imagen');
            $imagenNombre = Str::slug($request->titulo) . '.' . $imagen->getClientOriginalExtension();
            $rutaImagen = $imagen->storeAs('noticias/imagenes', $imagenNombre, 'public');
        }

        $noticia = Noticia::create(array_merge($request->all(), 
            ['imagen' => $rutaImagen, 'user_id' => $usuario, 'empresa_id' => $request->empresa, 'categoria_id' => $request->categoria]
        ));

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

        $noticia->delete();

        return to_route('intranet.noticias.index')->with('message', 'Noticia Eliminada.');
    }
}
