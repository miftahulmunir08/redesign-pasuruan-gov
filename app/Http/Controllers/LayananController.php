<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LayananController extends Controller
{
    public function index(Request $request, $slug_layanan)
    {
        $devTitle = $slug_layanan;
        $breadcrumbs = generateSimpleBreadcrumbs($request);
        $devData = collect(config('dummy.layanan'))->where('kategori.slug_kategori', $slug_layanan);

        $data = [
            'devTitle' => $devTitle,
            'breadcrumbs' => $breadcrumbs,
            'devData' => $devData
        ];

        return view('layanan.index', $data);
    }
}
