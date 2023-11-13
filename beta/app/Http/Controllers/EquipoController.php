<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEquipoRequest;
use App\Http\Requests\UpdateEquipoRequest;
use App\Models\Equipo;

class EquipoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function sp()
    {
        $tipos = Equipo::select('tipo')->distinct()->pluck('tipo');


        $equipoSecretariadoPermanente = Equipo::where('tipo' , 'Secretariado Permanente')->get();
        $equipoCoordinaciónTerritorial = Equipo::where('tipo' , 'Coordinación Territorial')->get();
        $equipoResponsablesEmpresas = Equipo::where('tipo' , 'Responsables Empresas')->get();
        $equipoCoordinaciónADIF = Equipo::where('tipo' , 'Coordinación ADIF')->get();
        $equipoCoordinaciónRENFE = Equipo::where('tipo' , 'Coordinación RENFE')->get();
        

        // $equipo  = collect($equipo)->unique();
  
        // dd($secretarias);

        return view('equipo.sp', compact('tipos', 'equipoSecretariadoPermanente', 'equipoCoordinaciónTerritorial', 'equipoResponsablesEmpresas', 'equipoCoordinaciónADIF', 'equipoCoordinaciónRENFE'));
        // , [
            
        //     // 'equipos' => Equipo::orderBy('tipo', 'desc'),
        //     // 'sp' => Equipo::get(),
        //     // 'tipos' => Empresa::orderBy('id', 'asc')->get(),
        //     // 'categorias' => Categoria::orderBy('id', 'asc')->get(),
        //     // 'etiquetas' => Etiqueta::orderBy('id', 'asc')->get()
        // ]);        
    }
    
    public function index()
    {
        return view('intranet.equipos.index', [
            'equipos' => Equipo::orderBy('id', 'asc')->get()
        ]); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('intranet.equipos.create', [
            'equipos' => Equipo::orderBy('id', 'asc')->get(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEquipoRequest $request)
    {
        $request->validate([
            'tipo' => 'required|in:Secretariado Permanente,Coordinación Territorial, Coordinación ADIF, Coordinación RENFE, Responsables Empresas',
            'cargo' => 'required',
            'usuario' => 'required',
            'email' => 'required|email',
        ]);
    
        Equipo::create($request->all());
    
        return redirect()->route('intranet.equipos.index')
                        ->with('success','Entrada creada correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Equipo $equipo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Equipo $equipo)
    {
        return view('intranet.equipos.edit', compact('equipo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEquipoRequest $request, Equipo $equipo)
    {
        $validated = $request->validate([
            'tipo' => ['required'],
            'cargo' => ['required'],
            'usuario' => ['required'],
            'email' => ['required']
        ]);

        $equipo->update($validated);

        return to_route('intranet.equipos.index')->with('message', 'Equipos Actualizado Correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Equipo $equipo)
    {
        $equipo->delete();

        return to_route('intranet.equipos.index')->with('message', 'Entrada en Equipo Eliminada.');
    }
}
