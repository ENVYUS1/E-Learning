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

// kelas

// Route::get('/kelas', function(){
// 	return view('kelas.kelas');
// });



// Route::get('/kelas/mahasiswa', function(){
// 	return view('kelas.mahasiswa');
// });

// Route::get('/kelas/kuis', function(){
// 	return view('kelas.kuis');
// });

// Route::get('/kelas/kuis/{id}', function($id){
// 	return view('kelas.list_kuis', ['id' => $id]);
// });


// Route::get('/kelas/materi/{id}', function($id){
// 	return view('kelas.list_materi', ['id' => $id]);
// });

// Route::get('/kelas/materi/{id}/{materi}', function($id, $materi){
// 	return view('kelas.list_materi', ['id'=>$id, 'materi' => $materi]);
// });


// Route::get('/kelas/tentang', function(){
// 	return view('kelas.tentang');
// });

// // File Manager
// Route::get('/file_manager', function(){
// 	return view('file_manager.index');
// });


Route::group(['middleware' => ['guest']], function ()
{
	Route::get('/', 'AuthController@showLogin');

	Route::post('/', 'AuthController@doLogin');

	Route::get('reset-password', 'AuthController@resetPassword');

	Route::post('reset-password', 'AuthController@processPasswordReset');
});

// Route::group(['middleware' => ['auth']], function ()
// {
	//jurusan
	Route::get('/jurusan', 'JurusanController@index');

	Route::get('/data-jurusan', 'JurusanController@datajurusan');

	Route::POST('/tambah-jurusan','JurusanController@tambahjurusan');

	//logout
	Route::get('logout', 'AuthController@doLogout');


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

	// Materi
	// Route::get('/materi', 'MateriController@index');

	// Route::get('/data-materi', 'MateriController@create');

	// Route::POST('/tambah-materi','MateriController@store');


	//kelas admin
	Route::get('/kelas', 'KelasController@index');

	Route::get('/data-kelas', 'KelasController@create');

	Route::POST('/tambah-kelas','KelasController@store');

	Route::get('/kelas/informasi','KelasController@informasi');

	Route::get('/kelas/informasi/{id}','KelasController@informasi');

	Route::get('/kelas/{id}', 'KelasController@materi');

	Route::get('/kelas/materi/{id}', 'KelasController@materi');

	//mahsiswa
	Route::get('/mahasiswa', 'MhsController@index');

	Route::get('/data-mahasiswa', 'MhsController@create');

	Route::POST('/tambah-mahasiswa','MhsController@store');


	//Grup Kelas
	Route::get('/grupkelas', 'GrupkelasController@index');

	Route::get('/data-grupkelas', 'GrupkelasController@create');

	Route::POST('/tambah-grupkelas','GrupkelasController@store');


	//soal
	Route::get('/soal', 'SoalController@index');

	Route::get('/data-soal', 'SoalController@create');

	Route::POST('/tambah-soal','SoalController@store');

	//materi
	Route::get('/materi', 'MateriController@index');

	Route::get('/data-materi', 'MateriController@create');

	Route::POST('/tambah-materi','MateriController@store');

	Route::POST('/show-materi','MateriController@show');


	//Quote
	Route::get('/', 'QuoteController@login');

	Route::get('/quote', 'QuoteController@index');

	Route::get('/data-quote', 'QuoteController@create');

	Route::POST('/tambah-quote','QuoteController@store');
// });