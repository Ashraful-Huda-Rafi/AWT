<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\scontroller;


Route::get('/', [scontroller::class, 'index'])->name('home');;
Route::get('/about', [scontroller::class, 'about'])->name('about');
Route::get('/contact', [scontroller::class, 'contact'])->name('contact');
Route::get('/service', [scontroller::class, 'service'])->name('service');
Route::get('/teams', [scontroller::class, 'teams'])->name('ourteams');