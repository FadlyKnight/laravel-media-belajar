<?php

namespace App\Http\Controllers;

use App\Kategori;
use App\Materi;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function beranda(){
        return view('frontend.home.beranda');
    }

    public function materi($kategori_id){
        $kategori = Kategori::find($kategori_id);
        $materis = Materi::select("id","guru_id","kategori_id","gambar","slug","judul","created_at")
                    ->with('guru','kategori')
                    ->where('kategori_id',$kategori_id)->get();
        return view('frontend.home.materi', compact('materis','kategori'));
    }

    public function materiShow($slug){
        $materi = Materi::with('guru','kategori')->where('slug',$slug)->firstOrFail();
        return view('frontend.home.materi-detail', compact('materi'));
    }

    // public function soal(){
    //     // return view('frontend.home.soal');
    // }
}
