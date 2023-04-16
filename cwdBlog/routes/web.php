<?php

use App\Http\Controllers\FallbackController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostsController;
use App\Http\Middleware\Role;
use Barryvdh\Debugbar\Facades\Debugbar;
use Illuminate\Support\Facades\Route;
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

// // GET
// Route::get('/blog', [PostsController::class, 'index'])->name('blog.index');
// Route::get('/blog/{id}', [PostsController::class, 'show'])->name('blog.show');

// // POST 
// Route::get('/blog/create', [PostsController::class, 'create'])->name('blog.create');
// Route::post('/blog', [PostsController::class, 'store'])->name('blog.store');

// // PUT or PATCH
// Route::get('/blog/edit/{id}', [PostsController::class, 'edit'])->name('blog.edit');
// Route::patch('/blog/{id}', [PostsController::class, 'update'])->name('blog.update');

// // DELETE
// Route::delete('/blog/{id}', [PostsController::class, 'destroy'])->name('blog.destroy');

// Route::view('/blog', 'blog.index' , ['name' => 'Empezando el blog']);

// Route::resource('blog', PostsController::class);

Route::prefix('/blog')->group(function (){
    Route::get('/create', [PostsController::class, 'create'])->name('blog.create');
    Route::get('/', [PostsController::class, 'index'])->name('blog.index');
    Route::get('/{id}', [PostsController::class, 'show'])->name('blog.show');
    Route::post('/', [PostsController::class, 'store'])->name('blog.store');
    Route::get('/edit/{id}', [PostsController::class, 'edit'])->name('blog.edit');
    Route::patch('/{id}', [PostsController::class, 'update'])->name('blog.update');
    Route::delete('/{id}', [PostsController::class, 'destroy'])->name('blog.destroy');
});

// Route for invoke method
Route::get('/', HomeController::class);

// Fallback Route
Route::fallback(FallbackController::class);