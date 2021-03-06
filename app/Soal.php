<?php

namespace App;

use App\Traits\DisplayFormTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Soal extends Model
{
    use DisplayFormTrait;

    protected $guarded = [];
    protected $fillable = [
        "materi_id", "guru_id", "gambar", "pertanyaan",
        "kunci", "opsi_a", "opsi_b",
        "opsi_c", "opsi_d",
    ];

    public $rules = [
        "materi_id" => ["exists:materis,id","required"],
        "guru_id" => ["exists:users,id","required"],
        "gambar" => ["file","size:2024","mimes:jpg,bmp,png,webp,jpeg","nullable"],
        "pertanyaan" => ["string","required"],
        "kunci" => ["starts_with:opsi_","string","required"],
        "opsi_a" => ["string","required"],
        "opsi_b" => ["string","required"],
        "opsi_c" => ["string","required"],
        "opsi_d" => ["string","required"],
    ];

    
    public $display_all = ['id','guru_id','pertanyaan','kunci'];
    public $display_siswa = [
        'id','materi_id','pertanyaan','gambar', 
        'opsi_a','opsi_b','opsi_c','opsi_d',
    ];

    public function guru(){
        return $this->belongsTo(User::class,'guru_id','id')->withDefault();
    }
    
    public function materi(){
        return $this->belongsTo(Materi::class,'materi_id','id')->withDefault();
    }
    

}
