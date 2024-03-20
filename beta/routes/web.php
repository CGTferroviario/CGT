<?php

use App\Http\Controllers\AfiliadoController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ComunicadoController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\DocumentoController;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\EquipoController;
use App\Http\Controllers\EtiquetaController;
use App\Http\Controllers\MunicipioController;
use App\Http\Controllers\NoticiaController;
use App\Http\Controllers\PaginaController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\ProvinciaController;
use App\Http\Controllers\SeccionController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\UserController;
use App\Models\Slider;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome'); 
});
Route::get('/intranet', function () {
    $sliders = Slider::all();
    return view('intranet', compact('sliders'));
    // Route::get('/', [PaginaController::class, 'intranet'])->name('intranet');
});

Route::get('/intranet/provincias/{ccaa}', [ProvinciaController::class, 'index']);
Route::get('/intranet/municipios/{provincia}', [MunicipioController::class, 'index']);



Route::get('/adif', function () {
    return view('adif')->name('adif');
});
Route::controller(PaginaController::class)->prefix('adif')->name('adif.')->group(function () {
    Route::get('/doc', 'docADIF')->name('doc');
    Route::get('/infraestructura', 'infraestructura')->name('infraestructura');
    Route::get('/circulacion', 'circulacion')->name('circulacion');
    Route::get('/oficinas', 'oficinasADIF')->name('oficinas');
    Route::get('/estaciones', 'estaciones')->name('estaciones');
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
    Route::get('/doc', 'docRENFE')->name('doc');
    Route::get('/comercial', 'comercial')->name('comercial');
    Route::get('/intervencion', 'intervencion')->name('intervencion');
    Route::get('/conduccion', 'conduccion')->name('conduccion');
    Route::get('/talleres', 'talleres')->name('talleres');
    Route::get('/oficinas', 'oficinasRENFE')->name('oficinas');
});
Route::controller(PaginaController::class)->prefix('renfe/doc')->name('renfe.doc.')->group(function () {
    Route::get('/afiliacion', 'afiliacionRENFE')->name('afiliacion');
    Route::get('/ayudas', 'ayudasRENFE')->name('ayudas');
    Route::get('/igualdad', 'igualdadRENFE')->name('igualdad');
    Route::get('/legislacion', 'legislacionRENFE')->name('legislacion');
    Route::get('/licencias', 'licenciasRENFE')->name('licencias');
    Route::get('/mapa', 'mapaRENFE')->name('mapa');
    Route::get('/conciliacion', 'conciliacionRENFE')->name('conciliacion');
    Route::get('/modelos', 'modelosRENFE')->name('modelos');
    Route::get('/protocolos', 'protocolosRENFE')->name('protocolos');
    Route::get('/salud', 'saludRENFE')->name('salud');
    Route::get('/teletrabajo', 'teletrabajoRENFE')->name('teletrabajo');
    Route::get('/tablas', 'tablasRENFE')->name('tablas');
});
Route::get('/empresasaux', function () {
    return view('empresasaux')->name('empresasaux');
});
Route::controller(PaginaController::class)->prefix('empresasaux')->name('empresasaux.')->group(function () {
    Route::get('/serveo', 'serveo')->name('serveo');
    Route::get('/logirail', 'logirail')->name('logirail');
    Route::get('/otras', 'otras')->name('otras');
});
Route::get('/juridica', function () {
    return view('juridica')->name('juridica');
});
Route::controller(PaginaController::class)->prefix('juridica')->name('juridica.')->group(function () {
    Route::get('/convenios', 'convenios')->name('convenios');
    Route::get('/laboral', 'laboral')->name('laboral');
    Route::get('/ferroviaria', 'ferroviaria')->name('ferroviaria');
    Route::get('/modelos', 'modelos')->name('modelos');
    Route::get('/logros', 'logros')->name('logros');
});
Route::get('/biblioteca', function () {
    return view('biblioteca')->name('biblioteca');
});
Route::prefix('biblioteca')->group(function () {
    Route::get('/comunicados', [ComunicadoController::class, 'bibliotecaComunicados'])->name('biblioteca.comunicados');
    Route::get('/comunicados/buscar', [ComunicadoController::class, 'buscar'])->name('biblioteca.comunicados.buscar');
    Route::get('/noticias', [NoticiaController::class, 'bibliotecaNoticias'])->name('biblioteca.noticias');

    Route::controller(PaginaController::class)->name('biblioteca.')->group(function () {
        Route::get('/seguridad', 'seguridad')->name('seguridad');
        Route::get('/archivo', 'archivo')->name('archivo');
        Route::get('/defensa', 'defensa')->name('defensa');
        Route::get('/colegio', 'colegio')->name('colegio');
        Route::get('/via', 'via')->name('via');
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
    Route::get('/sp', [EquipoController::class, 'sp'])->name('equipo.sp');
    Route::match(['get','post'], '/mapa', [EquipoController::class, 'mapa'])->name('equipo.mapa');
    // Route::post('/mapa', [EquipoController::class, 'mapa'])->name('equipo.mapa');
    // Route::view('/contacto', 'equipo.contacto');
    Route::get('/contacto', [ContactoController::class, 'contacto'])->name('equipo.contacto');
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
    Route::resource('/comunicados', ComunicadoController::class)->except(['show']);
    // Route::get('/comunicados/ajax', [ComunicadoController::class, 'getComunicadosAjax'])->name('comunicados.ajax');
    // Route::get('/comunicados-ajax', 'ComunicadoController@getComunicadosAjax')->name('comunicados.ajax');

    Route::resource('/noticias', NoticiaController::class);
    Route::resource('/empresas', EmpresaController::class)->except(['show']);
    Route::resource('/categorias', CategoriaController::class)->except(['show']);
    Route::resource('/etiquetas', EtiquetaController::class)->except(['show']);
    Route::resource('/equipos', EquipoController::class);
    Route::resource('/roles', RoleController::class);
    Route::resource('/permissions', PermissionController::class);
    Route::resource('/usuarios', UserController::class);
    Route::resource('/documentos', DocumentoController::class);
    Route::resource('/sliders', SliderController::class);
    Route::resource('/seccions', SeccionController::class);
    Route::resource('/afiliados', AfiliadoController::class);
});

Route::get('/comunicados/{slug}', [ComunicadoController::class, 'show'])->name('comunicados.show');
Route::get('/empresas/{slug}', [EmpresaController::class, 'show'])->name('empresas.show');
Route::get('/categorias/{slug}', [CategoriaController::class, 'show'])->name('categorias.show');
Route::get('/etiquetas/{slug}', [EtiquetaController::class, 'show'])->name('etiquetas.show');



require __DIR__.'/auth.php';
