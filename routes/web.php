<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware([])->group(function (){

    Route::get('/admin', function (){
       return view('admin.dashboard');
    })->name('admin.dashboard');

    Route::get('/admin/form', function (){
        return view('admin.form');
    })->name('admin.form');

    Route::get('/admin/table', function (){
        return view('admin.table');
    })->name('admin.table');

    Route::get('/admin/tabs', function (){
        return view('admin.tabs');
    })->name('admin.tabs');

    Route::get('/admin/wysiwyg', function (){
        return view('admin.wysiwyg');
    })->name('admin.wysiwyg');

});