@extends('layouts.landing')

@section('content')
    <div class="content" style="margin-top:80px;">
        <!-- Banner Form Start -->
        <div class="container-xxl callback p-0 mb-5">
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-interval="3000" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="https://ihram.s3.amazonaws.com/ihram/upload/banner/ihram_asia_banner_promosi_9daf763a4fb38ae88595979c5f7d987a.jpg" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="https://ihram.s3.amazonaws.com/ihram/upload/banner/ihram_asia_banner_promosi_0e41943a87b47d33081cca56c69bf180.jpg" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="https://ihram.s3.amazonaws.com/ihram/upload/banner/ihram_asia_banner_promosi_c610ae0834348a63912c2bbfeb9ea5ce.jpg" alt="Third slide">
                    </div>
                </div>
            </div>
            <div class="container" style="position: relative;top: -60px;;">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="bg-white border rounded p-3 p-sm-4 wow fadeInUp" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                            <form class="row" action="">
                                <div class="col-md-10">
                                    <div class="row">
                                        <div class="col-sm-3 justify-content-md-center">
                                            <label for="specificSizeInputGroupUsername">Layanan</label>
                                            <div class="input-group">
                                                <div class="input-group-text">@</div>
                                                <input type="text" class="form-control" id="specificSizeInputGroupUsername" placeholder="Username">
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <label for="specificSizeInputGroupUsername">Tanggal Keberangkatan</label>
                                            <div class="input-group">
                                                <div class="input-group-text">@</div>
                                                <input type="text" class="form-control" id="specificSizeInputGroupUsername" placeholder="Username">
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <label for="specificSizeInputGroupUsername">Tanggal Kepulangan</label>
                                            <div class="input-group">
                                                <div class="input-group-text">@</div>
                                                <input type="text" class="form-control" id="specificSizeInputGroupUsername" placeholder="Username">
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <label for="specificSizeInputGroupUsername">Total Jamaah</label>
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
        <!-- Banner Form End -->


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
@endsection