<?php

namespace App\Http\Controllers;

use App\Models\DaftarNilai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Hash;

use DB;

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

    public function leaderboard()
    {
        $leaderboard = DaftarNilai::select('id_user', DB::raw('SUM(nilai) as total_nilai'))
            ->groupBy('id_user')
            ->with('user:id,name,kelas') 
            ->orderBy('total_nilai', 'desc')
            ->get();

        return view('leaderboard', compact('leaderboard'));
    }

    public function edit()
    {
        $user = Auth::user();
        return view('edit', compact('user'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . Auth::id(),
            'kelas' => 'required|string|max:255',
            'tanggal_lahir' => 'required|date',
            'password' => 'nullable|string|min:8|confirmed',
            'profile_photo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $user = Auth::user();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->kelas = $request->kelas;
        $user->tanggal_lahir = $request->tanggal_lahir;

        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
        }

        // if ($request->hasFile('profile_photo')) {
        //     $profilePhotoPath = $request->file('profile_photo')->store('profile_photos', 'public');
        //     $user->profile_photo_path = $profilePhotoPath;
        // }

        if ($request->hasFile('profile_photo_path')) {
            $file = $request->file('profile_photo_path');
            
            
            $nama_user = str_replace(' ', '_', $user->name); // Ganti spasi dengan underscore jika ada
            $tanggal_upload = date('Ymd_His'); // Format tanggal dan jam
            $fileName = $nama_user . 'utama' .'_' . $tanggal_upload . '.' . $file->getClientOriginalExtension();
            // Move the uploaded file to the desired folder (e.g., storage/app/images)
            $file->move(public_path('images/profil/'), $fileName);
    
            // Save the file name in the database
            $user->profile_photo_path = $fileName;
        }

        $user->save();

        return redirect()->route('profile.show')->with('success', 'Profil berhasil diubah');
}

}