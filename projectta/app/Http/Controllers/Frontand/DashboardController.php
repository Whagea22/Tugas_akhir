<?php

namespace App\Http\Controllers\Frontand;

use App\Http\Controllers\Controller;
use App\Models\Admin\Monitor;
use App\Models\Servo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    function index(){
        $data['dataterbaru'] = Monitor::first();
        $data['semuadata'] = Monitor::get();
        $data['dataTerakhir'] = Monitor::latest()->take(8)->get();
        $data['dataTerakhir3'] = Monitor::latest()->take(8)->get();
        $data['dataTerakhir2'] = Monitor::latest()->take(1)->get();
        $data['dataWaktu'] = Servo::get();

        return view('admin.front-and.dashboard.index', $data);
    }

    function store(Request $request)
    {
        $servo = new Servo;
        $servo->waktu = request('waktu');
        $servo->save();

        return redirect('admin/front-and/dashboard')->with('success', 'Data Berhasil Ditambah');
    }

    public function editServo(Servo $Servo)
    {
        $Servo->waktu = request('waktu');
        $Servo->save();

        return back()->with('success', 'Data Pegawai Berhasil Diedit');
    }

    public function hapus(Servo $Servo)
    {
        $Servo->delete();
        return back()->with('danger', 'Data Berhasil Dihapus');
    }

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

    function apiChart()
    {
        $data = Monitor::latest()->first();

        return response()->json([
            'created_at' => $data->created_at,
            'suhu_air' => $data->suhu_air,
            'ph_air' => $data->ph_air
        ]);
    }

    public function chartMenit()
    {
        $data = Monitor::get();
        return response()->json($data);
    }

    // function showdashboard(){
    //     return view('pegawai/unit-kerja/dashboard');
    // }

    function showlogin3(){
        return view('auth.login3');
    }

    function tampilApi(){
        $data = Monitor::latest()->first();

        return response()->json([
            'status' => 200,
            'message' => 'Success',
            'data' => $data,
        ]);
    }
    function tampilSemuaApi(){
        $data = Monitor::get();

        return response()->json([
            'status' => 200,
            'message' => 'Success',
            'data' => $data,
        ]);
    }

    function simpanData(){

        $sensor = new Monitor;
        $sensor->ph_air = request('ph_air');
        $sensor->suhu_air = request('suhu_air');
        $sensor->save();

        return redirect('admin/front-and/dashboard')->with('success', 'Data Berhasil Ditambah');
    }
}
