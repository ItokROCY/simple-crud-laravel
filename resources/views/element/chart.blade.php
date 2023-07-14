@extends('layout.template')
@section('content')
    <div class="card shadow my-1">
        <div class="card-body">
            <canvas id="barChart"></canvas>

            <script>
                var ctx = document.getElementById('barChart').getContext('2d');
                var chart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: {!! json_encode($labels) !!},
                        datasets: [{
                            label: 'Jumlah Barang',
                            data: {!! json_encode($data) !!},
                            backgroundColor: 'rgb(248, 111, 3)',
                            borderColor: 'rgb(255,255,255)',
                            borderWidth: 1
                        }]
                    },
                    options: {
                        scales: {
                            y: {
                                beginAtZero: true,
                                precision: 0
                            }
                        }
                    }
                });
            </script>
        </div>
    </div>
    <div class="mt-4">
        <div class="btn-group" role="group">
            <a type="button" class="btn btn-outline-primary" href="/">Tambah
                Barang</a>
            <a type="button" class="btn btn-outline-primary" href="/barang-kategori">Tambah
                Kategori</a>
            <a type="button" class="btn btn-secondary" href="/chart">Chart</a>
        </div>
    </div>
@endsection

{{-- <canvas id="lineChart"></canvas>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Ambil data dari Blade template
        var label = {!! json_encode($label) !!};
        var values = {!! json_encode($values) !!};



        // var formattedLabels = label.map(function(label) {
        // var date = new Date(label);
        // var formattedDate = date.toLocaleDateString('en-US', {
        //     day: '2-digit',
        //     month: 'short'
        // });
        // return formattedDate;
        // });

        // Buat line chart menggunakan Chart.js
        var ctx = document.getElementById('lineChart').getContext('2d');
        new Chart(ctx, {
            type: 'bar',
            data: {
                label: label,
                datasets: [{
                    label: 'Rata-rata Output per Hari',
                    data: [values],
                    backgroundColor: 'rgba(0, 123, 255, 0.5)', // Atur warna latar belakang
                    borderColor: 'rgba(0, 123, 255, 1)', // Atur warna garis
                    borderWidth: 1, // Atur lebar garis
                }]
            },
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: false,
                        min: 500,
                        max: 900,
                    }
                }
            }
        });
    });
</script> --}}





{{-- <div>
        <canvas id="myChart" class="chartjs" width="undefined" height="undefined"></canvas>

    </div>
    <div id="hasil"></div>

    <script type="text/javascript">
        function ambilData() {
            var jsonStr = <?php echo json_encode($label); ?>;

            // JSONObject jObj = <?php echo json_encode($label); ?>;
            JSONArray arr = jsonStr.getJSONArray("nama_barang");

            // // var userObjList = JSON.parse(jsonStr);
            // // var roleList = [];
            // // userObjList.forEach(userObj => {
            // //     roleList.push(userObj.role);
            // });


            console.log(arr);
            return arr;
        }
        const ctx = document.getElementById('myChart');



        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ambilData(),
                datasets: [{
                    label: 'jumlah stok barang',
                    data: <?php echo json_encode($data); ?>,
                    borderWidth: 1
                }],
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: false
                    }
                }
            }
        });
    </script> --}}
