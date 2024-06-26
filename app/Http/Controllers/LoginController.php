<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
   public function index()
   {
    return view('login', [
        'title' => 'login'
    ]);
   }

   public function authenticate(Request $request)
   {
    $credentials = $request->validate([
        'username' => ['required'],
        'password' => ['required'],
    ]);

    if (Auth::attempt($credentials)) {
        $request->session()->regenerate();

        return redirect()->intended('/home');
    }

    return back()->withErrors([
        'username' => 'Data tidak sesuai.',
    ])->onlyInput('email');
    // dd('Berhasil Login!');
   }

   public function logout(Request $request): RedirectResponse
   {
    Auth::logout();
 
    $request->session()->invalidate();
 
    $request->session()->regenerateToken();
 
    return redirect('/');
   }
}
