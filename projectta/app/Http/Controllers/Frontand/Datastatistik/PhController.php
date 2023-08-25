<?php

namespace App\Http\Controllers\Frontand\Datastatistik;

use App\Http\Controllers\Controller;
use App\Models\Admin\Monitor;


class PhController extends Controller
{
    function index(){

        return view('admin.front-and.data-statistik.ph-air.index');
    }

    // function showdashboard(){
    //     return view('pegawai/unit-kerja/dashboard');
    // }

}
