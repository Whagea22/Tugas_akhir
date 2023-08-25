<style>
    .chart-rounded {
        width: 160px;
        height: 160px;
        border-radius: 50%;
        border: 2px solid rgb(219, 15, 8);
        top: 50pxpx;
        left: 85px;
        z-index: 9;
        position: relative;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .chart-rounded .chart-rounded-data {
        width: 100%;
        height: 100%;
        border-radius: 50%;
        border: 5px solid rgb(219, 15, 8);
        position: relative;
        position: absolute;
        top: 0;
        left: 0;
        z-index: 9;
        display: flex;
        align-items: center;
        justify-content: center;
    }
</style>
<style>
    .chart-rounded2 {
        width: 160px;
        height: 160px;
        border-radius: 50%;
        border: 2px solid green;
        top: 50pxpx;
        left: 55px;
        z-index: 9;
        position: relative;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .chart-rounded2 .chart-rounded-data2 {
        width: 100%;
        height: 100%;
        border-radius: 50%;
        border: 5px solid green;
        position: relative;
        position: absolute;
        top: 0;
        left: 0;
        z-index: 9;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .box-notif {
        position: fixed;
        top: 32px;
        z-index: 9999;
        right: 32px;
    }
</style>
<div class="box-notif">

</div>
<div class="col-lg-7">
    <div class="card card-block card-stretch card-height">
        <div class="card-header d-flex justify-content-between">
            <div class="header-title">
                <h4 class="card-title"><b>Data Realtime</b></h4>
            </div>
            <div class="dropdown">
                <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuButton"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Solusi
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="{{ url('admin/front-and/dashboard/solusiphtinggi') }}">PH Air Terlalu
                        Tinggi</a>
                    <a class="dropdown-item" href="{{ url('admin/front-and/dashboard/solusiphrendah') }}">PH Air Terlalu
                        Rendah</a>
                    <a class="dropdown-item" href="{{ url('admin/front-and/dashboard/solusisuhutinggi') }}">Suhu Air
                        Terlalu Tinggi</a>
                    <a class="dropdown-item" href="{{ url('admin/front-and/dashboard/solusisuhurendah') }}">Suhu Air
                        Terlalu Rendah</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="d-flex flex-wrap align-items-center mt-1">
                <div class="col-md-6">
                    <div class="d-flex align-items-center progress-order">
                        <div class="chart-rounded">
                            <div class="chart-rounded-box">
                                <div class="chart-rounded-data">
                                    <h3 class="" id="Ph"></h3>
                                    <H4>*</H4>
                                </div>
                                <br>
                                <br>
                                <h6>Ph</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="d-flex align-items-center progress-order">
                        <div class="chart-rounded2">
                            <div class="chart-rounded-box">
                                <div class="chart-rounded-data2">
                                    <h3 id="Suhu"></h3>
                                    <H5>°</H5>
                                </div>
                                <br>
                                <br>
                                <h6>Suhu</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body pt-0">
            <canvas id="realtimePHChart"></canvas>
            <br>
            <canvas id="realtimePHChart2"></canvas>
            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        </div>
    </div>
</div>
<div class="col-md-5">
    <div class="card card-block card-stretch card-height">
        <div class="card-header d-flex justify-content-center">
            <div class="header-title">
                <h4 class="card-title"><b>History Pemberian Pakan</b></h4>
            </div>
        </div>
        <div class="card-body">
            <table id="example5" class="table table-bordered table-striped">
                <thead style="text-align: center" bg-dark>
                    <th width="20px">No</th>
                    <th width="200px">Aksi</th>
                    <th>Waktu</th>
                </thead>
                <tbody>
                    @php
                        $no = 1;
                    @endphp
                    @foreach ($dataWaktu as $Servo)
                        <tr>
                            <td>
                                {{ $no++ }}
                            </td>
                            <td>
                                <div class="btn-group btn-sm">
                                    <button type="button" class="btn btn-primary" data-toggle="modal"
                                        data-target="#myModal"><i class="fa fa-edit"></i>
                                        Edit
                                    </button>
                                    <a href="{{ url('admin/front-and/dashboard/hapus', $Servo->id) }}"
                                        class="btn btn-secondary"
                                        onclick="return confirm('Yakin menghapus data ini?!')"><i
                                            class="fa fa-trash"></i> Hapus </a>
                                </div>
                                <div class="modal fade" id="myModal">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <!-- Header Modal -->
                                            <div class="modal-header">
                                                <h4 class="modal-title">Edit Waktu</h4>
                                                <button type="button" class="close"
                                                    data-dismiss="modal">&times;</button>
                                            </div>
                                            <!-- Isi Modal -->
                                            <div class="modal-body">
                                                <form action="{{ url('admin/front-and/dashboard/edit', $Servo->id) }}"
                                                    method="post">
                                                    @csrf
                                                    <div class="row">
                                                        <div class="form-group">
                                                            <label for="" class="control-label">Input Waktu<a
                                                                    href="" style="text-decoration: none"
                                                                    class="text-danger">*</a></label>
                                                            <input type="time" class="form-control" name="waktu"
                                                                value="{{ $Servo->waktu }}">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <button class="btn btn-primary float-right">SIMPAN</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td style="text-align: center"><b>{{ $Servo->waktu }} WIB</b></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="card text-bg-primary mb-6" style="max-width: 50rem;">
                <div class="card-header text-center" style="font-size: 25px"> <b>Input Waktu Pakan</b>
                </div>
                <div class="card-body" style="text-align: center">
                    <form action="{{ url('admin/front-and/dashboard') }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-9">
                                <div class="form-group">
                                    <label for="" class="control-label"><b>Input Waktu</b><a href=""
                                            style="text-decoration: none" class="text-danger">*</a></label>
                                    <input type="time" class="form-control" name="waktu">

                                </div>
                                {{-- <button class="btn btn-success float-right"><i class="fa fa-upload"></i> Upload
                                </button> --}}
                            </div>
                            <div class="col-md-3">
                                <br>
                                <button class="btn btn-success float-right"><i class="fa fa-upload"></i> Upload
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="{{ url('public') }}/template2/assets/js/knob/jquery.knob.js"></script>

<script type="module">
    // Import the functions you need from the SDKs you need

    import {
        initializeApp
    } from "https://www.gstatic.com/firebasejs/10.1.0/firebase-app.js";
    import {
        getDatabase,
        ref,
        onValue
    } from "https://www.gstatic.com/firebasejs/10.1.0/firebase-database.js";
    // TODO: Add SDKs for Firebase products that you want to use

    // https://firebase.google.com/docs/web/setup#available-libraries


    // Your web app's Firebase configuration

    const firebaseConfig = {
        apiKey: "AIzaSyAQl4zuk_1ujRO92vMBux4ZqxVszoA6hbw",
        authDomain: "test2-2b9be.firebaseapp.com",
        databaseURL: "https://test2-2b9be-default-rtdb.asia-southeast1.firebasedatabase.app",
        projectId: "test2-2b9be",
        storageBucket: "test2-2b9be.appspot.com",
        messagingSenderId: "393735609794",
        appId: "1:393735609794:web:0f341c9059274d55fd8a5b"
    };


    // Initialize Firebase

    const app = initializeApp(firebaseConfig);

    const database = getDatabase();

    // Reference to the location in the database where you want to retrieve data from
    const dataRef = ref(database, "Sensor");

    // Use the onValue() function to listen for changes in the data
    onValue(dataRef, (snapshot) => {
        const data = snapshot.val();

        var ph = Math.round(data.ph);
        var suhu = Math.round(data.suhu);
        var isiHtml = '';
        if (ph >= 9 || suhu >= 29) {
            if (ph >= 9) {
                isiHtml += `
                <div class="alert bg-secondary" role="alert">
                        <p><b> PH TERLALU TINGGI : ${ph}</b></p>
                </div>
                `
            }
            if (suhu >= 29) {
                isiHtml += `
            <div class="alert bg-secondary" role="alert">
                <p><b>SUHU TERLALU TINGGI : ${suhu}</b></p>
            </div>
            `
                $('.box-notif').addClass('active');
            }

            $('.box-notif').addClass('active');
        }
        if (ph <= 6 || suhu <= 25) {
            if (ph <= 6) {
                isiHtml += `
            <div class="alert bg-secondary" role="alert">
                <p><b>PH TERLALU RENDAH : ${ph}</b></p>
            </div>
            `
            }
            if (suhu <= 25) {
                isiHtml += `
            <div class="alert bg-secondary" role="alert">
                <p><b>SUHU TERLALU DINGIN : ${suhu}</b></p>
            </div>
            `
                $('.box-notif').addClass('active');
            }

            $('.box-notif').addClass('active');
        }
        $('.box-notif').html(isiHtml);
        $('#Ph').html(ph)
        $('#Suhu').html(suhu)
    });
</script>


</script>


<script>
    const dataChart1 = document.getElementById('realtimePHChart').getContext('2d');
    const labels = [];
    const dataPoints = [];

    @foreach ($dataTerakhir as $data)
        labels.push(
            '{{ $data->updated_at->format('H:i:s') }}'); // Menggunakan push untuk menambahkan di akhir array
        dataPoints.push('{{ $data->ph_air }}'); // Menggunakan push untuk menambahkan di akhir array
    @endforeach

    const chart2 = new Chart(dataChart1, {
        type: 'line',
        data: {
            labels: labels,
            datasets: [{
                label: 'pH Air',
                data: dataPoints,
                borderWidth: 4,
                borderColor: 'rgba(255, 0, 0)',
                tension: 0.4,
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

    var ambilLokal = JSON.parse(localStorage.getItem("dataLokal"));
</script>

<script>
    const dataChart2 = document.getElementById('realtimePHChart2').getContext('2d');
    const labels2 = [];
    const dataPoints2 = [];

    @foreach ($dataTerakhir3 as $data)
        labels2.push(
            '{{ $data->updated_at->format('H:i:s') }}'); // Menggunakan push untuk menambahkan di akhir array
        dataPoints2.push('{{ $data->suhu_air }}'); // Menggunakan push untuk menambahkan di akhir array
    @endforeach

    const chart3 = new Chart(dataChart2, {
        type: 'line',
        data: {
            labels: labels2,
            datasets: [{
                label: 'Suhu Air',
                data: dataPoints2,
                borderWidth: 4,
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

    var ambilLokal = JSON.parse(localStorage.getItem("dataLokal"));
</script>
