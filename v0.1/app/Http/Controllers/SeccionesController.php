<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSeccionesRequest;
use App\Http\Requests\UpdateSeccionesRequest;
use App\Models\Secciones;

class SeccionesController extends Controller
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
     * @param  \App\Http\Requests\StoreSeccionesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSeccionesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Secciones  $secciones
     * @return \Illuminate\Http\Response
     */
    public function show(Secciones $secciones)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Secciones  $secciones
     * @return \Illuminate\Http\Response
     */
    public function edit(Secciones $secciones)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSeccionesRequest  $request
     * @param  \App\Models\Secciones  $secciones
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSeccionesRequest $request, Secciones $secciones)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Secciones  $secciones
     * @return \Illuminate\Http\Response
     */
    public function destroy(Secciones $secciones)
    {
        //
    }
}
