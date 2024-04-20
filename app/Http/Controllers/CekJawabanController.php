<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CekJawabanController extends Controller
{
    public function bringThem(){

        if(request()->session()->has('time') && request()->session()->has('pertanyaan')){
            $pertanyaan = DB::table('pertanyaan_umum')
                ->limit(request()->session()->get("pertanyaan"))
                ->simplePaginate(1);

            foreach($pertanyaan as $pertanyaan){
                if(request()->session()->has($pertanyaan->id)){
                }else{
                    session([$pertanyaan->id => $pertanyaan->jawbaanBenar]);
                }

            }

            return view('welcome', [
                'pertanyaan' => $pertanyaan
            ]);
        }else{
            return view('pilihmapel');
        }
    }

    public function store(Request $request)
    {
        $request->validate([
            'time' => 'required|numeric|min:15|max:120',
            'pertanyaan' => 'required|numeric|min:1|max:10',
        ]);


        session(['time' => $request->input('time'), 'pertanyaan' => $request->input('pertanyaan')]);

        return redirect('/');
    }
}



