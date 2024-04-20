<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CekJawabanController;
use App\Http\Controllers\FinishController;

//uji coba
// Route::get('/cahya', function () {return view('home');})->middleware('auth');
// Route::get('/', function () {return view('welcome');});

Route::get('/', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']); 
Route::get('/login', function () {return view('login');});   
Route::post('/logout', [LoginController::class, 'logout']);  

Route::get('/beranda', function () {return view('beranda');})->middleware('auth');
Route::get('/pilihmapel', function () {return view('pilihmapel');})->middleware('auth');

Route::get('/pengetahuan-umum', function () {return view('pengetahuanUmum');})->middleware('auth');
Route::get('/matematika', function () {return view('matematika');})->middleware('auth');
Route::get('/ipa', function () {return view('ipa');})->middleware('auth');

Route::get('/ranking', function () {return view('rangking');})->middleware('auth');


Route::get('/bringThem', [CekJawabanController::class, 'bringThem']);

Route::post('check-first', [CekJawabanController::class, 'store']);
Route::view('/quiz', 'quiz')->name("quiz.start");
Route::get('finish', [FinishController::class, 'index'])->name('finish');

Route::get('/selesai', function() {
    if(session()->has('time') && session()->has('pertanyaan')) {
        session()->forget(['time', 'pertanyaan', 'finished']); // Menghapus kunci sesi terkait kuis
        return redirect('/')->with('success', 'Kuis selesai.'); // Arahkan ke halaman utama dengan pesan sukses
    } else {
        return redirect('/')->with('error', 'Tidak ada kuis yang sedang berlangsung.'); // Arahkan ke halaman utama dengan pesan error jika tidak ada kuis yang sedang berlangsung
    }
})->name('selesai');
