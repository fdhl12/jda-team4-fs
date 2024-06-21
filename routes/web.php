<?php

use App\Models\Jabatan;
use App\Models\PerangkatDesa;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\PerangkatDesaController;

Auth::routes([
    'register' => false,
]);

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

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

Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {

    Route::get('/', function () {
        return view('admin.dashboard');
    })->name('dashboard');

    /* user */
    // Route::get('/user', function () {
    //     return view('admin.user.index');
    // })->name('user');

    /* berita */
    Route::get('/berita', [ArticleController::class, 'indexAdmin'])->name('berita');

    Route::get('/berita/create', function () {
        return view('admin.berita.create');
    })->name('berita.create');

    Route::post('/berita', function () {
        /*dd(request()->all());*/
        return redirect()->route('admin.berita')->with('store', 'Berita berhasil dibuat...');
    })->name('berita.store');

    Route::get('/berita/{id}/edit', function () {
        return view('admin.berita.edit');
    })->name('berita.edit');

    Route::patch('/berita/update', function () {
        /*dd(request()->all());*/
        return redirect()->route('admin.berita')->with('update', 'Berita berhasil diubah...');
    })->name('berita.update');

    Route::delete('/berita/destroy', function () {
        /*dd(request()->post('id'));*/
        return redirect()->back()->with('delete', 'Berita berhasil dihapus...');
    })->name('berita.destroy');

    /* pengumuman */
    Route::get('/pengumuman', function () {
        return view('admin.pengumuman.index');
    })->name('pengumuman');

    Route::get('/pengumuman/create', function () {
        return view('admin.pengumuman.create');
    })->name('pengumuman.create');

    Route::get('/pengumuman/{id}/edit', function () {
        return view('admin.pengumuman.edit');
    })->name('pengumuman.edit');

    /**
     * user 
     */
    Route::resource('/user', UserController::class);

    /**
     * pemerintahan
     */

    /* struktur-organisasi */
    Route::get('/struktur-organisasi', function () {
        return view('admin.struktur-organisasi.index');
    })->name('struktur-organisasi');

    /* perangkat desa */
    Route::resource('/perangkat-desa', PerangkatDesaController::class);

    /* lembaga desa */
    Route::get('/lembaga-desa', function () {
        return view('admin.lembaga-desa.index');
    })->name('lembaga-desa');

    /* jabatan */
    Route::resource('/jabatan', JabatanController::class);

    /* gallery*/
    Route::get('gallery', function () {
        return view('admin.gallery.index');
    })->name('gallery');

    /* profile desa */
    Route::get('/profile-desa', function () {
        return view('admin.profile-desa.index');
    })->name('profile-desa');
});
