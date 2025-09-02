<?php

use App\Http\Controllers\HomepageController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SumberDayaController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomepageController::class, 'index']);
Route::get('/kontak', [LandingController::class, 'kontak']);

Route::prefix('digital')->group(function () {
    Route::get('/', [LandingController::class, 'index_landing']);
    Route::get('/profile', [LandingController::class, 'profile']);
    Route::get('/aplikasi', [LandingController::class, 'aplikasi']);
    Route::get('/kontak', [LandingController::class, 'kontak']);
});


Route::prefix('postingan')->group(function () {
    // Route::get('/postingan', "LandingPostinganController@postingan");
    // Route::get('/postingan/{slug_kategori?}', "LandingPostinganController@postingan");
    Route::get('/{tipe_kategori?}/{slug_kategori?}', [PostController::class, 'post_list']);
    Route::get('/postingan/{tipe_kategori?}/{slug_kategori?}/{slug_posts?}', "LandingPostinganController@detail");
});

// Nav profil
Route::prefix('profil')->group(function () {
    Route::redirect('/pemerintahan', '/pemerintahan/bupati-wakil-bupati');
    Route::redirect('/gambaran-umum', '/gambaran-umum/gambaran-umum-kabupaten-pasuruan-2025');

    // Arti lambang, visi misi, sejarah
    Route::get('/{slug_post}', [ProfilController::class, 'detailPost']);

    Route::prefix('pemerintahan')->group(function () {
        Route::get('/bupati-wakil-bupati', [ProfilController::class, 'bupati']);
        Route::get('/lembaga-eksekutif', [ProfilController::class, 'lembaga']);
        Route::get('/lembaga-legislatif', [ProfilController::class, 'lembaga']);
    });

    Route::prefix('gambaran-umum')->group(function () {
        Route::get('/{slug_post}', [ProfilController::class, 'detailPost']);
    });

    // Route::prefix('halaman')->group(function () {
    //     Route::get('/peta-pasuruan', [ProfileController::class, 'peta_pasuruan']);
    //     Route::get('/visi-misi', [ProfileController::class, 'visi_misi']);
    // });
});

Route::prefix('layanan')->group(function () {
    Route::get('/{slug_layanan}', [LayananController::class, 'index']);
});

Route::prefix('sumber-daya')->group(function () {
    Route::get('/transparansi', [SumberDayaController::class, 'transparansi']);
    Route::get('/download', [SumberDayaController::class, 'download']);
    Route::get('/agenda', [SumberDayaController::class, 'agenda']);
    Route::get('/majalah', [SumberDayaController::class, 'majalah']);
});

Route::redirect('/sumber-daya', '/');
