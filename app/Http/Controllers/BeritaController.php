<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function index(Request $request)
    {
        $breadcrumbs = generateSimpleBreadcrumbs($request);
        $devTitle = "Berita";
        $devIndex = "Terbaru";
        $devData = collect(config('dummy.berita'));

        $data = [
            'breadcrumbs' => $breadcrumbs,
            'devTitle' => $devTitle,
            'devIndex' => $devIndex,
            'devData' => $devData
        ];

        return view('berita.index', $data);
    }

    public function detail(Request $request, $slug_berita)
    {
        $devData = collect(config('dummy.berita'))->where('slug_posts', $slug_berita)->first();
        $breadcrumbs = generateParentBreadcrumb($request);

        $data = [
            'devData' => $devData,
            'breadcrumbs' => $breadcrumbs,
        ];

        return view('berita.detail', $data);
    }
}
