<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Comunicado;
use App\Models\Empresa;
use Illuminate\Http\Request;

class ComunicadosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('comunicados.index', [
            'comunicados' => Comunicado::orderBy('updated_at', 'desc')->get()
        ]);
    } 

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comunicados.create', [
            'comunicados' => Comunicado::orderBy('id', 'desc')->get(),
            'empresas' => Empresa::orderBy('id_empresa', 'asc')->get(),
            'categorias' => Categoria::orderBy('id_empresa', 'asc')->get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Comunicado::create([
            'categorias_comunicado' => $request->categorias_comunicado,
            'fecha_com' => $request->fecha_com,
            'fecha_subida' => $request->fecha_subida,
            'id_empresa' => $request->id_empresa,
            'titulo' => $request->titulo,
            'subtitulo' => $request->subtitulo,
            'descripcion' => $request->descripcion,
            'adjunto1' => $this->storeImage($request)
        ]);

        return redirect(route('comunicados.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('comunicados.show', [
            'comunicados' => Comunicado::findOrFail($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('comunicado.editar', [
            'comunicado' => Comunicado::where('id', $id)->first()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Comunicado::where('id', $id)->update($request->except([
            '_token', '_method'
        ]));
        
        return redirect(route('comunicado.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
