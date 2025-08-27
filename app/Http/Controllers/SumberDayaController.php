<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SumberDayaController extends Controller
{
    public function transparansi()
    {
        return view('sumber-daya.transparansi');
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
