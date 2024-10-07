<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home'); // Menambahkan nama untuk rute home

Route::get('/app', function () {
    return view('app');
})->name('app'); // Menambahkan nama untuk rute app

Route::get('/about', function () {
    return view('about'); 
})->name('about'); // Menambahkan nama untuk rute about

Route::get('/blog', function () {
    return view('blog');  
})->name('blog'); // Menambahkan nama untuk rute blog

Route::get('/services', function () {
    return view('services');
})->name('services'); // Menambahkan nama untuk rute services
