<?php

namespace App\Http\Controllers;

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
    public function prensa() 
    {
        return view('prensa');
    }
    public function igualdad() 
    {
        return view('igualdad');
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
