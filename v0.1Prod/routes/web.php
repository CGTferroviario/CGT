<?php

use App\Http\Controllers\Admin\IndexController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\ArchivoController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ComunicadoController;
use App\Http\Controllers\DocumentoController;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\EtiquetaController;
use App\Http\Controllers\NoticiaController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::resource('comunicados', ComunicadoController::class)->name('comunicados', '');
Route::resource('documentos', DocumentoController::class)->name('documentos', '');
Route::resource('noticias', NoticiaController::class)->name('noticias', '');
Route::resource('archivos', ArchivoController::class)->name('archivos', '');
Route::resource('empresas', EmpresaController::class)->name('empresas', '');
Route::resource('categorias', CategoriaController::class)->name('categorias', '');
Route::resource('etiquetas', EtiquetaController::class)->name('etiquetas', '');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Route::get('/admin', function () {
//     return view('admin.index');
// })->middleware(['auth', 'role:admin'])->name('admin.index');

Route::middleware(['auth', 'role:admin'])->name('admin')->prefix('admin')->group(function() {
    Route::get('/', [IndexController::class, 'index']);
    Route::resource('/roles', RoleController::class);
    Route::post('roles/{role}/permissions', [RoleController::class, 'givePermission'])->name('roles.permissions');
    Route::delete('roles/{role}/permissions/{permission}', [RoleController::class, 'revokePermission'])->name('roles.permissions.revoke');
    Route::resource('/permissions', PermissionController::class);

});

require __DIR__.'/auth.php';
