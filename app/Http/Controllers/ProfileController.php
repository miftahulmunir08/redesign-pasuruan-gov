<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
    }

    // public function arti_lambang(Request $request)
    // {
    //     $periode = (object)[
    //         'id_pemerintahan_periode' => 1,
    //         'periode' => '2025 - 2030'
    //     ];

    //     $devLembagaBupati = (object)[
    //         'id_pemerintahan_lembaga' => 1,
    //         'nama_lembaga' => 'Bupati Pasuruan'
    //     ];
    //     $devLembagaWabup = (object)[
    //         'id_pemerintahan_lembaga' => 2,
    //         'nama_lembaga' => 'Wakil Bupati Pasuruan'
    //     ];

    //     $devBupati = (object)[
    //         'id_pemerintahan' => 101,
    //         'nama' => 'H. Mochamad Rusdi Sutejo, S.M.',
    //         'jabatan' => 'Bupati Pasuruan',
    //         'gambar_pemerintahan' => 'https://upload.wikimedia.org/wikipedia/commons/3/33/H._M._Rusdi_Sutejo_Bupati_Pasuruan.png',
    //         'pemerintahan_lembaga_id' => $devLembagaBupati->id_pemerintahan_lembaga,
    //         'pemerintahan_periode_id' => $periode->id_pemerintahan_periode,
    //         'pemerintahan_lembaga' => $devLembagaBupati,
    //         'pemerintahan_periode' => $periode,
    //     ];

    //     $devWabub = (object)[
    //         'id_pemerintahan' => 102,
    //         'nama' => 'K.H. Shobih Asrori, S.H.',
    //         'jabatan' => 'Wakil Bupati Pasuruan',
    //         'gambar_pemerintahan' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/b/bb/K.H._M._Shobih_Asrori_Wakil_Bupati_Pasuruan.png/1200px-K.H._M._Shobih_Asrori_Wakil_Bupati_Pasuruan.png',
    //         'pemerintahan_lembaga_id' => $devLembagaWabup->id_pemerintahan_lembaga,
    //         'pemerintahan_periode_id' => $periode->id_pemerintahan_periode,
    //         'pemerintahan_lembaga' => $devLembagaWabup,
    //         'pemerintahan_periode' => $periode,
    //     ];

    //     $segments = $request->segments();
    //     $breadcrumbs = [];
    //     $url = '';

    //     foreach ($segments as $segment) {
    //         $url .= '/' . $segment;
    //         $text = ucwords(str_replace(['-', '_'], ' ', $segment));

    //         $breadcrumbs[] = [
    //             'text' => $text,
    //             'url'  => $url
    //         ];
    //     }

    //     array_unshift($breadcrumbs, ['text' => 'Home', 'url' => '/']);

    //     if (count($breadcrumbs) > 1) {
    //         $breadcrumbs[count($breadcrumbs) - 1]['url'] = null;
    //     }

    //     $data = [
    //         'namePage' => 'Arti Lambang',
    //         'devTitle' => 'Arti Lambang',
    //         'devIndex' => 'Pemimpin Daerah Kabupaten Pasuruan',
    //         'devBupati' => $devBupati,
    //         'devWabup' => $devWabub,
    //         'breadcrumbs' => $breadcrumbs
    //     ];


    //     return view('profile.arti-lambang', $data);
    // }

    // public function visi_misi(Request $request)
    // {
    //     $periode = (object)[
    //         'id_pemerintahan_periode' => 1,
    //         'periode' => '2025 - 2030'
    //     ];

    //     $devLembagaBupati = (object)[
    //         'id_pemerintahan_lembaga' => 1,
    //         'nama_lembaga' => 'Bupati Pasuruan'
    //     ];
    //     $devLembagaWabup = (object)[
    //         'id_pemerintahan_lembaga' => 2,
    //         'nama_lembaga' => 'Wakil Bupati Pasuruan'
    //     ];

    //     $devBupati = (object)[
    //         'id_pemerintahan' => 101,
    //         'nama' => 'H. Mochamad Rusdi Sutejo, S.M.',
    //         'jabatan' => 'Bupati Pasuruan',
    //         'gambar_pemerintahan' => 'https://upload.wikimedia.org/wikipedia/commons/3/33/H._M._Rusdi_Sutejo_Bupati_Pasuruan.png',
    //         'pemerintahan_lembaga_id' => $devLembagaBupati->id_pemerintahan_lembaga,
    //         'pemerintahan_periode_id' => $periode->id_pemerintahan_periode,
    //         'pemerintahan_lembaga' => $devLembagaBupati,
    //         'pemerintahan_periode' => $periode,
    //     ];

    //     $devWabub = (object)[
    //         'id_pemerintahan' => 102,
    //         'nama' => 'K.H. Shobih Asrori, S.H.',
    //         'jabatan' => 'Wakil Bupati Pasuruan',
    //         'gambar_pemerintahan' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/b/bb/K.H._M._Shobih_Asrori_Wakil_Bupati_Pasuruan.png/1200px-K.H._M._Shobih_Asrori_Wakil_Bupati_Pasuruan.png',
    //         'pemerintahan_lembaga_id' => $devLembagaWabup->id_pemerintahan_lembaga,
    //         'pemerintahan_periode_id' => $periode->id_pemerintahan_periode,
    //         'pemerintahan_lembaga' => $devLembagaWabup,
    //         'pemerintahan_periode' => $periode,
    //     ];

    //     $segments = $request->segments();
    //     $breadcrumbs = [];
    //     $url = '';

    //     foreach ($segments as $segment) {
    //         $url .= '/' . $segment;
    //         $text = ucwords(str_replace(['-', '_'], ' ', $segment));

    //         $breadcrumbs[] = [
    //             'text' => $text,
    //             'url'  => $url
    //         ];
    //     }

    //     array_unshift($breadcrumbs, ['text' => 'Home', 'url' => '/']);

    //     if (count($breadcrumbs) > 1) {
    //         $breadcrumbs[count($breadcrumbs) - 1]['url'] = null;
    //     }

    //     $data = [
    //         'namePage' => 'Visi & Misi Pemimpin Daerah Kabupaten Pasuruan',
    //         'devTitle' => 'Visi & Misi Pemimpin Daerah Kabupaten Pasuruan',
    //         'devIndex' => 'Visi & Misi Pemimpin Daerah Kabupaten Pasuruan',
    //         'devBupati' => $devBupati,
    //         'devWabup' => $devWabub,
    //         'breadcrumbs' => $breadcrumbs
    //     ];


    //     return view('profile.visi-misi', $data);
    // }

    // public function peta_pasuruan(Request $request)
    // {   
    //     $periode = (object)[
    //         'id_pemerintahan_periode' => 1,
    //         'periode' => '2025 - 2030'
    //     ];

    //     $devLembagaBupati = (object)[
    //         'id_pemerintahan_lembaga' => 1,
    //         'nama_lembaga' => 'Bupati Pasuruan'
    //     ];
    //     $devLembagaWabup = (object)[
    //         'id_pemerintahan_lembaga' => 2,
    //         'nama_lembaga' => 'Wakil Bupati Pasuruan'
    //     ];

    //     $devBupati = (object)[
    //         'id_pemerintahan' => 101,
    //         'nama' => 'H. Mochamad Rusdi Sutejo, S.M.',
    //         'jabatan' => 'Bupati Pasuruan',
    //         'gambar_pemerintahan' => 'https://upload.wikimedia.org/wikipedia/commons/3/33/H._M._Rusdi_Sutejo_Bupati_Pasuruan.png',
    //         'pemerintahan_lembaga_id' => $devLembagaBupati->id_pemerintahan_lembaga,
    //         'pemerintahan_periode_id' => $periode->id_pemerintahan_periode,
    //         'pemerintahan_lembaga' => $devLembagaBupati,
    //         'pemerintahan_periode' => $periode,
    //     ];

    //     $devWabub = (object)[
    //         'id_pemerintahan' => 102,
    //         'nama' => 'K.H. Shobih Asrori, S.H.',
    //         'jabatan' => 'Wakil Bupati Pasuruan',
    //         'gambar_pemerintahan' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/b/bb/K.H._M._Shobih_Asrori_Wakil_Bupati_Pasuruan.png/1200px-K.H._M._Shobih_Asrori_Wakil_Bupati_Pasuruan.png',
    //         'pemerintahan_lembaga_id' => $devLembagaWabup->id_pemerintahan_lembaga,
    //         'pemerintahan_periode_id' => $periode->id_pemerintahan_periode,
    //         'pemerintahan_lembaga' => $devLembagaWabup,
    //         'pemerintahan_periode' => $periode,
    //     ];

    //     $segments = $request->segments();
    //     $breadcrumbs = [];
    //     $url = '';

    //     foreach ($segments as $segment) {
    //         $url .= '/' . $segment;
    //         $text = ucwords(str_replace(['-', '_'], ' ', $segment));

    //         $breadcrumbs[] = [
    //             'text' => $text,
    //             'url'  => $url
    //         ];
    //     }

    //     array_unshift($breadcrumbs, ['text' => 'Home', 'url' => '/']);

    //     if (count($breadcrumbs) > 1) {
    //         $breadcrumbs[count($breadcrumbs) - 1]['url'] = null;
    //     }

    //     $data = [
    //         'namePage' => 'Peta Kabupaten Pasuruan',
    //         'devTitle' => 'Peta Kabupaten Pasuruan',
    //         'devIndex' => 'Peta Kabupaten Pasuruan',
    //         'devBupati' => $devBupati,
    //         'devWabup' => $devWabub,
    //         'breadcrumbs' => $breadcrumbs
    //     ];


    //     return view('profile.peta-pasuruan', $data);
    // }
}
