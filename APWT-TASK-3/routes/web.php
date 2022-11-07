<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\AdminController;

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

Route::get('/registration', [RegistrationController::class, 'index'])->name('registration');
Route::post('/registration',[RegistrationController::class, 'registration'])->name('registration');


Route::get('/profile', [RegistrationController::class, 'profile'])->name('profile');

Route::get('/login', [RegistrationController::class, 'login'])->name('login');
Route::post('/login', [RegistrationController::class, 'plogin'])->name('login');

Route::get('/logout',[RegistrationController::class,'logout'])->name('logout');

Route::get('/admin/userlist', [AdminController::class, 'userlist'])->name('userlist');
Route::get('/admindash', [RegistrationController::class, 'admindash'])->name('admindash');

//---------------------addmin add---------------------//
Route::get('/addUser', [AdminController::class, 'addUser'])->name('addUser')->middleware('admin');
Route::post('/addUser', [AdminController::class, 'addUserSubmit'])->name('addUser');

//----------------------addmin edit--------------------//
Route::get('/editUser/{id}', [AdminController::class, 'editUser'])->middleware('admin');
Route::post('/editUser', [AdminController::class, 'editUserSubmit'])->name('editUser');

//-----------------------addmin delete-------------------//
Route::get('/deleteUser/{id}', [AdminController::class, 'deleteUser']);
//-----------------------user edit-------------------//
Route::get('/edit/{id}', [RegistrationController::class, 'edit'])->name('edit');

Route::post('/edit', [RegistrationController::class, 'editSubmit'])->name('edit');

Route::get('/user/list', [RegistrationController::class, 'userList'])->name('list');
