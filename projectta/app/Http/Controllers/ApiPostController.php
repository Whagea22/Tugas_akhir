<?php

namespace App\Http\Controllers;

use App\Models\Admin\Monitor;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Servo;

class ApiPostController extends Controller
{
    public function storeOrUpdate(Request $request)
    {
        $time = Carbon::now('Asia/Jakarta');
        $suhu_air = $request->input('value1');
        $ph_air = $request->input('value2');
        $status = $request->input('value3');
        $status_ph = $request->input('value4');

        DB::table('data_sensor')->insert([
            'suhu_air' => $suhu_air,
            'ph_air' => $ph_air,
            'status' => $status,
            'status_ph' => $status_ph,
            'time' => $time->format('H:i:s'),
            'created_at' => now(),
        ]);
        return response()->json(['success' => true]);
    }

    function getOpenServo() {
        return ['status' => 'success', 'data' => Servo::all()->pluck('waktu')];
    }
}
