<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/adif', [App\Http\Controllers\HomeController::class, 'adif'])->name('adif');
Route::get('/renfe', [App\Http\Controllers\HomeController::class, 'renfe'])->name('renfe');
Route::get('/empresasaux', [App\Http\Controllers\HomeController::class, 'empresasaux'])->name('empresasaux');
Route::get('/igualdad', [App\Http\Controllers\HomeController::class, 'igualdad'])->name('igualdad');
Route::get('/biblioteca', [App\Http\Controllers\HomeController::class, 'biblioteca'])->name('biblioteca');
Route::get('/equipo', [App\Http\Controllers\HomeController::class, 'equipo'])->name('equipo');



Route::group(['namespace' => 'App\Http\Controllers'], function()
{  
    
});
