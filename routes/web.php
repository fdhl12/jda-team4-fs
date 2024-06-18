<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController as WebArticleController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/berita', function () {
    return view('berita');
})->name('berita');

Route::get('/galeri', function () {
    return view('galeri');
})->name('galeri');

Route::get('/kontak', function () {
    return view('kontak');
})->name('kontak');

