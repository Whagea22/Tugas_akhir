<?php

namespace App\Http\Controllers\Frontand;

use App\Http\Controllers\Controller;


class SuhuAirController extends Controller
{
    public function index()
    {
        return view('admin.front-and.suhu-air.index');
    }

}
