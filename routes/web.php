<?php

use App\Http\Controllers\HomepageController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\PemerintahanController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomepageController::class, 'index']);
Route::get('/layanan', [LandingController::class, 'index_landing']);
Route::get('/layanan/profile', [LandingController::class, 'profile']);
Route::get('/layanan/kontak', [LandingController::class, 'kontak']);
Route::get('/layanan/aplikasi', [LandingController::class, 'aplikasi']);
Route::get('/home', [HomepageController::class, 'index']);

Route::prefix('postingan')->group(function () {
    // Route::get('/postingan', "LandingPostinganController@postingan");
    // Route::get('/postingan/{slug_kategori?}', "LandingPostinganController@postingan");
    Route::get('/{tipe_kategori?}/{slug_kategori?}', [PostController::class, 'post_list']);
    Route::get('/postingan/{tipe_kategori?}/{slug_kategori?}/{slug_posts?}', "LandingPostinganController@detail");
});

// Profil pakai group profil
Route::prefix('profil')->group(function () {
    Route::redirect('/pemerintahan', '/pemerintahan/bupati-wakil-bupati');
    Route::redirect('/gambaran-umum', '/gambaran-umum/gambaran-umum-kabupaten-pasuruan-2025');
    Route::get("/{slug_posts}", [PostController::class], 'post-detail');
    Route::prefix('pemerintahan')->group(function () {
        Route::get('/bupati-wakil-bupati', [PemerintahanController::class, 'bupati']);
        Route::get('/lembaga-eksekutif', [PemerintahanController::class, 'lembaga']);
        Route::get('/lembaga-legislatif', [PemerintahanController::class, 'lembaga']);
    });
});
// Redirect for no page routes
