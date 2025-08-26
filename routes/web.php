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

Route::get('/potensi/pariwisata', [PostController::class, 'postsList']);
Route::get('/pemerintahan/bupati', [PemerintahanController::class, 'bupati']);
Route::get('/pemerintahan/lembaga-legislatif', [PemerintahanController::class, 'legislatif']);

Route::get('/halaman/arti-lambang', [ProfileController::class, 'arti_lambang']);
Route::get('/halaman/peta-pasuruan', [ProfileController::class, 'peta_pasuruan']);
Route::get('/halaman/visi-misi', [ProfileController::class, 'visi_misi']);
