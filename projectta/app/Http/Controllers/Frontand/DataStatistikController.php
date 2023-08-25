<?php

namespace App\Http\Controllers\Frontand;

use App\Http\Controllers\Controller;
use App\Models\Admin\Monitor;

class DataStatistikController extends Controller
{
    public function index()
    {
        $data['dataTerakhir'] = Monitor::latest()->take(12)->get();
        $data['dataPerJam'] = Monitor::whereRaw('HOUR(created_at) % 1 = 0')->get();

        return view('admin.front-and.data-statistik.index', $data);
    }

    public function chartMenit(){
    $data = Monitor::latest()->take(6)->get();
    // return response()->json($data);
    return view('admin.front-and.data-statistik.index', $data);
    }



    // function ambilApiData(){
    //     $data = Monitor::latest()->take(6)->get();
    //     return response()->json($data);
    // }
}
