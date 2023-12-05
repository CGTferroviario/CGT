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
            'documentos' => Documento::orderBy('fecha', 'desc')->paginate(50),
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

        // Sacamos la empresa a una variable
        $empresaId = $request->empresa;
        $empresa = Empresa::find($empresaId);
        $nombre_empresa = $empresa?->nombre;

        // Sacamos la categoría a una variable
        $categoriaId = $request->categoria;
        $categoria = Categoria::find($categoriaId);
        $nombre_categoria = $categoria?->nombre;

        // Sacamos la primera etiqueta a una variable
        $etiquetaId = $request->etiquetas[0];
        $etiqueta = Etiqueta::find($etiquetaId);
        $nombre_etiqueta = $etiqueta?->nombre;

        // Array_filter elimina los segmentos de ruta vacíos (nulos o cadenas vacías) implode combina los segmentos restantes con '/' para formar la ruta
        $segmentos = ['documentos', $nombre_empresa, $nombre_categoria, $nombre_etiqueta];
        $ruta = '/' . implode('/', array_filter($segmentos));

        $rutaDocumento = null;
        if ($request->hasFile('pdf')) {
            $pdf = $request->file('pdf');
            $pdfNombre = Str::slug($request->titulo) . '.' . $pdf->getClientOriginalExtension();

            $pdfDirectory = public_path('storage', $ruta);
            if (!File::isDirectory($pdfDirectory)) {
                File::makeDirectory($pdfDirectory, 0755, true);
            }
            $rutaDocumento = '/storage/' . $pdf->storeAs($ruta, $pdfNombre, 'public');
        }

        $documento = Documento::create([
            'pdf' => $rutaDocumento,
            'user_id' => $usuario,
            'empresa_id' => $request->empresa,
            'categoria_id' => $request->categoria,
            'titulo' => $request->titulo,
            'descripcion' => $request->descripcion,
            'fecha' => $request->fecha,
        ]);

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

    public function update(UpdateDocumentoRequest $request, Documento $documento)
    {
        // Actualizar el documento
        $documento->fill($request->all());

        // Actualizar la empresa relacionada
        if ($request->has('empresa')) {
            $empresa = Empresa::find($request->empresa);
            $documento->empresa()->associate($empresa);
        }

        // Actualizar la categoría relacionada
        if ($request->has('categoria')) {
            $categoria = Categoria::find($request->categoria);
            $documento->categoria()->associate($categoria);
        }

        // Actualiza las etiquetas
        $documento->etiquetas()->sync($request->etiquetas);

        // Actualizar el archivo
        if ($request->hasFile('pdf')) {
            // Eliminar el archivo antiguo
            if (Storage::disk('public')->exists($documento->pdf)) {
                Storage::disk('public')->delete($documento->pdf);
            }

            // Subir el nuevo archivo
            $pdf = $request->file('pdf');
            $pdfNombre = Str::slug($request->titulo) . '.' . $pdf->getClientOriginalExtension();
            $documento->pdf = $pdf->storeAs('documentos', $pdfNombre, 'public');
        }

        $documento->save();

        return redirect(route('intranet.documentos.index'))->with('message', 'Documento Actualizado Correctamente');
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
