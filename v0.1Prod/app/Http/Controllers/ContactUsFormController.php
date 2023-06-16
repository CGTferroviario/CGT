<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contacto;
use Illuminate\Support\Facades\Mail;

class ContactUsFormController extends Controller {
    // Create Contact Form
    public function createForm(Request $request) {
        return view('contacto');
    }
    // Store Contact Form data
    public function ContactUsForm(Request $request) {
        // Form validation
        $this->validate($request, [
            'nombre' => 'required',
            'email' => 'required|email',
            'telefono' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:8',
            'asunto'=>'required',
            'mensaje' => 'required'
        ]);
        //  Store data in database
        Contacto::create($request->all());
        //  Send mail to admin
        Mail::send('mail', array(
            'nombre' => $request->get('nombre'),
            'email' => $request->get('email'),
            'telefono' => $request->get('telefono'),
            'asunto' => $request->get('asunto'),
            'mensaje' => $request->get('mensaje'),
        ), function($message) use ($request){
            $message->from($request->email);
            $message->to('informatica@cgtferroviario.es', 'Admin')->subject($request->get('asunto'));
        });
        return back()->with('success', 'Hemos recibido su mensaje y nos gustaría agradecerle que nos haya contactado.');
    }
}
