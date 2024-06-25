<?php

namespace App\Http\Controllers;

use App\Models\Municipio;
use App\Models\Provincia;
use Illuminate\Http\Request;

class MunicipioController extends Controller
{
    public function index(Provincia $provincia)
    {
        $municipios = Municipio::where('provincia_id', $provincia->id)->get();
        return view('parciales.municipio_opciones', compact('municipios'));
    }
}
