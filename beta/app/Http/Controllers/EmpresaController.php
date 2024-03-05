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
use Illuminate\Support\Str;
use Intervention\Image\Drivers\Imagick\Driver;
use Intervention\Image\ImageManager;
use Spatie\LaravelImageOptimizer\Facades\ImageOptimizer;

class EmpresaController extends Controller
{

    public function index()
    {
        return view('intranet.empresas.index', [
            'empresas' => Empresa::orderBy('id', 'asc')->get()
        ]);
    }

    // Muestra el formulario para crear una nueva empresa.
    public function create()
    {
        return view('intranet.empresas.create', [
            'empresas' => Empresa::orderBy('id', 'asc')->get(),
        ]);
    }
    // Almacenamos la información del formulario para crear una nueva empresa.
    public function store(StoreEmpresaRequest $request)
    {
        // Guardamos el valor del slug, es decir, el nombre de empresa sin espacios
        $slug = Str::slug($request->nombre);
        $rutaLogo = null;

        if ($request->hasFile('logo')) {

            $logo = $request->file('logo');
            $logoName = $slug . '.' . $logo->getClientOriginalExtension();
            $rutaLogo = public_path('/logos');

            // Usamos Intervention Image para cambiarle el tamaño al logo y que tenga un tamaño de 50px de alto
            $manager = new ImageManager(Driver::class);
            $image = $manager->read($logo);
            $logo = $image->scale(height: 50);

            // Save the manipulated image
            $rutaLogo = 'logos/' . $logoName;
            $image->save(public_path('storage/' . $rutaLogo));
        }

        // Guardamos todos los datos en la tabla Empresa
        Empresa::create(array_merge($request->all(), ['logo' => $rutaLogo, 'slug' => $slug]));

        // Optimizamos el tamaño de la imagen con el paquete de Spatie Optimizer
        ImageOptimizer::optimize(public_path('storage/' . $rutaLogo));

        return redirect(route('intranet.empresas.index'))->with('message', 'Empresa Creada Correctamente');

    }

    public function show(Empresa $empresa, $slug)
    {
        // Mostramos la página de empresa, donde se verán los comunicados, noticias y documentos relativos a esa empresa
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

    // Mostramos el formulario para editar una empresa
    public function edit(Empresa $empresa)
    {
        $empresas = Empresa::all();

        return view('intranet.empresas.edit', compact('empresa', 'empresas'));
    }

    // Actualizamos la información que tenemos almacenada sobre esa empresa
    public function update(UpdateEmpresaRequest $request, Empresa $empresa)
    {
        // Guardamos el valor del slug, es decir, el nombre de empresa sin espacios
        $slug = Str::slug($request->nombre);
        $rutaLogo = null;

        if ($request->hasFile('logo')) {

            $logo = $request->file('logo');
            $logoName = $slug . '.' . $logo->getClientOriginalExtension();
            $rutaLogo = public_path('/logos');

            // Usamos Intervention Image para cambiarle el tamaño al logo y que tenga un tamaño de 50px de alto
            $manager = new ImageManager(Driver::class);
            $image = $manager->read($logo);
            $logo = $image->scale(height: 50);

            // Save the manipulated image
            $rutaLogo = 'logos/' . $logoName;
            $image->save(public_path('storage/' . $rutaLogo));
        }
        // Guardamos todos los datos en la tabla Empresa
        $empresa->update(array_merge($request->all(), ['logo' => $rutaLogo, 'slug' => $slug]));

        // Optimizamos el tamaño de la imagen con el paquete de Spatie Optimizer
        ImageOptimizer::optimize(public_path('storage/' . $rutaLogo));

        return to_route('intranet.empresas.index')->with('message', 'Empresa Actualizada Correctamente');
    }

    // Eliminamos el recurso especificado de la BBDD y si tiene un logo asociado, se elimina
    public function destroy(Empresa $empresa)
    {
        
        if ($empresa->logo && Storage::disk('public')->exists($empresa->logo)) {
            Storage::disk('public')->delete($empresa->logo);
        }

        $empresa->delete();

        return to_route('intranet.empresas.index')->with('message', 'Empresa Eliminada.');
    }
}
