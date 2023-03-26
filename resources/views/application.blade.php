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

    <section class=" bg-white">
        <div class="container py-5">
            <div class="row justify-content-center align-items-center ">
                <div class="col">
                    <div class="card card-registration my-4">
                        <div class="row g-0 ">
                            <div class="col-xl-5 d-none d-xl-block">
                                <img src="img/application.jpg" alt="Sample photo" class="img-fluid" style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem; height: 850px !important;" />
                            </div>
                            <div class="col-xl-6 ms-5">
                                <div class="card-body p-md-5 text-black">
                                    <h3 class="mb-5 text-uppercase text-center">Daftar Beasiswa</h3>
                                    <form id="applicationForm" action="{{url('daftar')}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row mb-4">
                                            <div class="form-outline">
                                                <label class="form-label" for="name">Nama</label>
                                                <input type="text" id="name" name="name" required class="form-control form-control-lg @error('name') is-invalid @enderror" value="{{ old('name') }}" />
                                                @error('name')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="row mb-4">
                                            <div class="form-outline">
                                                <label class="form-label" for="email">Email</label>
                                                <input type="email" id="email" name="email" required class="form-control form-control-lg @error('email') is-invalid @enderror" value="{{ old('email') }}" />
                                                @error('email')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6 mb-4">
                                                <div class="form-outline">
                                                    <label class="form-label" for="number_phone">Nomor HP</label>
                                                    <input type="number" id="number_phone" name="number_phone" required class="form-control form-control-lg @error('number_phone') is-invalid @enderror" value="{{ old('number_phone') }}" />
                                                    @error('number_phone')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-4">
                                                <div class="form-group">
                                                    <label class="form-label" for="semester">Semester</label>
                                                    <select class="form-control form-control-lg @error('semester') is-invalid @enderror" id="semester" name="semester" required>
                                                        <option value="">Pilih Semester</option>
                                                        <option value="1" {{ old('semester') == '1' ? 'selected' : '' }}>1</option>
                                                        <option value="2" {{ old('semester') == '2' ? 'selected' : '' }}>2</option>
                                                        <option value="3" {{ old('semester') == '3' ? 'selected' : '' }}>3</option>
                                                        <option value="4" {{ old('semester') == '4' ? 'selected' : '' }}>4</option>
                                                        <option value="5" {{ old('semester') == '5' ? 'selected' : '' }}>5</option>
                                                        <option value="6" {{ old('semester') == '6' ? 'selected' : '' }}>6</option>
                                                        <option value="7" {{ old('semester') == '7' ? 'selected' : '' }}>7</option>
                                                        <option value="8" {{ old('semester') == '8' ? 'selected' : '' }}>8</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mb-4">
                                            <div class="form-outline">
                                                <label class="form-label" for="GPA">IPK</label>
                                                <input type="number" id="GPA" name="GPA" readonly class="form-control form-control-lg" />
                                            </div>
                                        </div>

                                        <div class="row mb-4">
                                            <div class="form-group">
                                                <label class="form-label" for="scholarship_id">Pilihan Beasiswa</label>
                                                <select class="form-control form-control-lg {{ $errors->has('scholarship_id') ? 'is-invalid' : '' }}" id="scholarship_id" name="scholarship_id" required>
                                                    <option value="">Pilih Beasiswa</option>
                                                    @foreach($scholarships as $scholarship)
                                                    <option value="{{ $scholarship->id }}">{{ $scholarship->name }}</option>
                                                    @endforeach
                                                </select>
                                                @if ($errors->has('scholarship_id'))
                                                <div class="invalid-feedback">
                                                    {{ $errors->first('scholarship_id') }}
                                                </div>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="row mb-4">
                                            <div class="row mb-2">
                                                <label for="file">Upload Berkas Syarat</label>
                                            </div>
                                            <div class="form-group">
                                                <input type="file" class="form-control-file {{ $errors->has('file') ? 'is-invalid' : '' }}" id="file" name="file" required>
                                                @if ($errors->has('file'))
                                                <div class="invalid-feedback">
                                                    {{ $errors->first('file') }}
                                                </div>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="d-flex justify-content-end pt-3">
                                            <button type="button" id="cancelBtn" class="btn btn-secondary btn-lg">Batal</button>
                                            <button type="submit" id="submitBtn" class="btn btn-danger btn-lg ms-2">Daftar</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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

    <script>
        //Set GPA value
        $(document).ready(function() {
            const dummyGPA = 3.9;
            $("#GPA").val(dummyGPA);
        })

        //Disable button if GPA < 3
        $(document).ready(function() {
            var gpaInput = $("#GPA");

            if (gpaInput.val() < 3) {
                $("#scholarship_id").prop("disabled", true);
                $("#scholarship_id").val("");

                $("#file").prop("disabled", true);
                $("#submitBtn").prop("disabled", true);
            } else {
                // Automatically focus on scholarship selection
                $("#scholarship_id").focus();
            }
        });

        //Reset all input except for GPA
        $(document).ready(function() {
            $('#cancelBtn').click(function() {
                $('#applicationForm').find(':input:not("#GPA")').val('');
            });
        });
    </script>
</body>

</html>