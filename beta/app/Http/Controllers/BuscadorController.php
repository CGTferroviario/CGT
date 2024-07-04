<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comunicado;
use App\Models\Documento;
use App\Models\Noticia;

class BuscadorController extends Controller
{
    public function buscar(Request $request)
    {
        $query = $request->get('query');

        if (strlen($query) < 3) {
            return response()->json([]);
        }

        $comunicados = Comunicado::where('titulo', 'like', "%{$query}%")
            ->orWhere('cuerpo', 'like', "%{$query}%")
            ->get();

        $noticias = Noticia::where('titulo', 'like', "%{$query}%")
            ->orWhere('cuerpo', 'like', "%{$query}%")
            ->get();

        $documentos = Documento::where('titulo', 'like', "%{$query}%")
            ->orWhere('cuerpo', 'like', "%{$query}%")
            ->get();

        return response()->json([
            'comunicados' => $comunicados,
            'noticias' => $noticias,
            'documentos' => $documentos,
        ]);

        // $comunicados = $this->buscar($query);

        // if ($request->filled('buscar')) {
        //     $query->where('nombre', 'like', '%' . $request->search . '%');
        // }

        // if ($request->filled('empresa')) {
        //     $query->where('empresa_id', $request->empresa);
        // }

        // if ($request->filled('categoria')) {
        //     $query->where('categoria_id', $request->categoria);
        // }

        // // Filtrar por etiquetas si es necesario
        // dd($query);

        // $resultados = $query->get();

        // return view('resultados', compact('resultados', 'comunicados'));
    }
}


// Este es el método que utilizamos para la búsqueda de los comunicados en la página de la biblioteca
// public function buscar($query)
// {
//     $comunicados = Comunicado::where('titulo', 'like', "%{$query}%")
//                  ->orWhere('cuerpo', 'like', "%{$query}%")
//                  ->get();
    // $comunicados = Comunicado::orderBy('updated_at', 'desc')->get();
    // $empresas = Empresa::orderBy('id', 'asc')->get();
    // $categorias = Categoria::orderBy('id', 'asc')->get();
    // $etiquetas = Etiqueta::orderBy('id', 'asc')->get();
    // $termino = $request->input('termino');
    // $fecha = $request->input('fecha');
    // $categoria = $request->input('categorias');
    // $empresa = $request->input('empresas');
    // $etiquetasInput = $request->input('etiquetasInput');

    // $comunicados = Comunicado::where(function ($query) use ($termino) {
    //     $query->where('titulo', 'like', "%$termino%")
    //         ->orWhere('subtitulo', 'like', "%$termino%")
    //         ->orWhere('cuerpo', 'like', "%$termino%");
    // });
        // ->when($fecha, function ($query) use ($fecha) {
        //     $query->whereDate('fecha', $fecha);
        // })
        // ->when($categoria, function ($query) use ($categoria) {
        //     $query->where('categoria', $categoria);
        // })
        // ->when($empresa, function ($query) use ($empresa) {
        //     $query->where('empresa', $empresa);
        // });
        // ->when($etiquetas, function ($query) use ($etiquetasInput) {
        //     $query->whereHas('etiquetas', function ($subquery) use ($etiquetasInput) {
        //         $subquery->whereIn('nombre', $etiquetasInput);
        //     });
        // })
        // ->paginate(12);
    // dd($comunicados);
//     return view('biblioteca.comunicados.resultados', compact('comunicados', 'empresas', 'categorias', 'etiquetas'));
// }