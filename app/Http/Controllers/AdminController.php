<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\PertanyaanUmum;

class AdminController extends Controller
{
    public function showDashboard()
    {
        if (auth()->user()->role !== 'Admin') {
            abort(404, 'Unauthorized');
        }
        // Mengambil jumlah pengguna (users)
        $userCount = User::count();

        // Mengambil jumlah pertanyaan (questions)
        $questionCount = PertanyaanUmum::countPertanyaan();

        // Mengirimkan data ke view
        return view('admin.berandaAdmin', compact('userCount', 'questionCount'));
    }

    public function lihatSemuaUsers()
    {
        if (auth()->user()->role !== 'Admin') {
            abort(404, 'Unauthorized');
        }
        // Mengambil daftar semua pengguna (users)
        $users = User::all();

        // Mengirimkan data ke view
        return view('admin.daftarUser', compact('users'));
    }

    
    public function lihatSemuaPertanyaanUmum()
    {
         if (auth()->user()->role !== 'Admin') {
            abort(404, 'Unauthorized');
        }
        $pertanyaanUmum = PertanyaanUmum::all(); 
        return view('admin.daftarPertanyaanUmum', compact('pertanyaanUmum')); 
    }

    public function deletePertanyaanUmum($id)
    {
        if (auth()->user()->role !== 'Admin') {
            abort(404, 'Unauthorized');
        }
        $pertanyaanUmum = PertanyaanUmum::find($id);
        if (!$pertanyaanUmum) {
            return response()->json(['success' => false, 'message' => 'Pertanyaaan umum tidak ditemukan'], 404);
        }
        $pertanyaanUmum->delete();
        return response()->json(['success' => true, 'message' => 'Pertanyaan umum berhasil dihapus']);
    }
    
    public function delete($id)
    {
        if (auth()->user()->role !== 'Admin') {
            abort(404, 'Unauthorized');
        }
        $user = User::find($id);
        if (!$user) {
            return response()->json(['success' => false, 'message' => 'Pengguna tidak ditemukan'], 404);
        }
        $user->delete();
        return response()->json(['success' => true, 'message' => 'Pengguna berhasil dihapus']);
    }
}
