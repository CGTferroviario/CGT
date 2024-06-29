<?php

use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\MunicipioController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProvinciaController;
use App\Http\Controllers\SectorController;
use App\Models\Ccaa;
use App\Models\Municipio;
use App\Models\Provincia;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard', [
        'municipios' => Municipio::orderBy('id', 'desc')->get(),
        'provincias' => Provincia::orderBy('id', 'asc')->get(),
        'ccaas' => Ccaa::orderBy('id', 'asc')->get()
    ]);
})->middleware(['auth', 'verified'])->name('dashboard');

Route::resource('sectores', SectorController::class);
Route::resource('empresas', EmpresaController::class);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::get('/provincias/{ccaa}', [ProvinciaController::class, 'index']);
Route::get('/municipios/{provincia}', [MunicipioController::class, 'index']);

require __DIR__.'/auth.php';
