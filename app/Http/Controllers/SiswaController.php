<?php

namespace App\Http\Controllers;

use App\Materi;
use App\Nilai;
use App\Soal;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function home(){
        $nilai = auth()->user()->nilaiSiswa;
        $response = [
            'nilais' => $nilai,
            'users' => auth()->user()
        ];
        return view('backend.siswa.profile', $response);
    }
    public function soalShow(){
        // $soals = $soal->select($soal->display_siswa)->with('materi')->get();
        $response = [
            'materis' => Materi::select('judul','id')->whereHas('soal')->with('soal')->get(),
        ];
        return view('backend.siswa.soal', $response);
    }
    public function jawabSoal(Request $request, Soal $soal){
        $jawaban = $request->except('_token');
        
        $benar = 0;
        $salah = 0;

        $total_soal = $soal->count();
        $history = [];
        $soal_dijawab = [];
        foreach ($jawaban as $id_jawab => $j) {
            $temp_history = [];
            $benar_salah = '-';

            $id_soal = str_replace('jawab_','',$id_jawab);
            if ($soal->find($id_soal)->kunci == $j) {
                $benar++;
                $benar_salah = '1';
            } else {
                $salah++;
                $benar_salah = '0';
            }
            $temp_history['soal_id'] = $id_soal;
            $temp_history['jawaban'] = $benar_salah;
            $history[] = $temp_history;
            $soal_dijawab[] = $id_soal;
        }
        
        $tidak_jawab = $soal->whereNotIn('id',$soal_dijawab)->select('id')->get();
        foreach ($tidak_jawab as $key => $value) {
            $temp_history['soal_id'] = $value;
            $temp_history['jawaban'] = '-';
            $history[] = $temp_history;
        }

        $tidak_jawab = count($tidak_jawab);
        $nilai = ($benar * 10);

        Nilai::create([
            'siswa_id' => auth()->user()->id,
            'total_nilai' => $nilai,
            'total_benar' => $benar,
            'total_salah' => $salah,
            'total_tidak_jawab' => $tidak_jawab,
            'history' => json_encode($history),
        ]);

        return redirect()->route('siswa.home')->with('success','Selesai');
    }

    public function nilaiShow(){
        
    }
}
