<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreNoticiaRequest;
use App\Http\Requests\UpdateNoticiaRequest;
use App\Models\Categoria;
use App\Models\Empresa;
use App\Models\Etiqueta;
use App\Models\Noticia;
use Illuminate\Support\Facades\Auth;

class NoticiaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
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

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('intranet.noticias.create', [
            'noticias' => Noticia::orderBy('id', 'desc')->paginate(15),
            'empresas' => Empresa::orderBy('id', 'asc')->get(),
            'categorias' => Categoria::orderBy('id', 'asc')->get(),
            'etiquetas' => Etiqueta::orderBy('id', 'asc')->get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreNoticiaRequest $request)
    {
        
        $usuario = Auth::user()->id;

        $noticia = Noticia::create([
            'empresa_id' => $request->empresa,
            'categoria_id' => $request->categoria,
            'fecha' => $request->fecha,
            'titulo' => $request->titulo,
            'cuerpo' => $request->cuerpo,
            'imagen' => $request->imagen,
            'adjunto' => $request->adjunto,
            'ruta' => 'ruta',
            'user_id' => $usuario,
        ]);
        if ($request->has('etiquetas')) {
            $noticia->etiquetas()->attach($request->etiquetas);
        }
        // dd($noticia);

        return redirect(route('intranet.noticias.index'))->with('message', 'Noticia Añadida Correctamente');

    }

    /**
     * Display the specified resource.
     */
    public function show(Noticia $noticia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Noticia $noticia)
    {
        return view('intranet.noticias.edit', [
            'noticias' => Noticia::orderBy('id', 'desc')->paginate(15),
            'empresas' => Empresa::orderBy('id', 'asc')->get(),
            'categorias' => Categoria::orderBy('id', 'asc')->get(),
            'etiquetas' => Etiqueta::orderBy('id', 'asc')->get()
        ], compact('noticia'));
        // $noticias = Noticia::all();

        // return view('intranet.noticias.edit', compact('noticia', 'noticias'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateNoticiaRequest $request, Noticia $noticia)
    {
        // dd($request);

        $validated = $request->validate([
            // 'empresa_id' => ['required'],
            // 'categoria_id' => ['required'],
            'fecha' => ['required'],
            'titulo' => ['required'],
            'cuerpo' => ['required'],
            // 'imagen' => ['required'],
            // 'adjunto' => ['required'],
            // 'ruta' => 'ruta',
            // 'user_id' => $usuario,
        ]);
        // dd($validated);

        $noticia->update($validated);

        return to_route('intranet.noticias.index')->with('message', 'Noticia Actualizada Correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Noticia $noticia)
    {
        $noticia->delete();

        return to_route('intranet.noticias.index')->with('message', 'Noticia Eliminada.');
    }
}
