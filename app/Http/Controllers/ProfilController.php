<?php

namespace App\Http\Controllers;

use App\Models\DaftarNilai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class ProfilController extends Controller
{
    public function show()
    {
        $user = Auth::user();
        return view('profil', compact('user'));
    }

    public function riwayatPengetahuanUmum($id_user)
    {
        $nilai = DaftarNilai::where('id_user', $id_user)->paginate(10);
        return view('riwayat', ['nilai' => $nilai]);
    }

}
