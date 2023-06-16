<?php

namespace App\Http\Controllers;

use App\Models\Comunicado;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('panel');
    }
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
    public function __construct()
    {
        $this->middleware('auth');
    }
}
