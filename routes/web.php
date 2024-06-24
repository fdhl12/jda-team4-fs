<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\PerangkatDesaController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Admin\BerandaController;
use App\Http\Controllers\Admin\DemografiController;
use App\Http\Controllers\Admin\KategoriDemografiController;
use App\Http\Controllers\Admin\LembagaDesaController;
use App\Http\Controllers\Admin\PengaturanController;

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

Route::get('/tentang', function () {
    return view('tentang');
})->name('tentang');

Route::get('/visimisi', function () {
    return view('visimisi');
})->name('visimisi');

Route::get('/sejarah', function () {
    return view('sejarah');
})->name('sejarah');

Route::get('/geografi', function () {
    return view('geografi');
})->name('geografi');

Route::get('/demografi', function () {
    return view('demografi');
})->name('demografi');

Route::get('/galeri', function () {
    return view('galeri');
})->name('galeri');

Route::get('/kontak', function () {
    return view('kontak');
})->name('kontak');

Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {

    Route::get('/', [BerandaController::class, 'index'])->name('beranda');

    /* berita & pengumuman */
    Route::controller(NewsController::class)->group(function () {
        Route::get('/berita', 'index')->name('berita');
        Route::get('/berita/create', 'create')->name('berita.create');
        Route::post('/berita', 'store')->name('berita.store');
        Route::get('/berita/{id}/edit', 'edit')->name('berita.edit');
        Route::patch('/berita/{id}/update', 'update')->name('berita.update');
        Route::delete('/berita/destroy', 'destroy')->name('berita.destroy');
        Route::post('/berita/ckeditor', 'ckeditor')->name('berita.ckeditor');
    });
    Route::controller(AnnouncementController::class)->group(function () {
        /* pengumuman */
        Route::get('/pengumuman', 'index')->name('pengumuman');
        Route::get('/pengumuman/create', 'create')->name('pengumuman.create');
        Route::post('/pengumuman', 'store')->name('pengumuman.store');
        Route::get('/pengumuman/{id}/edit', 'edit')->name('pengumuman.edit');
        Route::patch('/pengumuman/{id}/update', 'update')->name('pengumuman.update');
        Route::delete('/pengumuman/destroy', 'destroy')->name('pengumuman.destroy');
        Route::post('/pengumuman/ckeditor', 'ckeditor')->name('pengumuman.ckeditor');
    });

    /* gallery */
    Route::controller(GalleryController::class)->group(function () {
        Route::get('/galeri', 'indexAdmin')->name('galeri');
        Route::post('/galeri', 'store')->name('galeri.store');
        Route::patch('/galeri', 'update')->name('galeri.update');
        Route::delete('/galeri/destroy', 'update')->name('galeri.destroy');
    });

    /* informasi desa */
    Route::controller(ProfileController::class)->group(function () {
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
    Route::controller(LembagaDesaController::class)->group(function (){
        Route::get('/lembaga-desa', 'index')->name('lembaga-desa.index');
        Route::post('/lembaga-desa', 'store')->name('lembaga-desa.store');
        Route::patch('/lembaga-desa/{id}', 'update')->name('lembaga-desa.update');
        Route::delete('/lembaga-desa/{id}', 'destroy')->name('lembaga-desa.destroy');
    });

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
