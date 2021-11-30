<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> @yield('title')</title>

   

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"
        integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="{{ asset('css/style.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Barlow">
    @stack('css')
</head>



<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="{{ asset('images/logokemkes.png')}}">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="/">Beranda <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Tentang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">FAQ</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>



    <div class="container" style="margin-bottom: 60px;margin-top:90px;">
        <div class="d-flex justify-content-center">
            <div class="col-md-8 text-center">
                <h4 class="label-help">Apa Yang Bisa Kami Bantu</h4>
                {!! Form::open(['url'=>'search','method'=>'GET']) !!}
                <input type="text" name="keyword" class="form-control" placeholder="Cari Disini .....">
                {!! Form::close() !!}
            </div>
        </div>
    </div>
    @yield('content')

    <footer class="text-lg-start" style="background: #163342;padding-top:30px;color:white">
        <section class="">
            <div class="container text-md-start mt-5">
                <div class="row mt-3">
                    <div class="col-md-4 col-lg-5 col-xl-4 mx-auto mb-4">
                        <img src="{{ asset('images/DTO-logo-landscape.png')}}" width="200">
                        <p>
                            Jl. HR. Rasuna Said Blok X5 Kav. 4-9, Jakarta Selatan 12950 <br>
                            Telp: (021) 52907416-9<br>
                            Halo Kemenkes: (kode lokal) 1-500567
                        </p>
                    </div>
                    <div class="col-md-4 col-lg-4 col-xl-4 mx-auto mb-8">
                        <h6 class="text-uppercase fw-bold mb-4">Tentang Kami</h6>
                        <p><a href="#!" class="text-reset">Program</a></p>
                        <p><a href="#!" class="text-reset">Karir</a></p>
                        <p><a href="#!" class="text-reset">Faq</a></p>
                    </div>
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-md-0 mb-4">
                        <h6 class="text-uppercase fw-bold mb-4">Ikuti Kami</h6>
                        <p>
                            <a style="text-decoration: none;color:white" href="https://www.facebook.com/KementerianKesehatanRI"><i class="fa fa-facebook-square fa-2x" aria-hidden="true"></i></a>
                            <a style="text-decoration: none;color:white" href="https://www.instagram.com/kemenkes_ri/?hl=id"><i class="fa fa-instagram fa-2x" aria-hidden="true"></i></a>
                                <a style="text-decoration: none;color:white" href="https://twitter.com/KemenkesRI"><i class="fa fa-twitter-square fa-2x" aria-hidden="true"></i></a>
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </footer>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>