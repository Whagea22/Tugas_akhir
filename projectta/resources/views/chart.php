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
                    var lastProcessedMinute = null;

                    data.forEach(function(data) {
                        var waktu = new Date(data.created_at);
                        var jam = waktu.getUTCHours().toString().padStart(2, '0');
                        var menit = waktu.getUTCMinutes().toString().padStart(2, '0');
                        var currentMinute = jam + ':' + menit;

                        // Cek apakah data ini memiliki waktu yang sama dengan data sebelumnya
                        if (currentMinute !== lastProcessedMinute) {
                            chart.data.labels.push(currentMinute);
                            if (chart.data.labels.length > 12) {
                                chart.data.labels = chart.data.labels.slice(-12);
                            }
                            chart.data.datasets[0].data.push(data.ketinggian_air);
                            lastProcessedMinute = currentMinute;
                        }
                    });

                    chart.update();
                }
            });
        }
    </script>

<div class="col-xl-12" style="margin-bottom: 10px">
    <canvas id="realtime-chart"></canvas>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</div>
    public function chartMenit()
    {
        $data = DataKondisi::get();
        return response()->json($data);
    }
