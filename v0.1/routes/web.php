<?php

use App\Http\Controllers\ComunicadosController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
--------------------------------------------------------------------------
 Web Routes
--------------------------------------------------------------------------
    Aquí se registran todas las rutas para nuestra aplicación. Estas rutas se cargan mediante RouteServiceProvider en un grupo que contiene el middleware "web"

    GET - Solicitar un recurso
    POST - Crear un nuevo recurso
    PUT - Actualizar un recurso
    PATCH - Modificar un recurso
    DELETE - Eliminar un recurso
    OPTIONS - Pregunta al servidor que verbos se permiten
    
    Multiple HTTP verbs
    Route::match(['GET', 'POST'], '/blog', [PostsController::class, 'index']);
    Route::any('/blog', [PostsController::class, 'index']);
*/

Route::get('/', function () {
    return view('inicio');
});
// Route::get('/adif', function () {
//     return view('adif');
// });

// GET
Route::get('/comunicados', [ComunicadosController::class, 'index']);
Route::get('/articulos/{id}', [ComunicadosController::class, 'show']);

// POST 
Route::get('/comunicados/crear', [ComunicadosController::class, 'crear']);
Route::get('/comunicados', [ComunicadosController::class, 'store']);

// PUT or PATCH
Route::get('/comunicados/editar/{id}', [ComunicadosController::class, 'editar']);
Route::get('/comunicados/{id}', [ComunicadosController::class, 'update']);

// DELETE
Route::delete('/comunicados/{id}', [ComunicadosController::class, 'destroy']);

// Esto crea todas las rutas CRUD [Create, Read, Update, Delete] 
// (GET,POST,PUT,PATCH,DELETE)
// Route::resources([
//     'comunicados' => ComunicadosController::class,
//     'comunicados/{$id}' => ComunicadosController::class,
// ]);
// Route::resources([
//     'empresas' => EmpresasController::class,
// ]);

// Route::group(['namespace' => 'App\Http\Controllers'], function()
// {  
    
// });

Route::get('/adif', [App\Http\Controllers\HomeController::class, 'adif'])->name('adif');
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

Route::get('/renfe', [App\Http\Controllers\HomeController::class, 'renfe'])->name('renfe');
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


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('panel');

Route::get('/empresasaux', [App\Http\Controllers\HomeController::class, 'empresasaux'])->name('empresasaux');
Route::get('/igualdad', [App\Http\Controllers\HomeController::class, 'igualdad'])->name('igualdad');
Route::get('/biblioteca', [App\Http\Controllers\HomeController::class, 'biblioteca'])->name('biblioteca');
Route::get('/prensa', [App\Http\Controllers\HomeController::class, 'prensa'])->name('prensa');

Route::get('/equipo', [App\Http\Controllers\HomeController::class, 'equipo'])->name('equipo');
Route::post('/equipo', [App\Http\Controllers\ContactUsFormController::class, 'ContactUsForm'])->name('contact.store');
Route::post('/empresas', [App\Http\Controllers\EmpresaController::class, 'CrearEmpresa'])->name('empresas');

// Route::get('/admin/dashboard', 'Admin\DashboardController@index')->middleware('role:admin');
// Route::get('/seller/dashboard', 'Seller\DashboardController@index')->middleware('role:seller');

// Route::get('/contacto', [App\Http\Controllers\ContactUsFormController::class, 'createForm'])->name('contacto');


Auth::routes();





