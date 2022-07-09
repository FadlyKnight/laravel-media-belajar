<?php

namespace App\Http\Controllers;

use App\Materi;
use App\Nilai;
use App\Soal;
use App\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $my_id = auth()->user()->id;
        $total_materi = Materi::query(); 
        $total_soal = Soal::query();
        $total_siswa = User::where('role','siswa');
        if (auth()->user()->role == 'guru') {
            $total_materi->where('guru_id', $my_id);
            $total_soal->where('guru_id', $my_id);
        }

        $response = [
            'total_materi' => $total_materi->count(), 
            'total_soal' => $total_soal->count(), 
            'total_siswa' => $total_siswa->count(), 
            'nilai_siswa' => User::where('role','siswa')->select('id','name')->with([
                'nilaiSiswa' =>  function($e){
                    return $e->orderBy('total_nilai','desc');
                }
            ])->get()
        ];
        return view('backend.dashboard.index', $response);
    }
}
