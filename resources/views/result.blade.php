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
</head>

<style>
    section {
        padding: 4rem 0;
    }

    .card {
        font-size: 1.2rem;
        margin-top: 20px;
    }

    .card li {
        padding: 10px;
    }

    .card-body {
        height: 480px;
        padding: 20px;
    }
</style>

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

    <section class="">
        <div class="container py-5">
            <div class="row">
                @foreach ($applications as $application)
                <div class="col-md-12">
                    <div class="card mb-4 shadow-sm">
                        <div class="card-header">
                            <h4 class="my-0 font-weight-normal text-center p-2">Status Pendaftaran Beasiswa</h4>
                        </div>
                        <div class="card-body">
                            <ul class="list-unstyled">
                                <li>Nama: {{ $application->name }}</li>
                                <li>Email: {{ $application->email }}</li>
                                <li>Nomor HP: {{ $application->number_phone }}</li>
                                <li>Semester: {{ $application->semester }}</li>
                                <li>IPK: {{ $application->GPA }}</li>
                                <li>Beasiswa: {{ $application->scholarship->name }}</li>
                                <li>Berkas: <a href="{{ asset('storage/'.$application->file) }}" target="_blank">Lihat Berkas</a></li>
                                <li>Tanggal Pendaftaran: {{ $application->date_applied }}</li>
                                <li>Status Ajuan: {{ $application->status }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    @if(session()->has('message'))
    <div class="modal" tabindex="-1" id="successModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Success</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Pengajuan berhasil dikirim</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Selesai</button>
                </div>
            </div>
        </div>
    </div>
    @endif

    <!-- Footer-->
    <footer class="text-center text-lg-start bg-danger">
        <div class="text-center p-4">
            <p class="text-light">© 2023 Copyright : Beasiswa</p>
        </div>
    </footer>

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
    <script>
        //Show modal after success input from application
        var myModal = new bootstrap.Modal($('#successModal'));
        myModal.toggle();
    </script>


</body>

</html>