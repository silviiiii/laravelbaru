<?php
use App\Mahasiswa;
use App\Dosen;
use App\Hobi;
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

//senin minggu ke 2
Route::get('relasi-1', function() {
    $mhs = App\Mahasiswa::where('nim','=','101010101')->first();

//Menampilkan data wali dari mahasiswa yang dipilih
    return $mhs->wali->nama;
});

Route::get('relasi-2', function() {
     $mhs = App\Mahasiswa::where('nim','=','101010101')->first();

     return $mhs->dosen->nama;
});

Route::get('relasi-3', function() {
    $dosen = Dosen::where('nama','=','Abdul Musthafa')->first();

    //menampilkan seluruh data mahasiswa didikannya
    foreach ($dosen->mahasiswa as $key) {
    	echo "<li> Nama : $key->nama, <strong>$key->nim</strong></li>";
    }
});

Route::get('relasi-4', function() {
    $dadang = Mahasiswa::where('nama','=','Dadang')->first();

    foreach ($dadang->hobi as $key) {
    	echo "<li> $key->hobi </li>";
    }
});

Route::get('relasi-5', function() {
    $dota = Hobi::where('hobi','=','Dota 2')->first();

    foreach ($dota->mahasiswa as $key) {
    	echo "<li> Nama : $key->nama <strong>$key->nim</strong></li>";
    }
});

Route::get('relasi-join', function() {
	// Join Laravel
    //$sql = Mahasiswa::with('wali')->get();

    $sql = DB::table('mahasiswas')
    ->select('mahasiswas.nama','mahasiswas.nim','walis.nama as nama_wali')
    ->join('walis','walis.id_mahasiswa','=','mahasiswas.id')
    ->get();
    dd($sql);
});

Route::get('eloquent', function() {
    $mahasiswa = Mahasiswa::with('wali','dosen','hobi')->get();

    return view('eloquent',compact('mahasiswa'));
});