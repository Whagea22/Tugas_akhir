<?php

namespace App\Http\Controllers\Frontand;

use App\Http\Controllers\Controller;
use App\Models\Admin\Monitor;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function index()
    {
        $data['dataTerakhir'] = Monitor::all();
        return view('admin.front-and.report.index', $data);
    }

    public function chartMenit(){
    $data = Monitor::latest()->take(6)->get();
    // return response()->json($data);
    return view('admin.front-and.report.index', $data);
    }

    // public function exportByRange(Request $request)
    // {
    //     $mulaiTanggal = $request->input('mulai_tanggal');
    //     $selesaiTanggal = $request->input('selesai_tanggal');

    //     $dataTerakhir = Monitor::whereBetween('created_at', [$mulaiTanggal, $selesaiTanggal])->get();
    //     $csvData = '';

    //     $csvData .= "Suhu\t,Ph\t,Status\t,Status PH\t,Waktu\n";

    //     foreach ($dataTerakhir as $monitor) {
    //     $csvData .= $monitor->suhu_air . "\t" . $monitor->ph_air . "\t" . $monitor->status . "\t" . $monitor->status_ph . "\t" . $monitor->created_at . "\n";
    // }

    //     $filename = 'laporan_Cuaca.csv';

    //     $header = [
    //         'Content-Type' => "text/csv",
    //         'Content-Disposition' => 'attachment; filename=' . $filename,
    //     ];

    //     // return response file CSV

    //     return response()->make($csvData, 200, $header);
    // }

    public function exportByRange(Request $request)
    {
        $mulaiTanggal = $request->input('mulai_tanggal');
        $selesaiTanggal = $request->input('selesai_tanggal');

        $dataTerakhir = Monitor::whereBetween('created_at', [$mulaiTanggal, $selesaiTanggal])->get();

        return view('your.table.view', compact('dataTerakhir'));
    }

    // function ambilApiData(){
    //     $data = Monitor::latest()->take(6)->get();
    //     return response()->json($data);
    // }
}
