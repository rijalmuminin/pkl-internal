<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//route basic

Route::get('about', function(){
    return 'ini halaman about';
});

Route::get('profile', function(){
    return view('profile');
});

// route parameter

Route::get('produk/{$namaProduk}', function($p){
    return 'saya membeli '. $p;
});

Route::get('kategori/{$namaKategori}', function($kategori){
    // return view('kategori', compact('kategori'));
    return view('kategori', ['kat' => $kategori]);
});

// route optional parameters
Route::get('search/{keyword?}', function($keyword = null){
    return view('search', compact ('keyword'));
}); 

Route::get('promo/{barang?}/{kode?}', function($barang = null, $kode = null){
    return view('promo', compact ('barang', 'kode'));
}); 

// import controller
use App\Http\Controllers\MyController;

Route::get ('/', function (){
    return view('welcome');
});

// route buku
Route::get ('buku', [MyController::class, 'index']);

// tambah buku
Route::get ('buku/create', [MyController::class, 'create']);
Route::post ('buku', [MyController::class, 'store']);   
// show buku
Route::get ('buku/{id}', [MyController::class, 'show']);

// edit $ update
Route::get ('buku/{id}/edit', [MyController::class, 'edit']);
Route::put ('buku/{id}/', [MyController::class, 'update']);

// delete
Route::delete ('buku/{id}/', [MyController::class, 'destroy']);
