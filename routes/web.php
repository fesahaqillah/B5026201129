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

Route::get('/', function () {
    return view('welcome');
});

Route::get('praktikum1', function () {
    return view('prak1web');
});

Route::get('tugasempat', function () {
    return view('tugas4');
});

Route::get('praktikum2','ViewController@showPraktikum2');

Route::get('ets2021',"ViewController@showETS") ;

Route::get('tugasphp',"ViewController@showPHP") ;

Route::post('ticket',"ViewController@showticket") ;

//route CRUD
Route::get('/pegawai','PegawaiController@index');
Route::get('/pegawai/tambah','PegawaiController@tambah');
Route::post('/pegawai/store','PegawaiController@store');
Route::get('/pegawai/edit/{id}','PegawaiController@edit');
Route::post('/pegawai/update','PegawaiController@update');
Route::get('/pegawai/hapus/{id}','PegawaiController@hapus');
Route::get('/pegawai/cari','PegawaiController@cari');
Route::get('/pegawai/detail/{id}','PegawaiController@view');

Route::get('/absen','AbsenController@index');
Route::get('/absen/tambah','AbsenController@tambah');
Route::post('/absen/store','AbsenController@store');
Route::get('/absen/edit/{id}','AbsenController@edit');
Route::post('/absen/update','AbsenController@update');
Route::get('/absen/hapus/{id}','AbsenController@hapus');
Route::get('/absen/cari','AbsenController@cari');

Route::get('/kertashvs','kertashvsController@index');
Route::get('/kertashvs/tambah','kertashvsController@tambah');
Route::post('/kertashvs/store','kertashvsController@store');
Route::get('/kertashvs/edit/{id}','kertashvsController@edit');
Route::post('/kertashvs/update','kertashvsController@update');
Route::get('/kertashvs/hapus/{id}','kertashvsController@hapus');
Route::get('/kertashvs/cari','kertashvsController@cari');
Route::get('/kertashvs/detail/{id}','kertashvsController@view');

Route::get('/karyawan1','karyawan1Controller@index');
Route::get('/karyawan1/edit/{id}','karyawan1Controller@edit');
Route::post('/karyawan1/update','karyawan1Controller@update');
Route::get('/karyawan1/detail/{id}','karyawan1Controller@view');
