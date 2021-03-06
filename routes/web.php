<?php

use Illuminate\Support\Facades\Route;

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
})->name('welcome');


Route::middleware('auth')->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'home'])->name('home');
    Route::get('/logout', [App\Http\Controllers\HomeController::class, 'logout'])->name('logout');

});

Route::middleware('guest')->group(function () {

Route::get('/login', [App\Http\Controllers\HomeController::class, 'login'])->name('login');
Route::post('/login/created', [App\Http\Controllers\HomeController::class, 'loginCreated'])->name('login.created');
Route::get('/register', [App\Http\Controllers\HomeController::class, 'register'])->name('register');
Route::post('/register/created', [App\Http\Controllers\HomeController::class, 'registerCreated'])->name('register.created');
});