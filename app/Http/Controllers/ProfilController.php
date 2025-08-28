<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Str;

class ProfilController extends Controller
{
    public function bupati(Request $request)
    {
        $periode = (object)[
            'id_pemerintahan_periode' => 1,
            'periode' => '2025 - 2030'
        ];

        $devLembagaBupati = (object)[
            'id_pemerintahan_lembaga' => 1,
            'nama_lembaga' => 'Bupati Pasuruan'
        ];
        $devLembagaWabup = (object)[
            'id_pemerintahan_lembaga' => 2,
            'nama_lembaga' => 'Wakil Bupati Pasuruan'
        ];

        $devBupati = (object)[
            'id_pemerintahan' => 101,
            'nama' => 'H. Mochamad Rusdi Sutejo, S.M.',
            'jabatan' => 'Bupati Pasuruan',
            'gambar_pemerintahan' => 'https://www.pasuruankab.go.id/download-file/eyJpdiI6IjZ0YXVRSTM4S2JOOXRBYm9DZ21iSXc9PSIsInZhbHVlIjoicU1VZWY1MTlnd29IZFF4c1R2WWlSZz09IiwibWFjIjoiMTE3OTU0MTkxYTAwNGQ4OTViMGI1ZGU1M2NhZDllN2UyZGVmYTM0YmRjYmIzMDJjZDgzYzYyYmE0NjJhZTU4NiIsInRhZyI6IiJ9/pemerintahan/gambar_pemerintahan/0',
            'pemerintahan_lembaga_id' => $devLembagaBupati->id_pemerintahan_lembaga,
            'pemerintahan_periode_id' => $periode->id_pemerintahan_periode,
            'pemerintahan_lembaga' => $devLembagaBupati,
            'pemerintahan_periode' => $periode,
        ];

        $devWabub = (object)[
            'id_pemerintahan' => 102,
            'nama' => 'K.H. Shobih Asrori, S.H.',
            'jabatan' => 'Wakil Bupati Pasuruan',
            'gambar_pemerintahan' => 'https://www.pasuruankab.go.id/download-file/eyJpdiI6IjhNcUs3cUJjbUI4b29wK3l6TVd6WFE9PSIsInZhbHVlIjoiamErQnBpdXkxK1RLeDd1NFBOV1IxUT09IiwibWFjIjoiOGZlYzJjMTE4NTlhYWE3NWVkMzVhNzllOGU2NTI4YWI5NGUyZWNkYTMzZjYxN2I1YmIyZjg2ZDBhYzUyMTE1YSIsInRhZyI6IiJ9/pemerintahan/gambar_pemerintahan/0',
            'pemerintahan_lembaga_id' => $devLembagaWabup->id_pemerintahan_lembaga,
            'pemerintahan_periode_id' => $periode->id_pemerintahan_periode,
            'pemerintahan_lembaga' => $devLembagaWabup,
            'pemerintahan_periode' => $periode,
        ];

        $breadcrumbs = generateSimpleBreadcrumbs($request);

        $data = [
            'namePage' => 'Pemimpin Daerah Kabupaten Pasuruan',
            'devTitle' => 'Pemimpin Daerah Kabupaten Pasuruan',
            'devIndex' => 'Pemimpin Daerah Kabupaten Pasuruan',
            'devBupati' => $devBupati,
            'devWabup' => $devWabub,
            'breadcrumbs' => $breadcrumbs
        ];

        return view('profil.pemerintahan.bupati', $data);
    }

    public function lembaga(Request $request)
    {
        $lastSegment = last($request->segments());
        $formattedTitle = Str::title(str_replace('-', ' ', $lastSegment));

        $breadcrumbs = generateSimpleBreadcrumbs($request);

        $data = [
            'breadcrumbs' => $breadcrumbs,
            'formattedTitle' => $formattedTitle
        ];

        return view('profil.pemerintahan.lembaga', $data);
    }

    public function detailPost(Request $request, $slug_post)
    {
        $devData = collect(config('dummy.profilPosts'))->firstWhere('slug_posts', $slug_post);

        $breadcrumbs = generateSimpleBreadcrumbs($request);

        $data = [
            'devData' => $devData,
            'breadcrumbs' => $breadcrumbs
        ];

        return view('profil.detail-post', $data);
    }
}
