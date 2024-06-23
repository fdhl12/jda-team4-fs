<?php

use App\Http\Controllers\Admin\BerandaController;
use App\Http\Controllers\Admin\DemografiController;
use App\Http\Controllers\Admin\KategoriDemografiController;
use App\Http\Controllers\Admin\PengaturanController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\PerangkatDesaController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

    Route::get('/', [BerandaController::class, 'index'])->name('beranda');

    /* berita & pengumuman */
    Route::controller(ArticleController::class)->group(function (){
        Route::get('/berita', 'indexAdminBerita')->name('berita');
        Route::get('/berita/create', 'createBerita')->name('berita.create');
        Route::post('/berita', 'store')->name('berita.store');
        Route::get('/berita/{id}/edit', 'editBerita')->name('berita.edit');
        Route::patch('/berita/{id}/update', 'update')->name('berita.update');
        Route::delete('/berita/destroy', 'destroy')->name('berita.destroy');
        Route::post('/berita/ckeditor', 'ckeditor')->name('berita.ckeditor');

        /* pengumuman */
        Route::get('/pengumuman', 'indexAdminPengumuman')->name('pengumuman');
        Route::get('/pengumuman/create', 'createPengumuman')->name('pengumuman.create');
        Route::post('/pengumuman', 'storePengumuman')->name('pengumuman.store');
        Route::get('/pengumuman/{id}/edit', 'editPengumuman')->name('pengumuman.edit');
        Route::patch('/pengumuman/{id}/update', 'updatePengumuman')->name('pengumuman.update');
        Route::delete('/pengumuman/destroy', 'destroyPengumuman')->name('pengumuman.destroy');
        Route::post('/pengumuman/ckeditor', 'ckeditor')->name('pengumuman.ckeditor');

    });

    /* gallery */
    Route::controller(GalleryController::class)->group(function (){
        Route::get('/galeri', 'indexAdmin')->name('galeri');
        Route::post('/galeri', 'store')->name('galeri.store');
        Route::patch('/galeri', 'update')->name('galeri.update');
        Route::delete('/galeri/destroy', 'update')->name('galeri.destroy');
    });

    /* informasi desa */
    Route::controller(ProfileController::class)->group(function (){
        Route::get('/profile-desa', 'indexProfile')->name('profile-desa');
        Route::patch('/profile-desa', 'updateProfile')->name('profile-desa.update');

        Route::get('/geografis', 'indexGeografis')->name('geografis');
        Route::patch('/geografis', 'updateGeografis')->name('geografis.update');
    });

    /* demografi */
    Route::controller(DemografiController::class)->group(function (){
        Route::get('/demografi', 'index')->name('demografi.index');
        Route::post('/demografi', 'store')->name('demografi.store');
        Route::patch('/demografi/{id}', 'update')->name('demografi.update');
        Route::delete('/demografi/{id}', 'destroy')->name('demografi.destroy');
    });

    /* kategori demografi */
    Route::controller(KategoriDemografiController::class)->group(function (){
        Route::get('/kategori-demografi', 'index')->name('kategori-demografi.index');
        Route::post('/kategori-demografi', 'store')->name('kategori-demografi.store');
        Route::patch('/kategori-demografi/{id}', 'update')->name('kategori-demografi.update');
        Route::delete('/kategori-demografi/{id}', 'destroy')->name('kategori-demografi.destroy');
    });

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

    /**
     * user
     */
    Route::resource('/user', UserController::class);

    /* pengaturan */
    Route::controller(PengaturanController::class)->group(function (){
        Route::get('/pengaturan', 'index')->name('pengaturan.index');
        Route::patch('/pengaturan', 'update')->name('pengaturan.update');
    });
});
