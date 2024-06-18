<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Auth::routes([
    'register' => false,
]);

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function (){

    Route::get('/', function (){
       return view('admin.dashboard');
    })->name('dashboard');

    /* user */
    Route::get('/user', function (){
        return view('admin.user.index');
    })->name('user');

    /* berita */
    Route::get('/berita', function (){
        return view('admin.berita.index');
    })->name('berita');

    Route::get('/berita/create', function (){
        return view('admin.berita.create');
    })->name('berita.create');

    Route::post('/berita', function (){
        /*dd(request()->all());*/
        return redirect()->route('admin.berita')->with('store', 'Berita berhasil dibuat...');
    })->name('berita.store');

    Route::get('/berita/{id}/edit', function (){
        return view('admin.berita.edit');
    })->name('berita.edit');

    Route::patch('/berita/update', function (){
        /*dd(request()->all());*/
        return redirect()->route('admin.berita')->with('update', 'Berita berhasil diubah...');
    })->name('berita.update');

    Route::delete('/berita/destroy', function (){
        /*dd(request()->post('id'));*/
        return redirect()->back()->with('delete', 'Berita berhasil dihapus...');
    })->name('berita.destroy');

    /* pengumuman */
    Route::get('/pengumuman', function (){
        return view('admin.pengumuman.index');
    })->name('pengumuman');

    Route::get('/pengumuman/create', function (){
        return view('admin.pengumuman.create');
    })->name('pengumuman.create');

    Route::get('/pengumuman/{id}/edit', function (){
        return view('admin.pengumuman.edit');
    })->name('pengumuman.edit');


    /**
     * pemerintahan
     */

    /* struktur-organisasi */
    Route::get('/struktur-organisasi', function (){
        return view('admin.struktur-organisasi.index');
    })->name('struktur-organisasi');

    /* perangkat desa */
    Route::get('/perangkat-desa', function (){
        return view('admin.perangkat-desa.index');
    })->name('perangkat-desa');

    /* lembaga desa */
    Route::get('/lembaga-desa', function (){
        return view('admin.lembaga-desa.index');
    })->name('lembaga-desa');

    /* jabatan */
    Route::get('/jabatan', function (){
        return view('admin.jabatan.index');
    })->name('jabatan');

    /* gallery*/
    Route::get('gallery', function (){
        return view('admin.gallery.index');
    })->name('gallery');

    /* profile desa */
    Route::get('/profile-desa', function (){
        return view('admin.profile-desa.index');
    })->name('profile-desa');


});
