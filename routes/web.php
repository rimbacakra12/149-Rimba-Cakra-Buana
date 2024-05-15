<?php

use Illuminate\Http\Request;

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/books', function () {
    return view('books');
})->name('books');

Route::get('/writers', function () {
    return view('writers');
});

Route::get('/community', function () {
    return view('community');
});

Route::get('/headerAdmin', function () {
    return view('headerAdmin');
});