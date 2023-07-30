<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreComunicadoRequest;
use App\Http\Requests\UpdateComunicadoRequest;
use App\Models\Categoria;
use App\Models\Comunicado;
use App\Models\Empresa;
use App\Models\Etiqueta;
use Illuminate\Support\Facades\Auth;
use Spatie\FlareClient\View;

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
            'etiquetas' => Etiqueta::orderBy('id', 'asc')->get()
        ]);
    }
    public function store(StoreComunicadoRequest $request)
    {
        $publicado = $request->publicado;
        if ($request->publicado == 'on') {
            $publicado = 1;
        } else {
            $publicado = 0;
        };

        $usuario = Auth::user()->id;

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
        ]);

        return redirect(route('comunicados.index'))->with('message', 'Comunicado Creado Correctamente');
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
