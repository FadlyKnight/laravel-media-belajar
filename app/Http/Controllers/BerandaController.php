<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function beranda(){
        return view('frontend.home.beranda');
    }

    public function materi(){
        return view('frontend.home.materi');
    }

    public function soal(){
        return view('frontend.home.soal');
    }
}
