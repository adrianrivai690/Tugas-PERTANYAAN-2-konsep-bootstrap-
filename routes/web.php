<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route for the assignment demo (Bootstrap frames)
Route::get('/tugas', function () {
    return view('tugas');
});

// Route for Soal Nomor 3 (DOM manipulation)
Route::get('/tugas3', function () {
    return view('tugas3');
});
