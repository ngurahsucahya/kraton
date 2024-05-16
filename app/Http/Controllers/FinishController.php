<?php

namespace App\Http\Controllers;
use App\Models\DaftarNilai;
use Illuminate\Http\Request;

class FinishController extends Controller
{
    public function index(Request $request){

    if(request()->session()->has('time') && request()->session()->has('pertanyaan')){
    session(['finished' => true]);
    return view('finish', ['last' => request()->session()->get("pertanyaan"), 'request' => $request]);
    }else{
    return redirect('/bringThem');
    }

    }

    public function simpanNilai(Request $request)
    {
        // Validasi permintaan jika diperlukan
        $request->validate([
            'id_user' => 'required',
            'nilai' => 'required|string',
            'mata_pelajaran' => 'required|string'
        ]);

        // Simpan data nilai ke dalam tabel daftar_nilai
        DaftarNilai::create([
            'id_user' => $request->id_user,
            'nilai' => $request->nilai,
            'mata_pelajaran' => $request->mata_pelajaran
        ]);

        return response()->json(['message' => 'Nilai berhasil disimpan'], 200);
    }
}
