<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSeccionRequest;
use App\Http\Requests\UpdateSeccionRequest;
use App\Models\Ccaa;
use App\Models\Municipio;
use App\Models\Provincia;
use App\Models\Seccion;
use Illuminate\Support\Facades\Log;

class SeccionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('intranet.seccions.index', [
            'seccions' => Seccion::orderBy('id', 'asc')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('intranet.seccions.create', [
            'municipios' => Municipio::orderBy('id', 'desc')->get(),
            'provincias' => Provincia::orderBy('id', 'asc')->get(),
            'ccaas' => Ccaa::orderBy('id', 'asc')->get(),
            'seccions' => Seccion::orderBy('id', 'asc')->get()
        ]);
    }

    public function store(StoreSeccionRequest $request)
    {
        dd($request);
        $seccion = Seccion::create(array_merge($request->all(), [
            'nombre' => $request->nombre,
            'email' => $request->email,
            'email2' => $request->email2,
            'telefono' => $request->telefono,
            'direccion' => $request->direccion,
            'descripcion' => $request->descripcion,
            'responsable' => $request->responsable,
            'ccaa_id' => $request->ccaa_id,
            'provincia_id' => $request->provincia_id,
            'municipio_id' => $request->municipio_id,
        ]));

        return redirect(route('intranet.seccions.index'))->with('message', 'Sección Creada Correctamente');

    }

    public function show(Seccion $seccion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Seccion $seccion)
    {
        return view('intranet.seccions.edit', [
            'seccions' => Seccion::orderBy('id', 'desc')->get(),
            'municipios' => Municipio::orderBy('id', 'desc')->get(),
            'provincias' => Provincia::orderBy('id', 'asc')->get(),
            'ccaas' => Ccaa::orderBy('id', 'asc')->get(),
        ], compact('seccion'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSeccionRequest $request, Seccion $seccion)
    {
        // dd($request);
        // Actualizar el comunicado
        $seccion->update($request->validated());

        // Actualizar la ccaa relacionada
        $ccaa = Ccaa::find($request->ccaa_id);
        $seccion->ccaa()->associate($ccaa);

        // Actualizar la provincia relacionada
        $provincia = Provincia::find($request->provincia_id);
        $seccion->provincia()->associate($provincia);

        // Actualizar la provincia relacionada
        $municipio = Municipio::find($request->municipio_id);
        $seccion->municipio()->associate($municipio);
        
        $seccion->save();

        return to_route('intranet.seccions.index')->with('message', 'Sección Actualizada Correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Seccion $seccion)
    {
        $seccion->delete();

        return to_route('intranet.seccions.index')->with('message', 'Sección Eliminada.');
    }
}
