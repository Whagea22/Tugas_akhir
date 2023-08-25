@extends('template.app')

@section('content')
    <a href="{{ url('admin/front-and/dashboard') }}" class="btn btn-xs btn-primary float-lift"><i
            class="bi bi-arrow-left-short"></i> Kembali </a>
    <div class="col-lg-12" style="text-align: center">
        <div class="card mt-4">
            <div class="card-header bg-warning">
                <div class="card-title">
                    <h4>Solusi Ketika PH Air Kurang dari 6 (Asam)</h4>
                </div>
            </div>
            <div class="card-body" style="text-align: justify">
                <br>
                - Tambahkan Buffer: Jika pH terlalu rendah, tambahkan buffer seperti kapur pertanian atau kapur dolomit ke
                dalam kolam. Ini akan membantu meningkatkan pH secara perlahan.
                <br>
                - Tambahkan buffer secara bertahap dan periksa
                pH secara berkala untuk menghindari lonjakan pH yang tiba-tiba.
                <br>
                - Pembersihan Berkala: Bersihkan kolam secara berkala untuk menghindari penumpukan bahan organik yang dapat
                mempengaruhi pH. Sisa makanan ikan dan kotoran dapat menghasilkan asam dan mengurangi pH.
                <br>
                - Penggantian Air: Lakukan penggantian air sebagian secara rutin. Air baru dengan pH yang sesuai dapat
                membantu menjaga keseimbangan pH dalam kolam.
                <br>
                - Gunakan Batu Kapur: Letakkan batu kapur yang telah dicuci dan disiapkan di dasar kolam. Ini dapat membantu
                menjaga pH tetap stabil secara alami.
                <br>
                - Konsultasikan dengan Ahli: Jika masalah pH terus berlanjut, konsultasikan dengan ahli ikan koi atau ahli
                akuakultur. Mereka dapat memberikan panduan khusus berdasarkan kondisi kolam dan ikan koi Anda.
                <br>
                - Periksa Suhu Air: Suhu air juga dapat mempengaruhi pH. Pastikan suhu air tetap dalam kisaran yang sesuai
                untuk ikan koi. Perubahan suhu yang ekstrem dapat memengaruhi keseimbangan pH.
                <br>
                - Pentingnya Filtrasi: Pastikan sistem filtrasi berfungsi dengan baik. Filtrasi yang baik dapat membantu
                menjaga keseimbangan nutrisi dan kimia dalam kolam, termasuk pH.
                <br>
                - Penggunaan Tanaman Air: Memasukkan tanaman air seperti eceng gondok atau tanaman lain yang dapat menyerap
                kelebihan nutrisi dapat membantu menjaga keseimbangan kimia dalam kolam.
                <br>
                - Hindari Penggunaan Bahan Kimia Berlebihan: Jika Anda menggunakan bahan kimia seperti pupuk atau
                obat-obatan
                dalam kolam, pastikan untuk mengikuti petunjuk dengan cermat dan hindari penggunaan berlebihan yang dapat
                mempengaruhi pH.
            </div>
        </div>
    </div>
@endsection
