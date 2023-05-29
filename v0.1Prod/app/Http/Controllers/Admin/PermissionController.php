<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;

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
        $validated = $request->validate(['name' => ['required', 'min:']]);
        Permission::create($validated);

        return to_route('admin.permissions.index');
    }
}
