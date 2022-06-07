<?php

namespace App\Http\Controllers;

use App\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Kategori $kategori)
    {
        $head = $kategori->display_all;
        $data = $kategori->select($head)->get();
        unset($head[0]);
        $response = [
            'head' => $head,
            'data' => $data,
        ];
        return view('backend.kategori.index', $response);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Kategori $kategori)
    {
        $parents = $kategori->whereNull('parent_id')->get();
        $response = [
            'parents' => $parents,
        ];
        return view('backend.kategori.create', $response);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Kategori $kategori)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->nama);
        $kategori->create($data);
        return redirect()->back()->with('success','Berhasil');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function show(Kategori $kategori)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function edit(Kategori $kategori)
    {
        $parents = $kategori->whereNull('parent_id')->where('id','!=',$kategori->id)->get();
        $response = [
            'parents' => $parents,
            'kategori' => $kategori
        ];
        return view('backend.kategori.edit', $response);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kategori $kategori)
    {
        $data = $request->all();
        if ($kategori->nama != $request->nama) {
            $data['slug'] = Str::slug($request->nama);
        }
        $kategori->update($data);
        return redirect()->back()->with('success','Berhasil');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kategori $kategori)
    {
        $kategori->delete();
        return redirect()->back()->with('success','Berhasil');
    }
}
