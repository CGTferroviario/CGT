<?php

namespace App\Http\Controllers;

use App\Models\Comunicado;
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
            
            'comunicados' => Comunicado::orderBy('updated_at', 'desc')->get()
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
