<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ComunicadoController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\EtiquetaController;
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
Route::get('/adif', function () {
    return view('adif')->name('adif');
});
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
Route::get('/renfe', function () {
    return view('renfe')->name('renfe');
});
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
    Route::view('/protocolos', 'renfe.doc.protocolos');
    Route::view('/salud', 'renfe.doc.salud');
    Route::view('/teletrabajo', 'renfe.doc.teletrabajo');
    Route::view('/tablas', 'renfe.doc.tablas');
});
Route::get('/empresasaux', function () {
    return view('empresasaux')->name('empresasaux');
});
Route::prefix('empresasaux')->group(function () {
    Route::view('/serveo', 'empresasaux.serveo');
    Route::view('/logirail', 'empresasaux.logirail'); 
    Route::view('/otras', 'empresasaux.otras');
});
Route::get('/juridica', function () {
    return view('juridica')->name('juridica');
});
Route::prefix('juridica')->group(function () {
    Route::view('/convenios', 'juridica.convenios');
    Route::view('/laboral', 'juridica.laboral'); 
    Route::view('/ferroviaria', 'juridica.ferroviaria');
    Route::view('/modelos', 'juridica.modelos');
    Route::view('/logros', 'juridica.logros');
});
Route::get('/biblioteca', function () {
    return view('biblioteca')->name('biblioteca');
});
Route::prefix('biblioteca')->group(function () {
    Route::get('/comunicados', [ComunicadoController::class, 'bibliotecaComunicados'])->name('biblioteca.comunicados'); 
    Route::view('/seguridad', 'biblioteca.seguridad'); 
    Route::view('/defensa', 'biblioteca.defensa');
    Route::view('/archivo', 'biblioteca.archivo');
    Route::view('/colegio', 'biblioteca.colegio');
    Route::view('/via', 'biblioteca.via');
});
Route::get('/recursos', function () {
    return view('recursos')->name('recursos');
});
Route::prefix('recursos')->group(function () {
    Route::view('/videos', 'recursos.videos');
    Route::view('/audios', 'recursos.audios'); 
    Route::view('/carteles', 'recursos.carteles');
    Route::view('/fotos', 'recursos.fotos');
    Route::view('/logos', 'recursos.logos');
});
Route::get('/equipo', function () {
    return view('equipo')->name('equipo');
});

Route::prefix('equipo')->group(function () {
    Route::view('/sp', 'equipo.sp');
    Route::view('/mapa', 'equipo.mapa'); 
    // Route::view('/contacto', 'equipo.contacto');
    Route::get('/contacto', [ContactoController::class, 'contacto']);
    Route::post('/contacto', [ContactoController::class, 'store'])->name('equipo.contacto.store');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::middleware('auth')->name('intranet.')->prefix('intranet')->group(function () {
    Route::resource('/comunicados', ComunicadoController::class);
    Route::resource('/empresas', EmpresaController::class);
    Route::resource('/categorias', CategoriaController::class);
    Route::resource('/etiquetas', EtiquetaController::class);

});


require __DIR__.'/auth.php';
