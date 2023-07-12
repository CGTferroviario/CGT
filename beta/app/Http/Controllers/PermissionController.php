<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller; 
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionController extends Controller
{
    public function index()
    {
        $permissions = Permission::all();
        return view('intranet.permissions.index', compact('permissions'));
    }
    public function create()
    {
        return view('intranet.permissions.create');
    }
    public function store(Request $request)
    {
        $validated = $request->validate(['name' => ['required']]);
        Permission::create($validated);

        return to_route('intranet.permissions.index')->with('message', 'Permission Created Successfully');
    }
    public function edit(Permission $permission)
    {
        $roles = Role::all();
        return view('intranet.permissions.edit', compact('permission', 'roles'));
    }
    public function update(Request $request, Permission $permission)
    {
        $validated = $request->validate(['name' => ['required']]);
        $permission->update($validated);

        return to_route('intranet.permissions.index')->with('message', 'Permission Updated Successfully');
    }
    public function destroy(Permission $permission)
    {
        $permission->delete();

        return back()->with('message', 'Permission deleted.');
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