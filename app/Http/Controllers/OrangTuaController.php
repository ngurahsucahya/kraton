<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class OrangTuaController extends Controller
{
    /**
     * Display the dashboard for Orang Tua.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Retrieve the authenticated Orang Tua user
        $orangTua = auth()->user();

        // Retrieve the children of the Orang Tua
        $anakAnak = User::where('email_orang_tua', $orangTua->email)->get();

        // Retrieve the nilai for each child
        $nilaiAnak = [];
        foreach ($anakAnak as $anak) {
            $nilaiAnak[$anak->name] = $anak->nilaiAnak()->get();
        }

        // Return the dashboard view with the nilai of anak-anak
        return view('orangtua.dashboardOrangTua', compact('nilaiAnak'));
    }
}
