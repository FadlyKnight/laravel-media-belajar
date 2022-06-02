<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use App\Kategori;
use App\Materi;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class MateriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Materi $materi)
    {
        $head = $materi->display_all;
        $data = $materi->select($head)->get();
        unset($head[0]);
        $response = [
            'head' => $head,
            'data' => $data,
        ];
        return view('backend.materi.index', $response);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $response = [
            'kategoris' => Kategori::all(),
        ];
        return view('backend.materi.create', $response);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Helper $helper)
    {
        $setData = [
            'guru_id' => auth()->id ?? '1',
            'kategori_id' => $request->kategori_id, 
            'slug' => Str::slug($request->judul.'-'.Str::random(6)),
            'judul' => $request->judul,
            'konten' => $request->konten
        ];
        if ($request->hasFile('gambar')) {
            $setData['gambar'] = $helper->uploadFile($request->gambar, 'upload');
        }
        Materi::create($setData);
        return redirect()->route('manage.materi.index')->with('success', 'Berhasil');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Materi  $materi
     * @return \Illuminate\Http\Response
     */
    public function show(Materi $materi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Materi  $materi
     * @return \Illuminate\Http\Response
     */
    public function edit(Materi $materi)
    {
        $response = [
            'materi' => $materi,
            'kategoris' => Kategori::all(),
        ];
        return view('backend.materi.edit', $response);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Materi  $materi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Materi $materi, Helper $helper)
    {
        $setData = [
            'guru_id' => auth()->id ?? '1',
            'kategori_id' => $request->kategori_id, 
            'konten' => $request->konten
        ];
        
        if ($materi->judul != $request->judul) {
            $setData['judul'] = $request->judul;
            $setData['slug'] = Str::slug($request->judul.'-'.Str::random(6));
        }

        if ($request->hasFile('gambar')) {
            $setData['gambar'] = $helper->uploadFile($request->gambar, 'upload');
            $helper->deleteFile($materi->gambar);
        }

        $materi->update($setData);
        return redirect()->route('manage.materi.index')->with('success', 'Berhasil');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Materi  $materi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Materi $materi)
    {
        $materi->delete();
        return redirect()->route('manage.materi.index')->with('success', 'Berhasil');
    }
}
