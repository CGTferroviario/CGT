<?php

namespace App\Http\Controllers;

use App\Models\Comunicado;
use Illuminate\Http\Request;

class BuscadorController extends Controller
{
    public function search(Request $request)
    {
        $query = Comunicado::query();

        if ($request->filled('search')) {
            $query->where('nombre', 'like', '%' . $request->search . '%');
        }

        if ($request->filled('empresa')) {
            $query->where('empresa_id', $request->empresa);
        }

        if ($request->filled('categoria')) {
            $query->where('categoria_id', $request->categoria);
        }

        // Filtrar por etiquetas si es necesario

        $resultados = $query->get();

        return view('search-results', compact('resultados'));
    }

}
