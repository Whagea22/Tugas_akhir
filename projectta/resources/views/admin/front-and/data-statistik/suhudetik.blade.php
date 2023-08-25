<div class="col-lg-12">
    <div class="card card-block card-stretch card-height">
        <div class="card-header d-flex justify-content-between">
            <div class="header-title">
                <h4 class="card-title">Data Suhu Air</h4>
            </div>

        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card-body text-center">
                    <div class="card card-block card-stretch">
                        <canvas id="realtimeSuhuChart8"></canvas>
                        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                    </div>
                </div>
            </div>
            {{-- <div class="col-md-6">
                <div class="card-body text-center">
                    <h4> Suhu Per Jam </h4>
                    <div class="card card-block card-stretch">
                        <canvas id="realtimeSuhuChart9"></canvas>
                        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="card-body text-center">
                    <h4> Suhu Per Hari </h4>
                    <div class="card card-block card-stretch">
                        <canvas id="realtimeSuhuChart10"></canvas>
                        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="{{ url('public') }}/template2/assets/js/knob/jquery.knob.js"></script>

<script>
    const dataChart5 = document.getElementById('realtimeSuhuChart8').getContext('2d');
    const labels3 = [];
    const dataPoints3 = [];

    @foreach ($dataTerakhir as $data)
        labels3.push(
            '{{ $data->created_at->format('Y-m-d H:i:s') }}'); // Menggunakan push untuk menambahkan di akhir array
        dataPoints3.push('{{ $data->suhu_air }}'); // Menggunakan push untuk menambahkan di akhir array
    @endforeach

    const chart5 = new Chart(dataChart5, {
        type: 'line',
        data: {
            labels: labels3,
            datasets: [{
                label: 'Suhu Air',
                data: dataPoints3, // Mengubah urutan data menjadi terbalik
                borderWidth: 2,
                borderColor: 'rgba(75, 192, 192, 1)',
                tension: 0.4,
                fill: false
            }, ]
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
                    max: 40,
                    ticks: {
                        stepSize: 2
                    }
                }
            }
        }
    });
    var ambilLokal5 = JSON.parse(localStorage.getItem("dataLokal5"));
</script>

<script>
    const dataChart6 = document.getElementById('realtimeSuhuChart9').getContext('2d');

    const chart6 = new Chart(dataChart6, {
        type: 'line',
        data: {
            labels: [
                @foreach ($dataTerakhir as $data)
                    '{{ $data->created_at->format('H:i:s') }}',
                @endforeach
            ],
            datasets: [{
                label: 'Suhu Air',
                data: [
                    @foreach ($dataTerakhir as $data)
                        '{{ $data->suhu_air }}',
                    @endforeach
                ],
                borderWidth: 2,
                borderColor: 'rgba(75, 192, 192, 1)',
                tension: 0.4,
                fill: false
            }, ]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true,
                    max: 40,
                    ticks: {
                        stepSize: 5
                    }
                }
            }
        }
    });
    var ambilLokal6 = JSON.parse(localStorage.getItem("dataLokal6"));
</script>

<script>
    const dataChart7 = document.getElementById('realtimeSuhuChart10').getContext('2d');

    const chart7 = new Chart(dataChart7, {
        type: 'bar',
        data: {
            labels: [
                @foreach ($dataTerakhir as $data)
                    '{{ $data->created_at->format('H:i:s') }}',
                @endforeach
            ],
            datasets: [{
                label: 'Suhu Air',
                data: [
                    @foreach ($dataTerakhir as $data)
                        '{{ $data->suhu_air }}',
                    @endforeach
                ],
                borderWidth: 2,
                borderColor: 'rgba(75, 192, 192, 1)',
                tension: 0.1,
                fill: false
            }, ]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true,
                    max: 40,
                    ticks: {
                        stepSize: 5
                    }
                }
            }
        }
    });
    var ambilLokal7 = JSON.parse(localStorage.getItem("dataLokal7"));
</script>
{{-- secript chart --}}
