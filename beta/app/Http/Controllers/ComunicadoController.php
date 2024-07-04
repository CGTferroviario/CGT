<?php

namespace App\Http\Controllers;

use App\DataTables\ComunicadosDataTable;
use App\Http\Requests\StoreComunicadoRequest;
use App\Http\Requests\UpdateComunicadoRequest;
use App\Models\Categoria;
use App\Models\Comunicado;
use App\Models\Empresa;
use App\Models\Etiqueta;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;


class ComunicadoController extends Controller
{
    // Este es el apartado de Comunicados dentro de la Biblioteca, página pública
    public function bibliotecaComunicados(Request $request)
    {
        // Inicializar $paginators como una colección vacía al principio
        $paginators = collect();

        // Obtener el valor del select (por ejemplo, 'todos' o un año específico)
        $yearFilter = $request->input('year_filter', 'todos');

        // Si el filtro es 'todos', obtener todos los comunicados y aplicar paginación manualmente
        // if ($yearFilter === 'todos') {
        //     $comunicados = Comunicado::orderBy('fecha', 'desc')->get();
        //     $paginator = new LengthAwarePaginator($comunicados, $comunicados->count(), $comunicados->count(), 1, [
        //         'path' => Paginator::resolveCurrentPath(),
        //     ]);
        //     dd($paginators);
        //     return view('biblioteca.comunicados', [
        //         'comunicados' => $paginator,
        //         'years' => [], // No necesitas años si se muestran todos los comunicados
        //         'empresas' => Empresa::whereHas('comunicados')->get(),
        //         'categorias' => Categoria::whereHas('comunicados')->get(),
        //         'etiquetas' => Etiqueta::whereHas('comunicados')->get(),
        //     ]);
        // }
        // Obtener todos los comunicados
        $comunicados = Comunicado::orderBy('fecha', 'desc')->get();

        // Formatear todas las fechas en la colección a 'dd/mm/yyyy'
        $comunicados = $comunicados->map(function ($comunicado) {
            $comunicado->fecha = \Carbon\Carbon::parse($comunicado->fecha)->format('d/m/Y');
            return $comunicado;
        });

        // Obtener los años únicos
        $years = $comunicados->pluck('fecha')->map(function ($fecha) {
            return \Carbon\Carbon::createFromFormat('d/m/Y', $fecha)->year;
        })->unique();

        // Obtener todos los comunicados y agruparlos por año
        $comunicadosAgrupados = $comunicados->groupBy(function ($comunicado) {
            return \Carbon\Carbon::createFromFormat('d/m/Y', $comunicado->fecha)->year;
        });

        //Definir cuantos items queremos que se vean en cada página
        $perPage = 12;

        // Crear una colección para almacenar los paginadores
        $paginators = collect();

        // Aplicar la paginación a cada grupo de comunicados
        foreach ($comunicadosAgrupados as $year => $comunicadosPorAno) {
            // Resolver la página actual desde la URL ej. $pag=1
            $page = Paginator::resolveCurrentPage();

            // Dividir la colección para obtener los items que queremos mostrar en la página actual
            $currentPageItems = $comunicadosPorAno->slice(($page - 1) * $perPage, $perPage)->all();

            // Creamos nuestro paginador y lo añadimos a la colección
            $paginator = new LengthAwarePaginator($currentPageItems, count($comunicadosPorAno), $perPage, $page, [
                'path' => Paginator::resolveCurrentPath(),
            ]);

            $paginators->put($year, $paginator);
        }

        // Obtener empresas, categorías y etiquetas
        $empresas = Empresa::whereHas('comunicados')->get();
        $categorias = Categoria::whereHas('comunicados')->get();
        $etiquetas = Etiqueta::whereHas('comunicados')->get();

        // dd($comunicados);

        return view('biblioteca.comunicados', [
            'comunicadosAgrupados' => $comunicadosAgrupados,
            // 'comunicados' => $comunicados,
            'paginators' => $paginators,
            'years' => $years,
            'empresas' => $empresas,
            'categorias' => $categorias,
            'etiquetas' => $etiquetas
        ]);
    }

    // Este es el índice de comunicados, el lugar donde vemos todos los comunicados en formato tabla para poder administrarlos
    public function index(ComunicadosDataTable $dataTable)
    {
        // Cogemos todos los comunicados ordenados por fecha de manera descendente
        $comunicados = Comunicado::orderBy('fecha', 'desc')->get();

        // Formatear todas las fechas en la colección a 'dd/mm/yyyy'
        $comunicados->map(function ($comunicado) {
            // Aseguramos que el atributo fecha se trata como una instancia de Carbon
            $comunicado->fecha = Carbon::parse($comunicado->fecha)->format('d/m/Y');
            return $comunicado;
        });
        // Pasamos el comunicado formateado a la vista
        return $dataTable->render('intranet.comunicados.index', compact('comunicados'));
    }

    // Este es el método que muestra la vista para crear un comunicado, posiblemente debería mostrarse en un model o ventana emergente
    public function create()
    {
        return view('intranet.comunicados.create', [
            'comunicados' => Comunicado::orderBy('id', 'desc')->paginate(15),
            'empresas' => Empresa::where('comunicados', '=', 1)->orderBy('id', 'asc')->get(),
            'categorias' => Categoria::orderBy('id', 'asc')->get(),
            'etiquetas' => Etiqueta::orderBy('id', 'asc')->get(),
        ]);
    }

    // Este es el método para almacenar los comunicados
    public function store(StoreComunicadoRequest $request)
    {
        // Cogemos el usuario autentificado para establecerlo como autor del comunicado
        $usuario = Auth::user()->id;
        // Extraemos el año, lo llamamos year para prevenir problemas con la ñ
        $year = Carbon::now()->format('y');
        $anyo = Carbon::now()->format('Y');
        // Modificamos el número para reflejar además el año, de esta manera es único
        $numero = $request->numero . '.' . $year;

        $rutaPdf = null;
        if ($request->hasFile('pdf')) {
            $pdf = $request->file('pdf');
            $pdfNombre = $numero . '.' . Str::slug($request->titulo) . '.' . $pdf->getClientOriginalExtension();

            $comDirectory = storage_path('comunicados/' . $anyo);
            if (!File::isDirectory($comDirectory)) {
                File::makeDirectory($comDirectory, 0755, true);
            }
            $rutaPdf = $pdf->storeAs('comunicados/' . $anyo, $pdfNombre, 'public');
        }
        // dd($comDirectory);

        $rutaImagen = null;
        if ($request->hasFile('imagen')) {
            $imagen = $request->file('imagen');
            $imagenNombre = $numero . '.' . Str::slug($request->titulo) . '.' . $imagen->getClientOriginalExtension();

            $imagenDirectory = storage_path('comunicados/' . $anyo);
            if (!File::isDirectory($imagenDirectory)) {
                File::makeDirectory($imagenDirectory, 0755, true);
            }
            $rutaImagen = $imagen->storeAs('comunicados/' . $anyo, $imagenNombre, 'public');
        }

        $rutaAdjunto = null;
        if ($request->hasFile('adjunto')) {
            $adjunto = $request->file('adjunto');
            $adjuntoNombre = $numero . '.anexo-' . Str::slug($request->titulo) . '.' . $adjunto->getClientOriginalExtension();

            $adjuntoDirectory = storage_path('comunicados/' . $anyo);
            if (!File::isDirectory($adjuntoDirectory)) {
                File::makeDirectory($adjuntoDirectory, 0755, true);
            }
            $rutaAdjunto = $adjunto->storeAs('comunicados/' . $anyo, $adjuntoNombre, 'public');
        }
        dd($adjuntoDirectory);
        dd($rutaAdjunto);

        $comunicado = Comunicado::create(array_merge($request->all(), [
            'numero' => $numero,
            'empresa_id' => $request->empresa,
            'categoria_id' => $request->categoria,
            'fecha' => $request->fecha,
            'titulo' => $request->titulo,
            'subtitulo' => $request->subtitulo,
            'cuerpo' => $request->cuerpo,
            'pdf' => $rutaPdf,
            'imagen' => $rutaImagen,
            'adjunto' => $rutaAdjunto,
            'publicado' => 1,
            'user_id' => $usuario,
        ]));
        if ($request->has('etiquetas')) {
            $comunicado->etiquetas()->attach($request->etiquetas);
        }
        return redirect(route('intranet.comunicados.index'))->with('message', 'Comunicado Creado Correctamente');
    }
    // Este es el método para mostrar un Comunicado específico
    public function show(Comunicado $comunicado, $id)
    {
        $comunicado = Comunicado::findOrFail($id);
        return view('comunicados.show', ['comunicado' => $comunicado]);
    }
    // Este es el método para editar un Comunicado específico
    public function edit(Comunicado $comunicado)
    {
        return view('intranet.comunicados.edit', [
            'comunicados' => Comunicado::orderBy('id', 'desc')->paginate(15),
            'empresas' => Empresa::orderBy('id', 'asc')->get(),
            'categorias' => Categoria::orderBy('id', 'asc')->get(),
            'etiquetas' => Etiqueta::orderBy('id', 'asc')->get()
        ], compact('comunicado'));
    }

    // Este es el método para actualizar en la BBDD un comunicado que estamos editando
    public function update(UpdateComunicadoRequest $request, Comunicado $comunicado)
    {
        // Actualizar el comunicado
        $comunicado->update($request->validated());

        // Actualizar la empresa relacionada
        $empresa = Empresa::find($request->empresa);
        $comunicado->empresa()->associate($empresa);

        // Actualizar la categoría relacionada
        $categoria = Categoria::find($request->categoria);
        $comunicado->categoria()->associate($categoria);

        // Actualiza las etiquetas relacionadas
        $comunicado->etiquetas()->sync($request->etiquetas);

        // Guardamos el comunicado y mostramos un mensaje de éxito
        $comunicado->save();
        return to_route('intranet.comunicados.index')->with('message', 'Comunicado Actualizado Correctamente');
    }

    // Este es el método que utilizamos para eliminar un comunicado
    public function destroy(Comunicado $comunicado)
    {
        $comunicado->delete();

        return to_route('intranet.comunicados.index')->with('message', 'Comunicado Eliminado.');
    }

}
