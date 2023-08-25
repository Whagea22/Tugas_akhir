@extends('template.app')

@section('content')
    <a href="{{ url('admin/front-and/dashboard') }}" class="btn btn-xs btn-primary float-lift"><i
            class="bi bi-arrow-left-short"></i> Kembali </a>
    <div class="col-lg-12" style="text-align: center">
        <div class="card mt-4">
            <div class="card-header">
                <div class="card-title">
                    <h4>Solusi Ketika Suhu Air Kurang dari (25 C)</h4>
                </div>
            </div>
            <div class="card-body" style="text-align: justify">
                <br>- Air Penggantian: Lakukan penggantian air secara rutin dengan air bersih yang
                memiliki pH
                netral (sekitar 7) atau sedikit asam (kurang dari 7). Penggantian air yang teratur dapat
                membantu menurunkan pH secara perlahan.
                <br>
                - Pemfilteran: Pastikan sistem filter kolam berfungsi dengan baik. Filter yang baik
                dapat
                membantu mengurangi kandungan bahan kimia dan polutan lain yang mungkin mempengaruhi pH.
                <br>
                - Penggunaan Peat Moss: Tambahkan peat moss ke dalam filter atau langsung ke kolam. Peat
                moss memiliki sifat asam dan dapat membantu menurunkan pH secara alami.
                <br>
                - Penggunaan Turf Sod: Turf sod (lumpur dari bagian bawah kolam atau rawa) juga bisa
                membantu menurunkan pH. Anda bisa menambahkan beberapa lumpur ke dalam filter atau
                langsung ke kolam.
                <br>
                - Penggunaan Arang Aktif: Arang aktif juga dapat membantu menurunkan pH dengan menyerap
                bahan kimia yang dapat meningkatkan pH.
                <br>
                - Pengukuran Rutin: Lakukan pengukuran pH secara rutin untuk memantau perubahan dan
                mengetahui apakah solusi yang Anda terapkan berhasil atau tidak.
                <br>
                - Hati-hati dengan Bahan Kimia: Hindari penggunaan bahan kimia seperti kapur (lime) yang
                dapat meningkatkan pH. Selalu baca petunjuk dan dosis dengan teliti saat menggunakan
                produk kimia dalam kolam.
            </div>
        </div>
    </div>
@endsection
