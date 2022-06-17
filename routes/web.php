<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'BerandaController@beranda')->name('home.beranda');
Route::get('/materi', 'BerandaController@materi')->name('home.materi');
Route::get('/soal', 'BerandaController@soal')->name('home.soal');

Auth::routes();

Route::get('home', 'HomeController@index')->name('home');
// admin & guru
Route::group([ 
    'prefix' => 'manage',
    'as' => 'manage.',
    'middleware' => ['auth','role:guru,admin'] 
], function(){
    Route::resource('user','UserController');
    Route::resource('soal','SoalController');
    Route::resource('nilai','NilaiController');
    Route::resource('jawaban','JawabanController');
    Route::resource('kategori','KategoriController');
    Route::resource('materi','MateriController');
});

Route::group([ 
    'prefix' => 'siswa',
    'as' => 'siswa.', 
    'middleware' => ['auth','role:siswa'] 
], function(){
    Route::get('/', 'SiswaController@home')->name('home');
    Route::get('soal', 'SiswaController@soalShow')->name('soal.show');
    Route::post('soal', 'SiswaController@jawabSoal')->name('soal.jawabSoal');
    Route::get('nilai', 'SiswaController@nilaiShow')->name('nilai.show');
});