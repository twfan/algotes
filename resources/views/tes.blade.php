<!doctype html>
<html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
            integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css">
        <title>Hello, world!</title>

    </head>

    <body>
        <h1>Tes algostudio</h1>
        <div class="row">
            <div class="col-6">
                <canvas id="myBarChart"></canvas>
            </div>
            <div class="col-6">
                <canvas id="myChart"></canvas>
            </div>
        </div>
        <div class="container mt-5">
            <div class="row ">
                <div class="col">
                    <table id="myTable" class="display">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>Nama Konsumen</th>
                                <th>Alamat</th>
                                <th>Waktu</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Row 1 Data 1</td>
                                <td>Row 1 Data 2</td>
                                <td>Row 1 Data 1</td>
                                <td>Row 1 Data 2</td>
                            </tr>
                            <tr>
                                <td>Row 2 Data 1</td>
                                <td>Row 2 Data 2</td>
                                <td>Row 2 Data 1</td>
                                <td>Row 2 Data 2</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
        </script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
        <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>

        <script>
            let data;
            let label = [];
            let total = [];
            let labelBar = [];
            let totalBar = [];
            // let day= ['Mon','Tue','Wed','Thu','Fri','Sat','Sun'];

            //pie chart
            axios.get('http://127.0.0.1:8000/barang')
                .then(function (response) {
                    // handle success
                    // data = response;
                    for(let i = 0; i< response.data.length; i++){
                        label[i] = response.data[i].kategori;
                        total[i] = response.data[i].jumlah;
                    }
                    // console.log();
                    var ctx = document.getElementById('myChart').getContext('2d');
                    var chart = new Chart(ctx, {
                    // The type of chart we want to create
                    type: 'pie',

                    // The data for our dataset
                    data: {
                        labels: label,
                        datasets: [{
                            label: 'My First dataset',
                            backgroundColor: [
                            'rgb(8, 61, 119, 0.6)',
                            'rgb(12, 89, 172, 0.6)',
                            'rgb(147, 182, 242, 0.6)'
                            ],
                            hoverBackgroundColor: [
                                'rgb(8, 61, 119, 1)',
                                'rgb(12, 89, 172, 1)',
                                'rgb(147, 182, 242, 1)'
                            ],
                            data: total
                        }]
                    },

                    // Configuration options go here
                    options: {}
                });
                    })
                    .catch(function (error) {
                        // handle error
                        console.log(error);
                    })
                    .then(function () {
                        // always executed
                });

                let day = [];

            axios.get('http://127.0.0.1:8000/penjualan/perday')
            .then(function (response) {
            
                // console.log(response.data);
                let ctr=0;
                $.each(response.data, function (i) {
                    day[ctr] = i;
                    ctr++;
                });
                // console.log(response.data["Sun"].length);

                for(let i = 0; i< day.length;i++){
                    totalBar[i] = response.data[day[i]].length;
                }

                console.log(totalBar);

            

            var ctx3 = document.getElementById('myBarChart');
            var myChartBar = new Chart(ctx3, {
            type: 'bar',
            data: {
                labels: day,
                datasets: [
                    {
                        label: 'Total book sales ',
                        data: totalBar,
                        backgroundColor: [
                            'rgb(8, 61, 119, 0.2)',
                            'rgb(8, 61, 119, 0.2)',
                            'rgb(8, 61, 119, 0.2)',
                            'rgb(8, 61, 119, 0.2)',
                            'rgb(8, 61, 119, 0.2)',
                            'rgb(8, 61, 119, 0.2)',
                        ],
                        hoverBackgroundColor: 'rgb(8, 61, 119,1)',
                        barThickness: 10,
                    },
                ]
            },
            options: {
    scales: {
        yAxes: [{
            ticks: {
                beginAtZero: true
            }
        }]
    }
}
        });
            })
            .catch(function (error) {
                // handle error
                console.log(error);
            })
            .then(function () {
                // always executed
            });


            $(function(){
                axios.get('http://127.0.0.1:8000/penjualan')
                    .then(function (response) {
                            // console.log(response.data);
                        $('#myTable').DataTable({
                            data: response.data,
                            columns: [
                                { data: 'id' },
                                { data: 'nama_konsumen' },
                                { data: 'alamat' },
                                { data: 'created_at' }
                            ]
                            
                        });
                    })
                    .catch(function (error) {
                        // handle error
                        console.log(error);
                    })
                    .then(function () {
                        // always executed
                    });
            });

            
        </script>

    </body>

</html>