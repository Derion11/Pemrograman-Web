<?php

use Illuminate\Support\Facades\Route;

//sintak: Route::<jenisMethod>[<alamatUrl>, <prosesYgAkanDijalankan>]

Route::get('/', function () {
    return view('welcome');
});

//kita akan buat http://pemrograman-web-b.test/hello
Route::get('/hello', function() {
    return "Apa kabar dunia";
});
Route::get('/belajar', function() {
    echo '<h1>Apa kabar dunia</h1>';
    echo 'tetap asik.....';
});
Route::get('/belajar/laravel', function() {
    echo '<h1>Apa kabar dunia laravel</h1>';
    echo 'belajar laravel tetap asik.....';
});
Route::get('/biodata/{namadepan}/{namabelakang}', function($namadepan, $namabelakang) {
    return "<h1>Apa kabar dunia laravel</h1>
            Selamat belajar $namadepan $namabelakang";
});