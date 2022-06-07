<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Kategori extends Model
{
    // use HasFactory;
    
    protected $guarded = [];
    protected $fillable = [
        'parent_id',
        'nama',
        'slug',
    ];

    public $display_all = ['id','nama','parent_id','slug'];

    public function parent(){
        return $this->belongsTo(Kategori::class,'parent_id','id')->withDefault(['nama' => '-']);
    }

    public function materi()
    {
        return $this->hasMany(Materi::class,'kategori_id','id');
    }
    
}
