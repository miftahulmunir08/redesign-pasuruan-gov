<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function index(Request $request)
    {

        $devTitle = 'Video Gallery';
        $breadcrumbs = generateSimpleBreadcrumbs($request);
        $devData = collect(config('dummy.majalah'));

        $data = [
            'devTitle' => $devTitle,
            'breadcrumbs' => $breadcrumbs,
            'devData' => $devData
        ];

        return view('video.index', $data);
    }
}
