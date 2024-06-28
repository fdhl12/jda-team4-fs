<?php
use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\DemografiController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\GeografisController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\LembagaKelurahanController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PengaturanController;
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

Route::get('/lembaga-kelurahan', [LembagaKelurahanController::class, 'indexUser'])->name('lembaga-kelurahan.index');
Route::get('/lembaga-kelurahan/{id}', [LembagaKelurahanController::class, 'showUser'])->name('lembaga-kelurahan.show');
Route::get('/perangkat-kelurahan', [PerangkatKelurahanController::class, 'indexUser'])->name('perangkat-kelurahan.index');
Route::get('/perangkat-kelurahan/{id}', [PerangkatKelurahanController::class, 'showUser'])->name('perangkat-kelurahan.show');
Route::get('/struktur-organisasi', [StrukturOrganisasiController::class, 'index'])->name('strucktur.index');

Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {

    Route::get('/', [BerandaController::class, 'index'])->name('beranda');
    Route::get('/pengaturan-pengguna', [UserController::class, 'settings'])->name('pengaturan.pengguna');
    // Simpan perubahan data pengguna
    Route::put('/pengaturan-pengguna/update/{id}', [UserController::class, 'updateUser'])->name('pengaturan.pengguna.update');
    Route::post('/pengaturan-pengguna/update/{id}', [UserController::class, 'uploadPhoto'])->name('pengaturan.uploadPhoto');


    /* berita */
    Route::controller(NewsController::class)->group(function () {
        Route::get('/berita', 'index')->name('berita');
        Route::get('/berita/create', 'create')->name('berita.create');
        Route::post('/berita', 'store')->name('berita.store');
        Route::get('/berita/{news}/edit', 'edit')->name('berita.edit');
        Route::patch('/berita/{news}', 'update')->name('berita.update');
        Route::delete('/berita/destroy/{news}', 'destroy')->name('berita.destroy');
        Route::post('/berita/ckeditor', 'ckeditor')->name('berita.ckeditor');
    });

    /* pengumuman */
    Route::controller(AnnouncementController::class)->group(function () {
        Route::get('/pengumuman', 'index')->name('pengumuman');
        Route::get('/pengumuman/create', 'create')->name('pengumuman.create');
        Route::post('/pengumuman', 'store')->name('pengumuman.store');
        Route::get('/pengumuman/{announcement}/edit', 'edit')->name('pengumuman.edit');
        Route::patch('/pengumuman/{announcement}', 'update')->name('pengumuman.update');
        Route::delete('/pengumuman/destroy/{announcement}', 'destroy')->name('pengumuman.destroy');
        Route::post('/pengumuman/ckeditor', 'ckeditor')->name('pengumuman.ckeditor');
    });

    /* gallery */
    Route::controller(GaleriController::class)->group(function () {
        Route::get('/galeri', 'admin')->name('galeri.index');
        Route::post('/galeri', 'store')->name('galeri.store');
        Route::patch('/galeri/{galeri}', 'update')->name('galeri.update');
        Route::delete('/galeri/destroy/{galeri}', 'destroy')->name('galeri.destroy');
    });

    Route::middleware(['role:super admin'])->group(function () {

        /* informasi kelurahan */
        Route::controller(ProfileController::class)->group(function () {
            Route::get('/profile-kelurahan', 'indexProfile')->name('profile-kelurahan');
            Route::patch('/profile-kelurahan', 'updateProfile')->name('profile-kelurahan.update');
        });

        /* geografis */
        Route::controller(GeografisController::class)->group(function () {
            Route::get('/geografis', 'admin')->name('geografis.index');
            Route::patch('/geografis', 'update')->name('geografis.update');
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
        Route::resource('/perangkat-kelurahan', PerangkatKelurahanController::class)->except(['create', 'edit']);


        /* lembaga kelurahan */
        Route::controller(LembagaKelurahanController::class)->group(function () {
            Route::get('/lembaga-kelurahan', 'admin')->name('lembaga-kelurahan.index');
            Route::post('/lembaga-kelurahan', 'store')->name('lembaga-kelurahan.store');
            Route::patch('/lembaga-kelurahan/{lembagaKelurahan}', 'update')->name('lembaga-kelurahan.update');
            Route::delete('/lembaga-kelurahan/{lembagaKelurahan}', 'destroy')->name('lembaga-kelurahan.destroy');
        });

        /* jabatan */
        Route::resource('/jabatan', JabatanController::class)->except(['show', 'create', 'edit']);

        /* layanan */
        Route::controller(LayananController::class)->group(function () {
            Route::get('/layanan', 'admin')->name('layanan.index');
            Route::post('/layanan', 'store')->name('layanan.store');
            Route::patch('/layanan/{layanan}', 'update')->name('layanan.update');
            Route::delete('/layanan/{layanan}', 'destroy')->name('layanan.destroy');
        });


        /* pengaturan */
        Route::controller(PengaturanController::class)->group(function () {
            Route::get('/pengaturan', 'index')->name('pengaturan.index');
            Route::patch('/pengaturan', 'update')->name('pengaturan.update');
            Route::get('/pengaturan-halaman-utama', 'index_home')->name('pengaturan.home.index');
            Route::patch('/pengaturan-halaman-utama', 'update_home')->name('pengaturan.home.update');
        });
    });

    /**
     * user
     */
    Route::resource('/user', UserController::class);

});
