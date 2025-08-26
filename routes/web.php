<?php

use App\Http\Controllers\HomepageController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\PemerintahanController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/layanan', [LandingController::class, 'index_landing']);
Route::get('/layanan/profile', [LandingController::class, 'profile']);
Route::get('/layanan/kontak', [LandingController::class, 'kontak']);
Route::get('/layanan/aplikasi', [LandingController::class, 'aplikasi']);
Route::get('/home', [HomepageController::class, 'index']);
Route::get('/potensi/pariwisata', [PostController::class, 'postsList']);
Route::get('/pemerintahan/bupati', [PemerintahanController::class, 'bupati']);
Route::get('/pemerintahan/lembaga-legislatif', [PemerintahanController::class, 'legislatif']);
