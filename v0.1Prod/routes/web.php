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
use App\Http\Controllers\PaginaController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('inicio');
})->name('inicio');

Route::get('/adif', [App\Http\Controllers\PaginaController::class, 'adif'])->name('adif');
Route::prefix('adif/')->group(function () {
    Route::view('/infraestructura', 'adif.infraestructura');
    Route::view('/circulacion', 'adif.circulacion'); 
    Route::view('/oficinas', 'adif.oficinas');
});
Route::prefix('adif/doc')->group(function () {
    Route::view('/afiliacion', 'adif.doc.afiliacion');
    Route::view('/ayudas', 'adif.doc.ayudas');
    Route::view('/igualdad', 'adif.doc.igualdad');
    Route::view('/legislacion', 'adif.doc.legislacion');
    Route::view('/licencias', 'adif.doc.licencias');
    Route::view('/mapa', 'adif.doc.mapa');
    Route::view('/conciliacion', 'adif.doc.conciliacion');
    Route::view('/modelos', 'adif.doc.modelos');
    Route::view('/protocolos', 'adif.doc.protocolos');
    Route::view('/salud', 'adif.doc.salud');
    Route::view('/teletrabajo', 'adif.doc.teletrabajo');
    Route::view('/tablas', 'adif.doc.tablas');
});

Route::get('/renfe', [App\Http\Controllers\PaginaController::class, 'renfe'])->name('renfe');
Route::prefix('renfe/')->group(function () {
    Route::view('/comercial', 'renfe.comercial');
    Route::view('/intervencion', 'renfe.intervencion'); 
    Route::view('/conduccion', 'renfe.conduccion');   
    Route::view('/talleres', 'renfe.talleres');    
    Route::view('/oficinas', 'renfe.oficinas');
});
Route::prefix('renfe/doc')->group(function () {
    Route::view('/afiliacion', 'renfe.doc.afiliacion');
    Route::view('/ayudas', 'renfe.doc.ayudas');
    Route::view('/igualdad', 'renfe.doc.igualdad');
    Route::view('/legislacion', 'renfe.doc.legislacion');
    Route::view('/licencias', 'renfe.doc.licencias');
    Route::view('/mapa', 'renfe.doc.mapa');
    Route::view('/conciliacion', 'renfe.doc.conciliacion');
    Route::view('/modelos', 'renfe.doc.modelos');
    Route::view('/acoso', 'renfe.doc.acoso');
    Route::view('/salud', 'renfe.doc.salud');
    Route::view('/teletrabajo', 'renfe.doc.teletrabajo');
    Route::view('/tablas', 'renfe.doc.tablas');
});

Route::get('/empresasaux', [App\Http\Controllers\PaginaController::class, 'empresasaux'])->name('empresasaux');
Route::prefix('empresasaux')->group(function () {
    Route::view('/serveo', 'empresasaux.serveo');
    Route::view('/logirail', 'empresasaux.logirail'); 
    Route::view('/otras', 'empresasaux.otras');
});

Route::get('/juridica', [App\Http\Controllers\PaginaController::class, 'juridica'])->name('juridica');
Route::prefix('juridica')->group(function () {
    Route::view('/convenios', 'juridica.convenios');
    Route::view('/laboral', 'juridica.laboral'); 
    Route::view('/ferroviaria', 'juridica.ferroviaria');
    Route::view('/modelos', 'juridica.modelos');
    Route::view('/logros', 'juridica.logros');
});

Route::get('/biblioteca', [App\Http\Controllers\PaginaController::class, 'biblioteca'])->name('biblioteca');
Route::get('/biblioteca/comunicados', [App\Http\Controllers\PaginaController::class, 'comunicados'])->name('biblioteca.comunicados');


Route::prefix('biblioteca')->group(function () {
    Route::view('/seguridad', 'biblioteca.seguridad'); 
    Route::view('/defensa', 'biblioteca.defensa');
    Route::view('/archivo', 'biblioteca.archivo');
    Route::view('/colegio', 'biblioteca.colegio');
    Route::view('/via', 'biblioteca.via');
});

Route::get('/recursos', [App\Http\Controllers\PaginaController::class, 'recursos'])->name('recursos');
Route::prefix('recursos')->group(function () {
    Route::view('/videos', 'recursos.videos');
    Route::view('/audios', 'recursos.audios'); 
    Route::view('/carteles', 'recursos.carteles');
    Route::view('/fotos', 'recursos.fotos');
    Route::view('/logos', 'recursos.logos');
});

Route::get('/equipo', [App\Http\Controllers\PaginaController::class, 'equipo'])->name('equipo');
Route::post('/equipo/contacto', [App\Http\Controllers\ContactUsFormController::class, 'ContactUsForm'])->name('contact.store');
Route::prefix('equipo')->group(function () {
    Route::view('/sp', 'equipo.sp');
    Route::view('/mapa', 'equipo.mapa'); 
    Route::view('/contacto', 'equipo.contacto');
});

// Route::view('/afiliate', 'afiliate')->name('afiliate');
// Route::post('/afiliate', [App\Http\Controllers\AfiliacionController::class, 'AfiliateForm'])->name('afiliate.store');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::resource('comunicados', ComunicadoController::class)->name('comunicados', '');
// Route::resource('documentos', DocumentoController::class)->name('documentos', '');
// Route::resource('noticias', NoticiaController::class)->name('noticias', '');
// Route::resource('archivos', ArchivoController::class)->name('archivos', '');
// Route::resource('empresas', EmpresaController::class)->name('empresas', '');
// Route::resource('categorias', CategoriaController::class)->name('categorias', '');
// Route::resource('etiquetas', EtiquetaController::class)->name('etiquetas', '');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'role:admin'])->name('admin.')->prefix('admin')->group(function() {
    Route::get('/', [IndexController::class, 'indexAdmin']);
    Route::resource('/roles', RoleController::class);
    Route::post('roles/{role}/permissions', [RoleController::class, 'givePermission'])->name('roles.permissions');
    Route::delete('roles/{role}/permissions/{permission}', [RoleController::class, 'revokePermission'])->name('roles.permissions.revoke');
    Route::resource('/permissions', PermissionController::class);

    Route::get('/dashboard', [IndexController::class, 'dashboard'])->name('dashboard');
    
    Route::resource('/comunicados', ComunicadoController::class)->name('comunicados', '');
    Route::resource('/noticias', NoticiaController::class)->name('noticias', '');
    Route::resource('/documentos', DocumentoController::class)->name('documentos', '');
    Route::resource('/archivos', ArchivoController::class)->name('archivos', '');
    Route::resource('/empresas', EmpresaController::class)->name('empresas', '');
    Route::resource('/categorias', CategoriaController::class)->name('categorias', '');
    Route::resource('/etiquetas', EtiquetaController::class)->name('etiquetas', '');

});
// Route::middleware(['auth', 'role:editor'])->name('editor.')->prefix('editor')->group(function() {
//     Route::get('/', [IndexController::class, 'indexEditor']);
//     Route::resource('comunicados', ComunicadoController::class)->name('comunicados', '');
//     Route::resource('documentos', DocumentoController::class)->name('documentos', '');
//     Route::resource('noticias', NoticiaController::class)->name('noticias', '');
//     Route::resource('archivos', ArchivoController::class)->name('archivos', '');
//     Route::resource('empresas', EmpresaController::class)->name('empresas', '');
//     Route::resource('categorias', CategoriaController::class)->name('categorias', '');
//     Route::resource('etiquetas', EtiquetaController::class)->name('etiquetas', '');
// });

require __DIR__.'/auth.php';
