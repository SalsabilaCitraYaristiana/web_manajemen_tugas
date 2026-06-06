<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('index');


Route::get('/about', function () {
    return view('about');
})->name('about');

// Route::get('/fitur', function () {
//     return view('index');
// })->name('fitur');


// Route::get('/login', function () {
//     return "Halaman Login (Belum dibuat)";
// })->name('login');

// Route::get('/register', function () {
//     return "Halaman Register (Belum dibuat)";
// })->name('register');
