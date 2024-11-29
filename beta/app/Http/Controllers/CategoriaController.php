<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCategoriaRequest;
use App\Http\Requests\UpdateCategoriaRequest;
use App\Models\Categoria;
use App\Models\Comunicado;
use App\Models\Documento;
use App\Models\Noticia;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('intranet.categorias.index', [
            'categorias' => Categoria::orderBy('id', 'asc')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('intranet.categorias.create', [
            
            'categorias' => Categoria::orderBy('id', 'asc')->get(),

        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCategoriaRequest $request)
    {
        // Guardamos el valor del slug, es decir, el nombre de la categoría sin espacios
        $slug = Str::slug($request->nombre);

        // Guardamos todos los datos en la tabla Categoría
        Categoria::create(array_merge($request->all(), ['slug' => $slug]));

        return redirect(route('intranet.categorias.index'))->with('message', 'Categoría Creada Correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Categoria $categoria, $slug)
    {
        // Mostramos la página de categoría, donde se verán los comunicados, noticias y documentos relativos a esa categoría
        try {
            $categoria = Categoria::where('slug', $slug)->firstOrFail();
            $comunicadosTotales = Comunicado::where('categoria_id', $categoria->id)->get();
            $comunicados = Comunicado::where('categoria_id', $categoria->id)->orderBy('fecha', 'desc')->paginate(8);
            $noticias = Noticia::where('categoria_id', $categoria->id)->paginate(8);
            $documentos = Documento::where('categoria_id', $categoria->id)->paginate(8);

            return view('categorias.show', compact('categoria', 'comunicadosTotales', 'comunicados', 'noticias', 'documentos'));
        } catch (ModelNotFoundException $e) {
            abort(404, 'Categoria no encontrada');
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Categoria $categoria)
    {
        $categorias = Categoria::all();

        return view('intranet.categorias.edit', compact('categoria', 'categorias'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategoriaRequest $request, Categoria $categoria)
    {
        $validated = $request->validate([
            'nombre' => ['required'],
            'activa' => ['required']
        ]);

        $categoria->update($validated);

        return to_route('intranet.categorias.index')->with('message', 'Categoria Actualizada Correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Categoria $categoria)
    {
        $categoria->delete();

        return to_route('intranet.categorias.index')->with('message', 'Categoría Eliminada.');
    }
}
