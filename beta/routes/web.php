<?php

use App\Http\Controllers\RoleController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ComunicadoController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\DocumentoController;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\EtiquetaController;
use App\Http\Controllers\NoticiaController;
use App\Http\Controllers\PaginaController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Spatie\Permission\Contracts\Permission;


Route::get('/', function () {
    return view('welcome'); 
});
Route::get('/intranet', function () {
    return view('intranet'); 
});
Route::get('/adif', function () {
    return view('adif')->name('adif');
});
Route::controller(PaginaController::class)->prefix('adif')->name('adif.')->group(function () {
    Route::get('/infraestructura', 'infraestructura');
    Route::get('/circulacion', 'circulacion');
    Route::get('/oficinas', 'oficinasADIF');
});
Route::controller(PaginaController::class)->prefix('adif/doc')->name('adif.doc.')->group(function () {
    Route::get('/afiliacion', 'afiliacionADIF')->name('afiliacion');
    Route::get('/ayudas', 'ayudasADIF')->name('ayudas');
    Route::get('/igualdad', 'igualdadADIF')->name('igualdad');
    Route::get('/legislacion', 'legislacionADIF')->name('legislacion');
    Route::get('/licencias', 'licenciasADIF')->name('licencias');
    Route::get('/mapa', 'mapaADIF')->name('mapa');
    Route::get('/conciliacion', 'conciliacionADIF')->name('conciliacion');
    Route::get('/modelos', 'modelosADIF')->name('modelos');
    Route::get('/protocolos', 'protocolosADIF')->name('protocolos');
    Route::get('/salud', 'saludADIF')->name('salud');
    Route::get('/teletrabajo', 'teletrabajoADIF')->name('teletrabajo');
    Route::get('/tablas', 'tablasADIF')->name('tablas');
});
Route::get('/renfe', function () {
    return view('renfe')->name('renfe');
});
Route::controller(PaginaController::class)->prefix('renfe')->name('renfe.')->group(function () {
    Route::get('/comercial', 'comercial');
    Route::get('/intervencion', 'intervencion');
    Route::get('/conduccion', 'conduccion');
    Route::get('/talleres', 'talleres');
    Route::get('/oficinas', 'oficinasRENFE');
});
Route::controller(PaginaController::class)->prefix('renfe/doc')->name('renfe.doc.')->group(function () {
    Route::get('/afiliacion', 'afiliacionRENFE');
    Route::get('/ayudas', 'ayudasRENFE');
    Route::get('/igualdad', 'igualdadRENFE');
    Route::get('/legislacion', 'legislacionRENFE');
    Route::get('/licencias', 'licenciasRENFE');
    Route::get('/mapa', 'mapaRENFE');
    Route::get('/conciliacion', 'conciliacionRENFE');
    Route::get('/modelos', 'modelosRENFE');
    Route::get('/protocolos', 'protocolosRENFE');
    Route::get('/salud', 'saludRENFE');
    Route::get('/teletrabajo', 'teletrabajoRENFE');
    Route::get('/tablas', 'tablasRENFE');
});
Route::get('/empresasaux', function () {
    return view('empresasaux')->name('empresasaux');
});
Route::controller(PaginaController::class)->prefix('empresasaux')->name('empresasaux.')->group(function () {
    Route::get('/serveo', 'serveo');
    Route::get('/logirail', 'logirail');
    Route::get('/otras', 'otras');
});
Route::get('/juridica', function () {
    return view('juridica')->name('juridica');
});
Route::controller(PaginaController::class)->prefix('juridica')->name('juridica.')->group(function () {
    Route::get('/convenios', 'convenios');
    Route::get('/laboral', 'laboral');
    Route::get('/ferroviaria', 'ferroviaria');
    Route::get('/modelos', 'modelos');
    Route::get('/logros', 'logros');
});
Route::get('/biblioteca', function () {
    return view('biblioteca')->name('biblioteca');
});
Route::prefix('biblioteca')->group(function () {
    Route::get('/comunicados', [ComunicadoController::class, 'bibliotecaComunicados'])->name('biblioteca.comunicados');
    Route::get('/noticias', [NoticiaController::class, 'bibliotecaNoticias'])->name('biblioteca.noticias');

    Route::controller(PaginaController::class)->name('biblioteca.')->group(function () {
        Route::get('/seguridad', 'seguridad');
        Route::get('/archivo', 'archivo');
        Route::get('/defensa', 'defensa');
        Route::get('/colegio', 'colegio');
        Route::get('/via', 'via');
    });
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
    Route::resource('/noticias', NoticiaController::class);
    Route::resource('/empresas', EmpresaController::class);
    Route::resource('/categorias', CategoriaController::class);
    Route::resource('/etiquetas', EtiquetaController::class);
    Route::resource('/roles', RoleController::class);
    Route::resource('/permissions', PermissionController::class);
    Route::resource('/usuarios', UserController::class);
    Route::resource('/documentos', DocumentoController::class);
});


require __DIR__.'/auth.php';
