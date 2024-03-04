<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEmpresaRequest;
use App\Http\Requests\UpdateEmpresaRequest;
use App\Models\Comunicado;
use App\Models\Documento;
use App\Models\Empresa;
use App\Models\Noticia;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

use Intervention\Image\Drivers\Imagick\Driver;




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
        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
            'vales' => 'required',
            'comunicados' => 'required',
            'activa' => 'required',
            'logo' => 'nullable|image'
        ]);

        $slug = Str::slug($request->nombre);

        $rutaLogo = null;
        if ($request->hasFile('logo')) {
            $logo = $request->file('logo');
            $logoName = $slug . '.' . $logo->getClientOriginalExtension();

            // Use the Image facade to load the image file
            $image = Image::make($logo);

            // Perform image manipulations
            $image->resize(150, 50);

            // Save the manipulated image
            $rutaLogo = 'logos/' . $logoName;
            $image->save(public_path('storage/' . $rutaLogo));
        }

        Empresa::create(array_merge($request->all(), ['logo' => $rutaLogo, 'slug' => $slug]));

        return redirect(route('intranet.empresas.index'))->with('message', 'Empresa Creada Correctamente');

    }

    public function show(Empresa $empresa, $slug)
    {
        // Mostramos la página de empresa
        try {
            $empresa = Empresa::where('slug', $slug)->firstOrFail();
            $comunicados = Comunicado::where('empresa_id', $empresa->id)->paginate(8);
            $noticias = Noticia::where('empresa_id', $empresa->id)->paginate(8);
            $documentos = Documento::where('empresa_id', $empresa->id)->paginate(8);
            return view('empresas.show', compact('empresa', 'comunicados', 'noticias', 'documentos'));
        } catch (ModelNotFoundException $e) {
            abort(404, 'Empresa no encontrada');
        }

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
