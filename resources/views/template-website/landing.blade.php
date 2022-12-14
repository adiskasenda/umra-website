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
        <nav class="navbar navbar-expand-lg navbar-light py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
            <a href="index.html" class="navbar-brand ms-4 ms-lg-0">
                <h1 class="display-5 text-primary m-0">Finanza</h1>
            </a>
            <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse"
                data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto p-4 p-lg-0">
                    <a href="index.html" class="nav-item nav-link active">Home</a>
                    <a href="about.html" class="nav-item nav-link">About</a>
                    <a href="service.html" class="nav-item nav-link">Services</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu border-light m-0">
                            <a href="project.html" class="dropdown-item">Projects</a>
                            <a href="feature.html" class="dropdown-item">Features</a>
                            <a href="team.html" class="dropdown-item">Team Member</a>
                            <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                            <a href="404.html" class="dropdown-item">404 Page</a>
                        </div>
                    </div>
                    <a href="contact.html" class="nav-item nav-link">Contact</a>
                </div>
                <div class="d-none d-lg-flex ms-2">
                    <a class="btn btn-light btn-sm-square rounded-circle ms-3" href="">
                        <small class="fab fa-facebook-f text-primary"></small>
                    </a>
                    <a class="btn btn-light btn-sm-square rounded-circle ms-3" href="">
                        <small class="fab fa-twitter text-primary"></small>
                    </a>
                    <a class="btn btn-light btn-sm-square rounded-circle ms-3" href="">
                        <small class="fab fa-linkedin-in text-primary"></small>
                    </a>
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->


    <!-- Content -->
    <div class="content">
        <!-- Carousel Start -->
        <!-- <div class="container-fluid p-0 mb-5 wow fadeIn" data-wow-delay="0.1s">
            <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="w-100" src="{{ asset('assets-web/img/carousel-1.jpg')}}" alt="Image">
                        <div class="carousel-caption">
                            <div class="container">
                                <div class="row justify-content-start">
                                    <div class="col-lg-8">
                                        <p
                                            class="d-inline-block border border-white rounded text-primary fw-semi-bold py-1 px-3 animated slideInDown">
                                            Welcome to Finanza</p>
                                        <h1 class="display-1 mb-4 animated slideInDown">Your Financial Status Is Our Goal
                                        </h1>
                                        <a href="" class="btn btn-primary py-3 px-5 animated slideInDown">Explore More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="w-100" src="{{ asset('assets-web/img/carousel-2.jpg')}}" alt="Image">
                        <div class="carousel-caption">
                            <div class="container">
                                <div class="row justify-content-start">
                                    <div class="col-lg-7">
                                        <p
                                            class="d-inline-block border border-white rounded text-primary fw-semi-bold py-1 px-3 animated slideInDown">
                                            Welcome to Finanza</p>
                                        <h1 class="display-1 mb-4 animated slideInDown">True Financial Support For You</h1>
                                        <a href="" class="btn btn-primary py-3 px-5 animated slideInDown">Explore More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div> -->
        <!-- Carousel End -->


        <!-- About Start -->
        <!-- <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-4 align-items-end mb-4">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <img class="img-fluid rounded" src="img/about.jpg">
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                        <p class="d-inline-block border rounded text-primary fw-semi-bold py-1 px-3">About Us</p>
                        <h1 class="display-5 mb-4">We Help Our Clients To Grow Their Business</h1>
                        <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et
                            eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet
                        </p>
                        <div class="border rounded p-4">
                            <nav>
                                <div class="nav nav-tabs mb-3" id="nav-tab" role="tablist">
                                    <button class="nav-link fw-semi-bold active" id="nav-story-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-story" type="button" role="tab" aria-controls="nav-story"
                                        aria-selected="true">Story</button>
                                    <button class="nav-link fw-semi-bold" id="nav-mission-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-mission" type="button" role="tab" aria-controls="nav-mission"
                                        aria-selected="false">Mission</button>
                                    <button class="nav-link fw-semi-bold" id="nav-vision-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-vision" type="button" role="tab" aria-controls="nav-vision"
                                        aria-selected="false">Vision</button>
                                </div>
                            </nav>
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-story" role="tabpanel"
                                    aria-labelledby="nav-story-tab">
                                    <p>Tempor erat elitr rebum at clita. Diam dolor diam ipsum et tempor sit. Aliqu diam
                                        amet diam et eos labore.</p>
                                    <p class="mb-0">Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore.
                                        Clita erat ipsum et lorem et sit</p>
                                </div>
                                <div class="tab-pane fade" id="nav-mission" role="tabpanel"
                                    aria-labelledby="nav-mission-tab">
                                    <p>Tempor erat elitr rebum at clita. Diam dolor diam ipsum et tempor sit. Aliqu diam
                                        amet diam et eos labore.</p>
                                    <p class="mb-0">Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore.
                                        Clita erat ipsum et lorem et sit</p>
                                </div>
                                <div class="tab-pane fade" id="nav-vision" role="tabpanel" aria-labelledby="nav-vision-tab">
                                    <p>Tempor erat elitr rebum at clita. Diam dolor diam ipsum et tempor sit. Aliqu diam
                                        amet diam et eos labore.</p>
                                    <p class="mb-0">Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore.
                                        Clita erat ipsum et lorem et sit</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="border rounded p-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="row g-4">
                        <div class="col-lg-4 wow fadeIn" data-wow-delay="0.1s">
                            <div class="h-100">
                                <div class="d-flex">
                                    <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                        <i class="fa fa-times text-white"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h4>No Hidden Cost</h4>
                                        <span>Clita erat ipsum lorem sit sed stet duo justo</span>
                                    </div>
                                    <div class="border-end d-none d-lg-block"></div>
                                </div>
                                <div class="border-bottom mt-4 d-block d-lg-none"></div>
                            </div>
                        </div>
                        <div class="col-lg-4 wow fadeIn" data-wow-delay="0.3s">
                            <div class="h-100">
                                <div class="d-flex">
                                    <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                        <i class="fa fa-users text-white"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h4>Dedicated Team</h4>
                                        <span>Clita erat ipsum lorem sit sed stet duo justo</span>
                                    </div>
                                    <div class="border-end d-none d-lg-block"></div>
                                </div>
                                <div class="border-bottom mt-4 d-block d-lg-none"></div>
                            </div>
                        </div>
                        <div class="col-lg-4 wow fadeIn" data-wow-delay="0.5s">
                            <div class="h-100">
                                <div class="d-flex">
                                    <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                        <i class="fa fa-phone text-white"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h4>24/7 Available</h4>
                                        <span>Clita erat ipsum lorem sit sed stet duo justo</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- About End -->


        <!-- Facts Start -->
        <!-- <div class="container-fluid facts my-5 py-5">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-sm-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.1s">
                        <i class="fa fa-users fa-3x text-white mb-3"></i>
                        <h1 class="display-4 text-white" data-toggle="counter-up">1234</h1>
                        <span class="fs-5 text-white">Happy Clients</span>
                        <hr class="bg-white w-25 mx-auto mb-0">
                    </div>
                    <div class="col-sm-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.3s">
                        <i class="fa fa-check fa-3x text-white mb-3"></i>
                        <h1 class="display-4 text-white" data-toggle="counter-up">1234</h1>
                        <span class="fs-5 text-white">Projects Completed</span>
                        <hr class="bg-white w-25 mx-auto mb-0">
                    </div>
                    <div class="col-sm-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.5s">
                        <i class="fa fa-users-cog fa-3x text-white mb-3"></i>
                        <h1 class="display-4 text-white" data-toggle="counter-up">1234</h1>
                        <span class="fs-5 text-white">Dedicated Staff</span>
                        <hr class="bg-white w-25 mx-auto mb-0">
                    </div>
                    <div class="col-sm-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.7s">
                        <i class="fa fa-award fa-3x text-white mb-3"></i>
                        <h1 class="display-4 text-white" data-toggle="counter-up">1234</h1>
                        <span class="fs-5 text-white">Awards Achieved</span>
                        <hr class="bg-white w-25 mx-auto mb-0">
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Facts End -->


        <!-- Features Start -->
        <!-- <div class="container-xxl feature py-5">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <p class="d-inline-block border rounded text-primary fw-semi-bold py-1 px-3">Why Choosing Us!</p>
                        <h1 class="display-5 mb-4">Few Reasons Why People Choosing Us!</h1>
                        <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et
                            eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet
                        </p>
                        <a class="btn btn-primary py-3 px-5" href="">Explore More</a>
                    </div>
                    <div class="col-lg-6">
                        <div class="row g-4 align-items-center">
                            <div class="col-md-6">
                                <div class="row g-4">
                                    <div class="col-12 wow fadeIn" data-wow-delay="0.3s">
                                        <div class="feature-box border rounded p-4">
                                            <i class="fa fa-check fa-3x text-primary mb-3"></i>
                                            <h4 class="mb-3">Fast Executions</h4>
                                            <p class="mb-3">Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo
                                                justo erat amet</p>
                                            <a class="fw-semi-bold" href="">Read More <i
                                                    class="fa fa-arrow-right ms-1"></i></a>
                                        </div>
                                    </div>
                                    <div class="col-12 wow fadeIn" data-wow-delay="0.5s">
                                        <div class="feature-box border rounded p-4">
                                            <i class="fa fa-check fa-3x text-primary mb-3"></i>
                                            <h4 class="mb-3">Guide & Support</h4>
                                            <p class="mb-3">Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo
                                                justo erat amet</p>
                                            <a class="fw-semi-bold" href="">Read More <i
                                                    class="fa fa-arrow-right ms-1"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 wow fadeIn" data-wow-delay="0.7s">
                                <div class="feature-box border rounded p-4">
                                    <i class="fa fa-check fa-3x text-primary mb-3"></i>
                                    <h4 class="mb-3">Financial Secure</h4>
                                    <p class="mb-3">Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo
                                        erat amet</p>
                                    <a class="fw-semi-bold" href="">Read More <i class="fa fa-arrow-right ms-1"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Features End -->


        <!-- Service Start -->
        <!-- <div class="container-xxl service py-5">
            <div class="container">
                <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <p class="d-inline-block border rounded text-primary fw-semi-bold py-1 px-3">Our Services</p>
                    <h1 class="display-5 mb-5">Awesome Financial Services For Business</h1>
                </div>
                <div class="row g-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="col-lg-8">
                        <div class="tab-content w-100">
                            <div class="tab-pane fade show active" id="tab-pane-1">
                                <div class="row g-4">
                                    <div class="col-md-6">
                                        <h3 class="mb-4">25 Years Of Experience In Financial Support</h3>
                                        <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu
                                            diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit
                                            clita duo justo erat amet.</p>
                                        <p><i class="fa fa-check text-primary me-3"></i>Secured Loans</p>
                                        <p><i class="fa fa-check text-primary me-3"></i>Credit Facilities</p>
                                        <p><i class="fa fa-check text-primary me-3"></i>Cash Advanced</p>
                                        <a href="" class="btn btn-primary py-3 px-5 mt-3">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab-pane-2">
                                <div class="row g-4">
                                    <div class="col-md-6" style="min-height: 350px;">
                                        <div class="position-relative h-100">
                                            <img class="position-absolute rounded w-100 h-100" src="img/service-2.jpg"
                                                style="object-fit: cover;" alt="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <h3 class="mb-4">25 Years Of Experience In Financial Support</h3>
                                        <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu
                                            diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit
                                            clita duo justo erat amet.</p>
                                        <p><i class="fa fa-check text-primary me-3"></i>Secured Loans</p>
                                        <p><i class="fa fa-check text-primary me-3"></i>Credit Facilities</p>
                                        <p><i class="fa fa-check text-primary me-3"></i>Cash Advanced</p>
                                        <a href="" class="btn btn-primary py-3 px-5 mt-3">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab-pane-3">
                                <div class="row g-4">
                                    <div class="col-md-6" style="min-height: 350px;">
                                        <div class="position-relative h-100">
                                            <img class="position-absolute rounded w-100 h-100" src="img/service-3.jpg"
                                                style="object-fit: cover;" alt="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <h3 class="mb-4">25 Years Of Experience In Financial Support</h3>
                                        <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu
                                            diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit
                                            clita duo justo erat amet.</p>
                                        <p><i class="fa fa-check text-primary me-3"></i>Secured Loans</p>
                                        <p><i class="fa fa-check text-primary me-3"></i>Credit Facilities</p>
                                        <p><i class="fa fa-check text-primary me-3"></i>Cash Advanced</p>
                                        <a href="" class="btn btn-primary py-3 px-5 mt-3">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab-pane-4">
                                <div class="row g-4">
                                    <div class="col-md-6" style="min-height: 350px;">
                                        <div class="position-relative h-100">
                                            <img class="position-absolute rounded w-100 h-100" src="img/service-4.jpg"
                                                style="object-fit: cover;" alt="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <h3 class="mb-4">25 Years Of Experience In Financial Support</h3>
                                        <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu
                                            diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit
                                            clita duo justo erat amet.</p>
                                        <p><i class="fa fa-check text-primary me-3"></i>Secured Loans</p>
                                        <p><i class="fa fa-check text-primary me-3"></i>Credit Facilities</p>
                                        <p><i class="fa fa-check text-primary me-3"></i>Cash Advanced</p>
                                        <a href="" class="btn btn-primary py-3 px-5 mt-3">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Service End -->


        <!-- Callback Start -->
        <div class="container-fluid callback">
            <div class="container pt-5">
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="bg-white border rounded p-4 p-sm-5 wow fadeInUp" data-wow-delay="0.5s">
                            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                                <h1 class="display-5 mb-5">Request A Call-Back</h1>
                            </div>
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
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-dark mb-4">Logo Umrah</h4>
                    <div>PT. UMRAH MANDIRI RILLAH AMANAH</div>
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
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-dark mb-4">Layanan</h4>
                    <a class="btn btn-link" href="">Umroh</a>
                    <a class="btn btn-link" href="">Umroh Plus+</a>
                    <a class="btn btn-link" href="">Wisata Halal</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-dark mb-4">Perusahaan</h4>
                    <a class="btn btn-link" href="">Tentang Kami</a>
                    <a class="btn btn-link" href="">Lokasi Kami</a>
                    <a class="btn btn-link" href="">Kontak Kami</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-dark mb-4">Lainya</h4>
                    <a class="btn btn-link" href="">Syarat & Ketentuan</a>
                    <a class="btn btn-link" href="">Kebijakan data pengguna</a>
                    <a class="btn btn-link" href="">FaQ</a>
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