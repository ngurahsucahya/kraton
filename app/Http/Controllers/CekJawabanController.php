<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class CekJawabanController extends Controller
{
    public function pengetahuanUmum(){

        if(request()->session()->has('time') && request()->session()->has('pertanyaan')){
            $pertanyaan = DB::table('pertanyaan_umum')
                ->inRandomOrder()
                ->limit(request()->session()->get("pertanyaan"))
                ->simplePaginate(1);

            foreach($pertanyaan as $item){
                if(request()->session()->has($item->id)){
                }else{
                    session([$item->id => $item->jawabanBenar]);
                }

            }

            return view('pengetahuanUmum', [
                'pertanyaan' => $pertanyaan
            ]);
        }else{
            return view('pengetahuanUmum');
        }
    }

    public function store(Request $request)
    {
        $request->validate([
            'time' => 'required|numeric|min:15|max:120',
            'pertanyaan' => 'required|numeric|min:1|max:10',
        ]);


        session(['time' => $request->input('time'), 'pertanyaan' => $request->input('pertanyaan')]);

        return redirect('/pengetahuan-umum');
    }
}



