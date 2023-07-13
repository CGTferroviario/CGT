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
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        return view('intranet.documentos.index', [
            'documentos' => Documento::orderBy('fecha', 'desc')->get()
            
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('intranet.documentos.create', [
            'documentos' => Documento::orderBy('id', 'desc')->paginate(15),
            'empresas' => Empresa::orderBy('id', 'asc')->get(),
            'categorias' => Categoria::orderBy('id', 'asc')->get(),
            'etiquetas' => Etiqueta::orderBy('id', 'asc')->get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDocumentoRequest $request)
    {
        

        
        // $usuario = Auth::user()->id;
        
        $validatedData = $request->validated();

        // Guardar el archivo en el sistema de archivos local
        $fileName = time().'.'.$request->file->extension();
        $request->file->storeAs('public', $fileName);

        // Crear el documento en la base de datos
        $documento = new Documento();
        $documento->titulo = $validatedData['titulo'];
        $documento->descripcion = $validatedData['descripcion'];
        $documento->ruta = $fileName;
        $documento->fecha = $request->fecha;
        
        // Asociar la categoría, empresa, etiquetas y usuario
        $documento->user_id = auth()->user()->id;
        // dd($request->empresa);
        $documento->empresa_id = $request->empresa;
        $documento->categoria_id = $request->categoria;
        $documento->etiqeuta_id = $request->etiqueta;
        // dd($documento);
        
        $documento->save();

        // $documento->etiquetas()->attach($validatedData['etiquetas']);

        return redirect()->back()->with('success', 'Documento subido correctamente.');

        

        // $comunicado = Comunicado::create([
        //     'numero' => $request->numero,
        //     'empresa_id' => $request->empresa,
        //     'etiqueta_id' => $request->etiqueta,
        //     'categoria_id' => $request->categoria,
        //     'fecha' => $request->fecha,
        //     'titulo' => $request->titulo,
        //     'subtitulo' => $request->subtitulo,
        //     'cuerpo' => $request->cuerpo,
        //     'adjunto1' => $request->adjunto1,
        //     'adjunto2' => $request->adjunto2,
        //     'adjunto3' => $request->adjunto3,
        //     'imagen' => $request->imagen,
            
        //     'publicado' => $publicado,
        //     'user_id' => $usuario,
        // ]);

        // return redirect(route('comunicados.index'))->with('message', 'Comunicado Creado Correctamente');
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
