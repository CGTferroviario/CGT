<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEtiquetaRequest;
use App\Http\Requests\UpdateEtiquetaRequest;
use App\Models\Etiqueta;

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
        $request->validate([
            'nombre' => 'required',
            'activa' => 'required',
        ]);
 
        Etiqueta::create($request->all());

        return redirect(route('intranet.etiquetas.index'))->with('message', 'Etiqueta Creada Correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Etiqueta $etiqueta)
    {
        //
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
