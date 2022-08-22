<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EmailsController;
use App\Http\Controllers\SmsController;
use App\Http\Controllers\TestsEnrollmentController;
use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Mail;

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
Route::get('/private',[HomeController::class, 'private']);

Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Route for mailing
// Route::get('/email', function(){
//     Mail::to('informatica@cgtferroviario.es')->send(new WelcomeMail());
//     return new WelcomeMail();
// });

Route::get('/email', [EmailsController::class, 'email']);

Route::get('/send-testenrollment', [TestsEnrollmentController::class, 'sendTestNotification']);

Route::get('/send-sms', [TestsEnrollmentController::class, 'sendTestNotification']);

Route::get('/sms', [SmsController::class, 'index']);