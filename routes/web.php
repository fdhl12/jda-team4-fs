<?php

use App\Http\Controllers\Admin\BerandaController;
use App\Http\Controllers\Admin\DemografiController;
use App\Http\Controllers\Admin\KategoriDemografiController;
use App\Http\Controllers\Admin\LembagaKelurahanController;
use App\Http\Controllers\Admin\PengaturanController;
use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PerangkatKelurahanController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StrukturOrganisasiController;
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

Route::get('/lembaga-kelurahan', [\App\Http\Controllers\LembagaKelurahanController::class, 'index'])->name('lembaga-kelurahan.index');
Route::get('/perangkat-kelurahan', [PerangkatKelurahanController::class, 'index'])->name('perangkat-kelurahan.index');
Route::get('/struktur-organisasi', [StrukturOrganisasiController::class, 'index'])->name('perangkat-kelurahan.index');

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
    Route::controller(GaleriController::class)->group(function () {
        Route::get('/galeri', 'admin')->name('galeri.index');
        Route::post('/galeri', 'store')->name('galeri.store');
        Route::patch('/galeri/{id}', 'update')->name('galeri.update');
        Route::delete('/galeri/destroy/{id}', 'destroy')->name('galeri.destroy');
    });

    /* informasi kelurahan */
    Route::controller(ProfileController::class)->group(function () {
        Route::get('/profile-kelurahan', 'indexProfile')->name('profile-kelurahan');
        Route::patch('/profile-kelurahan', 'updateProfile')->name('profile-kelurahan.update');

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
    Route::controller(StrukturOrganisasiController::class)->group(function () {
        Route::get('/struktur-organisasi', 'admin')->name('struktur-organisasi.index');
        Route::patch('/struktur-organisasi', 'update')->name('struktur-organisasi.update');
    });

    /* perangkat kelurahan */
    Route::resource('/perangkat-kelurahan', PerangkatKelurahanController::class);

    /* lembaga kelurahan */
    Route::controller(LembagaKelurahanController::class)->group(function (){
        Route::get('/lembaga-kelurahan', 'index')->name('lembaga-kelurahan.index');
        Route::post('/lembaga-kelurahan', 'store')->name('lembaga-kelurahan.store');
        Route::patch('/lembaga-kelurahan/{id}', 'update')->name('lembaga-kelurahan.update');
        Route::delete('/lembaga-kelurahan/{id}', 'destroy')->name('lembaga-kelurahan.destroy');
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
