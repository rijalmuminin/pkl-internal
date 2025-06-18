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
