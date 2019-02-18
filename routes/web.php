<?php

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

//jurusan
Route::get('/jurusan', 'JurusanController@index');

Route::get('/data-jurusan', 'JurusanController@datajurusan');

Route::POST('/tambah-jurusan','JurusanController@tambahjurusan');


//role

Route::get('/role', 'RoleController@index');

Route::get('/data-role', 'RoleController@create');

Route::POST('/tambah-role','RoleController@store');


//matkul

Route::get('/matkul', 'MatkulController@index');

Route::get('/data-matkul', 'MatkulController@create');

Route::POST('/tambah-matkul','MatkulController@store');

//pengguna

Route::get('/pengguna', 'PenggunaController@index');

Route::get('/data-pengguna', 'PenggunaController@create');

Route::POST('/tambah-pengguna','PenggunaController@store');

//Quote

Route::get('/', 'QuoteController@login');

Route::get('/quote', 'QuoteController@index');

Route::get('/data-quote', 'QuoteController@create');

Route::POST('/tambah-quote','QuoteController@store');


// kelas

Route::get('/kelas', function(){
	return view('kelas.kelas');
});

Route::get('/kelas/informasi', function(){
	return view('kelas.informasi');
});

Route::get('/kelas/mahasiswa', function(){
	return view('kelas.mahasiswa');
});

Route::get('/kelas/kuis', function(){
	return view('kelas.kuis');
});

Route::get('/kelas/kuis/{id}', function($id){
	return view('kelas.list_kuis', ['id' => $id]);
});

Route::get('/kelas/materi', function(){
	return view('kelas.materi');
});

Route::get('/kelas/materi/{id}', function($id){
	return view('kelas.list_materi', ['id' => $id]);
});

Route::get('/kelas/materi/{id}/{materi}', function($id, $materi){
	return view('kelas.list_materi', ['id'=>$id, 'materi' => $materi]);
});


Route::get('/kelas/tentang', function(){
	return view('kelas.tentang');
});


// File Manager

Route::get('/file_manager', function(){
	return view('file_manager.index');
});