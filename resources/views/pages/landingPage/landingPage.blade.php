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
                            <img class="d-block w-100 img-banner" src="{{ $banner['url'] }}" alt="First slide">
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
                                        <div class="col-sm-4 mt-2 mb-2">
                                            <label for="specificSizeInputGroupUsername" class="fs-16" style="font-weight: bold;">Layanan</label>
                                            <input id="invisible_id" name="invisible" type="hidden" value="secret">
                                            <select class="form-select mt-2" name="layanan" data-control="select2" data-placeholder="Select an option">
                                                @foreach($layanan as $layanan)
                                                    <option value="{{ $layanan['value'] }}">{{ $layanan['text'] }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-sm-4 mt-2 mb-2">
                                            <label for="specificSizeInputGroupUsername" class="fs-16" style="font-weight: bold;">Tanggal Keberangkatan</label>
                                            <input type="text" placeholder="Tanggal Keberangkatan" name="departure_date" class="form-control mt-2" required/>
                                        </div>
                                        <div class="col-sm-4 mt-2 mb-2">
                                            <label for="specificSizeInputGroupUsername" class="fs-16" style="font-weight: bold;">Tanggal Kepulangan</label>
                                            <input type="text" placeholder="Tanggal Kepulangan" name="return_date" class="form-control mt-2" required/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2 justify-content-md-center mt-2 mb-2" style="margin:auto;">
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
                                    <img class="d-block w-100 img-banner" src="{{ $banner2['url_banner_web'] }}" alt="{{ $banner2['url_banner_web'] }}" width="100%">
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <img class="img-banner" src="{{ asset('assets-web/img/banner/banner-download-umra.png') }}" alt="{{ asset('assets-web/img/banner/banner-download-umra.png') }}" width="100%">
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
                            'name' => $umrah['name'],
                            'quota' => $umrah['quota'],
                            'percent_markup' => $umrah['percent_markup'],
                            'price' => $umrah['price'],
                            'image_configuration' => $configuration['data'][3]['value_configuration']
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
                    <div class="mb-4 text-white text-weight-700 fs-44" style="font-weight: bold;">Paket Umroh+</div>
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
                            'name' => $umrah_plus['name'],
                            'quota' => $umrah['quota'],
                            'percent_markup' => $umrah['percent_markup'],
                            'price' => $umrah['price'],
                            'image_configuration' => $configuration['data'][3]['value_configuration']
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
                <div class="text-dark text-weight-700 fs-44" style="font-weight: bold;">Mengapa ibadah Umrah & wisata bersama UMRA.ID ?</div>
                <div class="text-tertiary text-weight-400 fs-20">Kami berkomitmen memberikan pelayanan terbaik untuk Umroh Anda. Tapi kami tahu Anda juga memerlukan kebebasan dalam menentukan perjalanan.</div>
            </div>
            <div class="row mt-10 mb-10 text-dark text-center">
                <div class="col-sm-6 col-lg-3 mt-5 mb-5">
                    <img src="{{ asset('assets-web/img/icon/izin.png') }}" alt="{{ asset('assets-web/img/icon/izin.png') }}">
                    <div class="mt-4 text-weight-700 fs-20" style="font-weight: bold;">Berizin Resmi</div>
                    <div class="text-weight-400 fs-16 mw-80">Berijin resmi Kementrian Agama (Ijin PPIU dan PIHK)</div>
                </div>
                <div class="col-sm-6 col-lg-3 mt-5 mb-5">
                    <img src="{{ asset('assets-web/img/icon/asuransi.png') }}" alt="{{ asset('assets-web/img/icon/asuransi.png') }}">
                    <div class="mt-4 text-weight-700 fs-20" style="font-weight: bold;">Asuransi Perjalanan</div>
                    <div class="text-weight-400 fs-16 mw-80">Perjalanan Anda aman & nyaman dengan perlindungan maksimal</div>
                </div>
                <div class="col-sm-6 col-lg-3 mt-5 mb-5">
                    <img src="{{ asset('assets-web/img/icon/hotel.png') }}" alt="{{ asset('assets-web/img/icon/hotel.png') }}">
                    <div class="mt-4 text-weight-700 fs-20" style="font-weight: bold;">Hotel Berbintang</div>
                    <div class="text-weight-400 fs-16 mw-80">Bekerjasama dengan lebih dari 270 hotel untuk akomodasi</div>
                </div>
                <div class="col-sm-6 col-lg-3 mt-5 mb-5">
                    <img src="{{ asset('assets-web/img/icon/big.png') }}" alt="{{ asset('assets-web/img/icon/big.png') }}">
                    <div class="mt-4 text-weight-700 fs-20" style="font-weight: bold;">Kebebasan Perjalanan</div>
                    <div class="text-weight-400 fs-16 mw-80">Tersedia Umroh Paket dan Umroh "Do It Yourself" bagi Anda yang perlu kebebasan</div>
                </div>
            </div>
        </div>
    </div>
    <!-- Why Worship End -->


    <!-- Banner Start -->
    <div class="container-fluid bg-green-light py-5">
        <div class="container mt-20 mb-20">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <img class="img-banner" src="{{ $banner3 }}" alt="{{ $banner3 }}" width="100%" height="100%">
            </div>
        </div>
    </div>
    <!-- Banner End -->


    <!-- Explore& wisata Start -->
    <div class="container-fluid py-5 bg-image-2">
        <div class="mt-20 mb-20">
            <div class="container mb-5">
                <div class="text-center">
                    <div class="text-white text-weight-700 fs-44" style="font-weight: bold;">Eksplorasi Umroh dan Destinasi Sejarah Islam</div>
                    <div class="text-light text-weight-400 fs-20">Umroh saja tak cukup? Eksplorasi pilihan Umroh plus destinasi wisata lainnya yang bersejarah.</div>
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
                                    'name' => $wisata_halal['name'],
                                    'quota' => $umrah['quota'],
                                    'percent_markup' => $umrah['percent_markup'],
                                    'price' => $umrah['price'],
                                    'image_configuration' => $configuration['data'][3]['value_configuration']
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
            <div class="text-center mx-auto" style="max-width: 600px;">
                <h1 class="display-5 mb-5">Pengalaman Ibadah bersama UMRA.ID</h1>
            </div>
            <div class="owl-carousel experience-carousel mt-10">
                @foreach($experience as $experience)
                    <div class="card card-bordered" style="width: 100%; height: 100%;">
                        <div class="card-body p-5">
                            <img style="height:'100%';" class="img-card" src="{{ $experience['url_banner'] }}" alt="{{ $experience['url_banner'] }}">
                            <div class="text-weight-700 fs-20 mt-4" style="font-weight: bold;">{{ $experience['name_person'] }}</div>
                            <div class="text-weight-400 fs-16">{{ $experience['location_person'] }}</div>
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
            <div class="text-center mx-auto">
                <h1 class="text-drak display-5 mb-5">Apa kata mereka tentang UMRA.ID?</h1>
            </div>
            <div class="owl-carousel testimonial-carousel">
                @foreach($experience2 as $experience2)
                    <div class="testimonial-item">
                        <div class="bg-white testimonial-text border rounded p-4 justify-content-center" style="margin-bottom: 10%; min-height:150px; display: flex;">
                            <div style="margin-top:auto;margin-bottom:auto;">
                                <div class="text-weight-700 fs-20" style="font-weight: bold;">{{ $experience2['title_testimony'] }}</div>
                                <div class="mb-2 text-weight-400 fs-16">{{ $experience2['description_testimony'] }}</div>
                            </div>
                        </div>
                        <img style="width: 10%; height:10%;" class="img-avatar rounded-circle mb-5" src="{{ $experience2['url_ava'] }}" alt="{{ $experience2['url_ava'] }}">
                        <h4 class="text-drak">{{ $experience2['name_person'] }}</h4>
                        <span class="text-tertiary">{{ $experience2['profession_person'] }}</span>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Mitra Start -->
    <div class="container-fluid py-5 bg-image-4">
        <div class="container mt-20 mb-20">
            <div class="text-white text-center mx-auto">
                <div class="text-white text-weight-700 fs-44 mb-5">Kesempatan Bergabung sebagai Mitra Pemasaran</div>
                <div class="text-light text-weight-400 fs-20 mb-5">UMRA.ID membuka kesempatan bagi perusahaan atau badan usaha untuk bergabung sebagai CABANG dan perseorangan untuk menjadi AFILIATOR atau RESELLER</div>
            </div>
            <div class="row mb-5">
                {{-- <!-- <div class="col-md-6">
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
                </div> --> --}}
                <div class="col-md-6 mt-5">
                    <div class="card card-bordered" style="width: 100$;">
                        <div class="card-body">
                            <div class="text-weight-60 fs-20" style="font-weight: bold;">Gabung Sebagai Agen Penjualan</div>
                            <div class="text-weight-400 fs-16">Manfaat sebagai menjadi agen penjualan dan pelayanan umroh kami :</div>
                            <div class="mt-2 mb-2">
                                <div class="text-weight-400 fs-16">
                                    <i class="fa-solid fa-circle-check" style="color: green"></i>  
                                    Eksklusif melayani wilayah tertentu (kota / kabupaten)
                                </div>
                                <div class="text-weight-400 fs-16">
                                    <i class="fa-solid fa-circle-check" style="color: green"></i>  
                                    Keuntungan ganda dari komisi dan harga jual
                                </div>
                                <div class="text-weight-400 fs-16">
                                    <i class="fa-solid fa-circle-check" style="color: green"></i>  
                                    Dukungan, branding dan konsultansi penjualan
                                </div>
                            </div>
                            <hr>
                            <div class="mt-5">
                                <a href="https://bit.ly/umrapreneur" class="btn btn-success" style="width: 100%;">Yuk Gabung!</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mt-5">
                    <div class="card bg-image-1" style="width: 100$;">
                        <div class="card-body">
                            <div class="text-weight-60 fs-20 text-white" style="font-weight: bold;">Jualan umroh dengan modal media sosial? Bisa!</div>
                            <div class="text-weight-400 fs-16 text-light mt-2 mb-2">Siapa saja bisa mendapatkan keuntungan dengan menjadi afiliator umroh, menggunakan media sosial dan chat messenger sebagi sarana jualan. Yuk gabung!</div>
                            <hr class="mt-10">
                            <div class="mt-5">
                                <a href="https://zeals.asia/" class="btn mb-3" style="color:#7CB041; background-color:white; width: 100%; border-color:white;">Daftar Affiliate</a>
                                
                                <!-- <div class="text-center mx-auto">
                                    <a href="#" class="text-white">Syarat & Ketentuan</a>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- <hr class="text-white mt-3">

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
            </div> -->
        </div>
    </div>
    <!-- Mitra End -->
    
    <!-- Partner Start -->
    <div class="container-fluid py-5">
        <div class="container mt-20 mb-20">
            <div class="text-center mx-auto">
                <div class="text-weight-700 fs-44">Partner Terpercaya Kami</div>
                <div class="text-tertiary text-weight-400 fs-20 mb-5">Kami memiliki partner yang terpercaya di bidangnya, dan kami selalu berusaha memberikan pengalaman terbaik untuk ibadah Anda</div>
            </div>

            <div class="row justify-content-md-center mt-10">
                @foreach($partners as $partner)
                    <div class="col-lg-3 col-md-4 col-12 mt-10 mb-10" style="display: flex;">
                        <img class="img-card image-center" style="width:50%;margin:auto;" src="{{ $partner['url_logo'] }}" alt="{{ $partner['url_logo'] }}">
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Partner End -->


    <!-- Artikel Start -->
    <div class="container-fluid bg-green py-5">
        <div class="container mt-20 mb-20">
            <div class="text-center mx-auto">
                <div class="text-white text-weight-700 fs-44">Liputan Media dan Artikel tentang Kami</div>
                <!-- <div class="col-md-6 col-sm-12 text-md-end">
                    <a href="{{ url('/news') }}" class="text-white">Lihat Semua <i class="fas fa-chevron-right"></i></a>
                </div> -->
            </div>

            <div class="row g-4 align-items-center mt-5 mb-5">
                <div class="col-lg-6 col-md-12">
                    <a href="{{ url('/news', $new['id_blog'] ) }}">
                        <div class="card card-bordered" style="width: 100%; height: 100%;">
                            <div class="card-body p-5">
                                <img class="img-card" src="{{ $new['url_banner'] }}" alt="{{ $new['url_banner'] }}" width="100%">
                                <div class="text-dark text-weight-600 fs-20" style="font-weight: bold;">{{ $new['subject'] }}</div>
                                <div  class="text-tertiary text-weight-600 fs-16">{{ date('d M Y H:i', strtotime($new['created_date'])) }}</div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="row">
                        @foreach($news as $new)
                            <div class="col-md-6 my-5">
                                @include('pages.landingPage.partials.cardNews', [
                                    'url' => url('/news', $new['id_blog']),
                                    'url_banner' => $new['url_banner'],
                                    'subject' => $new['subject']
                                ])
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="text-center">
                <a href="{{ url('/news') }}" class="btn text-white mt-5" style="border: 1px solid white;">
                    Lihat Semua <i class="fas fa-chevron-right"></i>
                </a>
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
                allowInput: true,
            });

            // return_date
            $("input[name='return_date']").flatpickr({
                dateFormat: "d-m-Y",
                allowInput: true,
            });
        });
    </script>
@endpush
