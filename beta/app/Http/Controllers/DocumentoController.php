<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDocumentoRequest;
use App\Http\Requests\UpdateDocumentoRequest;
use App\Models\Categoria;
use App\Models\Documento;
use App\Models\Empresa;
use App\Models\Etiqueta;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;


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

        $request->validate([
            'empresa_id' => 'nullable',
            'categoria_id' => 'nullable',
            'fecha' => 'required',
            'titulo' => 'required',
            'descripcion' => 'required',
            "pdf" => "nullable|mimetypes:application/pdf|max:10000",
        ]);

        $empresaId = $request->empresa;
        $empresa = Empresa::find($empresaId);
        $nombre_empresa = $empresa?->nombre;

        $categoriaId = $request->categoria;
        $categoria = Categoria::find($categoriaId);
        $nombre_categoria = $categoria?->nombre;

        $etiquetaId = $request->etiquetas[0];
        $etiqueta = Etiqueta::find($etiquetaId);
        $nombre_etiqueta = $etiqueta?->nombre;

        $ruta = 'documentos' . '/' . $nombre_empresa . '/' . $nombre_categoria . '/' . $nombre_etiqueta;

        $rutaDocumento = null;
        if ($request->hasFile('pdf')) {
            $pdf = $request->file('pdf');
            $pdfNombre = Str::slug($request->titulo) . '.' . $pdf->getClientOriginalExtension();

            $pdfDirectory = public_path($ruta);
            if (!File::isDirectory($pdfDirectory)) {
                File::makeDirectory($pdfDirectory, 0755, true);
            }
            $rutaDocumento = $pdf->storeAs($ruta, $pdfNombre, 'public');
        }

        

        // dd($ruta);

        $documento = Documento::create(array_merge($request->all(), [
            'pdf' => $rutaDocumento,
            'user_id' => $usuario,
            'empresa_id' => $request->empresa,
            'categoria_id' => $request->categoria
        ]));

        if ($request->has('etiquetas')) {
            $documento->etiquetas()->attach($request->etiquetas);
        }

        return redirect(route('intranet.documentos.index'))->with('message', 'Documento Añadido Correctamente');
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
        return view('intranet.documentos.edit', [
            'documentos' => Documento::orderBy('id', 'desc')->paginate(15),
            'empresas' => Empresa::orderBy('id', 'asc')->get(),
            'categorias' => Categoria::orderBy('id', 'asc')->get(),
            'etiquetas' => Etiqueta::orderBy('id', 'asc')->get()
        ], compact('documento'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDocumentoRequest $request, Documento $documento)
    {
        $validated = $request->validate([
            'empresa' => ['required', 'exists:empresas,id'],
            'categoria' => ['required', 'exists:categorias,id'],
            'fecha' => ['required'],
            'titulo' => ['required'],
            'descripcion' => ['required'],
        ]);

        // Actualizar el documento
        $documento->fecha = $request->fecha;
        $documento->titulo = $request->titulo;
        $documento->cuerpo = $request->cuerpo;
        $documento->save();

        // Actualizar la empresa relacionada
        $empresa = Empresa::find($request->empresa);
        $documento->empresa()->associate($empresa);
        $documento->save();

        // Actualizar la categoría relacionada
        $categoria = Categoria::find($request->categoria);
        $documento->categoria()->associate($categoria);
        $documento->save();

        // Actualiza las etiquetas
        $documento->etiquetas()->sync($request->etiquetas);

        $documento->update($validated);

        return to_route('intranet.documentos.index')->with('message', 'Documento Actualizado Correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Documento $documento)
    {
        $documento->etiquetas()->detach();

        if ($documento->pdf && Storage::disk('public')->exists($documento->pdf)) {
            Storage::disk('public')->delete($documento->pdf);
        }

        $documento->delete();

        return to_route('intranet.documentos.index')->with('message', 'Documento Eliminada.');

    }
}
