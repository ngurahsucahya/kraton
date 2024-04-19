<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

//uji coba
// Route::get('/cahya', function () {return view('home');})->middleware('auth');
// Route::get('/', function () {return view('welcome');});

Route::get('/', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/', [LoginController::class, 'authenticate']); 
Route::get('/login', function () {return view('login');});   
Route::post('/logout', [LoginController::class, 'logout']);  

Route::get('/beranda', function () {return view('beranda');})->middleware('auth');;  