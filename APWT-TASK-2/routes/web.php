<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;

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

Route::get('/register', [RegistrationController::class, 'index'])->name('register');
Route::post('/register',[RegistrationController::class, 'register'])->name('register');

Route::get('/contact', [RegistrationController::class, 'contact'])->name('contact');
Route::post('/contact', [RegistrationController::class, 'pcontact'])->name('contact');


Route::get('/home', [RegistrationController::class, 'home'])->name('home');

Route::get('/login', [RegistrationController::class, 'login'])->name('login');
Route::post('/login', [RegistrationController::class, 'plogin'])->name('login');