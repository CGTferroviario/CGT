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
Route::get('/intranet', function () {
    return view('intranet'); 
});
Route::get('/adif', function () {
    return view('adif')->name('adif');
});
Route::prefix('adif')->group(function () {
    Route::get('/infraestructura', [PaginaController::class, 'infraestructura'])->name('adif.infraestructura');
    Route::get('/circulacion', [PaginaController::class, 'circulacion'])->name('adif.circulacion');
    Route::get('/oficinas', [PaginaController::class, 'oficinasADIF'])->name('adif.oficinas');
});
Route::prefix('adif/doc')->group(function () {
    Route::get('/afiliacion', [PaginaController::class, 'afiliacionADIF'])->name('adif.doc.afiliacion');
    Route::get('/ayudas', [PaginaController::class, 'ayudasADIF'])->name('adif.doc.ayudas');
    Route::get('/igualdad', [PaginaController::class, 'igualdadADIF'])->name('adif.doc.igualdad');
    Route::get('/legislacion', [PaginaController::class, 'legislacionADIF'])->name('adif.doc.legislacion');
    Route::get('/licencias', [PaginaController::class, 'licenciasADIF'])->name('adif.doc.licencias');
    Route::get('/mapa', [PaginaController::class, 'mapaADIF'])->name('adif.doc.mapa');
    Route::get('/conciliacion', [PaginaController::class, 'conciliacionADIF'])->name('adif.doc.conciliacion');
    Route::get('/modelos', [PaginaController::class, 'modelosADIF'])->name('adif.doc.modelos');
    Route::get('/protocolos', [PaginaController::class, 'protocolosADIF'])->name('adif.doc.protocolos');
    Route::get('/salud', [PaginaController::class, 'saludADIF'])->name('adif.doc.salud');
    Route::get('/teletrabajo', [PaginaController::class, 'teletrabajoADIF'])->name('adif.doc.teletrabajo');
    Route::get('/tablas', [PaginaController::class, 'tablasADIF'])->name('adif.doc.tablas');
});
Route::get('/renfe', function () {
    return view('renfe')->name('renfe');
});
Route::prefix('renfe/')->group(function () {
    Route::get('/comercial', [PaginaController::class, 'comercial'])->name('renfe.comercial');
    Route::get('/intervencion', [PaginaController::class, 'intervencion'])->name('renfe.intervencion');
    Route::get('/conduccion', [PaginaController::class, 'conduccion'])->name('renfe.conduccion');
    Route::get('/talleres', [PaginaController::class, 'talleres'])->name('renfe.talleres');
    Route::get('/oficinas', [PaginaController::class, 'oficinasRENFE'])->name('renfe.oficinas');
});
Route::prefix('renfe/doc')->group(function () {
    Route::get('/afiliacion', [PaginaController::class, 'afiliacionRENFE'])->name('renfe.doc.afiliacion');
    Route::get('/ayudas', [PaginaController::class, 'ayudasRENFE'])->name('renfe.doc.ayudas');
    Route::get('/igualdad', [PaginaController::class, 'igualdadRENFE'])->name('renfe.doc.igualdad');
    Route::get('/legislacion', [PaginaController::class, 'legislacionRENFE'])->name('renfe.doc.legislacion');
    Route::get('/licencias', [PaginaController::class, 'licenciasRENFE'])->name('renfe.doc.licencias');
    Route::get('/mapa', [PaginaController::class, 'mapaRENFE'])->name('renfe.doc.mapa');
    Route::get('/conciliacion', [PaginaController::class, 'conciliacionRENFE'])->name('renfe.doc.conciliacion');
    Route::get('/modelos', [PaginaController::class, 'modelosRENFE'])->name('renfe.doc.modelos');
    Route::get('/protocolos', [PaginaController::class, 'protocolosRENFE'])->name('renfe.doc.protocolos');
    Route::get('/salud', [PaginaController::class, 'saludRENFE'])->name('renfe.doc.salud');
    Route::get('/teletrabajo', [PaginaController::class, 'teletrabajoRENFE'])->name('renfe.doc.teletrabajo');
    Route::get('/tablas', [PaginaController::class, 'tablasRENFE'])->name('renfe.doc.tablas');
});
Route::get('/empresasaux', function () {
    return view('empresasaux')->name('empresasaux');
});
Route::prefix('empresasaux')->group(function () {
    Route::get('/serveo', [PaginaController::class, 'serveo'])->name('empresasaux.oficinas');
    Route::get('/logirail', [PaginaController::class, 'logirail'])->name('empresasaux.logirail');
    Route::get('/otras', [PaginaController::class, 'otras'])->name('empresasaux.otras');
});
Route::get('/juridica', function () {
    return view('juridica')->name('juridica');
});
Route::prefix('juridica')->group(function () {
    Route::get('/convenios', [PaginaController::class, 'convenios'])->name('juridica.convenios');
    Route::get('/laboral', [PaginaController::class, 'laboral'])->name('juridica.laboral');
    Route::get('/ferroviaria', [PaginaController::class, 'ferroviaria'])->name('juridica.ferroviaria');
    Route::get('/modelos', [PaginaController::class, 'modelos'])->name('juridica.modelos');
    Route::get('/logros', [PaginaController::class, 'logros'])->name('juridica.logros');
});
Route::get('/biblioteca', function () {
    return view('biblioteca')->name('biblioteca');
});
Route::prefix('biblioteca')->group(function () {
    Route::get('/comunicados', [ComunicadoController::class, 'bibliotecaComunicados'])->name('biblioteca.comunicados');
    Route::get('/noticias', [NoticiaController::class, 'bibliotecaNoticias'])->name('biblioteca.noticias');
    Route::get('/seguridad', [PaginaController::class, 'seguridad'])->name('biblioteca.seguridad');
    Route::get('/archivo', [PaginaController::class, 'archivo'])->name('biblioteca.archivo');
    Route::get('/defensa', [PaginaController::class, 'defensa'])->name('biblioteca.defensa');
    Route::get('/colegio', [PaginaController::class, 'colegio'])->name('biblioteca.colegio');
    Route::get('/via', [PaginaController::class, 'via'])->name('biblioteca.via');
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
