<?php

use App\Http\Controllers\rcontroller;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('welcome')->middleware('guest');
Route::get('register', [rcontroller::class,'create'])->name('register');
Route::post('register', [rcontroller::class, 'authstore']);


Route::post('/welcome', [rcontroller::class, 'store'])->name('login');


Route::get('/logout', [rcontroller::class, 'destroy'])->name('logout');

Route::view('/osn', 'osn')->name('osn')->middleware('auth');
Route::get('/osn', [rcontroller::class,'showAllUsers']);


Route::view('/profile', 'profile')->name('profile')->middleware('auth');
Route::get('/profile', [rcontroller::class, 'profileindex'])->name('user.profile');
Route::post('/profile', [rcontroller::class, 'profilestore'])->name('user.profile.store');


Route::view('/friend', 'friend')->name('friend')->middleware('auth');
Route::get('/friend', [rcontroller::class,'friendindex'])->name('friendindex')->middleware('auth');

Route::get('/friend/add/{username}', [rcontroller::class,'getadd'])->name('friend.add')->middleware('auth');
Route::get('/friend/accept/{username}', [rcontroller::class,'getaccept'])->name('friend.accept')->middleware('auth');
Route::post('/friend/delete/{username}', [rcontroller::class,'postdelete'])->name('friend.delete')->middleware('auth');

Route::get('/user/{username}',[rcontroller::class,'getprofile'])->name('profile.index');


Route::view('/friends', 'friends')->name('friends')->middleware('auth');
Route::get('/search', [rcontroller::class,'getresults'])->name('search.results');



Route::get('/chat', [rcontroller::class,'chatindex'])->name('chat');
Route::post('/send-message', [rcontroller::class,'sendMessage'])->name('send-message');