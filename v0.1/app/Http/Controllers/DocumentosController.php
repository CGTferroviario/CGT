<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoredocumentosRequest;
use App\Http\Requests\UpdatedocumentosRequest;
use App\Models\documentos;

class DocumentosController extends Controller
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
     * @param  \App\Http\Requests\StoredocumentosRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoredocumentosRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\documentos  $documentos
     * @return \Illuminate\Http\Response
     */
    public function show(documentos $documentos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\documentos  $documentos
     * @return \Illuminate\Http\Response
     */
    public function edit(documentos $documentos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatedocumentosRequest  $request
     * @param  \App\Models\documentos  $documentos
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatedocumentosRequest $request, documentos $documentos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\documentos  $documentos
     * @return \Illuminate\Http\Response
     */
    public function destroy(documentos $documentos)
    {
        //
    }
}
