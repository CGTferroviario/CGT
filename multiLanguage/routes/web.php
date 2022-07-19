<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LangController;
  
 
Route::get('lang/home', [LangController::class, 'index']);
 
Route::get('lang/change', [LangController::class, 'change'])->name('changeLang');


Route::get('/', function () {
    return view('welcome');
});
