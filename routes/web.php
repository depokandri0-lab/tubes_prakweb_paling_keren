<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('welcome2', function () {
    return view('welcome.welcome2');

});
Route::get('/home', function () {
    return view('home');
});

Route::get('selamat jalan', function () {
    return view('selamat jalan.selamatjalan2');
});

