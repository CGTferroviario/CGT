<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    public function index()
    {
        $roles = Role::all();
        return view('admin.roles.index', compact('roles'));
    }
    public function create()
    {
        $roles = Role::all();
        return view('admin.roles.create', compact('roles'));
    }
    public function store(Request $request)
    {
        $validated = $request->validate(['name' => ['required', 'min:']]);
        Role::create($validated);

        return to_route('admin.roles.index');
    }
}
