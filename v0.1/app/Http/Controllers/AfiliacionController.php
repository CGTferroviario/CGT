<?php

namespace App\Http\Controllers;

use App\Models\Afiliacion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class AfiliacionController extends Controller
{
    // Create Contact Form
    public function createForm(Request $request) {
        return view('afiliate');
    }
    // Store Contact Form data
    public function AfiliateForm(Request $request) {
        // Form validation
        $this->validate($request, [
            'empresa' => 'required',
            'nombre' => 'required',
            'domicilio' => 'required',
            'localidad' => 'required',
            'provincia' => 'required',
            'cp' => 'required',
            'dni' => 'required',
            'telefono' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:8',
            'correo' => 'required|email',
            'lugar' => 'required',
            'fecha' => 'required',
            'firma' => 'required',
            'matricula' => 'required',
            'cargo' => 'required',
            'dependencia' => 'required',
            'residencia' => 'required',
            'fotocopia_dni' => 'required',
            'cabecera_nomina' => 'required',
            'asunto'=> 'required',
            'mensaje' => 'required'
        ]);
        //  Store data in database
        Afiliacion::create($request->all());
        //  Send mail to admin
        Mail::send('mail', array(
            'empresa' => $request->get('empresa'),
            'nombre' => $request->get('nombre'),
            'domicilio' => $request->get('domicilio'),
            'localidad' => $request->get('localidad'),
            'provincia' => $request->get('provincia'),
            'cp' => $request->get('cp'),
            'dni' => $request->get('dni'),
            'telefono' => $request->get('telefono'),
            'correo' => $request->get('correo'),
            'lugar' => $request->get('lugar'),
            'fecha' => $request->get('fecha'),
            'firma' => $request->get('firma'),
            'matricula' => $request->get('matricula'),
            'cargo' => $request->get('cargo'),
            'dependencia' => $request->get('dependecia'),
            'residencia' => $request->get('residencia'),
            'fotocopia_dni' => $request->get('fotocopia_dni'),
            'cabecera_nomina' => $request->get('cabecera_nomina'),
            'asunto'=> $request->get('asunto'),
            'mensaje' => $request->get('mensaje')
        ), function($message) use ($request){
            $message->from($request->email);
            $message->to('informatica@cgtferroviario.es', 'Admin')->subject($request->get('asunto'));
        });
        return back()->with('success', 'Hemos recibido su mensaje y nos gustaría agradecerle que nos haya contactado.');
    }
}
