<?php

use App\Http\Controllers\rcontroller;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('welcome');
Route::get('register', [rcontroller::class,'create'])->name('register');
Route::post('register', [rcontroller::class, 'authstore']);


Route::post('/welcome', [rcontroller::class, 'store'])->name('login');


Route::get('/logout', [rcontroller::class, 'destroy'])->name('logout');

Route::view('/osn', 'osn')->name('osn');