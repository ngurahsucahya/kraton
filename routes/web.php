<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\CekJawabanController;
use App\Http\Controllers\FinishController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\OrangTuaController;



//uji coba
// Route::get('/cahya', function () {return view('home');})->middleware('auth');
// Route::get('/', function () {return view('welcome');});
// Route::get('/login', function () {return view('login');});  
// Route::get('/pengetahuan-umum', function () {return view('pengetahuanUmum');})->middleware('auth'); 

Route::get('/', function () {return view('beranda');})->middleware('guest');

// Route::get('/home', function () {return view('pilihmapel');})->middleware('auth');

Route::get('/home', function () {

    $role = Auth::check() ? Auth::user()->role : null;
    if ($role === 'Admin') {
    //    return view('admin.berandaAdmin');
        return redirect()->route('admin.dashboard');
    } elseif ($role === 'Siswa') {
         return view('pilihmapel');
    } elseif ($role === 'Orang Tua') {
         return redirect()->route('dashboardOrangTua');
    } else {
        return redirect()->route('login');
    }
})->middleware('auth');

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']); 
Route::post('/logout', [LoginController::class, 'logout']);  

Route::get('/beranda', function () {return view('beranda');})->middleware('auth');
// Route::get('/pilihmapel', function () {return view('pilihmapel');});

Route::get('/matematika', function () {return view('matematika');})->middleware('auth');
Route::get('/ipa', function () {return view('ipa');})->middleware('auth');

Route::get('/ranking', function () {return view('rangking');})->middleware('auth');

Route::get('/kuistrial', [CekJawabanController::class, 'kuisTrial'])->middleware('guest');

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

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/index', function () {return view('index');});
Route::get('/profile', [ProfilController::class, 'show'])->middleware('auth')->name('profile.show');

//ADMIN DASHBOARD
Route::get('/admin-dashboard', [AdminController::class, 'showDashboard'])->name('admin.dashboard')->middleware('auth');
Route::get('/admin', function () {
    $role = Auth::check() ? Auth::user()->role : null;
    if ($role === 'Admin') {
        return redirect()->route('admin.dashboard');
    } elseif ($role === 'Siswa') {
         return view('404');
    } else {
        return redirect()->route('login');
    }
})->middleware('auth');

Route::get('/lihat-semua-users', [AdminController::class, 'lihatSemuaUsers'])->name('admin.user.list')->middleware('auth');
Route::get('/semua-users', function () {
    $role = Auth::check() ? Auth::user()->role : null;
    if ($role === 'Admin') {
        return redirect()->route('admin.user.list');
    } elseif ($role === 'Siswa') {
         return view('404');
    } else {
        return redirect()->route('login');
    }
})->middleware('auth');

Route::get('/lihat-pertanyaan-umum', [AdminController::class, 'lihatSemuaPertanyaanUmum'])->name('admin.pertanyaanUmum.list')->middleware('auth');
Route::get('/semua-pertanyaanUmum', function () {
    $role = Auth::check() ? Auth::user()->role : null;
    if ($role === 'Admin') {
        return redirect()->route('admin.pertanyaanUmum.list');
    } elseif ($role === 'Siswa') {
         return view('404');
    } else {
        return redirect()->route('login');
    }
})->middleware('auth');

Route::delete('/delete-user/{id}', [AdminController::class, 'delete'])->middleware('auth');

Route::delete('/delete-pertanyaan-umum/{id}', [AdminController::class, 'deletePertanyaanUmum'])->middleware('auth');

Route::post('/tambah-pertanyaanUmum', [AdminController::class, 'tambahPertanyaanUmum'])->name('admin.tambah.pertanyaanUmum')->middleware('auth');

Route::get('/admin-tambah-pertanyaanUmum', function () {return view('admin.tambahPertanyaanUmum');})->middleware('auth');

Route::post('/simpan-nilai', [FinishController::class, 'simpanNilai']);

Route::get('/riwayat/{id_user}', [ProfilController::class, 'riwayatPengetahuanUmum'])->name('riwayat.pengetahuan');

 Route::get('/dashboard-orang-tua', [OrangTuaController::class, 'index'])->name('dashboardOrangTua');

 Route::get('/leaderboard', function () {return view('leaderboard');});
 