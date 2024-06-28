<?php

use App\Http\Controllers\Admin\BerandaController;
use App\Http\Controllers\Admin\KategoriDemografiController;
use App\Http\Controllers\Admin\LembagaKelurahanController;
use App\Http\Controllers\Admin\PengaturanController;
use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\DemografiController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\LembagaKelurahanController as LembagaKelurahanUser;
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

Route::get('/', [HomeController::class, 'index'])->name('home');

// berita
Route::get('/berita', [NewsController::class, 'indexUser'])->name('berita');
Route::get('/berita/{slug}', [NewsController::class, 'show'])->name('show.berita');

// pengumuman
Route::get('/pengumuman', [AnnouncementController::class, 'indexUser'])->name('pengumuman');
Route::get('/pengumuman/{slug}', [AnnouncementController::class, 'show'])->name('show.pengumuman');

Route::controller(ProfileController::class)->group(function () {
    Route::get('/tentang', 'tentang')->name('tentang');
    Route::get('/visimisi', 'visimisi')->name('visimisi');
    Route::get('/sejarah', 'sejarah')->name('sejarah');
    Route::get('/geografi', 'geografi')->name('geografi');
    Route::get('/kontak', 'kontak')->name('kontak');
});

Route::get('/demografi', [DemografiController::class, 'index'])->name('demografi');

Route::get('/galeri', [GaleriController::class, 'index'])->name('galeri');

Route::get('/layanan', [LayananController::class, 'index'])->name('layanan');


Route::get('/lembaga-kelurahan', [LembagaKelurahanUser::class, 'indexUser'])->name('lembaga-kelurahan.index');
Route::get('/lembaga-kelurahan/{id}', [LembagaKelurahanUser::class, 'showUser'])->name('lembaga-kelurahan.show');
Route::get('/perangkat-kelurahan', [PerangkatKelurahanController::class, 'indexUser'])->name('perangkat-kelurahan.index');
Route::get('/perangkat-kelurahan/{id}', [PerangkatKelurahanController::class, 'showUser'])->name('perangkat-kelurahan.show');
Route::get('/struktur-organisasi', [StrukturOrganisasiController::class, 'index'])->name('strucktur.index');

Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {



    Route::get('/', [BerandaController::class, 'index'])->name('beranda');
    Route::get('/pengaturan-pengguna', [UserController::class, 'settings'])->name('pengaturan.pengguna');
    // Simpan perubahan data pengguna
    Route::put('/pengaturan-pengguna/update/{id}', [UserController::class, 'updateUser'])->name('pengaturan.pengguna.update');
    Route::post('/pengaturan-pengguna/update/{id}', [UserController::class, 'uploadPhoto'])->name('pengaturan.uploadPhoto');


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

    Route::middleware(['role:super admin'])->group(function () {
        /* informasi kelurahan */
        Route::controller(ProfileController::class)->group(function () {
            Route::get('/profile-kelurahan', 'indexProfile')->name('profile-kelurahan');
            Route::patch('/profile-kelurahan', 'updateProfile')->name('profile-kelurahan.update');

            Route::get('/geografis', 'indexGeografis')->name('geografis');
            Route::patch('/geografis', 'updateGeografis')->name('geografis.update');
        });

        /* demografi */
        Route::controller(DemografiController::class)->group(function () {
            Route::get('/demografi', 'admin')->name('demografi.index');
            Route::patch('/demografi', 'update')->name('demografi.update');
            Route::post('/demografi/ckeditor', 'ckeditor')->name('demografi.ckeditor');
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
        Route::controller(LembagaKelurahanController::class)->group(function () {
            Route::get('/lembaga-kelurahan', 'index')->name('lembaga-kelurahan.index');
            Route::post('/lembaga-kelurahan', 'store')->name('lembaga-kelurahan.store');
            Route::patch('/lembaga-kelurahan/{id}', 'update')->name('lembaga-kelurahan.update');
            Route::delete('/lembaga-kelurahan/{id}', 'destroy')->name('lembaga-kelurahan.destroy');
        });

        /* jabatan */
        Route::resource('/jabatan', JabatanController::class);

        /* layanan */
        Route::controller(LayananController::class)->group(function () {
            Route::get('/layanan', 'admin')->name('layanan.index');
            Route::post('/layanan', 'store')->name('layanan.store');
            Route::patch('/layanan/{id}', 'update')->name('layanan.update');
            Route::delete('/layanan/{id}', 'destroy')->name('layanan.destroy');
        });

        /**
         * user
         */
        Route::resource('/user', UserController::class);

        /* pengaturan */
        Route::controller(PengaturanController::class)->group(function () {
            Route::get('/pengaturan', 'index')->name('pengaturan.index');
            Route::patch('/pengaturan', 'update')->name('pengaturan.update');
        });
    });
});
