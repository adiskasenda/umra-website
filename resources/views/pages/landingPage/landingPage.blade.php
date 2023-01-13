@extends('layouts.landing')

@push('page_css')
    <link href="{{ asset('assets-web/css/landing/style.css') }}" rel="stylesheet">
@endpush

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
            <div class="content-form">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="bg-white border rounded p-3 p-sm-4 wow fadeInUp" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                            <form class="row" method="GET" action="{{ url('/package/search') }}">
                                <div class="col-md-10">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label for="specificSizeInputGroupUsername">Layanan</label>
                                            <input id="invisible_id" name="invisible" type="hidden" value="secret">
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
                <div class="col-lg-5 col-md-4 content-package">
                    <div class="mb-4 text-weight-700 fs-44" style="font-weight: bold;">Paket Umroh Reguler</div>
                    <div class="mb-4 text-weight-400 fs-20">Perjalanan umroh lengkap dengan paket hotel berbintang, penerbangan & VISA.</div>
                    <div class="row mt-5 mb-5">
                        <div class="col-4">
                            <img src="{{ asset('assets-web/img/icon/hotel-umrah.png')}}" alt="{{ asset('assets-web/img/icon/hotel-umrah.png')}}" width="40px">
                            <span style="font-size: 16px; margin-left: 5%;">Hotel</span>
                        </div>
                        <div class="col-4">
                            <img src="{{ asset('assets-web/img/icon/plane-umrah.png')}}" alt="{{ asset('assets-web/img/icon/plane-umrah.png')}}" height="40px">
                            <span style="font-size: 16px; margin-left: 5%;">Pesawat</span>
                        </div>
                    </div>
                    <a href="{{ url('/package/umroh') }}" class="btn btn-success mt-5">Lihat Semua Paket <i class="fas fa-chevron-right"></i></a>
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
    <div class="container-fluid py-5 bg-image-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-4 content-package">
                    <div class="mb-4 text-white text-weight-700 fs-44" style="font-weight: bold;">Paket Umroh Plus+</div>
                    <div class="mb-4 text-light text-weight-400 fs-20">Perjalanan umroh lengkap dengan paket hotel berbintang, penerbangan & VISA.</div>
                    <div class="row mt-5 mb-5">
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
                    <a href="{{ url('/package/umroh-plus') }}" class="btn btn-success mt-5">Lihat Semua Paket <i class="fas fa-chevron-right"></i></a>
                </div>
                @foreach($package_product_umrah_plus as $umrah_plus)
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
        <div class="container mt-20 mb-20">
            <div class="text-center">
                <div class="text-dark text-weight-700 fs-44" style="font-weight: bold;">Mengapa ibadah Umrah & wisata bersama Umra.ID?</div>
                <div class="text-tertiary text-weight-400 fs-20">Kami selalu berusaha konsisten memberikan pelayanan terbaik kepada jamaah yang berangkat beribadah bersama kami sejak 2012 UMRA telah memiliki izin resmi untuk melayani anda.</div>
            </div>
            <div class="row mt-10 mb-10 text-dark text-center">
                <div class="col-sm-6 col-lg-3 mt-5 mb-5">
                    <img src="{{ asset('assets-web/img/icon/izin.png') }}" alt="{{ asset('assets-web/img/icon/izin.png') }}">
                    <div class="mt-4 text-weight-700 fs-20" style="font-weight: bold;">Berizin Resmi</div>
                    <div class="text-weight-400 fs-16 mw-80">Memiliki izin resmi untuk perjalanan umrah dari KEMENAG sejak 2012</div>
                </div>
                <div class="col-sm-6 col-lg-3 mt-5 mb-5">
                    <img src="{{ asset('assets-web/img/icon/asuransi.png') }}" alt="{{ asset('assets-web/img/icon/asuransi.png') }}">
                    <div class="mt-4 text-weight-700 fs-20" style="font-weight: bold;">Asuransi Perjalanan</div>
                    <div class="text-weight-400 fs-16 mw-80">Setiap perjalanan jamaah diberikan kebebasan memilih asuransi terbaik</div>
                </div>
                <div class="col-sm-6 col-lg-3 mt-5 mb-5">
                    <img src="{{ asset('assets-web/img/icon/hotel.png') }}" alt="{{ asset('assets-web/img/icon/hotel.png') }}">
                    <div class="mt-4 text-weight-700 fs-20" style="font-weight: bold;">Hotel Berbintang</div>
                    <div class="text-weight-400 fs-16 mw-80">Kami telah bekerjasama dengan hotel terbaik agar ibadah anda lebih khusyu’</div>
                </div>
                <div class="col-sm-6 col-lg-3 mt-5 mb-5">
                    <img src="{{ asset('assets-web/img/icon/bantuan.png') }}" alt="{{ asset('assets-web/img/icon/bantuan.png') }}">
                    <div class="mt-4 text-weight-700 fs-20" style="font-weight: bold;">Bantuan Setiap Saat</div>
                    <div class="text-weight-400 fs-16 mw-80">Layanan pelanggan kami beroperasi sepanjang waktu untuk membantu anda.</div>
                </div>
            </div>
        </div>
    </div>
    <!-- Why Worship End -->


    <!-- Banner Start -->
    <div class="container-fluid bg-green-light py-5">
        <div class="container mt-20 mb-20">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <img src="{{ $banner3 }}" alt="{{ $banner3 }}" width="100%" height="100%">
            </div>
        </div>
    </div>
    <!-- Banner End -->


    <!-- Explore& wisata Start -->
    <div class="container-fluid py-5 bg-image-2">
        <div class="mt-20 mb-20">
            <div class="container mb-5">
                <div class="text-center">
                    <div class="text-white text-weight-700 fs-44" style="font-weight: bold;">Explore & Berwisata Keliling Jazirah Arab</div>
                    <div class="text-light text-weight-400 fs-20">Berangkat beribadah tidak pernah semenyenangkan ini dengan bebas atur fasilitas hotel, pesawat, asuransi, visa & destinasi wisata halal impian anda.</div>
                </div>
            </div>
            <div class="container bg-image-3">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5 col-md-4 content-package">
                            <div class="mb-4 text-white text-weight-700 fs-44">Paket Wisata Halal</div>
                            <div class="mb-4 text-light text-weight-400 fs-20">Perjalanan umroh lengkap dengan paket hotel berbintang, penerbangan & VISA.</div>
                            <div class="row mt-5 mb-5">
                                <div class="col-4">
                                    <img src="{{ asset('assets-web/img/icon/hotel-umrah.png')}}" alt="{{ asset('assets-web/img/icon/hotel-umrah.png')}}" width="40px">
                                    <span class="text-light" style="font-size: 16px; margin-left: 5%;">Hotel</span>
                                </div>
                                <div class="col-5">
                                    <img src="{{ asset('assets-web/img/icon/plane-umrah.png')}}" alt="{{ asset('assets-web/img/icon/plane-umrah.png')}}" height="40px">
                                    <span class="text-light" style="font-size: 16px; margin-left: 5%;">Pesawat</span>
                                </div>
                            </div>
                            <a href="{{ url('/package/wisata-halal') }}" class="btn btn-success btn-large mt-5">Lihat Semua Paket <i class="fas fa-chevron-right"></i></a>
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
        </div>
    </div>
    <!-- Explore& wisata End -->


    <!-- Experience Start -->
    <div class="container-fluid py-5">
        <div class="container mt-20 mb-20">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="display-5 mb-5">Pengalaman ibadah mereka bersama UMRA.ID</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.3s">
                @foreach($experience as $experience)
                    <div class="card card-bordered" style="margin-top: 6%; margin-bottom:5%;">
                        <div class="card-body p-5">
                            <img style="height:'100%';" src="{{ $experience['image'] }}" alt="{{ $experience['image'] }}">
                            <div class="text-weight-700 fs-20" style="font-weight: bold;">{{ $experience['title'] }}</div>
                            <div class="text-weight-400 fs-16">{{ $experience['description'] }}</div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Experience End -->


    <!-- Testimonial Start -->
    <div class="container-fluid py-5 bg-image-5">
        <div class="container mt-20 mb-20">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="text-drak display-5 mb-5">Apa kata mereka tentang UMRA.ID?</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.3s">
                @foreach($experience2 as $experience2)
                    <div class="testimonial-item" style="margin-bottom: 5%;">
                        <div class="bg-white testimonial-text border rounded p-4 pt-5" style="margin-bottom: 10%">
                            <div class="text-weight-700 fs-20" style="font-weight: bold;">{{ $experience2['title'] }}</div>
                            <div class="text-weight-400 fs-16">{{ $experience2['description'] }}</div>
                        </div>
                        <img style="width: 10%; height:10%;" class="rounded-circle mb-5" src="{{ asset('assets-web/img/users/user-1.jpg')}}" alt="{{ asset('assets-web/img/users/user-1.jpg')}}">
                        <h4 class="text-drak">{{ $experience2['name'] }}</h4>
                        <span class="text-tertiary">{{ $experience2['username'] }}</span>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Mitra Start -->
    <div class="container-fluid py-5 bg-image-4">
        <div class="container mt-20 mb-20">
            <div class="text-white text-center mx-auto" style="max-width: 600px;">
                <h1 class="display-5 text-white mb-5">Kami memiliki 150+ Mitra Umra di seluruh Indonesia</h1>
            </div>
            <div class="text-white text-center mx-auto" style="max-width: 800px;">
                <p class="text-light">UMRA.ID mengajak anda sebagai perusahaan atau perseorangan untuk bergabung menjadi Mitra Umra untuk mendapatkan manfaat yang saling menguntungkan!</p>
            </div>
            <div class="text-white text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
                <p class="text-light">UMRA.ID juga diakselerasi dengan model New Retail dengan pendekatan O2O (Offline to Offline).</p>
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
                    <a href="{{ url('/mitra') }}">
                        <button class="btn-transparent text-white mt-3 mb-5" style="width: 100%;">
                            Lihat Semua <i class="fas fa-chevron-right"></i>
                        </button>
                    </a>
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
                                <a href="https://zeals.asia/" class="btn btn-success" style="width: 100%">Gabung Sekarang</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <hr class="text-white mt-3">

            <div class="bg-image-1">
                <div class="row p-2">
                    <div class="col-md-8">
                        <div class="text-white ms-5">
                            <div class="text-weight-600 fs-32 mb-5" style="font-weight: bold;">Jadi Affiliate Umra bisa dapat untung?</div>
                            <div class="text-weight-400 fs-16">Siapa saja bisa menjadi affiliate Umra hanya dengan gawai anda,</div>
                            <div class="text-weight-400 fs-16">Share referral & jadi Digital Referrer Umrapreneur</div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <button class="btn-white-large mb-5" style="width: 70%;">
                            <h3 class="text-green">Daftar Affiliate</h3>
                        </button>
                        <div class="text-center mx-auto" style="max-width:70%;margin-top:4%">
                            <a href="#" class="text-white">Syarat & Ketentuan</a>
                        </div>
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
                <h3 class="text-tertiary">Kami memiliki partner yang terpercaya di bidangnya, dan kami selalu berusaha memberikan pengalaman terbaik untuk ibadah Anda</h3>
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
