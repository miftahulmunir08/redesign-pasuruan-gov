<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    /**
     * Menampilkan halaman landing.
     */
    function index()
    {
        $visi = "Pasuruan maju makmur manteb!";
        $devBannerUtama = [
            [
                'id_banner'          => 1,
                'nama_banner'        => 'Inovasi Teknologi untuk Masa Depan',
                'url_youtube'        => 'https://www.youtube.com/watch?v=sBfvNf_iA4c',
                'background_image_url' => 'https://images.pexels.com/photos/3184418/pexels-photo-3184418.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'
            ],
            [
                'id_banner'          => 2,
                'nama_banner'        => 'Solusi Digital Terbaik untuk Bisnis Anda',
                'url_youtube'        => 'https://www.youtube.com/watch?v=zCLOJ9j1k20',
                'background_image_url' => 'https://images.pexels.com/photos/3183197/pexels-photo-3183197.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'
            ],
            [
                'id_banner'          => 5,
                'nama_banner'        => 'Promo Spesial: Diskon Hingga 50%!',
                'url_youtube'        => 'https://www.youtube.com/watch?v=h3cWA7l4SAI',
                'background_image_url' => 'https://images.pexels.com/photos/590016/pexels-photo-590016.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'
            ]
        ];

        // Mengirim data ke view 'landing.index'
        return view('index', compact('visi', 'devBannerUtama'));
    }

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
