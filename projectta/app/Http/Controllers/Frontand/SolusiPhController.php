<?php

namespace App\Http\Controllers\Frontand;

use App\Http\Controllers\Controller;
use App\Models\Admin\Monitor;
use Illuminate\Support\Facades\DB;

class SolusiPhController extends Controller
{
    function phTinggi(){
        return view('admin.front-and.dashboard.solusiphtinggi');
    }

    function phRendah(){
        return view('admin.front-and.dashboard.solusiphrendah');
    }

    function suhuTinggi(){
        return view('admin.front-and.dashboard.solusisuhutinggi');
    }

    function suhuRendah(){
        return view('admin.front-and.dashboard.solusisuhurendah');
    }

}
