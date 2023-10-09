<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDocumentoRequest;
use App\Http\Requests\UpdateDocumentoRequest;
use App\Models\Categoria;
use App\Models\Documento;
use App\Models\Empresa;
use App\Models\Etiqueta;
use Illuminate\Support\Facades\Auth;

class DocumentoController extends Controller
{
    public function index()
    {
        return view('intranet.documentos.index', [
            'documentos' => Documento::orderBy('fecha', 'desc')->orderBy('fecha', 'desc')->paginate(12)
        ]);
    }
    public function create()
    {
        return view('intranet.documentos.create', [
            'documentos' => Documento::orderBy('id', 'desc')->paginate(15),
            'empresas' => Empresa::orderBy('id', 'asc')->get(),
            'categorias' => Categoria::orderBy('id', 'asc')->get(),
            'etiquetas' => Etiqueta::orderBy('id', 'asc')->get()
        ]);
    }
    public function store(StoreDocumentoRequest $request)
    {

        $usuario = Auth::user()->id;

        $empresaId = $request->empresa;
        $empresa = Empresa::find($empresaId);
        $nombre_empresa = $empresa->nombre;

        $categoriaId = $request->categoria;
        $categoria = Categoria::find($categoriaId);
        $nombre_categoria = $categoria->nombre;

        $etiquetaId = $request->etiquetas[0];
        $etiqueta = Etiqueta::find($etiquetaId);
        $nombre_etiqueta = $etiqueta->nombre;

        $ruta = $nombre_empresa . '/' . $nombre_categoria . '/' . $nombre_etiqueta;

        // dd($ruta);

        $documento = Documento::create([
            'empresa_id' => $request->empresa,
            'categoria_id' => $request->categoria,
            'fecha' => $request->fecha,
            'titulo' => $request->titulo,
            'descripcion' => $request->descripcion,
            'ruta' => $ruta,
            'user_id' => $usuario,
        ]);
        if ($request->has('etiquetas')) {
            $documento->etiquetas()->attach($request->etiquetas);
        }
        // dd($documento);

        return redirect(route('intranet.documentos.index'))->with('message', 'Documento Añadido Correctamente');


        // $usuario = Auth::user()->id;
        // dd($request);
        // $validatedData = $request->validated();

        // Guardar el archivo en el sistema de archivos local
        // $fileName = $request->titulo.'.'.$request->file->extension();
        // $request->file->storeAs('public', $fileName);

        // Crear el documento en la base de datos
        // $documento = new Documento();
        // $documento->titulo = $validatedData['titulo'];
        // $documento->descripcion = $validatedData['descripcion'];
        // $documento->ruta = $fileName;
        // $documento->fecha = $request->fecha;
        
        // Asociar la categoría, empresa, etiquetas y usuario
        // $documento->user_id = auth()->user()->id;
        // $documento->empresa_id = $request->empresa;
        // $documento->categoria_id = $request->categoria;
        // $documento->etiqueta_id = $request->etiqueta;
        
        // $documento->save();

        // $documento->etiquetas()->attach($validatedData['etiquetas']);

        // return redirect()->back()->with('success', 'Documento subido correctamente.');
    }


    /**
     * Display the specified resource.
     */
    public function show(Documento $documento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Documento $documento)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDocumentoRequest $request, Documento $documento)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Documento $documento)
    {
        $documento->delete();

        return to_route('intranet.documentos.index')->with('message', 'Documento Eliminado.');
    }
}
