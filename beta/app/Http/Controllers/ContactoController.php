<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contacto;

class ContactoController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function contacto()
    {
        return view('equipo.contacto');
    }
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'email' => 'required|email',
            'telefono' => 'required|digits:10|numeric',
            'asunto' => 'required',
            'mensaje' => 'required'
        ]);
        
        Contacto::create($request->all());

        return redirect()->back()
                         ->with(['success' => 'Gracias por escribirnos. Te responderemos a la mayor brevedad.']);
    }
}
