<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostsController;
use App\Http\Middleware\Role;
use Barryvdh\Debugbar\Facades\Debugbar;
use Illuminate\Support\Facades\Route;
/*
--------------------------------------------------------------------------
 Web Routes
--------------------------------------------------------------------------

 Here is where you can register web routes for your application. These
 routes are loaded by the RouteServiceProvider within a group which
 contains the "web" middleware group. Now create something great!

    GET - Request a resource
    POST - Create a new resource
    PUT - Update a resource
    PATCH - Modify a resource
    DELETE - Delete a resource
    OPTIONS - Ask the serve which verbs are allowed
*/

// GET
Route::get('/blog', [PostsController::class, 'index']);
Route::get('/blog/{id}', [PostsController::class, 'show']);

// POST 
Route::get('/blog/create', [PostsController::class, 'create']);
Route::get('/blog', [PostsController::class, 'store']);

// PUT or PATCH
Route::get('/blog/edit/{id}', [PostsController::class, 'edit']);
Route::get('/blog/{id}', [PostsController::class, 'update']);

// DELETE
Route::delete('/blog/{id}', [PostsController::class, 'destroy']);

// Multiple HTTP verbs
// Route::match(['GET', 'POST'], '/blog', [PostsController::class, 'index']);


// Route::any('/blog', [PostsController::class, 'index']);

Route::view('/blog', 'blog.index' , ['name' => 'Empezando el blog']);



// Route::resource('blog', PostsController::class);

// Route for invoke method
Route::get('/', HomeController::class);