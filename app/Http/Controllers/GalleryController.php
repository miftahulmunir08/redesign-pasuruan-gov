<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function images(Request $request)
    {
        $devTitle = "Galeri Gambar";
        $breadcrumbs = generateSimpleBreadcrumbs($request);
        $devData = collect(config('dummy.galeri'));

        $data = [
            'devTitle' => $devTitle,
            'breadcrumbs' => $breadcrumbs,
            'devData' => $devData,
        ];

        return view('gallery.images', $data);
    }

    public function videos()
    {
        return view('gallery.images');
    }
}
