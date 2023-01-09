@extends('layouts.landing')

@section('content')
    <!-- Banner Form Start -->
    <div class="container-fluid" style="margin-bottom: -20px;">
        <div class="container">
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-interval="3000" data-bs-ride="carousel">
                <div class="carousel-inner">
                    @foreach( $banners as $key => $banner )
                        <div @if( $key == 0) class="carousel-item active"  @else class="carousel-item" @endif>
                            <img class="d-block w-100" src="{{ $banner['url'] }}" alt="First slide">
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="container" style="position: relative;top: -50px;">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="bg-white border rounded p-3 p-sm-4 wow fadeInUp" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                            <form class="row" method="GET" action="{{ url('/package/search') }}">
                                <div class="col-md-10">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label for="specificSizeInputGroupUsername">Layanan</label>
                                            <select class="form-select mt-2" name="layanan" data-control="select2" data-placeholder="Select an option">
                                                @foreach($layanan as $layanan)
                                                    <option value="{{ $layanan['value'] }}">{{ $layanan['text'] }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-sm-4">
                                            <label for="specificSizeInputGroupUsername">Tanggal Keberangkatan</label>
                                            <input type="text" placeholder="Tanggal Keberangkatan" name="departure_date" class="form-control mt-2" required/>
                                        </div>
                                        <div class="col-sm-4">
                                            <label for="specificSizeInputGroupUsername">Tanggal Kepulangan</label>
                                            <input type="text" placeholder="Tanggal Kepulangan" name="return_date" class="form-control mt-2" required/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2 justify-content-md-center">
                                    <button type="submit" class="btn btn-success mt-3" style="width: 100%;">Cari</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Form End -->

    <!-- Banner Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            @foreach( $banners2 as $key => $banner2 )
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{ $key }}" @if( $key == 0) class="active" @endif aria-current="true" aria-label="Slide {{ $key }}"></button>
                            @endforeach
                        </div>
                        <div class="carousel-inner">
                            @foreach( $banners2 as $key => $banner2 )
                                <div @if( $key == 0) class="carousel-item active mb-8"  @else class="carousel-item mb-8" @endif>
                                    <img src="{{ $banner2['url_banner_web'] }}" class="d-block w-100" alt="{{ $banner2['url_banner_web'] }}" width="100%" height="200px;">
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <img src="{{ asset('assets-web/img/banner/banner-download-umra.png') }}" alt="{{ asset('assets-web/img/banner/banner-download-umra.png') }}" width="100%" height="200px;">
                </div>
            </div>
        </div>
    </div>
    <!-- Banner End -->

    <!-- Package Umroh Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-4" style="margin: auto auto auto 0;">
                    <h3 class="mb-4 text-weight-700 text-green" style="font-size: 48px;">Paket <br/> Umroh Reguler</h3>
                    <p class="mb-4" style="font-size: 20px;">Perjalanan umroh lengkap dengan paket hotel berbintang, penerbangan & VISA.</p>
                    <div class="row mt-5">
                        <div class="col-4">
                            <img src="{{ asset('assets-web/img/icon/hotel-umrah.png')}}" alt="{{ asset('assets-web/img/icon/hotel-umrah.png')}}" width="40px">
                            <span style="font-size: 16px; margin-left: 5%;">Hotel</span>
                        </div>
                        <div class="col-4">
                            <img src="{{ asset('assets-web/img/icon/plane-umrah.png')}}" alt="{{ asset('assets-web/img/icon/plane-umrah.png')}}" height="40px">
                            <span style="font-size: 16px; margin-left: 5%;">Pesawat</span>
                        </div>
                    </div>
                    <a href="#" class="btn btn-success mt-5">Lihat Semua Paket <i class="fas fa-chevron-right"></i></a>
                </div>
                @foreach( $package_product_umrah as $umrah )
                    <div class="col-lg-3 col-md-4 my-5">
                        @include('pages.landingPage.partials.cardPackage', [
                            'url' => url('/package', $umrah['id_packet']),
                            'url_banner' => $umrah['url_banner'],
                            'name' => $umrah['name']
                        ])
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Package Umroh End -->

    <!-- Package Umroh Plush Start -->
    <div class="container-fluid py-5" style="background-image:url('{{ asset('assets-web/img/background/background-1.png') }}');background-repeat: no-repeat;background-size: 100% 100%;">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-4" style="margin: auto auto auto 0;">
                    <h3 class="mb-4 text-white" style="font-size: 48px;">Paket <br/> Umroh Plus+</h3>
                    <p class="mb-4 text-light" style="font-size: 20px;">Perjalanan umroh lengkap dengan paket hotel berbintang, penerbangan & VISA.</p>
                    <div class="row mt-5">
                        <div class="col-4">
                            <img src="{{ asset('assets-web/img/icon/hotel-umrah.png')}}" alt="{{ asset('assets-web/img/icon/hotel-umrah.png')}}" width="40px">
                            <span class="text-light" style="font-size: 16px; margin-left: 5%;">Hotel</span>
                        </div>
                        <div class="col-4">
                            <img src="{{ asset('assets-web/img/icon/plane-umrah.png')}}" alt="{{ asset('assets-web/img/icon/plane-umrah.png')}}" width="40px">
                            <span class="text-light" style="font-size: 16px; margin-left: 5%;">Pesawat</span>
                        </div>
                        <div class="col-4">
                            <img src="{{ asset('assets-web/img/icon/tour-umrah.png')}}" alt="{{ asset('assets-web/img/icon/tour-umrah.png')}}" height="40px">
                            <span class="text-light" style="font-size: 16px; margin-left: 5%;">Wisata</span>
                        </div>
                    </div>
                    <a href="#" class="btn btn-success mt-5">Lihat Semua Paket <i class="fas fa-chevron-right"></i></a>
                </div>
                @foreach($package_product_wisata_halal as $umrah_plus)
                    <div class="col-lg-3 col-md-4 my-5">
                        @include('pages.landingPage.partials.cardPackage', [
                            'url' => url('/package', $umrah_plus['id_packet']),
                            'url_banner' => $umrah_plus['url_banner'],
                            'name' => $umrah_plus['name']
                        ])
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Package Umroh End -->


    <!-- Why Worship Start -->
    <div class="container-fluid py-5">
        <div class="container" style="margin-top: 5%; margin-bottom:5%;">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 750px; margin-bottom:5%;">
                <h1 class="display-5">Mengapa ibadah Umrah & wisata bersama Umra.ID?</h1>
                <h3 class="text-opacity">Kami selalu berusaha konsisten memberikan pelayanan terbaik kepada jamaah yang berangkat beribadah bersama kami sejak 2012 UMRA telah memiliki izin resmi untuk melayani anda.</h3>
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
        <div class="container" style="margin-top: 4%; margin-bottom:3%;">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <img src="{{ $banner3 }}" alt="{{ $banner3 }}" width="100%" height="100%">
            </div>
        </div>
    </div>
    <!-- Banner End -->


    <!-- Explore& wisata Start -->
    <div class="container-fluid py-5" style="background-image:url('{{ asset('assets-web/img/background/background-2.png') }}');background-repeat: no-repeat;background-size: 100% 100%;">
        <div class="container">
            <div class="text-white text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;margin-top:5%;margin-bottom:4%">
                <h1 class="display-5 text-white mb-5">Explore & Berwisata Keliling Jazirah Arab</h1>
                <h4 class="text-opacity text-white">Berangkat beribadah tidak pernah semenyenangkan ini dengan bebas atur fasilitas hotel, pesawat, asuransi, visa & destinasi wisata halal impian anda.</h4>
            </div>
        </div>
        <div class="container" style="background-image:url('{{ asset('assets-web/img/background/background-3.png') }}');background-repeat: no-repeat;background-size: 100% 100%;margin-bottom:5%">
            <div class="row p-5">
                <div class="col-lg-5 col-md-4" style="margin: auto auto auto auto;">
                    <h3 class="mb-4 text-white" style="font-size: 48px;">Paket <br/> Umroh Plus+</h3>
                    <p class="mb-4 text-light" style="font-size: 20px;">Perjalanan umroh lengkap dengan paket hotel berbintang, penerbangan & VISA.</p>
                    <div class="row mt-5">
                        <div class="col-4">
                            <img src="{{ asset('assets-web/img/icon/hotel-umrah.png')}}" alt="{{ asset('assets-web/img/icon/hotel-umrah.png')}}" width="40px">
                            <span class="text-light" style="font-size: 16px; margin-left: 5%;">Hotel</span>
                        </div>
                        <div class="col-5">
                            <img src="{{ asset('assets-web/img/icon/plane-umrah.png')}}" alt="{{ asset('assets-web/img/icon/plane-umrah.png')}}" height="40px">
                            <span class="text-light" style="font-size: 16px; margin-left: 5%;">Pesawat</span>
                        </div>
                    </div>
                    <a href="#" class="btn btn-success btn-large mt-5">Lihat Semua Paket <i class="fas fa-chevron-right"></i></a>
                </div>
                @foreach($package_product_wisata_halal as $wisata_halal)
                    <div class="col-lg-3 col-md-4 my-3">
                        @include('pages.landingPage.partials.cardPackage', [
                            'url' => url('/package', $wisata_halal['id_packet']),
                            'url_banner' => $wisata_halal['url_banner'],
                            'name' => $wisata_halal['name']
                        ])
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Explore& wisata End -->


    <!-- Experience Start -->
    <div class="container-fluid py-5">
        <div class="container" style="margin-top:5%;">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="display-5 mb-5">Pengalaman ibadah mereka bersama UMRA.ID</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.3s">
                @foreach($experience as $experience)
                    <div class="card card-bordered" style="margin-top: 6%; margin-bottom:5%;">
                        <div class="card-body p-5">
                            <img src="{{ $experience['image'] }}" style="height: 100%" alt="{{ $experience['image'] }}">
                            <h5 class="card-title mt-4">{{ $experience['title'] }}</h5>
                            <span class="card-title mt-4">{{ $experience['description'] }}</span>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Experience End -->


    <!-- Testimonial Start -->
    <div class="container-fluid py-5" style="background-image:url('{{ asset('assets-web/img/background/background-5.png') }}');background-repeat: no-repeat;background-size: 100% 100%;">
        <div class="container" style="margin-top: 5%;">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="text-drak display-5 mb-5">Apa kata mereka tentang UMRA.ID?</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.3s">
                @foreach($experience2 as $experience2)
                    <div class="testimonial-item" style="margin-bottom: 5%;">
                        <div class="bg-white testimonial-text border rounded p-4 pt-5" style="margin-bottom: 10%">
                            {{-- <div class="btn-square bg-white border rounded-circle">
                                <i class="fa fa-quote-right fa-2x text-primary"></i>
                            </div> --}}
                            <h5>{{ $experience2['title'] }}</h5>
                            {{ $experience2['description'] }}
                        </div>
                        <img class="rounded-circle mb-3" src="{{ asset('assets-web/img/users/user-1.jpg')}}" style="width: 10%; height:10%;" alt="">
                        <h4 class="text-drak">Husein</h4>
                        <span class="text-opacity">Profession</span>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Mitra Start -->
    <div class="container-fluid py-5" style="background-image:url('{{ asset('assets-web/img/background/background-4.png') }}');background-repeat: no-repeat;background-size: 100% 100%;">
        <div class="container">
            <div class="text-white text-center mx-auto" style="max-width: 600px;margin-top:5%">
                <h1 class="display-5 text-white mb-5">Kami memiliki 150+ Mitra Umra di seluruh Indonesia</h1>
            </div>
            <div class="text-white text-center mx-auto" style="max-width: 800px;">
                <p class="text-opacity">UMRA.ID mengajak anda sebagai perusahaan atau perseorangan untuk bergabung menjadi Mitra Umra untuk mendapatkan manfaat yang saling menguntungkan!</p>
            </div>
            <div class="text-white text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
                <p class="text-opacity">UMRA.ID juga diakselerasi dengan model New Retail dengan pendekatan O2O (Offline to Offline).</p>
            </div>
            <div class="row mb-5">
                <div class="col-md-6">
                    @foreach($mitras as $mitra)
                    <div class="card mb-2" style="width: 100$;">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-10">
                                    <h4>{{ $mitra['name'] }}</h4>
                                    {{ $mitra['address'] }}
                                </div>
                                <div class="col-2" style="margin:auto;">
                                    <i class="fa-sharp fa-solid fa-diamond-turn-right fa-2xl" style="color: green;"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <button class="btn-transparent text-white mt-3 mb-5" style="width: 100%;">Lihat Semua <i class="fas fa-chevron-right"></i></button>
                </div>
                <div class="col-md-6">
                    <div class="card card-bordered" style="width: 100$;">
                        <div class="card-body">
                            <div>
                                <h1>Gabung Sebagai Agen Penjualan</h1>
                            </div>
                            <div>
                               <p>Jadi agen penjualan, pelayanan & mendaftarkan calon jamaah akan lebih mudah menggunakan aplikasi dan ekosistem UMRA.</p>
                            </div>
                            <div>
                                <i class="fa-solid fa-circle-check" style="color: green"></i>  Dibantu pemasaran oleh tim digital marketing UMRA.ID
                            </div>
                            <div>
                                <i class="fa-solid fa-circle-check" style="color: green"></i>  Konsulitasi strategi penjualan dengan UMRA
                            </div>
                            <div>
                                <i class="fa-solid fa-circle-check" style="color: green"></i>  Share profit transaksi perjalanan jamaah yang selesai
                            </div>
                            <hr>
                            <div class="mt-5">
                                <button class="btn btn-success" style="width: 100%">Gabung Sekarang</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr style="color: white; margin-top:3%;">
        </div>
        <div class="container" style="background-image:url('{{ asset('assets-web/img/background/background-1.png') }}');background-repeat: no-repeat;background-size: 100% 100%;margin-top:3%;margin-bottom:3%;">
            <div class="row p-2">
                <div class="col-md-8 p-0" style="margin-top: 3%; margin-bottom:4%;">
                    <div class="text-white" style="max-width: 100%;margin-top:3%; margin-left:7%">
                        <h1 class="display-5 text-white mb-5">Jadi Affiliate Umra bisa dapat untung?</h1>
                        <h2 class="text-opacity text-white">Siapa saja bisa menjadi affiliate Umra hanya dengan gawai anda,</h2>
                        <h2 class="text-opacity text-white">Share referral & jadi Digital Referrer Umrapreneur</h2>
                    </div>
                </div>
                <div class="col-md-4" style="margin-top: 4%; margin-bottom:4%;">
                    <center><button class="btn-white-large mb-5" style="width: 70%;"><h3 class="text-green">Daftar Affiliate</h3></button></center>
                    <div class="text-white text-center mx-auto" style="max-width:70%;margin-top:4%">
                        <a href="#" class="text-white">Syarat & Ketentuan</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Mitra End -->


    <!-- Partner Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;margin-top:4%;margin-bottom:4%">
                <h1 class="display-5 mb-5">Partner Terpercaya Kami</h1>
                <h3 class="text-opacity">Kami memiliki partner yang terpercaya di bidangnya, dan kami selalu berusaha memberikan pengalaman terbaik untuk ibadah Anda</h3>
            </div>

            <div class="row justify-content-md-center" style="margin-bottom: 5%">
                @foreach($partners as $partner)
                    <div class="col-md-3 mt-5">
                        <img class="image-center" src="{{ $partner['url'] }}" alt="{{ $partner['url'] }}" width="100%">
                    </div>
                @endforeach
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
                    <a href="{{ url('/news') }}" class="text-white">Lihat Semua <i class="fas fa-chevron-right"></i></a>
                </div>
            </div>

            <div class="row g-4 align-items-center">
                <div class="col-md-6">
                    <div class="card card-bordered" style="margin-top: 6%; margin-bottom:5%; display:flex;">
                        <div class="card-body p-5">
                            <img src="{{ $experience['image'] }}" alt="{{ $experience['image'] }}" width="100%">
                            <h2 class="card-title mt-5">{{ $experience['title'] }}</h2>
                            <span class="card-title mt-5">{{ $experience['description'] }}</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        @foreach($news as $new)
                            <div class="col-md-6 pt-3">
                                @include('pages.landingPage.partials.cardNews')
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Artikel End -->
@endsection

@push('page_js')
    <script>
        $( document ).ready(function() {
            // departure_date
            $("input[name='departure_date']").flatpickr({
                dateFormat: "d-m-Y",
            });

            // return_date
            $("input[name='return_date']").flatpickr({
                dateFormat: "d-m-Y",
            });
        });
    </script>
@endpush
