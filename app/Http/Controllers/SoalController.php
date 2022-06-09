<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use App\Materi;
use App\Soal;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SoalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Soal $soal)
    {
        $head = $soal->display_all;
        $data = $soal->select($head)->get();
        unset($head[0]);
        $response = [
            'head' => $head,
            'data' => $data,
        ];
        return view('backend.soal.index', $response);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $response = [
            'materis' => Materi::all(),
        ];
        return view('backend.soal.create', $response);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Helper $helper)
    {
        $setData = $request->all();
        $setData['guru_id'] = auth()->id ?? '1';
        if ($request->hasFile('gambar')) {
            $setData['gambar'] = $helper->uploadFile($request->gambar, 'soal');
        }
        Soal::create($setData);
        return redirect()->route('manage.soal.index')->with('success', 'Berhasil');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Soal  $soal
     * @return \Illuminate\Http\Response
     */
    public function show(Soal $soal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Soal  $soal
     * @return \Illuminate\Http\Response
     */
    public function edit(Soal $soal)
    {
        $response = [
            'soal' => $soal,
            'materis' => Materi::all(),
        ];
        return view('backend.soal.edit', $response);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Soal  $soal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Soal $soal, Helper $helper)
    {
        $setData = $request->all();
        $setData['guru_id'] = auth()->id ?? '1';
        if ($request->hasFile('gambar')) {
            $setData['gambar'] = $helper->uploadFile($request->gambar, 'soal');
        }
        $soal->update($setData);
        return redirect()->route('manage.soal.index')->with('success', 'Berhasil');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Soal  $soal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Soal $soal)
    {
        $soal->delete();
        return redirect()->route('manage.soal.index')->with('success', 'Berhasil');
    }
}
