<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Comunicado;
use App\Models\Empresa;
use App\Models\Etiqueta;
use Illuminate\Http\Request;

class PaginaController extends Controller
{
    public function adif() 
    {
        return view('adif');
    }
    
    public function renfe()
    {
        return view('renfe');
    }
    public function empresasaux()
    {
        return view('empresasaux');
    }
    public function biblioteca() 
    {
        return view('biblioteca');
    }
    public function comunicados() 
    {
        return view('biblioteca.comunicados', [
            
            'comunicados' => Comunicado::orderBy('updated_at', 'desc')->paginate(12),
            'empresas' => Empresa::orderBy('id', 'asc')->get(),
            'categorias' => Categoria::orderBy('id', 'asc')->get(),
            'etiquetas' => Etiqueta::orderBy('id', 'asc')->get()
        ]);
    }
    public function prensa() 
    {
        return view('prensa');
    }
    public function juridica() 
    {
        return view('juridica');
    }
    public function equipo()
    {
        return view('equipo');
    }
}
