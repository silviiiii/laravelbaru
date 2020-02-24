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

//route one to one
Route::get('relasi-1', function () {
 $mhs = mahasiswa::where('nim','=','101000')->first();
 return $mhs->wali->nama;
});
Route::get('relasi-2', function () {
    $mhs = mahasiswa::where('nim','=','101000')->first();
    return $mhs->dosen->nama;
   });
   Route::get('relasi-3', function () {
    $dosen = dosen::where('nama','=','abdul')->first();
    foreach( $dosen->mahasiswa as $temp)
    echo '<li> Nama : ' .$temp->nama .
    '<strong>' .$temp->nim .'</strong></li>';
   });
