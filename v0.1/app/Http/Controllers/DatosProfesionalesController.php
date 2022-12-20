<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDatos_profesionalesRequest;
use App\Http\Requests\UpdateDatos_profesionalesRequest;
use App\Models\Datos_profesionales;

class DatosProfesionalesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreDatos_profesionalesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDatos_profesionalesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Datos_profesionales  $datos_profesionales
     * @return \Illuminate\Http\Response
     */
    public function show(Datos_profesionales $datos_profesionales)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Datos_profesionales  $datos_profesionales
     * @return \Illuminate\Http\Response
     */
    public function edit(Datos_profesionales $datos_profesionales)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDatos_profesionalesRequest  $request
     * @param  \App\Models\Datos_profesionales  $datos_profesionales
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDatos_profesionalesRequest $request, Datos_profesionales $datos_profesionales)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Datos_profesionales  $datos_profesionales
     * @return \Illuminate\Http\Response
     */
    public function destroy(Datos_profesionales $datos_profesionales)
    {
        //
    }
}
