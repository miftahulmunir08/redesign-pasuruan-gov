<?php

use App\Http\Controllers\HomepageController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\PemerintahanController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', [LandingController::class, 'index_landing']);
Route::get('/home', [HomepageController::class, 'index']);
Route::get('/potensi/pariwisata', [PostController::class, 'postsList']);
Route::get('/pemerintahan/bupati', [PemerintahanController::class, 'bupati']);
Route::get('/pemerintahan/lembaga-legislatif', [PemerintahanController::class, 'legislatif']);


