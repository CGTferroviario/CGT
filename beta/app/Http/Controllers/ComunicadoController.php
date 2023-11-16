<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreComunicadoRequest;
use App\Http\Requests\UpdateComunicadoRequest;
use App\Models\Categoria;
use App\Models\Comunicado;
use App\Models\Empresa;
use App\Models\Etiqueta;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;


class ComunicadoController extends Controller
{
    public function index()
    {
        return view('intranet.comunicados.index', [
            'comunicados' => Comunicado::orderBy('fecha', 'desc')->get()
        ]);
    }
    public function bibliotecaComunicados()
    {
        return view('biblioteca.comunicados', [
            
            'comunicados' => Comunicado::orderBy('updated_at', 'desc')->paginate(12),
            'empresas' => Empresa::orderBy('id', 'asc')->get(),
            'categorias' => Categoria::orderBy('id', 'asc')->get(),
            'etiquetas' => Etiqueta::orderBy('id', 'asc')->get()
        ]);     
    }
    public function create()
    {
        
        return view('intranet.comunicados.create', [
            'comunicados' => Comunicado::orderBy('id', 'desc')->paginate(15),
            'empresas' => Empresa::where('comunicados', '=', 1)->orderBy('id', 'asc')->get(),
            'categorias' => Categoria::orderBy('id', 'asc')->get(),
            'etiquetas' => Etiqueta::orderBy('id', 'asc')->get(),
            
        ]);
        
    }
    public function store(StoreComunicadoRequest $request)
    {
        $year = Carbon::now()->format('y');
        // dd($year);
        $publicado = $request->publicado;
        if ($request->publicado == 'on') {
            $publicado = 1;
        } else {
            $publicado = 0;
        };

        $usuario = Auth::user()->id;
        $numero = $request->numero . '.' . $year;

        $request->validate([
            'numero' => 'required',
            'empresa_id' => 'nullable',
            'categoria_id' => 'nullable',
            'fecha' => 'required',
            'titulo' => 'required',
            'subtitulo' => 'required',
            'cuerpo' => 'required',
            'imagen' => 'nullable|image',
            "pdf" => "nullable|mimetypes:application/pdf|max:10000",
            "adjunto" => "nullable|mimetypes:application/pdf|max:10000",
        ]);
        
        $rutaImagen = null;
        if ($request->hasFile('imagen')) {
            $imagen = $request->file('imagen');
            $imagenNombre = Str::slug($request->titulo) . '.' . $imagen->getClientOriginalExtension();

            $imagenDirectory = public_path('storage/comunicados/img');
            if (!File::isDirectory($imagenDirectory)) {
                File::makeDirectory($imagenDirectory, 0755, true);
            }
            $rutaImagen = $imagen->storeAs('comunicados/img', $imagenNombre, 'public');
        }

        $rutaPdf = null;
        if ($request->hasFile('pdf')) {
            $pdf = $request->file('pdf');
            $pdfNombre = Str::slug($request->titulo) . '.' . $pdf->getClientOriginalExtension();

            $pdfDirectory = public_path('storage/comunicados/pdf');
            if (!File::isDirectory($pdfDirectory)) {
                File::makeDirectory($pdfDirectory, 0755, true);
            }
            $rutaPdf = $pdf->storeAs('comunicados/pdf', $pdfNombre, 'public');
        }

        $rutaAdjunto = null;
        if ($request->hasFile('adjunto')) {
            $adjunto = $request->file('adjunto');
            $adjuntoNombre = Str::slug($request->titulo) . '.' . $adjunto->getClientOriginalExtension();

            $adjuntoDirectory = public_path('storage/comunicados/adjuntos');
            if (!File::isDirectory($adjuntoDirectory)) {
                File::makeDirectory($adjuntoDirectory, 0755, true);
            }
            $rutaAdjunto = $adjunto->storeAs('comunicados/adjuntos', $adjuntoNombre, 'public');
        }

        $comunicado = Comunicado::create(array_merge($request->all(), [
            'numero' => $numero,
            'empresa_id' => $request->empresa,
            'categoria_id' => $request->categoria,
            'fecha' => $request->fecha,
            'titulo' => $request->titulo,
            'subtitulo' => $request->subtitulo,
            'cuerpo' => $request->cuerpo,
            'pdf' => $request->pdf,
            'imagen' => $request->imagen,
            'adjunto' => $request->adjunto,
            'publicado' => $publicado,
            'user_id' => $usuario,
        ]));
        if ($request->has('etiquetas')) {
            $comunicado->etiquetas()->attach($request->etiquetas);
        }
        // dd($comunicado);
        return redirect(route('intranet.comunicados.index'))->with('message', 'Comunicado Creado Correctamente');
    }
    public function show(Comunicado $comunicado)
    {
        //
    }
    public function edit(Comunicado $comunicado)
    {
        //
    }

    public function update(UpdateComunicadoRequest $request, Comunicado $comunicado)
    {
        //
    }

    public function destroy(Comunicado $comunicado)
    {
        $comunicado->delete();

        return to_route('intranet.comunicados.index')->with('message', 'Comunicado Eliminado.');
    }
}
