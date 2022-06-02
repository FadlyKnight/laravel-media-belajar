<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Materi extends Model
{
    protected $guarded = [];
    protected $fillable = [
        'guru_id',
        'kategori_id',
        'slug',
        'judul',
        'konten',
        'gambar',
    ];

    public $display_all = ['id','guru_id','kategori_id','judul'];
    
    public function guru(){
        return $this->belongsTo(User::class,'guru_id','id')->withDefault();
    }
    
    public function kategori(){
        return $this->belongsTo(Kategori::class,'kategori_id','id')->withDefault();
    }

}
