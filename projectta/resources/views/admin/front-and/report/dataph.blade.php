<div class="col-sm-12">
    <div class="card">
        <div class="card-header d-flex justify-content-between bg-success">
            <div class="header-title">
                <h4 class="card-title">Data report</h4>
            </div>
        </div>
        <div class="card-body">
            <button id="button" onclick="htmlTableToExcel('xlsx')" class="btn btn-primary btn-sm me-1 mb-2 mb-sm-0 float-right"
                        type="button"><span class="fas fa-arrow-down me-1"> </span> Export Data
            </button>
            <br>
            <br>
            <div class="table-responsive">
                <table id="tblToExcl" class="table data-tables table-striped">
                    <thead>
                        <tr class="ligth text-center">
                            <th width=25px> No </th>
                            <th width=20px>pH Air</th>
                            <th width=20px>Suhu Air</th>
                            <th width="70px">Tanggal</th>
                            <th width="80px">Waktu</th>
                            <th width="75px">Status suhu</th>
                            <th width="75px">Status ph</th>
                            <th width="75px">Status Pakan</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no = 1;
                        @endphp
                        @foreach ($dataTerakhir as $Monitor)
                            <tr>
                                <td style="text-align: center">{{ $no++ }}</td>
                                <td style="text-align: center">{{ $Monitor->ph_air }}</td>
                                <td style="text-align: center">{{ $Monitor->suhu_air }}° C</td>
                                <td style="text-align: center">{{ $Monitor->created_at->format('l,  j F Y') }}</td>
                                <td style="text-align: center">
                                    {{ $Monitor->created_at->format('H:i:s') }}
                                </td>
                                {{-- <td>
                                    @if ($Monitor->status ===  Suhu Terlau Dingin)
                                        <button type="button" class="btn btn-block btn-info btn-sm"><b>
                                                Suhu Terlalu Dingin </b></button>
                                    @endif
                                    @if ($Monitor->status === Suhu Terlalu Panas)
                                        <button type="button" class="btn btn-block btn-secondary btn-sm"><b>
                                                Suhu Terlalu Panas </b></button>
                                    @endif
                                </td> --}}
                                <td style="text-align: center">{{ $Monitor->status }}</td>
                                <td style="text-align: center">{{ $Monitor->status_ph }}</td>
                                <td style="text-align: center">-</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript" src="https://unpkg.com/xlsx@0.15.1/dist/xlsx.full.min.js"></script>

{{-- <script>
    $(document).ready(function () {
        $("#filterButton").click(function () {
            var startDate = $("#startDate").val();
            var endDate = $("#endDate").val();

            $.ajax({
                type: "GET",
                url: "{{ url('admin/front-and/report/exportByRange') }}", // Ganti dengan URL rute eksport data Anda
                data: {
                    mulai_tanggal: startDate,
                    selesai_tanggal: endDate
                },
                success: function (response) {
                    $("#tblToExcl tbody").html(response);
                }
            });
        });
    });
</script> --}}


<script type="text/javascript">
    function htmlTableToExcel(type) {
        var data = document.getElementById('tblToExcl');
        var excelFile = XLSX.utils.table_to_book(data, {
            sheet: "sheet1"
        });
        XLSX.write(excelFile, {
            bookType: type,
            bookSST: true,
            type: 'base64'
        });
        XLSX.writeFile(excelFile, 'Data report.' + type);
    }
</script>
