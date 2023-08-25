@extends('template.app')

@section('content')
    <div class="col-lg-12">
        <div class="d-flex flex-wrap flex-wrap align-items-center justify-content-between mb-4">
            <div>
                <h3 class="mb-3">Welcome To Sistem</h3>
                <h5>Monitoring dan Pemberian Pakan Otomatis Berbasis IOT</h5>
            </div>
        </div>
    </div>

    @include('admin.front-and.dashboard.test')

    <div class="col-sm-12 col-lg-12">
        <div class="alert alert-success" role="alert">
            <div class="iq-alert-text">
                <h4><b>Keterangan !!</b></h4>
                <h6 class="mb-0"><b>1.</b> Ketikan Ph Air di atas 9. Maka sifat air adalah basa
                </h6>
                <h6 class="mb-0"><b>2.</b> Ketikan Ph Air di bawah 7. Maka sifat air adalah Asam (Ph yang ideal untuk ikan
                    jenis air tawar yaitu 7-8).
                </h6>
                <h6 class="mb-0"><b>3.</b> Suhu standar pada kolam ikan yaitu berkisaran 25-29° C</h6>
                <h6 class="mb-0"><b>4.</b> Ketika suhu air pada kolam ikan jika melebihi 29° C maka tidak diharuskan untuk
                    memberikan pakan pada ikan.
                    sehari.
                </h6>
                <h6 class="mb-0"><b>5.</b> Untuk pemberian pakan yang ideal pada ikan jenis air tawar yaitu 2-3 kali
                    sehari.
                </h6>
            </div>
        </div>
    </div>
@endsection
