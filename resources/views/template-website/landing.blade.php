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
    <link
        href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;500&display=swap"
        rel="stylesheet">

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
    <div class="content" style="margin-top:80px;">
        <!-- Callback Start -->
        <div class="container-xxl callback p-0 mb-5">
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-interval="3000" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="{{ asset('assets-web/img/background/background-banner-landing.png') }}" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="https://ihram.s3.amazonaws.com/ihram/upload/banner/ihram_asia_banner_promosi_0e41943a87b47d33081cca56c69bf180.jpg" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="https://ihram.s3.amazonaws.com/ihram/upload/banner/ihram_asia_banner_promosi_c610ae0834348a63912c2bbfeb9ea5ce.jpg" alt="Third slide">
                    </div>
                </div>
            </div>
            <div class="container" style="position: relative;top: -20px;">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="bg-white border rounded wow fadeInUp" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                            <form class="row" action="">
                                <div class="col-md-10">
                                    <div class="row">
                                        <div class="col-sm-3 justify-content-md-center">
                                            <label class="visually-hidden" for="specificSizeInputGroupUsername">Username</label>
                                            <div class="input-group">
                                                <div class="input-group-text">@</div>
                                                <input type="text" class="form-control" id="specificSizeInputGroupUsername" placeholder="Username">
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <label class="visually-hidden" for="specificSizeInputGroupUsername">Username</label>
                                            <div class="input-group">
                                                <div class="input-group-text">@</div>
                                                <input type="text" class="form-control" id="specificSizeInputGroupUsername" placeholder="Username">
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <label class="visually-hidden" for="specificSizeInputGroupUsername">Username</label>
                                            <div class="input-group">
                                                <div class="input-group-text">@</div>
                                                <input type="text" class="form-control" id="specificSizeInputGroupUsername" placeholder="Username">
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <label class="visually-hidden" for="specificSizeInputGroupUsername">Username</label>
                                            <div class="input-group">
                                                <div class="input-group-text">@</div>
                                                <input type="text" class="form-control" id="specificSizeInputGroupUsername" placeholder="Username">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2 justify-content-md-center">
                                    <button type="submit" class="btn btn-success my-2 my-sm-0" type="submit">Daftar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Callback End -->

        <!-- Banner Start -->
        <div class="container-xxl py-5">
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.3s">
                <div class="testimonial-item">
                    <div class="bg-white testimonial-text border rounded p-4 pt-5 mb-5">
                        <div class="btn-square bg-white border rounded-circle">
                            <i class="fa fa-quote-right fa-2x text-primary"></i>
                        </div>
                        Tadinya takut umroh sendiri, lalu coba UMRA.ID umroh jadi seru dan berkesan
                    </div>
                    <img class="rounded-circle mb-3" src="{{ asset('assets-web/img/testimonial-1.jpg')}}" alt="">
                    <h4 class="text-white">Client Name</h4>
                    <span class="text-light">Profession</span>
                </div>
                <div class="testimonial-item">
                    <div class="bg-white testimonial-text border rounded p-4 pt-5 mb-5">
                        <div class="btn-square bg-white border rounded-circle">
                            <i class="fa fa-quote-right fa-2x text-primary"></i>
                        </div>
                        Lebih fleksibel mengatur umroh bersama keluarga pakai UMRA.ID
                    </div>
                    <img class="rounded-circle mb-3" src="{{ asset('assets-web/img/testimonial-2.jpg')}}" alt="">
                    <h4 class="text-white">Client Name</h4>
                    <span class="text-light">Profession</span>
                </div>
                <div class="testimonial-item">
                    <div class="bg-white testimonial-text border rounded p-4 pt-5 mb-5">
                        <div class="btn-square bg-white border rounded-circle">
                            <i class="fa fa-quote-right fa-2x text-primary"></i>
                        </div>
                        Lebih fleksibel mengatur umroh bersama keluarga pakai UMRA.ID
                    </div>
                    <img class="rounded-circle mb-3" src="{{ asset('assets-web/img/testimonial-3.jpg')}}" alt="">
                    <h4 class="text-white">Client Name</h4>
                    <span class="text-light">Profession</span>
                </div>
                <div class="testimonial-item">
                    <div class="bg-white testimonial-text border rounded p-4 pt-5 mb-5">
                        <div class="btn-square bg-white border rounded-circle">
                            <i class="fa fa-quote-right fa-2x text-primary"></i>
                        </div>
                        Lebih fleksibel mengatur umroh bersama keluarga pakai UMRA.ID
                    </div>
                    <img class="rounded-circle mb-3" src="{{ asset('assets-web/img/testimonial-4.jpg')}}" alt="">
                    <h4 class="text-white">Client Name</h4>
                    <span class="text-light">Profession</span>
                </div>
            </div>
        </div>
        <!-- Banner End -->


        <!-- Package Umroh Start -->
        <div class="container-xxl py-5">
            <div class="row">
                <div class="col-md-6">
                    <h3 class="mb-4">Paket Ibadah Umrah</h3>
                    <p class="mb-4">Perjalanan umroh lengkap dengan paket hotel berbintang, penerbangan & VISA.</p>
                    <a href="" class="btn btn-primary py-3 px-5 mt-3">Read More</a>
                </div>
                <div class="col-md-3">
                    <div class="card" style="width: 100$;">
                        <div class="card-body">
                            <img src="https://asset.kompas.com/crops/_Gklmi7JJu6ArpsXWwE8pd0ybfM=/0x0:739x493/750x500/data/photo/2020/06/04/5ed85d403302a.jpg" width="100%" alt="" srcset="">
                            <h5 class="card-title mt-4">Dengan Teknologi Umroh bisa sendiri dengan blablabla</h5>
                            <p>28 May 2022 00:21</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card" style="width: 100$;">
                        <div class="card-body">
                            <img src="https://asset.kompas.com/crops/_Gklmi7JJu6ArpsXWwE8pd0ybfM=/0x0:739x493/750x500/data/photo/2020/06/04/5ed85d403302a.jpg" width="100%" alt="" srcset="">
                            <h5 class="card-title mt-4">Dengan Teknologi Umroh bisa sendiri dengan blablabla</h5>
                            <p>28 May 2022 00:21</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Package Umroh End -->

        <!-- Package Umroh Plush Start -->
        <div class="container-fluid py-5" style="background-image:url('{{ asset('assets-web/img/background/background-2.png') }}');">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h3 class="text-white mb-4">Paket Ibadah Umrah</h3>
                        <p class="text-white mb-4">Perjalanan umroh lengkap dengan paket hotel berbintang, penerbangan & VISA.</p>
                        <a href="" class="btn btn-primary py-3 px-5 mt-3">Read More</a>
                    </div>
                    <div class="col-md-3">
                        <div class="card" style="width: 100$;">
                            <div class="card-body">
                                <img src="https://asset.kompas.com/crops/_Gklmi7JJu6ArpsXWwE8pd0ybfM=/0x0:739x493/750x500/data/photo/2020/06/04/5ed85d403302a.jpg" width="100%" alt="" srcset="">
                                <h5 class="card-title mt-4">Dengan Teknologi Umroh bisa sendiri dengan blablabla</h5>
                                <p>28 May 2022 00:21</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card" style="width: 100$;">
                            <div class="card-body">
                                <img src="https://asset.kompas.com/crops/_Gklmi7JJu6ArpsXWwE8pd0ybfM=/0x0:739x493/750x500/data/photo/2020/06/04/5ed85d403302a.jpg" width="100%" alt="" srcset="">
                                <h5 class="card-title mt-4">Dengan Teknologi Umroh bisa sendiri dengan blablabla</h5>
                                <p>28 May 2022 00:21</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Package Umroh End -->

    
        <!-- Why Worship Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center mx-auto wow fadeInUp  mb-5" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h1 class="display-5">Mengapa ibadah Umrah & wisata bersama Umra.ID?</h1>
                    <p>Kami selalu berusaha konsisten memberikan pelayanan terbaik kepada jamaah yang berangkat beribadah bersama kami sejak 2012 UMRA telah memiliki izin resmi untuk melayani anda.</p>
                </div>
                <div class="row g-5">
                    <div class="col-sm-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeIn;">
                        <img src="{{ asset('assets-web/img/icon/izin.png') }}" alt="" srcset="">
                        <h5 class="text-dark mt-4" >Berizin Resmi</h5>
                        <span class="text-dark">Memiliki izin resmi untuk perjalanan umrah dari KEMENAG sejak 2012</span>
                    </div>
                    <div class="col-sm-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeIn;">
                        <img src="{{ asset('assets-web/img/icon/asuransi.png') }}" alt="" srcset="">
                        <h5 class="text-dark mt-4" >Asuransi Perjalanan</h5>
                        <span class="text-dark">Setiap perjalanan jamaah diberikan kebebasan memilih asuransi terbaik</span>
                    </div>
                    <div class="col-sm-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeIn;">
                        <img src="{{ asset('assets-web/img/icon/hotel.png') }}" alt="" srcset="">
                        <h5 class="text-dark mt-4" >Hotel Berbintang</h5>
                        <span class="text-dark">Kami telah bekerjasama dengan hotel terbaik agar ibadah anda lebih khusyu’</span>
                    </div>
                    <div class="col-sm-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.7s" style="visibility: visible; animation-delay: 0.7s; animation-name: fadeIn;">
                        <img src="{{ asset('assets-web/img/icon/bantuan.png') }}" alt="" srcset="">
                        <h5 class="text-dark mt-4" >Bantuan Setiap Saat</h5>
                        <span class="text-dark">Layanan pelanggan kami beroperasi sepanjang waktu untuk membantu anda.</span>
                    </div>
                </div>
            </div>
        </div>
        <!-- Why Worship End -->


        <!-- Banner Start -->
        <div class="container-fluid bg-green-light py-5">
            <div class="container">
                <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h1 class="display-5 mb-5">INI IMAGE BANNER</h1>
                </div>

            </div>
        </div>
        <!-- Banner End -->


        <!-- Explore& wisata Start -->
        <div class="container-fluid py-5" style="background-image:url('{{ asset('assets-web/img/background/background-2.png') }}');">
            <div class="container">
                <div class="text-white text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h1 class="display-5 text-white mb-5">INI IMAGE BANNER</h1>
                    <p>Berangkat beribadah tidak pernah semenyenangkan ini dengan bebas atur fasilitas hotel, pesawat, asuransi, visa & destinasi wisata halal impian anda.</p>
                </div>

            </div>
        </div>
        <!-- Explore& wisata End -->

        
        <!-- Experience Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h1 class="display-5 mb-5">Pengalaman ibadah mereka bersama UMRA.ID</h1>
                </div>
                <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.3s">
                    <div class="testimonial-item">
                        <div class="bg-white testimonial-text border rounded p-4 pt-5 mb-5">
                            <div class="btn-square bg-white border rounded-circle">
                                <i class="fa fa-quote-right fa-2x text-primary"></i>
                            </div>
                            Tadinya takut umroh sendiri, lalu coba UMRA.ID umroh jadi seru dan berkesan
                        </div>
                        <img class="rounded-circle mb-3" src="{{ asset('assets-web/img/testimonial-1.jpg')}}" alt="">
                        <h4 class="text-white">Client Name</h4>
                        <span class="text-light">Profession</span>
                    </div>
                    <div class="testimonial-item">
                        <div class="bg-white testimonial-text border rounded p-4 pt-5 mb-5">
                            <div class="btn-square bg-white border rounded-circle">
                                <i class="fa fa-quote-right fa-2x text-primary"></i>
                            </div>
                            Lebih fleksibel mengatur umroh bersama keluarga pakai UMRA.ID
                        </div>
                        <img class="rounded-circle mb-3" src="{{ asset('assets-web/img/testimonial-2.jpg')}}" alt="">
                        <h4 class="text-white">Client Name</h4>
                        <span class="text-light">Profession</span>
                    </div>
                    <div class="testimonial-item">
                        <div class="bg-white testimonial-text border rounded p-4 pt-5 mb-5">
                            <div class="btn-square bg-white border rounded-circle">
                                <i class="fa fa-quote-right fa-2x text-primary"></i>
                            </div>
                            Lebih fleksibel mengatur umroh bersama keluarga pakai UMRA.ID
                        </div>
                        <img class="rounded-circle mb-3" src="{{ asset('assets-web/img/testimonial-3.jpg')}}" alt="">
                        <h4 class="text-white">Client Name</h4>
                        <span class="text-light">Profession</span>
                    </div>
                    <div class="testimonial-item">
                        <div class="bg-white testimonial-text border rounded p-4 pt-5 mb-5">
                            <div class="btn-square bg-white border rounded-circle">
                                <i class="fa fa-quote-right fa-2x text-primary"></i>
                            </div>
                            Lebih fleksibel mengatur umroh bersama keluarga pakai UMRA.ID
                        </div>
                        <img class="rounded-circle mb-3" src="{{ asset('assets-web/img/testimonial-4.jpg')}}" alt="">
                        <h4 class="text-white">Client Name</h4>
                        <span class="text-light">Profession</span>
                    </div>
                </div>
            </div>
        </div>
        <!-- Experience End -->


        <!-- Testimonial Start -->
        <div class="container-fluid bg-green py-5">
            <div class="container">
                <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h1 class="text-white display-5 mb-5">Apa kata mereka tentang UMRA.ID?</h1>
                </div>
                <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.3s">
                    <div class="testimonial-item">
                        <div class="bg-white testimonial-text border rounded p-4 pt-5 mb-5">
                            <div class="btn-square bg-white border rounded-circle">
                                <i class="fa fa-quote-right fa-2x text-primary"></i>
                            </div>
                            Tadinya takut umroh sendiri, lalu coba UMRA.ID umroh jadi seru dan berkesan
                        </div>
                        <img class="rounded-circle mb-3" src="{{ asset('assets-web/img/testimonial-1.jpg')}}" alt="">
                        <h4 class="text-white">Client Name</h4>
                        <span class="text-light">Profession</span>
                    </div>
                    <div class="testimonial-item">
                        <div class="bg-white testimonial-text border rounded p-4 pt-5 mb-5">
                            <div class="btn-square bg-white border rounded-circle">
                                <i class="fa fa-quote-right fa-2x text-primary"></i>
                            </div>
                            Lebih fleksibel mengatur umroh bersama keluarga pakai UMRA.ID
                        </div>
                        <img class="rounded-circle mb-3" src="{{ asset('assets-web/img/testimonial-2.jpg')}}" alt="">
                        <h4 class="text-white">Client Name</h4>
                        <span class="text-light">Profession</span>
                    </div>
                    <div class="testimonial-item">
                        <div class="bg-white testimonial-text border rounded p-4 pt-5 mb-5">
                            <div class="btn-square bg-white border rounded-circle">
                                <i class="fa fa-quote-right fa-2x text-primary"></i>
                            </div>
                            Lebih fleksibel mengatur umroh bersama keluarga pakai UMRA.ID
                        </div>
                        <img class="rounded-circle mb-3" src="{{ asset('assets-web/img/testimonial-3.jpg')}}" alt="">
                        <h4 class="text-white">Client Name</h4>
                        <span class="text-light">Profession</span>
                    </div>
                    <div class="testimonial-item">
                        <div class="bg-white testimonial-text border rounded p-4 pt-5 mb-5">
                            <div class="btn-square bg-white border rounded-circle">
                                <i class="fa fa-quote-right fa-2x text-primary"></i>
                            </div>
                            Lebih fleksibel mengatur umroh bersama keluarga pakai UMRA.ID
                        </div>
                        <img class="rounded-circle mb-3" src="{{ asset('assets-web/img/testimonial-4.jpg')}}" alt="">
                        <h4 class="text-white">Client Name</h4>
                        <span class="text-light">Profession</span>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->


        <!-- Partner Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h1 class="display-5 mb-5">Partner Terpercaya Kami</h1>
                    <p>Kami memiliki partner yang terpercaya di bidangnya, dan kami selalu berusaha memberikan pengalaman terbaik untuk ibadah Anda</p>
                </div>

            </div>
        </div>
        <!-- Partner End -->


        <!-- Artikel Start -->
        <div class="container-fluid bg-green py-5 artikel">
            <div class="container py-5">
                <div class="row text-white justify-content-between mb-5">
                    <div class="col-md-6 col-sm-12">
                        <h1 class="text-white display-5">Artikel Tentang Kami</h1>
                    </div>
                    <div class="col-md-6 col-sm-12 text-md-end">
                        <a href="#">Lihat Semua ></a>
                    </div>
                </div>

                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="card" style="width: 100$;">
                            <div class="card-body">
                                <img src="https://asset.kompas.com/crops/_Gklmi7JJu6ArpsXWwE8pd0ybfM=/0x0:739x493/750x500/data/photo/2020/06/04/5ed85d403302a.jpg" width="100%" alt="" srcset="">
                                <h5 class="card-title mt-4">Dengan Teknologi Umroh bisa sendiri dengan blablabla</h5>
                                <p>28 May 2022 00:21</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="row g-4 align-items-center">
                            <div class="col-md-6">
                                <div class="card" style="width: 100$;">
                                    <div class="card-body">
                                        <img src="https://asset.kompas.com/crops/_Gklmi7JJu6ArpsXWwE8pd0ybfM=/0x0:739x493/750x500/data/photo/2020/06/04/5ed85d403302a.jpg" width="100%" alt="" srcset="">
                                        <h5 class="card-titl mt-4">Dengan Teknologi Umroh bisa sendiri dengan blablabla</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card" style="width: 100$;">
                                    <div class="card-body">
                                        <img src="https://asset.kompas.com/crops/_Gklmi7JJu6ArpsXWwE8pd0ybfM=/0x0:739x493/750x500/data/photo/2020/06/04/5ed85d403302a.jpg" width="100%" alt="" srcset="">
                                        <h5 class="card-title mt-4">Dengan Teknologi Umroh bisa sendiri dengan blablabla</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card" style="width: 100$;">
                                    <div class="card-body">
                                        <img src="https://asset.kompas.com/crops/_Gklmi7JJu6ArpsXWwE8pd0ybfM=/0x0:739x493/750x500/data/photo/2020/06/04/5ed85d403302a.jpg" width="100%" alt="" srcset="">
                                        <h5 class="card-title mt-4">Dengan Teknologi Umroh bisa sendiri dengan blablabla</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card" style="width: 100$;">
                                    <div class="card-body">
                                        <img src="https://asset.kompas.com/crops/_Gklmi7JJu6ArpsXWwE8pd0ybfM=/0x0:739x493/750x500/data/photo/2020/06/04/5ed85d403302a.jpg" width="100%" alt="" srcset="">
                                        <h5 class="card-title mt-4">Dengan Teknologi Umroh bisa sendiri dengan blablabla</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->
    </div>
    


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