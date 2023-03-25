<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Beasiswa</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <link href="{{ URL::to('css/style.css')}}" rel="stylesheet" />
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-danger fixed-top p-4" id="mainNav">
        <div class="container">
            <a class="navbar-brand mb-0 h2" href="{{url('/')}}">Beasiswa</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars ms-1"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul style="font-size: 18px;" class="navbar-nav ms-auto py-4 py-lg-0">
                    <li class="nav-item me-3"><a class="nav-link active" aria-current="page" href="{{ url('/') }}#beasiswa">Pilihan Beasiswa</a></li>
                    <li class="nav-item me-3"><a class="nav-link active" href="{{ url('/daftar') }}">Daftar</a></li>
                    <li class="nav-item"><a class="nav-link active" href="{{ url('/hasil') }}">Hasil</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Masthead-->
    <header class="masthead">
        <div class="container">
            <div class="masthead-subheading">Selamat datang</div>
            <div style="font-size: 20px;" class="masthead-heading">Beasiswa Pendidikan Untuk Indonesia Menjadi Lebih Baik</div>
            <a type="button" class="btn btn-danger" href="{{url('/daftar')}}">
                Daftar Sekarang
            </a>
        </div>
    </header>
    <!-- Scholarships list-->
    <section class="page-section" id="beasiswa">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-heading">Pilihan Beasiswa</h2>
            </div>
            <div class="row">
                @foreach($scholarships as $scholarship)
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                        <img class="card-img-top" src="img/{{$scholarship->image_url}}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">{{$scholarship->name}}</h5>
                            <p class="card-text">{{$scholarship->description}}</p>
                            <button data-bs-toggle="modal" data-bs-target="#detail{{$scholarship->id}}" class="btn btn-danger">Detail</button>
                        </div>
                    </div>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="detail{{$scholarship->id}}" tabindex="-1" aria-labelledby="detailLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="detailLabel">{{$scholarship->name}}</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <img class="card-img-top p-2" src="img/{{$scholarship->image_url}}" alt="Card image cap">
                                <p class="p-2">{{$scholarship->description}}</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="page-section bg-light" id="beasiswa">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-heading">Total Penerima Beasiswa</h2>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div id="chart_div" style="width:100%;"></div>
                </div>
            </div>
    </section>

    <!-- Footer-->
    <footer class="text-center text-lg-start bg-danger">
        <div class="text-center p-4">
            <p class="text-light">© 2023 Copyright : Beasiswa</p>
        </div>
    </footer>

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>


    <!-- This is a JavaScript function that uses the Google Charts library to draw a horizontal bar chart showing the total number of scholarship recipients for each year (2021, 2022, and 2023) based on the data provided in an array. -->
    <script type="text/javascript">
        // Load the visualization library and set a callback function to run when the library is loaded
        google.charts.load('current', {
            'packages': ['corechart']
        });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Year', 'Total penerima beasiswa'],
                ['2021', 100],
                ['2022', 200],
                ['2023', 250]
            ]);

            var options = {
                colors: ['#bd1b4a', '#DB4437', '#F4B400'],
                title: 'Tabel total penerima beasiswa',
                width: 600,
                height: 400,
                legend: {
                    position: 'none'
                },
                chart: {
                    title: 'Total penerima beasiswa'
                },
                bars: 'horizontal', // Required for Material Bar Charts.
                hAxis: {
                    title: 'Total penerima beasiswa',
                    minValue: 0
                },
            };

            // Create a new BarChart and draw it in the chart_div element
            var chart = new google.visualization.BarChart($("#chart_div")[0]);
            chart.draw(data, options);
        }
    </script>
</body>

</html>