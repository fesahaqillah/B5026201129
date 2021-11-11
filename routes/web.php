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
