<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEsloganRequest;
use App\Http\Requests\UpdateEsloganRequest;
use App\Models\Eslogan;

class EsloganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $eslogans = Eslogan::all();
        return view('intranet.eslogans.index', compact('eslogans'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('intranet.eslogans.create');
    }

    public function store(StoreEsloganRequest $request)
    {
        $request->validate([
            'frase' => 'required|max:255',
        ]);
        // dd($request);
        Eslogan::create($request->all());
        return redirect()->route('intranet.eslogans.index')->with('success', 'Eslogan creado correctamente.');
    }

    public function edit(Eslogan $eslogan)
    {
        return view('intranet.eslogans.edit', compact('eslogan'));
    }

    public function update(UpdateEsloganRequest $request, Eslogan $eslogan)
    {
        
        dd($eslogan);

        // $eslogan = Eslogan::findOrFail($id);
        // $activo = $request->input('activo');

        // if ($activo) {
        //     // Desactivar todos los otros eslogans
        //     Eslogan::where('id', '!=', $id)->update(['activo' => false]);
        // }

        // $eslogan->activo = $activo;
        // $eslogan->save();


        $eslogan->update($request->all());
        return redirect()->route('intranet.eslogans.index')->with('success', 'Eslogan actualizado correctamente.');
    }

    public function destroy(Eslogan $eslogan)
    {
        $eslogan->delete();
        return redirect()->route('intranet.eslogans.index')->with('success', 'Eslogan eliminado correctamente.');
    }

    
}
