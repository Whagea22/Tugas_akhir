<?php

namespace App\Http\Controllers\Frontand;

use App\Http\Controllers\Controller;


class PhAirController extends Controller
{
    public function index()
    {
        return view('admin.front-and.ph-air.index');
    }
}
