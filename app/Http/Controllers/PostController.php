<?php

namespace App\Http\Controllers;

use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function postList(Request $request, $tipe_kategori = 'potensi', $slug_kategori = 'prestasi')
    {


        // dd($tipe_kategori);
        // die;


        if ($tipe_kategori == "fasilitas") {
            $devLis = collect([
                (object)['slug_kategori' => 'kesehatan', 'nama_kategori' => 'Kesehatan'],
                (object)['slug_kategori' => 'pendidikan', 'nama_kategori' => 'Pendidikan'],
                (object)['slug_kategori' => 'pasar-daerah', 'nama_kategori' => 'Pasar Daerah'],
                (object)['slug_kategori' => 'pdam', 'nama_kategori' => 'PDAM'],
                (object)['slug_kategori' => 'perhubungan', 'nama_kategori' => 'Perhubungan'],
                (object)['slug_kategori' => 'perpustakaan', 'nama_kategori' => 'Perpustakaan'],
            ]);

            $filteredData = collect(config('dummy.fasilitasPosts'))
                ->where('kategori.slug_kategori', $slug_kategori);
        } else {
            $devLis = collect([
                (object)['slug_kategori' => 'prestasi', 'nama_kategori' => 'Prestasi'],
                (object)['slug_kategori' => 'pariwisata', 'nama_kategori' => 'Pariwisata'],
                (object)['slug_kategori' => 'industri', 'nama_kategori' => 'Industri'],
            ]);

            $filteredData = collect(config('dummy.potensiPosts'))
                ->where('kategori.slug_kategori', $slug_kategori);
        }


        $perPage = 12;
        $currentPage = Paginator::resolveCurrentPage('page');

        $currentPageItems = $filteredData->slice(($currentPage - 1) * $perPage, $perPage)->all();

        $devData = new LengthAwarePaginator(
            $currentPageItems,
            $filteredData->count(),
            $perPage,
            $currentPage,
            ['path' => request()->url()]
        );

        $breadcrumbs = generateSimpleBreadcrumbs($request);

        $data = [
            'namePage' => $tipe_kategori,
            'devTitle' => $tipe_kategori,
            'devIndex' => $slug_kategori,
            'devNavigasi' => [],
            'devLis' => $devLis,
            'devData' => $devData,
            'breadcrumbs' => $breadcrumbs,
            'typeCategory' => $tipe_kategori,
            'slugCategory' => $slug_kategori
        ];

        return view('post.index', $data);
    }

    public function detail(Request $request, $tipe_kategori, $slug_kategori, $slug_posts)
    {
        $devData = collect(config('dummy.potensiPosts'))->where('slug_posts', $slug_posts)->first();

        $breadcrumbs = generateParentBreadcrumb($request);

        $data = [
            'tipeKategori' => $tipe_kategori,
            'slugKategori' => $slug_kategori,
            'slugPosts' => $slug_posts,
            'devData' => $devData,
            'breadcrumbs' => $breadcrumbs,
        ];

        return view('post.detail', $data);
    }
}
