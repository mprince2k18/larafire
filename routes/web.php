<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

/**
 * WEB PUSH NOTIFICATION
 */
Route::post('/save-token', [UserController::class, 'saveToken'])->name('save-token');
Route::post('/send-notification', [UserController::class, 'sendNotification'])->name('send.notification');

/**
 * SMS
 */
Route::get('phone-auth', [UserController::class, 'phoneAuth']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
