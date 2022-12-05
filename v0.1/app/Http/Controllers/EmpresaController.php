<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contacto;

class EmpresaController extends Controller
{
    public function crearEmpresa(Request $request) {
        return view('empresas');
      }
    public function Empresas(Request $request) {

        //  Store data in database
        Contacto::create($request->all());
    }
}
