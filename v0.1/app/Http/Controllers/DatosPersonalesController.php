<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDatos_personalesRequest;
use App\Http\Requests\UpdateDatos_personalesRequest;
use App\Models\Datos_personales;

class DatosPersonalesController extends Controller
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
     * @param  \App\Http\Requests\StoreDatos_personalesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDatos_personalesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Datos_personales  $datos_personales
     * @return \Illuminate\Http\Response
     */
    public function show(Datos_personales $datos_personales)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Datos_personales  $datos_personales
     * @return \Illuminate\Http\Response
     */
    public function edit(Datos_personales $datos_personales)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDatos_personalesRequest  $request
     * @param  \App\Models\Datos_personales  $datos_personales
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDatos_personalesRequest $request, Datos_personales $datos_personales)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Datos_personales  $datos_personales
     * @return \Illuminate\Http\Response
     */
    public function destroy(Datos_personales $datos_personales)
    {
        //
    }
}
