<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEmpresaRequest;
use App\Http\Requests\UpdateEmpresaRequest;
use App\Models\Empresa;

class EmpresaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
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

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEmpresaRequest $request)
    {
        $comunicados = $request->comunicados;
        if ($request->comunicados == 'on') {
            $comunicados = true;
        } else {
            $comunicados = false;
        };
        $gestion_vales = $request->gestion_vales;
        if ($request->gestion_vales == 'on') {
            $gestion_vales = true;
        } else {
            $gestion_vales = false;
        };
        $activa = $request->activa;
        if ($request->activa == 'on') {
            $activa = true;
        } else {
            $activa = false;
        };
        
        $empresa = Empresa::create([
            'nombre' => $request->nombre,
            'descripcion' => $request->descripcion,
            'logo' => $request->logo,
            'gestion_vales' => $gestion_vales,
            'comunicados' => $comunicados,
            'activa' => $activa,
        ]);

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
        // dd($empresa->comunicados);
        $empresas = Empresa::all();
        return view('intranet.empresas.edit', compact('empresa', 'empresas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEmpresaRequest $request, Empresa $empresa)
    {
        $validated = $request->validate(['nombre' => ['required'], 'descripcion' => ['required']]);
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
