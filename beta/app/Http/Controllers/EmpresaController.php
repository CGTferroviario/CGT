<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEmpresaRequest;
use App\Http\Requests\UpdateEmpresaRequest;
use App\Models\Empresa;

class EmpresaController extends Controller
{

    public function index()
    {
        return view('intranet.empresas.index', [
            'empresas' => Empresa::orderBy('id', 'asc')->get()
        ]);
    }

    /**
     * Muestra el formulario para crear una nueva empresa.
     */
    public function create()
    {
        return view('intranet.empresas.create', [
            'empresas' => Empresa::orderBy('id', 'asc')->get(),
        ]);
    }

    public function store(StoreEmpresaRequest $request)
    {
        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
            'vales' => 'required',
            'comunicados' => 'required',
            'activa' => 'required'
        ]);
 
        Empresa::create($request->all());

        return redirect(route('intranet.empresas.index'))->with('message', 'Empresa Creada Correctamente');
    }

    public function show(Empresa $empresa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Empresa $empresa)
    {
        $empresas = Empresa::all();

        return view('intranet.empresas.edit', compact('empresa', 'empresas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEmpresaRequest $request, Empresa $empresa)
    {
        $validated = $request->validate([
            'nombre' => ['required'],
            'descripcion' => ['required'],
            'comunicados' => ['required'],
            'vales' => ['required'],
            'activa' => ['required']
        ]);

        $empresa->update($validated);

        return to_route('intranet.empresas.index')->with('message', 'Empresa Actualizada Correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Empresa $empresa)
    {
        $empresa->delete();

        return to_route('intranet.empresas.index')->with('message', 'Empresa Eliminada.');
    }
}
