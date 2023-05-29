<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreComunicadoRequest;
use App\Http\Requests\UpdateComunicadoRequest;
use App\Models\Categoria;
use App\Models\Comunicado;
use App\Models\Empresa;
use App\Models\Etiqueta;

class ComunicadoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('comunicados.index', [
            'comunicados' => Comunicado::orderBy('updated_at', 'desc')->get()
        ]);
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('comunicados.create', [
            'comunicados' => Comunicado::orderBy('id', 'desc')->get(),
            'empresas' => Empresa::orderBy('id', 'asc')->get(),
            'categorias' => Categoria::orderBy('id', 'asc')->get(),
            'etiquetas' => Etiqueta::orderBy('id', 'asc')->get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreComunicadoRequest $request)
    {
        // $request->validated();
        dd($request);
        $comunicado = Comunicado::create([
            'numero' => $request->numero,
            'empresa' => $request->empresa,
            'etiqueta' => $request->etiqueta,
            'categoria' => $request->categoria,
            'fecha' => $request->fecha,
            'titulo' => $request->titulo,
            'subtitulo' => $request->subtitulo,
            'cuerpo' => $request->cuerpo,
            'adjunto1' => $request->adjunto1,
            'adjunto2' => $request->adjunto2,
            'adjunto3' => $request->adjunto3,
            'imagen' => $request->imagen,
            'publicado' => $request->publicado,
            // 'adjunto1' => $this->storeImage($request)
        ]);

        // $table->id();
        //     $table->boolean('publicado');
        //     $table->unsignedBigInteger('user_id');
        //     $table->unsignedTinyInteger('numero');
        //     $table->unsignedBigInteger('empresa_id');
        //     $table->unsignedBigInteger('categoria_id');
        //     $table->unsignedBigInteger('etiqueta_id');
        //     $table->date('fecha');
        //     $table->string('titulo');
        //     $table->string('subtitulo');
        //     $table->text('cuerpo');
        //     $table->string('adjunto1');
        //     $table->string('adjunto2');
        //     $table->string('adjunto3');
        //     $table->string('imagen');
        //     $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        //     $table->foreign('empresa_id')->references('id')->on('empresas')->onDelete('cascade');
        //     $table->foreign('categoria_id')->references('id')->on('categorias')->onDelete('cascade');
        //     $table->foreign('etiqueta_id')->references('id')->on('etiquetas')->onDelete('cascade');
        //     $table->timestamps();

        return redirect(route('comunicados.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Comunicado $comunicado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comunicado $comunicado)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateComunicadoRequest $request, Comunicado $comunicado)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comunicado $comunicado)
    {
        //
    }
}
