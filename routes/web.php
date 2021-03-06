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
Route::get('/pegawai/cari','PegawaiController@cari');
Route::get('/pegawai/detail/{id}','PegawaiController@view');

Route::get('/mutasi','MutasiController@index');
Route::get('/mutasi/tambah','MutasiController@tambah');
Route::post('/mutasi/store','MutasiController@store');
Route::get('/mutasi/edit/{id}','MutasiController@edit');
Route::post('/mutasi/update','MutasiController@update');
Route::get('/mutasi/hapus/{id}','MutasiController@hapus');
Route::get('/mutasi/cari','MutasiController@cari');
Route::get('/pegawai/detail/{id}','PegawaiController@view');

Route::get('/absen','AbsenController@index');
Route::get('/absen/tambah','AbsenController@tambah');
Route::post('/absen/store','AbsenController@store');
Route::get('/absen/edit/{id}','AbsenController@edit');
Route::post('/absen/update','AbsenController@update');
Route::get('/absen/hapus/{id}','AbsenController@hapus');

Route::get('/masker','MaskerController@index');
Route::get('/masker/tambah','MaskerController@tambah');
Route::post('/masker/store','MaskerController@store');
Route::get('/masker/edit/{kodemasker}','MaskerController@edit');
Route::post('/masker/update','MaskerController@update');
Route::get('/masker/hapus/{kodemasker}','MaskerController@hapus');
Route::get('/masker/cari','MaskerController@cari');
Route::get('/masker/detail/{kodemasker}','MaskerController@view');

Route::get('/karyawan1','Karyawan1Controller@index');
Route::get('/karyawan1/tambah','Karyawan1Controller@tambah');
Route::post('/karyawan1/store','Karyawan1Controller@store');
Route::get('/karyawan1/edit/{NIP}','Karyawan1Controller@edit');
Route::post('/karyawan1/update','Karyawan1Controller@update');
Route::get('/karyawan1/hapus/{NIP}','Karyawan1Controller@hapus');
Route::get('/karyawan1/cari','Karyawan1Controller@cari');
Route::get('/karyawan1/detail/{NIP}','Karyawan1Controller@view');
