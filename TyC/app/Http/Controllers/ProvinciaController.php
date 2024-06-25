<?php

namespace App\Http\Controllers;

use App\Models\Ccaa;
use App\Models\Provincia;
use Illuminate\Http\Request;

class ProvinciaController extends Controller
{
    public function index(Ccaa $ccaa)
    {
        $provincias = Provincia::where('ccaa_id', $ccaa->id)->get();
        return view('parciales.provincia_opciones', compact('provincias'));
    }
}
