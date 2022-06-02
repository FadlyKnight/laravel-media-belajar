<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    protected $guarded = [];
    protected $fillable = [
        'guru_id',
        'siswa_id',
        'total_nilai',
    ];

    protected $display_all = ['siswa_id','total_nilai'];
    
    public function siswa(){
        return $this->belongsTo(User::class,'siswa_id','id')->withDefault();
    }
    
    public function guru(){
        return $this->belongsTo(User::class,'guru_id','id')->withDefault();
    }
    
}
