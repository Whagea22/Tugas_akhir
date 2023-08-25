// Untuk Cript //
<script>
        const ctx = document.getElementById('realtime-chart').getContext('2d');

        const chart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: [],
                datasets: [{
                    label: 'Ketinggian Air (cm)',
                    data: [],
                    borderWidth: 4,
                    borderColor: 'rgba(153, 0, 153)',
                    tension: 0.4,
                    fill: false
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true,
                        max: 200,
                        ticks: {
                            stepSize: 40
                        }
                    }
                }
            }
        });

        $(document).ready(function() {
            loadDataMenit();
        });

        setInterval(loadDataMenit, 60000)

        function loadDataMenit() {
            $.ajax({
                url: 'chartMenit',
                type: 'GET',
                success: function(data) {
                    chart.data.labels = [];
                    chart.data.datasets[0].data = [];
                    data.forEach(function(data) {
                        var waktu = new Date(data.created_at);
                        var jam = waktu.getUTCHours().toString().padStart(2, '0');
                        var menit = waktu.getUTCMinutes().toString().padStart(2, '0');
                        chart.data.labels.push(jam + ':' + menit);
                        if (chart.data.labels.length > 12) {
                            chart.data.labels = chart.data.labels.slice(-12);
                        }
                        // var ketinggian_air = data.ketinggian_air;
                        // if (ketinggian_air > 200) {
                        //     ketinggian_air = 0;
                        // } else {
                        //     ketinggian_air = 200 - ketinggian_air;
                        // }
                        chart.data.datasets[0].data.push(data.ketinggian_air);
                    });
                    chart.update();
                }
            });
        }
    </script>

    // untuk controller //
    public function chartMenit()
    {
        $data = Sensor::get();
        return response()->json($data);
    }

    //
    <div class="col-xxl-6 col-lg-6 mb-25">
                <div class="card revenueChartTwo border-0">
                    <div class="card-header">
                        <h6>Ketinggian Air (Menit)</h6>
                        <div class="card-extra">
                            <div class="dropdown dropleft">
                                <a href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    <img src="{{ url('public/assets') }}/img/svg/more-horizontal.svg" alt="more-horizontal"
                                        class="svg">
                                </a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">View</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-12 col-lg-6 mb-25">
                        <div class="card border-0 chartLine-po-details h-100">
                            <div class="card-body">
                                <div class="wp-chart">
                                    <div class="parentContainer">
                                        <div>
                                            <div class="col-xl-12" style="margin-bottom: 10px">
                                                <canvas id="realtime-chart"></canvas>
                                                <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                                                <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

//
<script>
        const ctxSuhu = document.getElementById('realtime-chart-suhu').getContext('2d');

        const chartSuhu = new Chart(ctxSuhu, {
            type: 'line',
            data: {
                labels: [],
                datasets: [{
                    label: 'Suhu (°C)',
                    data: [],
                    borderWidth: 4,
                    borderColor: 'rgba(153, 0, 153)',
                    tension: 0.4,
                    fill: false
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true,
                        max: 200,
                        ticks: {
                            stepSize: 70
                        }
                    }
                }
            },
        });

        $(document).ready(function() {
            loadDataSuhu();
        });

        setInterval(loadDataSuhu, 60000)

        function loadDataSuhu() {
            $.ajax({
                url: 'chartMenit',
                type: 'GET',
                success: function(data) {
                    chartSuhu.data.labels = [];
                    chartSuhu.data.datasets[0].data = [];

                    // Objek untuk menyimpan data bulan
                    const dataBulan = [];

                    const satuTahunTerakhir = new Date();
                    satuTahunTerakhir.setFullYear(satuTahunTerakhir.getFullYear() -
                        1); // Mengurangi satu tahun dari tanggal saat ini

                    data.forEach(function(data) {
                        const bulan = getBulan(data.created_at);
                        const suhu = data.suhu;
                        const dataDate = new Date(data.created_at);

                        // Memeriksa apakah data berada dalam satu tahun terakhir
                        if (dataDate >= satuTahunTerakhir) {
                            if (!dataBulan[bulan]) {
                                dataBulan[bulan] = {
                                    total: 0,
                                    count: 0
                                };
                            }

                            dataBulan[bulan].total += suhu;
                            dataBulan[bulan].count++;
                        }
                    });

                    // Menghitung rata-rata perbulan dan menambahkan data ke grafik
                    for (const bulan in dataBulan) {
                        const rataRata = dataBulan[bulan].total / dataBulan[bulan].count;
                        chartSuhu.data.labels.push(bulan);
                        chartSuhu.data.datasets[0].data.push(rataRata);
                    }

                    chartSuhu.update();
                }
            });

            // Fungsi untuk mendapatkan label bulan dari tanggal
            function getBulan(tanggal) {
                const bulan = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September',
                    'Oktober', 'November', 'Desember'
                ];
                const date = new Date(tanggal);
                return bulan[date.getMonth()];
            }
        }
    </script>

controllernya

    public function exportByRange(Request $request)
    {
        $mulaiTanggal = $request->input('mulai_tanggal');
        $selesaiTanggal = $request->input('selesai_tanggal');

        $datas = DataKondisi::whereBetween('created_at', [$mulaiTanggal, $selesaiTanggal])->get();
        $csvData = '';

        //header
        $csvData .= "Perangkat,Lokasi, Cuaca , Timestamp\n";

        //data
        foreach ($datas as $data) {
            $csvData .= $data->sensor . ',' . $data->location . ',' . $data->status_air . ',' . $data->created_at . "\n";
        }

        $filename = 'laporan Cuaca.csv';

        // set header
        $header = [
            'Content-Type' => "text/csv",
            'Content-Disposition' => 'attachmen; filename=' . $filename,
        ];

        // return respons file CSV
        return Response::make($csvData, 200, $header);
    }

    //

    <div class="col-xxl-12 col-lg-6 mb-25">
                <div class="card border-0 px-25">
                    <div class="card-header px-0 border-0">
                        <h6>Report lasted data</h6>
                    </div>
                    <div class="card-header color-dark fw-500">
                        Data <a href="{{ url('report/export') }}" class="btn btn-sm btn-success float-right">Ekspor
                            Data</a>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="form-group col-lg-6">
                                <label for="mulai_tanggal">Tanggal Awal:</label>
                                <input type="date" class="form-control" id="mulai_tanggal">
                            </div>
                            <div class="form-group col-lg-5">
                                <label for="selesai_tanggal">Tanggal Akhir:</label>
                                <input type="date" class="form-control" id="selesai_tanggal">
                            </div>
                            <div class="col-lg-1 mt-20">
                                <button class="btn btn-sm btn-primary" onclick="exportDataWaktu()">Export</button>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="tab-content">
                            <div class="tab-pane fade active show" id="t_selling-today" role="tabpanel"
                                aria-labelledby="t_selling-today-tab">
                                <div class="selling-table-wrap">
                                    <div class="table-responsive">
                                        <table class="table table--default table-borderless">
                                            <thead>
                                                <tr>
                                                    <th style="width: 1px">No</th>
                                                    <th>Lokasi</th>
                                                    <th>Ketinggian Air</th>
                                                    <th>Status</th>
                                                    <th>Suhu</th>
                                                    <th>Kelembapan</th>
                                                    <th>Cuaca</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php
                                                    $no = 1;
                                                @endphp
                                                @foreach ($datas as $data)
                                                    <tr>
                                                        <td style="text-align: center">{{ $no++ }}</td>
                                                        <td>{{ $data->sensor }}</td>
                                                        <td>{{ $data->ketinggian_air }}</td>
                                                        <td>{{ $data->status }}</td>
                                                        <td>{{ $data->suhu }}</td>
                                                        <td>{{ $data->kelembapan }}</td>
                                                        <td>
                                                            @if ($data->status_air == 1)
                                                                Hujan
                                                            @elseif ($data->status_air == 2)
                                                                Tidak Hujan
                                                            @endif
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            //

            function exportDataWaktu() {
            const mulaiTanggal = document.getElementById('mulai_tanggal').value;
            const selesaiTanggal = document.getElementById('selesai_tanggal').value;

            // Redirect ke URL dengan query string berisi range tanggal yang dipilih
            window.location.href = "{{ url('report/exportbyrange') }}" + "?mulai_tanggal=" + mulaiTanggal + "&selesai_tanggal=" +selesaiTanggal;
        }


