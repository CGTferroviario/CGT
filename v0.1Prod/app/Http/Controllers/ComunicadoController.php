<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreComunicadoRequest;
use App\Http\Requests\UpdateComunicadoRequest;
use App\Models\Categoria;
use App\Models\Comunicado;
use App\Models\Empresa;
use App\Models\Etiqueta;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ComunicadoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('comunicados.index', [
            'comunicados' => Comunicado::orderBy('fecha', 'desc')->get()
        ]);
        
    }
    public function comunicados()
    {
        return view('comunicados.index', [
            'comunicados' => Comunicado::orderBy('fecha', 'desc')->get()
        ]);
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('comunicados.create', [
            'comunicados' => Comunicado::orderBy('id', 'desc')->paginate(15),
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
        // dd($request);
        $publicado = $request->publicado;
        if ($request->publicado == 'on') {
            $publicado = 1;
        } else {
            $publicado = 0;
        };
        $usuario = Auth::user()->id;
        // $empresa = $comunicado->empresa->id;

        // dd($request->empresa);
        $comunicado = Comunicado::create([
            'numero' => $request->numero,
            'empresa_id' => $request->empresa,
            'etiqueta_id' => $request->etiqueta,
            'categoria_id' => $request->categoria,
            'fecha' => $request->fecha,
            'titulo' => $request->titulo,
            'subtitulo' => $request->subtitulo,
            'cuerpo' => $request->cuerpo,
            'adjunto1' => $request->adjunto1,
            'adjunto2' => $request->adjunto2,
            'adjunto3' => $request->adjunto3,
            'imagen' => $request->imagen,
            
            'publicado' => $publicado,
            'user_id' => $usuario,
            // 'empresa_id' => 1 
            // 'adjunto1' => $this->storeImage($request)
        ]);

        return redirect(route('admin.comunicados.index'));
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
