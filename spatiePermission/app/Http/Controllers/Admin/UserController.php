<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        $roles = Role::all();
        return view('admin.users.index', compact('users', 'roles'));
    }
    public function show(User $user)
    {
        
        $roles = Role::all();
        $permissions = Permission::all();

        return view('admin.users.role', compact('user','roles', 'permissions'));
    }
    public function create()
    {
        return view('admin.users.create');
    }
    public function store(Request $request)
    {
        $validated = $request->validate(['name' => ['required', 'min:3']]);
        User::create($validated);

        return to_route('admin.users.index')->with('message', 'Usuario Creado Satisfactoriamente');
    }
}
