<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    public function index()
    {
        $roles = Role::whereNotIn('name', ['admin'])->get();
        return view('admin.roles.index', compact('roles'));
    }
    public function create()
    {
        $roles = Role::whereNotIn('name', ['admin'])->get();

        return view('admin.roles.create', compact('roles'));
    }
    public function store(Request $request)
    {
        $validated = $request->validate(['name' => ['required', 'min:3']]);
        Role::create($validated);

        return to_route('admin.roles.index')->with('message', 'Perfil Creado Correctamente');
    }
    public function edit(Role $role)
    {
        $permissions = Permission::all();
        return view('admin.roles.edit', compact('role', 'permissions'));
    }
    public function update(Request $request, Role $role)
    {
        $validated = $request->validate(['name' => ['required']]);
        $role->update($validated);

        return to_route('admin.roles.index')->with('message', 'Perfil Actualizado Correctamente');
    }
    public function destroy(Role $role)
    {
        $role->delete();

        return back()->with('message', 'Perfil eliminado.');
    }
    public function givePermission(Request $request, Role $role)
    {
        if ($role->hasPermissionTo($request->permission)) {
            return back()->with('message', 'Ese Permiso ya existe.');
        }
        $role->givePermissionTo($request->permission);
        return back()->with('message', 'Permiso Añadido.');
    }
    public function revokePermission(Role $role, Permission $permission)
    {
        if ($role->hasPermissionTo($permission)) {
            $role->revokePermissionTo($permission);
            return back()->with('message', 'Permiso revocado.');
        }
        return back()->with('message', 'Permiso no existe.');

    }
}
