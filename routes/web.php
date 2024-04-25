<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CekJawabanController;
use App\Http\Controllers\FinishController;

//uji coba
// Route::get('/cahya', function () {return view('home');})->middleware('auth');
// Route::get('/', function () {return view('welcome');});
// Route::get('/login', function () {return view('login');});  
// Route::get('/pengetahuan-umum', function () {return view('pengetahuanUmum');})->middleware('auth'); 

Route::get('/', function () {return view('pilihmapel');});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']); 
Route::post('/logout', [LoginController::class, 'logout']);  

Route::get('/beranda', function () {return view('beranda');})->middleware('auth');
Route::get('/pilihmapel', function () {return view('pilihmapel');});

Route::get('/matematika', function () {return view('matematika');})->middleware('auth');
Route::get('/ipa', function () {return view('ipa');})->middleware('auth');

Route::get('/ranking', function () {return view('rangking');})->middleware('auth');

Route::get('/pengetahuan-umum', [CekJawabanController::class, 'pengetahuanUmum'])->middleware('auth');
Route::post('check-first', [CekJawabanController::class, 'store']);
Route::view('/quiz', 'quiz')->name("quiz.start");
Route::get('finish', [FinishController::class, 'index'])->name('finish');

Route::get('/selesai', function() {
    if(session()->has('time') && session()->has('pertanyaan')) {
        session()->forget(['time', 'pertanyaan', 'finished']); 
        return redirect('/')->with('success', 'Kuis selesai.'); 
    } else {
        return redirect('/')->with('error', 'Tidak ada kuis yang sedang berlangsung.'); 
    }
})->name('selesai');

Route::get('/pilih', function () {return view('testing');});
Route::get('/coba', function () {return view('tes');});
Route::get('/pilihan', function () {return view('pilihbidang');});