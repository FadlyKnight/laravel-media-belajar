<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email','role', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public $display_all = ['id','name', 'email','role'];

    public function soal(){
        return $this->hasMany(Soal::class,'soal_id','id');
    }
    
    public function nilaiSiswa(){
        return $this->hasOne(Nilai::class,'siswa_id','id')->withDefault();
    }
    
    // public function guru(){
    //     return $this->hasMany(User::class,'guru_id','id');
    // }
    

}
