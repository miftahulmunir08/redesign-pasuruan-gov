<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    /**
     * Menampilkan halaman landing.
     */
    public function index_landing()
    {
        return view('landing/index');
    }

    public function profile()
    {
        return view('landing/profile');
    }

    public function kontak()
    {
        return view('landing/kontak');
    }

    public function aplikasi()
    {
        return view('landing/aplikasi');
    }
}
