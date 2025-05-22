<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/produk', function () {
    return view('produk');
});

Route::get('/detail', function () {
    return view('detail');
});

Route::get('/profil', function () {
    return view('profil');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/signup', function () {
    return view('signup');



});
Route::get('/login', function () {
    return view('login');
});

Route::get('/signup', function () {
    return view('signup');
});
Route::get('/keranjang', function () {
    return view('keranjang');
});
Route::get('/riwayat', function () {
    return view('riwayat');
});
Route::get('/bantuan', function () {
    return view('bantuan');
});
