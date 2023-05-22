<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreComunicadoRequest;
use App\Http\Requests\UpdateComunicadoRequest;
use App\Models\Comunicado;

class ComunicadoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('comunicados.index', [
            'comunicados' => Comunicado::orderBy('updated_at', 'desc')->get(),
        ]);
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('comunicados.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreComunicadoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Comunicado $comunicado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comunicado $comunicado)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateComunicadoRequest $request, Comunicado $comunicado)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comunicado $comunicado)
    {
        //
    }
}
