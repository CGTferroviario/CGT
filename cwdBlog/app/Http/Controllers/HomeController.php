<?php

namespace App\Http\Controllers;

use Carbon\Cli\Invoker;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke()
    {
        return view('index');
    }
    
}
