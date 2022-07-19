<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\SubirController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('welcome');
});

Route::get('subirDocumento', [SubirController::class, 'index']);
Route::post('subirDocumento', [SubirController::class, 'store'])->name('file.store');

Route::middleware('create-users')->group(function () {
    Route::get(
        '/users/create',
        [\App\Http\Controllers\UserController::class, 'create']
    );

    Route::post(
        '/users',
        [\App\Http\Controllers\UserController::class, 'store']
    );
});