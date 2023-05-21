<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreComunicadosRequest;
use App\Models\Categoria;
use App\Models\Comunicado;
use App\Models\Empresa;
use App\Models\Etiqueta;
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
            'etiquetas' => Etiqueta::orderBy('id', 'asc')->get(),
            'categorias' => Categoria::orderBy('id', 'asc')->get()
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
        // $request->validated();
        // dd($request);
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
            // 'adjunto1' => $this->storeImage($request)
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
    private function storeImage($request)
    {
        $newImageName = uniqid() . '-' . $request->title . '.' . $request->image->extension();

        return $request->image->move(public_path('images'), $newImageName);
    }
}
