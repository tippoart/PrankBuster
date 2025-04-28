<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/masuk', function () {
    return view('masuk'); // tampilkan file resources/views/about.blade.php
});
Route::get('/kelola_tel', function () {
    return view('kelola_tel'); // tampilkan file resources/views/about.blade.php
});
Route::get('/history', function () {
    return view('history'); // tampilkan file resources/views/about.blade.php
});
Route::get('/profile', function () {
    return view('profile'); // tampilkan file resources/views/about.blade.php
});

