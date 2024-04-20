<?php

namespace App\Http\Controllers;

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
}
