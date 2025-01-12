<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Permissions;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/permisos', function () {
        return view('permisos');
    })->name('permisos');
});


Route::middleware(['auth:sanctum', 'verified'])->get('/permissions', Permissions::class)->name('permissions');