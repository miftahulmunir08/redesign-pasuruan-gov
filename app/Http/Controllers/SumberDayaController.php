<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SumberDayaController extends Controller
{
    public function transparansi(Request $request)
    {
        $devTitle = 'Transparansi';
        $breadcrumbs = generateSimpleBreadcrumbs($request);

        $data = [
            'devTitle' => $devTitle,
            'breadcrumbs' => $breadcrumbs
        ];

        return view('sumber-daya.transparansi', $data);
    }

    public function download()
    {
        return view('sumber-daya.download');
    }

    public function agenda()
    {
        return view('sumber-daya.agenda');
    }

    public function majalah()
    {
        return view('sumber-daya.majalah');
    }
}
