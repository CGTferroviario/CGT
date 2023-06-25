<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    public function indexAdmin()
    {
        return view('admin.index');
    }
    public function dashboard()
    {
        
        return view('admin.dashboard');
    }
    public function indexEditor()
    {
        return view('editor.index');
    }
    public function dashboardEditor()
    {
        return view('editor.dashboard');
    }
}
