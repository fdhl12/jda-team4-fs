<?php

<<<<<<< HEAD
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
=======
use App\Models\Jabatan;
use App\Models\PerangkatDesa;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\PerangkatDesaController;
>>>>>>> c9d26ba9df8dedf1fd243370c004ca8b338bad20

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

<<<<<<< HEAD
    Route::get('/', function (){
       return view('admin.beranda.index');
    })->name('beranda');

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

        Route::get('/demografi', 'indexDemografi')->name('demografi');
        Route::post('/demografi', 'createDemografi')->name('demografi.store');
        Route::patch('/demografi/{id}', 'updateDemografi')->name('demografi.update');
        Route::delete('/demografi', 'destroyDemografi')->name('demografi.destroy');

        Route::post('/demografi_kategori/{id}', 'createDemografiKategori')->name('demografi.store');
        Route::patch('/demografi_kategori/{id}', 'updateDemografiKategori')->name('demografi.update');
        Route::delete('/demografi_kategori', 'destroyDemografiKategori')->name('demografi.destroy');
    });
=======
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
>>>>>>> c9d26ba9df8dedf1fd243370c004ca8b338bad20

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

<<<<<<< HEAD

    /* user */
    Route::get('/user', function (){
        return view('admin.user.index');
    })->name('user');

=======
    /* gallery*/
    Route::get('gallery', function () {
        return view('admin.gallery.index');
    })->name('gallery');

    /* profile desa */
    Route::get('/profile-desa', function () {
        return view('admin.profile-desa.index');
    })->name('profile-desa');
>>>>>>> c9d26ba9df8dedf1fd243370c004ca8b338bad20
});
