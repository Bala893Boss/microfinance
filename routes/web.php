<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

// Route::get('/', function () {
//     return view('welcome');
// });


#login
Route::get('/', [LoginController::class,'viewLoginform'])->name('home');
Route::post('/userlogin', [LoginController::class,'authenticate'])->name('userlogin');
Route::get('/logout', [LoginController::class,'logout'])->name('logout');



#register user
Route::view('/signup', 'signup.register')->name('signup');
Route::post('/userstore', [RegisterController::class,'store'])->name('registerpost');
Route::view('/dashboard', 'dashboard.dashboard')->name('dashboard');
