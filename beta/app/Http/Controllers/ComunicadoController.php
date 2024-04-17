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
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class ComunicadoController extends Controller
{

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

    public function bibliotecaComunicados()
    {
        // Obtener todos los comunicados
        $comunicados = Comunicado::orderBy('fecha', 'desc')->get();

        // Obtener los años únicos
        $years = $comunicados->pluck('fecha')->map(function ($fecha) {
            return \Carbon\Carbon::parse($fecha)->year;
        })->unique();

        // Obtener todos los comunicados y agruparlos por año
        $comunicadosAgrupados = $comunicados->groupBy(function ($comunicado) {
            return \Carbon\Carbon::parse($comunicado->fecha)->year;
        });

        // Formatear todas las fechas en la colección a 'dd/mm/yyyy'
        $comunicados = $comunicados->map(function ($comunicado) {
            $comunicado->fecha = \Carbon\Carbon::parse($comunicado->fecha)->format('d/m/Y');
            return $comunicado;
        });

        // Paginación manual es necesaria porque paginate no funciona directamente con groupBy
        // $page = request()->get('page', 1);
        // $perPage = 12;
        // $offset = ($page - 1) * $perPage;

        // $comunicadosAgrupados = new \Illuminate\Pagination\LengthAwarePaginator(
        //     $comunicados->slice($offset, $perPage)->values(),
        //     $comunicados->count(),
        //     $perPage,
        //     $page,
        //     ['path' => request()->url(), 'query' => request()->query()]
        // );

        // Obtener empresas, categorías y etiquetas
        $empresas = Empresa::whereHas('comunicados')->get();
        $categorias = Categoria::whereHas('comunicados')->get();
        $etiquetas = Etiqueta::whereHas('comunicados')->get();

        // dd($comunicadosAgrupados);

        return view('biblioteca.comunicados', [
            // 'comunicados' => $comunicados,
            'comunicadosAgrupados' => $comunicadosAgrupados,
            'years' => $years,
            'empresas' => $empresas,
            'categorias' => $categorias,
            'etiquetas' => $etiquetas
        ]);
    }

    // public function bibliotecaComunicados()
    // {
    //     // Cogemos todos los comunicados ordenados por fecha de manera descendente y paginamos 12
    //     $comunicados = Comunicado::orderBy('fecha', 'desc')->paginate(12);

    //     // Formatear todas las fechas en la colección a 'dd/mm/yyyy'
    //     $comunicados->getCollection()->transform(function ($comunicado) {
    //         $comunicado->fecha = Carbon::parse($comunicado->fecha)->format('d/m/Y');
    //         return $comunicado;
    //     });

    //     return view('biblioteca.comunicados', [
    //         'comunicados' => $comunicados,
    //         'empresas' => Empresa::orderBy('id', 'asc')->get(),
    //         'categorias' => Categoria::orderBy('id', 'asc')->get(),
    //         'etiquetas' => Etiqueta::orderBy('id', 'asc')->get()
    //     ]);
    // }
    public function create()
    {
        return view('intranet.comunicados.create', [
            'comunicados' => Comunicado::orderBy('id', 'desc')->paginate(15),
            'empresas' => Empresa::where('comunicados', '=', 1)->orderBy('id', 'asc')->get(),
            'categorias' => Categoria::orderBy('id', 'asc')->get(),
            'etiquetas' => Etiqueta::orderBy('id', 'asc')->get(),

        ]);
    }
    public function store(StoreComunicadoRequest $request)
    {
        $usuario = Auth::user()->id;
        $year = Carbon::now()->format('y');
        $anyo = Carbon::now()->format('Y');
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
    public function show(Comunicado $comunicado, $id)
    {
        $comunicado = Comunicado::findOrFail($id);
        return view('comunicados.show', ['comunicado' => $comunicado]);
    }
    public function edit(Comunicado $comunicado)
    {
        return view('intranet.comunicados.edit', [
            'comunicados' => Comunicado::orderBy('id', 'desc')->paginate(15),
            'empresas' => Empresa::orderBy('id', 'asc')->get(),
            'categorias' => Categoria::orderBy('id', 'asc')->get(),
            'etiquetas' => Etiqueta::orderBy('id', 'asc')->get()
        ], compact('comunicado'));
    }

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

        $comunicado->save();

        return to_route('intranet.comunicados.index')->with('message', 'Comunicado Actualizado Correctamente');
    }

    public function destroy(Comunicado $comunicado)
    {
        $comunicado->delete();

        return to_route('intranet.comunicados.index')->with('message', 'Comunicado Eliminado.');
    }
    public function buscar(Request $request)
    {
        $comunicados = Comunicado::orderBy('updated_at', 'desc')->paginate(12);
        $empresas = Empresa::orderBy('id', 'asc')->get();
        $categorias = Categoria::orderBy('id', 'asc')->get();
        $etiquetas = Etiqueta::orderBy('id', 'asc')->get();
        $termino = $request->input('termino');
        $fecha = $request->input('fecha');
        $categoria = $request->input('categorias');
        $empresa = $request->input('empresas');
        $etiquetasInput = $request->input('etiquetasInput');

        $comunicados = Comunicado::where(function ($query) use ($termino) {
            $query->where('titulo', 'like', "%$termino%")
                ->orWhere('subtitulo', 'like', "%$termino%")
                ->orWhere('cuerpo', 'like', "%$termino%");
        })
            ->when($fecha, function ($query) use ($fecha) {
                $query->whereDate('fecha', $fecha);
            })
            ->when($categoria, function ($query) use ($categoria) {
                $query->where('categoria', $categoria);
            })
            ->when($empresa, function ($query) use ($empresa) {
                $query->where('empresa', $empresa);
            })
            // ->when($etiquetas, function ($query) use ($etiquetasInput) {
            //     $query->whereHas('etiquetas', function ($subquery) use ($etiquetasInput) {
            //         $subquery->whereIn('nombre', $etiquetasInput);
            //     });
            // })
            ->paginate(12);
        // dd($comunicados);
        return view('biblioteca.comunicados.resultados', compact('comunicados', 'empresas', 'categorias', 'etiquetas'));
    }
}
