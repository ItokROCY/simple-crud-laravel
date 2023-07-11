@extends('layout.template')
@section('content')
    <div>
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
    </script>
@endsection
