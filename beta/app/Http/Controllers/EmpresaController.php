<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEmpresaRequest;
use App\Http\Requests\UpdateEmpresaRequest;
use App\Models\Empresa;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Facade;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;
use Intervention\Image\ImageManager;




class EmpresaController extends Controller
{

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

    public function store(StoreEmpresaRequest $request)
    {
        // dd($request);
        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
            'vales' => 'required',
            'comunicados' => 'required',
            'activa' => 'required',
            'logo' => 'nullable|image'
        ]);

        $rutaLogo = null;
        if ($request->hasFile('logo')) {
            $logo = $request->file('logo');
            $logoName = Str::slug($request->nombre) . '.' . $logo->getClientOriginalExtension();

            // // Resize image
            // $resizedLogo = Image::make($logo)->resize(150, 50)->stream();
            // // Store resized image
            // Storage::disk('public')->put('logos/' . $logoName, $resizedLogo);

            // Create directory if it doesn't exist
            $logoDirectory = public_path('logos');
            if (!File::isDirectory($logoDirectory)) {
                File::makeDirectory($logoDirectory, 0755, true);
            }

            $rutaLogo = $logo->storeAs('logos', $logoName, 'public');
        }

        // dd($request);

        Empresa::create(array_merge($request->all(), ['logo' => $rutaLogo]));

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
        $empresas = Empresa::all();

        return view('intranet.empresas.edit', compact('empresa', 'empresas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEmpresaRequest $request, Empresa $empresa)
    {
        $validated = $request->validate([
            'nombre' => ['required'],
            'descripcion' => ['required'],
            'comunicados' => ['required'],
            'vales' => ['required'],
            'activa' => ['required'],
            'logo' => 'nullable|image'
        ]);

        $rutaLogo = $empresa->logo;
        if ($request->hasFile('logo')) {
            $logo = $request->file('logo');
            $logoName = Str::slug($request->nombre) . '.' . $logo->getClientOriginalExtension();
            $rutaLogo = $logo->storeAs('logos', $logoName, 'public');
        }

        $empresa->update(array_merge($request->all(), ['logo' => $rutaLogo]));

        return to_route('intranet.empresas.index')->with('message', 'Empresa Actualizada Correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Empresa $empresa)
    {
        
        if ($empresa->logo && Storage::disk('public')->exists($empresa->logo)) {
            Storage::disk('public')->delete($empresa->logo);
        }

        $empresa->delete();

        return to_route('intranet.empresas.index')->with('message', 'Empresa Eliminada.');
    }
}
