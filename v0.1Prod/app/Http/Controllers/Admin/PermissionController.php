<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionController extends Controller
{
    public function index()
    {
        $permissions = Permission::all();
        return view('admin.permissions.index', compact('permissions'));
    }
    public function create()
    {
        $permissions = Permission::all();
        return view('admin.permissions.create', compact('permissions'));
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required'],
            'descripcion' => ['required']
        ]);
        Permission::create($validated);

        return to_route('admin.permissions.index')->with('message', 'Permiso Creado Correctamente');
    }
    public function edit(Permission $permission)
    {
        $permissions = Permission::all();
        $roles = Role::all();
        return view('admin.permissions.edit', compact('permission', 'roles', 'permissions'));
    }
    public function update(Request $request, Permission $permission)
    {
        
        $validated = $request->validate([
            'name' => ['required'],
            'descripcion' => ['required']
        ]);
        $permission->update($validated);
        // dd($permission);

        return to_route('admin.permissions.index')->with('message', 'Permiso Actualizado Correctamente');
    }
    public function destroy(Permission $permission)
    {
        $permission->delete();

        return back()->with('message', 'Permiso Eliminado.');
    }
    public function assignRole(Request $request, Permission $permission)
    {
        if ($permission->hasRole($request->role)) {
            return back()->with('message', 'Ese Rol ya existe.');
        }
        $permission->assignRole($request->role);
        return back()->with('message', 'Rol asignado.');
    }
    public function removeRole(Permission $permission, Role $role)
    {
        if ($permission->hasRole($role)) {
            $permission->removeRole($role);
            return back()->with('message', 'Rol eliminado.');
        }
        return back()->with('message', 'Ese Rol no existe.');

    }
}
