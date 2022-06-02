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

// admin & guru
Route::group([ 'prefix' => 'manage','as' => 'manage.'], function(){
    Route::resource('user','UserController');
    Route::resource('soal','SoalController');
    Route::resource('nilai','NilaiController');
    Route::resource('jawaban','JawabanController');
    Route::resource('kategori','KategoriController');
    Route::resource('materi','MateriController');
});