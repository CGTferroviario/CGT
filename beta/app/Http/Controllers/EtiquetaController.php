<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEtiquetaRequest;
use App\Http\Requests\UpdateEtiquetaRequest;
use App\Models\Comunicado;
use App\Models\Documento;
use App\Models\Etiqueta;
use App\Models\Noticia;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class EtiquetaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('intranet.etiquetas.index', [
            'etiquetas' => Etiqueta::orderBy('id', 'asc')->get()
        ]); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('intranet.etiquetas.create', [
            'etiquetas' => Etiqueta::orderBy('id', 'asc')->get()
        ]); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEtiquetaRequest $request)
    {  
        // Guardamos el valor del slug, es decir, el nombre de etiqueta sin espacios
        $slug = Str::slug($request->nombre);
        
        // Guardamos todos los datos en la tabla Etiqueta
        Etiqueta::create(array_merge($request->all(), ['slug' => $slug]));

        return redirect(route('intranet.etiquetas.index'))->with('message', 'Etiqueta Creada Correctamente');
    }

    // Display the specified resource.
    public function show(Etiqueta $etiqueta, $slug)
    {
        // Mostramos la página de categoría
        try {
            $etiqueta = Etiqueta::where('slug', $slug)->firstOrFail();
            $comunicados = $etiqueta->comunicados->paginate(8);
            $comunicadosTotales = $etiqueta->comunicados->count();
            $noticias = $etiqueta->noticias->paginate(8);
            $documentos = $etiqueta->documentos->paginate(8);
            return view('etiquetas.show', compact('etiqueta', 'comunicadosTotales', 'comunicados', 'noticias', 'documentos'));
        } catch (ModelNotFoundException $e) {
            abort(404, 'Etiqueta no encontrada');
        }
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Etiqueta $etiqueta)
    {
        $etiquetas = Etiqueta::all();

        return view('intranet.etiquetas.edit', compact('etiqueta', 'etiquetas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEtiquetaRequest $request, Etiqueta $etiqueta)
    {
        $validated = $request->validate([
            'nombre' => ['required'],
            'activa' => ['required']
        ]);

        $etiqueta->update($validated);

        return to_route('intranet.etiquetas.index')->with('message', 'Etiqueta Actualizada Correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Etiqueta $etiqueta)
    {
        $etiqueta->delete();

        return to_route('intranet.etiquetas.index')->with('message', 'Etiqueta Eliminada.');
    }
}
