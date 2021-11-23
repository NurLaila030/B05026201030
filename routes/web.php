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

Route::get('praktikum2','ViewController@showPraktikum2');

Route::get('ets','ViewController@showEts');

Route::get('show','ViewController@showForm');
Route::post('faktorial','ViewController@hitungFaktorial');

//route CRUD
Route::get('/pegawai','PegawaiController@index');
Route::get('/pegawai/tambah','PegawaiController@tambah');
Route::post('/pegawai/store','PegawaiController@store');
Route::get('/pegawai/edit/{id}','PegawaiController@edit');
Route::post('/pegawai/update','PegawaiController@update');
Route::get('/pegawai/hapus/{id}','PegawaiController@hapus');

Route::get('/mutasi','MutasiController@index');
Route::get('/mutasi/tambah','MutasiController@tambah');
Route::post('/mutasi/store','MutasiController@store');
Route::get('/mutasi/edit/{id}','MutasiController@edit');
Route::post('/mutasi/update','MutasiController@update');
Route::get('/mutasi/hapus/{id}','MutasiController@hapus');

Route::get('/mutasi1','Mutasi1Controller@index');
Route::get('/mutasi1/tambah','Mutasi1Controller@tambah');
Route::post('/mutasi1/store','Mutasi1Controller@store');
Route::get('/mutasi1/edit/{id}','Mutasi1Controller@edit');
Route::post('/mutasi1/update','Mutasi1Controller@update');
Route::get('/mutasi1/hapus/{id}','Mutasi1Controller@hapus');
