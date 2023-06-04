<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function indexAdmin()
    {
        return view('admin.index');
    }
    public function indexEditor()
    {
        return view('editor.index');
    }
}
