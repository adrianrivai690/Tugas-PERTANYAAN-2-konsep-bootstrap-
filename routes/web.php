<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route for the assignment demo (Bootstrap frames)
Route::get('/tugas', function () {
    return view('tugas');
});
