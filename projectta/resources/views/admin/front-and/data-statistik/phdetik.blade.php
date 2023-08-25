<div class="col-lg-12">
    <div class="card card-block card-stretch card-height">
        <div class="card-header d-flex justify-content-between">
            <div class="header-title">
                <h4 class="card-title">Data pH Air</h4>
            </div>

        </div>
        <div class="row">
            <div class="col-lg-12 ">
                <div class="card-body text-center  card-sm">
                    <div class="card card-block card-stretch card-sm">
                        <canvas id="realtimePHChart5"></canvas>
                        {{-- <div id="myChart" style="width:100%; max-width:600px; height:500px;"></div> --}}
                        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                    </div>
                </div>
            </div>
            {{-- <div class="col-lg-12 ">
                <div class="card-body text-center  card-sm">
                    <h4> Ph Per Menit </h4>
                    <div class="card card-block card-stretch card-sm">
                        <canvas id="chartContainer"></canvas>
                    </div>
                </div>
            </div> --}}
            {{-- <div class="col-md-6">
                <div class="card-body text-center">
                    <h4> Ph Per Jam </h4>
                    <div class="card card-block card-stretch">
                        <canvas id="realtimePHChart6"></canvas>
                        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="card-body text-center">
                    <h4> Ph Per Hari </h4>
                    <div class="card card-block card-stretch">
                        <canvas id="realtimePHChart7"></canvas>
                        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
</div>

<script type="text/javascript" src="https://cdn.canvasjs.com/canvasjs.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="{{ url('public') }}/template2/assets/js/knob/jquery.knob.js"></script>
<script src="https://www.gstatic.com/charts/loader.js"></script>

{{-- <script>
    google.charts.load('current', {
        packages: ['corechart']
    });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
        // Set Data
        const data = google.visualization.arrayToDataTable([
            ['Price', 'Size'],
            @foreach ($dataTerakhir as $data)
                [Date.parse('{{ $data->created_at }}'), {{ $data->ph_air }}],
            @endforeach
        ]);

        // Set Options
        const options = {
            title: 'pH Air vs. Waktu',
            hAxis: {
                title: 'Waktu'
            },
            vAxis: {
                title: 'pH Air'
            },
            legend: 'none'
        };

        // Draw
        const chart = new google.visualization.LineChart(document.getElementById('myChart'));
        chart.draw(data, options);
    }
</script> --}}

<script>
    const dataChart2 = document.getElementById('realtimePHChart5').getContext('2d');

    const labels = [];
    const dataPoints = [];

    @foreach ($dataTerakhir as $data)
        labels.push(
            '{{ $data->created_at->format('Y-m-d H:i:s') }}'); // Menggunakan push untuk menambahkan di akhir array
        dataPoints.push('{{ $data->ph_air }}'); // Menggunakan push untuk menambahkan di akhir array
    @endforeach

    const chart2 = new Chart(dataChart2, {
        type: 'line',
        data: {
            labels: labels,
            datasets: [{
                label: 'pH Air',
                data: dataPoints,
                borderWidth: 2,
                borderColor: 'rgba(255, 0, 0)',
                tension: 0.2,
                fill: false
            }]
        },
        options: {
            scales: {
                x: {
                    reverse: true, // Membalikkan urutan sumbu x
                    ticks: {
                        autoSkip: true,
                        maxTicksLimit: 10
                    }
                },
                y: {
                    beginAtZero: true,
                    max: 14,
                    ticks: {
                        stepSize: 2
                    }
                }
            }
        }
    });

    var ambilLokal2 = JSON.parse(localStorage.getItem("dataLokal2"));
</script>
<script>
    const dataChart3 = document.getElementById('realtimePHChart6').getContext('2d');
    const chart3 = new Chart(dataChart3, {
        type: 'line',
        data: {
            labels: [
                @foreach ($dataTerakhir as $data)
                    '{{ $data->created_at->format('H:i:s') }}',
                @endforeach
            ],
            datasets: [{
                label: 'pH Air',
                data: [
                    @foreach ($dataTerakhir as $data)
                        '{{ $data->ph_air }}',
                    @endforeach
                ],
                borderWidth: 4,
                borderColor: 'rgba(255, 0, 0)',
                tension: 0.4,
                fill: false
            }, ]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true,
                    max: 20,
                    ticks: {
                        stepSize: 2
                    }
                }
            }
        }
    });
    var ambilLokal3 = JSON.parse(localStorage.getItem("dataLokal3"));
</script>
