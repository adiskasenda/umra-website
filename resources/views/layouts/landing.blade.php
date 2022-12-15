<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Umra.id</title>
    <link rel="shortcut icon" href="{{ asset('assets-web/img/logo/logo_umra_icon.png') }}" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;500&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('assets-web/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets-web/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('assets-web/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('assets-web/css/style.css') }}" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
    <!-- Spinner End -->

    <!-- Navbar Start -->
    <div class="container-fluid fixed-top px-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light py-lg-0 wow fadeIn" data-wow-delay="0.1s">
                <a href="index.html" class="navbar-brand ms-4 ms-lg-0">
                    <img src="{{ asset('assets-web/img/icon/icon-logo.png') }}" alt="" srcset="">
                </a>
                <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav p-4 p-lg-0">
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Paket Perjalanan</a>
                            <div class="dropdown-menu border-light m-0">
                                <a href="#" class="dropdown-item">Paket Umrah</a>
                                <a href="#" class="dropdown-item">Paket Umrah Plush+</a>
                                <a href="#" class="dropdown-item">Wisata Halal</a>
                            </div>
                        </div>
                        <a href="index.html" class="nav-item nav-link">Tentang Kami</a>
                        <a href="about.html" class="nav-item nav-link">Artikel</a>
                        <a href="service.html" class="nav-item nav-link">Hubungi Kami</a>

                    </div>
                    <div class="form-inline ms-auto">
                        <a href="{{ url('/login') }}" class="my-2 my-sm-0 nav-link-href" type="submit">Masuk</a>
                        <a href="{{ url('/register') }}" class="btn btn-outline-success my-2 my-sm-0" type="submit">Daftar</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->

    <!-- Content -->
    @yield('content')

    <!-- Footer Start -->
    <div class="container-fluid text-dark footer bg-white wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-4 col-md-6">
                    <img src="{{ asset('assets-web/img/background/icon-logo-footer.png') }}" alt="{{ asset('assets-web/img/background/icon-logo-footer.png') }}">
                    <div class="pt-5">PT. UMRAH MANDIRI RILLAH AMANAH</div>
                    <div>SK. PPIU NO 177 TAHUN 2020</div>

                    <div class="d-flex pt-2">
                        <a class="btn btn-square btn-outline-dark rounded-circle me-2" href=""><i
                                class="fab fa-twitter"></i></a>
                        <a class="btn btn-square btn-outline-dark rounded-circle me-2" href=""><i
                                class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-outline-dark rounded-circle me-2" href=""><i
                                class="fab fa-youtube"></i></a>
                        <a class="btn btn-square btn-outline-dark rounded-circle me-2" href=""><i
                                class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 mb-5">
                            <h4 class="text-dark mb-4">Layanan</h4>
                            <a class="btn btn-link" href="">Umroh</a>
                            <a class="btn btn-link" href="">Umroh Plus+</a>
                            <a class="btn btn-link" href="">Wisata Halal</a>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-5">
                            <h4 class="text-dark mb-4">Perusahaan</h4>
                            <a class="btn btn-link" href="">Tentang Kami</a>
                            <a class="btn btn-link" href="">Lokasi Kami</a>
                            <a class="btn btn-link" href="">Kontak Kami</a>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <h4 class="text-dark mb-4">Lainya</h4>
                            <a class="btn btn-link" href="">Syarat & Ketentuan</a>
                            <a class="btn btn-link" href="">Kebijakan data pengguna</a>
                            <a class="btn btn-link" href="">FaQ</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Copyright Start -->
    <div class="container-fluid copyright py-4">
        <div class="container">
            <hr/>
            <div class="text-center">
                Copyright &copy; 2020, UMRA.ID.
            </div>
        </div>
    </div>
    <!-- Copyright End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets-web/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('assets-web/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('assets-web/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets-web/lib/owlcarousel/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('assets-web/lib/counterup/counterup.min.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('assets-web/js/main.js')}}"></script>
</body>

</html>