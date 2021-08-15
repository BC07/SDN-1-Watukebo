<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!--   bootstrap  -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.css" rel="stylesheet" />

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">

    <!-- Font awesome icon CDN -->
    <script src="https://kit.fontawesome.com/a53375a708.js" crossorigin="anonymous"></script>

    <!-- Icon -->
    <link rel="Icon" href="{{ asset('assets/img/sd.png') }}">

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/css/common.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}" />
    <!-- Title -->
    <title>SDN 1 Watukebo</title>
</head>
<body>

    <!-- Navbar -->
    <nav class="_navbar">
        <a href="{{ route('beranda.index') }}">
            <img src="{{ asset('assets/img/sd.png') }}" alt="" srcset="">
        </a>
        <a href="#">
            <h4> SD Negeri 1 Watukebo </h4>
            <h6>Banyuwangi, Jawa Timur.</h6>
        </a>
        <ul class="menu-list">
            <div class="icon cencel-btn">
                <i class="fas fa-times"></i>
            </div>
            <li ><a href="{{ route('beranda.index') }}" >Beranda</a></li>
            <li ><a href="{{ route('tentang.index') }}" >Tentang Kami</a></li>
            <li ><a href="./program.html" >Program</a></li>
            <li ><a href="{{ route('informasi.index') }}" >Informasi</a></li>
        </ul>
        <div class="icon menu-btn">
            <i class="fas fa-bars"></i>
        </div>
    </nav>
    <!-- End Navbar -->

    <!-- Main -->

    <main>
        @yield('homeContent')
    </main>

    <!-- End Main -->

    <!-- Footer -->

    <footer class="text-center text-lg-start bg-light text-muted">
        <!-- Section: Links  -->
        <section class="footer">
            <div class="container text-center text-md-start mt-5">
            <!-- Grid row -->
            <div class="row mt-3">
                <!-- Grid column -->
                <div class="col-md-3 col-lg-4 col-xl-2 mx-auto mb-4">
                <!-- Content -->
                <img class="logoFooter" src="{{ asset('assets/img/sd.png') }}" alt="">
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-2 col-lg-2 col-xl-3 mx-auto mb-4">
                <!-- Links -->
                <h6 class="text-uppercase fw-bold mb-4">
                    About
                </h6>
                <p>Website ini memudahkan pendaftaran dan mendapatkan informasi tentang SDN 1 Watukebo</p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                <!-- Links -->
                <h6 class="text-uppercase fw-bold mb-4">
                    Contact and Information
                </h6>
                <h6>
                    <a href=""><i class="fas fa-map-marker-alt"></i>    Banyuwangi, Jawa Timur, Indonesia</a>
                </h6>
                <h6>
                    <a href=""><i class="fas fa-envelope"></i>   sdn1watukebo.sch.id</a>
                </h6>
                <h6>
                    <a href=""><i class="fas fa-phone"></i>   0(333)636246  </a>
                </h6>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-4 col-lg-3 col-xl-1 mx-auto mb-md-0 mb-4">
                <!-- Links -->
                <h6 class="text-uppercase fw-bold mb-4">
                    Popular
                </h6>
                <p><a href="">Pendaftaran Online</a>
                <p><a href="">Informasi</a>
                </p>
                </div>
                <!-- Grid column -->
            </div>
            <!-- Grid row -->
            </div>
        </section>

        <div class="text-center text-white" style="background-color: #1FAB89;">
            <!-- Grid container -->
            <div>
            <!-- Section: Social media -->
            <section>
                <a class="btn btn-link btn-floating btn-lg text-light m-1"><i class="fab fa-instagram"></i></a>
                <a class="btn btn-link btn-floating btn-lg text-light m-1"><i class="fas fa-envelope"></i></a>
                <a class="btn btn-link btn-floating btn-lg text-light m-1"><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-link btn-floating btn-lg text-light m-1"><i class="fab fa-youtube"></i></a>          </section>
            <!-- Section: Social media -->
            </div>
            <!-- Grid container -->
        </div>
        </footer>

        <!-- End Footer -->

    <!-- JS -->
    <!-- partial -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/js/index.js') }}"></script>
</body>
</html>