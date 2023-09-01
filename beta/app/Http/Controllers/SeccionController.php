<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSeccionRequest;
use App\Http\Requests\UpdateSeccionRequest;
use App\Models\Seccion;

class SeccionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('intranet.secciones.index', [
            'seccions' => Seccion::orderBy('id', 'asc')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSeccionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Seccion $seccion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Seccion $seccion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSeccionRequest $request, Seccion $seccion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Seccion $seccion)
    {
        //
    }
}
