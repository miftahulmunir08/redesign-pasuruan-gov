<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SumberDayaController extends Controller
{
    public function transparansi(Request $request)
    {
        $devTitle = 'Transparansi';
        $breadcrumbs = generateSimpleBreadcrumbs($request);
        $devData = collect(config('dummy.transparansi'));

        $data = [
            'devTitle' => $devTitle,
            'breadcrumbs' => $breadcrumbs,
            'devData' => $devData
        ];

        return view('sumber-daya.transparansi', $data);
    }

    public function download(Request $request)
    {

        $devTitle = 'Download';
        $breadcrumbs = generateSimpleBreadcrumbs($request);
        $devData = collect(config('dummy.downloads'));

        $data = [
            'devTitle' => $devTitle,
            'breadcrumbs' => $breadcrumbs,
            'devData' => $devData
        ];

        return view('sumber-daya.download', $data);
    }

    public function agenda(Request $request)
    {

        $devTitle = 'Agenda';
        $breadcrumbs = generateSimpleBreadcrumbs($request);
        $devData = collect(config('dummy.agenda'));

        $data = [
            'devTitle' => $devTitle,
            'breadcrumbs' => $breadcrumbs,
            'devData' => $devData
        ];

        return view('sumber-daya.agenda', $data);
    }

    public function majalah(Request $request)
    {

        $devTitle = 'Majalah';
        $breadcrumbs = generateSimpleBreadcrumbs($request);
        $devData = collect(config('dummy.majalah'));

        $data = [
            'devTitle' => $devTitle,
            'breadcrumbs' => $breadcrumbs,
            'devData' => $devData
        ];

        return view('sumber-daya.majalah', $data);
    }
}
