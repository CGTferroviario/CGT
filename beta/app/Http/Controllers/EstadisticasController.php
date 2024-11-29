<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Comunicado;
use App\Models\Documento;
use App\Models\Empresa;
use App\Models\Etiqueta;
use App\Models\Noticia;
use Illuminate\Http\Request;

class EstadisticasController extends Controller
{
    public function index()
    {
        $stats = [
            'totalPorTipo' => [
                'comunicados' => Comunicado::count(),
                'noticias' => Noticia::count(),
                'documentos' => Documento::count(),
            ],
            'porEmpresa' => Empresa::withCount(['comunicados', 'noticias', 'documentos'])->paginate(10),
            // 'porCategoria' => Categoria::withCount(['comunicados', 'noticias', 'documentos'])->get(),
            'etiquetasPopulares' => Etiqueta::withCount(['comunicados', 'noticias', 'documentos'])
                ->orderByDesc('comunicados_count')
                ->orderByDesc('noticias_count')
                ->orderByDesc('documentos_count')
                ->take(10)
                ->get(),
            'masVistos' => [
                'comunicados' => Comunicado::orderByDesc('visualizaciones')->take(5)->get(),
                'noticias' => Noticia::orderByDesc('visualizaciones')->take(5)->get(),
                'documentos' => Documento::orderByDesc('visualizaciones')->take(5)->get(),
            ],
            'masDescargados' => Documento::orderByDesc('descargas')->take(5)->get(),
        ];

        return view('intranet.estadisticas.index', compact('stats'));
    }
}