<?php

namespace App\Http\Controllers\Frontand\Datastatistik;

use App\Http\Controllers\Controller;
use App\Models\Admin\Monitor;


class SuhuController extends Controller
{
    function index(){
        // $data['data'] = Monitor::get();

        return view('admin.front-and.data-statistik.suhu-air.index');
    }

    // function showdashboard(){
    //     return view('pegawai/unit-kerja/dashboard');
    // }

    function showlogin3(){
        return view('auth.login3');
    }
}
