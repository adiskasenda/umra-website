@extends('layouts.landing')

@section('content')
    <!-- Banner Form Start -->
    <div class="container-xxl callback p-0" style="margin-bottom: -60px;">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-interval="3000" data-bs-ride="carousel">
            <div class="carousel-inner">
                @foreach( $banners as $key => $banner )
                    <div @if( $key == 0) class="carousel-item active"  @else class="carousel-item" @endif>
                        <img class="d-block w-100" src="{{ $banner['url'] }}" alt="First slide">
                    </div>
                @endforeach
            </div>
        </div>
        <div class="container" style="position: relative;top: -60px;">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="bg-white border rounded p-3 p-sm-4 wow fadeInUp" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                        <form class="row" method="GET" action="{{ url('/package/umroh') }}">
                            <div class="col-md-10">
                                <div class="row">
                                    <div class="col-sm-4 justify-content-md-center">
                                        <label for="specificSizeInputGroupUsername">Layanan</label>
                                        <select class="form-select" data-control="select2" data-placeholder="Select an option">
                                            @foreach($layanan as $layanan)
                                                <option value="{{ $layanan }}">{{ $layanan }}</option>
                                            @endforeach
                                        </select>
                                        <!-- <input type="text" id="tanggal" placeholder="Layanan" name="tanggal" class="form-control mt-2" required/> -->
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
                                <button type="submit" class="btn btn-success  mt-3" style="width: 100%;">Cari</button>
                            </div>
                        </form>
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
                                <div @if( $key == 0) class="carousel-item active"  @else class="carousel-item" @endif>
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
                <div class="col-md-4">
                    <h3 class="mb-4" style="font-size: 48px;">Paket <br/> Umroh Reguler</h3>
                    <p class="mb-4" style="font-size: 20px;">Perjalanan umroh lengkap dengan paket hotel berbintang, penerbangan & VISA.</p>
                    <div class="row mb-5">
                        <div class="col-4">
                            <img src="{{ asset('assets-web/img/icon/hotel-umrah.png')}}" alt="{{ asset('assets-web/img/icon/hotel-umrah.png')}}" width="40px">
                            <span class="ml-2" style="font-size: 16px;">Hotel</span>
                        </div>
                        <div class="col-4">
                            <img src="{{ asset('assets-web/img/icon/plane-umrah.png')}}" alt="{{ asset('assets-web/img/icon/plane-umrah.png')}}" height="40px">
                            <span class="ml-2" style="font-size: 16px;">Pesawat</span>
                        </div>
                    </div>
                    <a href="#" class="btn btn-success">Lihat Semua Paket ></a>
                </div>
                <div class="col-md-2"></div>
                @foreach( $package_product_umrah as $umrah )
                    <div class="col-md-3">
                        <a href="{{ url('/package', $umrah['id_packet']) }}">
                            <div class="card" style="width: 100$;">
                                <div class="card-body" style="padding: 1rem !important;">
                                    <img src="{{ $umrah['url_banner'] }}" width="100%" alt="{{ $umrah['url_banner'] }}">
                                    <h5 class="card-titl mt-4">{{ $umrah['name'] }}</h5>
                                    <div> <img src="{{ asset('assets-web/img/icon/package.png') }}" alt="{{ asset('assets-web/img/icon/package.png') }}" width="6%" height="6%">  Tersisa 24 Pax</div>
                                    <div class="mb-3"> <img src="{{ asset('assets-web/img/icon/room.png') }}" alt="{{ asset('assets-web/img/icon/room.png') }}" width="6%" height="6%">  Tersedia 3 Pilihan Kamar</div>
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <div>Mulai dari</div>
                                            <div>Rp. 30.000.000</div>
                                        </div>
                                        <div class="col-md-6">
                                            <img src="{{ asset('assets-web/img/icon/cicilan2x.png') }}" alt="{{ asset('assets-web/img/icon/cicilan2x.png') }}" width="100%" height="100%" />
                                        </div>
                                    </div>
                                    <div>Rp. 28.500.000 / Orang</div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Package Umroh End -->

    <!-- Package Umroh Plush Start -->
    <div class="container-fluid py-5" style="background-image:url('{{ asset('assets-web/img/background/background-1.png') }}');">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h3 class="mb-4 text-white" style="font-size: 48px;">Paket <br/> Umroh Plus+</h3>
                    <p class="mb-4 text-light" style="font-size: 20px;">Perjalanan umroh lengkap dengan paket hotel berbintang, penerbangan & VISA.</p>
                    <div class="row mb-5">
                        <div class="col-4">
                            <img src="{{ asset('assets-web/img/icon/hotel-umrah.png')}}" alt="{{ asset('assets-web/img/icon/hotel-umrah.png')}}" width="40px">
                            <span class="text-light" style="font-size: 16px;">Hotel</span>
                        </div>
                        <div class="col-4">
                            <img src="{{ asset('assets-web/img/icon/plane-umrah.png')}}" alt="{{ asset('assets-web/img/icon/plane-umrah.png')}}" width="40px">
                            <span class="text-light" style="font-size: 16px;">Pesawat</span>
                        </div>
                        <div class="col-4">
                            <img src="{{ asset('assets-web/img/icon/tour-umrah.png')}}" alt="{{ asset('assets-web/img/icon/tour-umrah.png')}}" height="40px">
                            <span class="text-light" style="font-size: 16px;">Wisata</span>
                        </div>
                    </div>
                    <a href="#" class="btn btn-success">Lihat Semua Paket ></a>
                </div>
                <div class="col-md-2"></div>
                @foreach($package_product_wisata_halal as $umrah_plus)
                    <div class="col-md-3">
                        <a href="{{ url('/package', $umrah_plus['id_packet']) }}">
                            <div class="card" style="width: 100$;">
                                <div class="card-body" style="padding: 1rem !important;">
                                    <img src="{{ $umrah_plus['url_banner'] }}" width="100%" alt="{{ $umrah_plus['url_banner'] }}">
                                    <h5 class="card-titl mt-4">{{ $umrah_plus['name'] }}</h5>
                                    <div> <img src="{{ asset('assets-web/img/icon/package.png') }}" alt="{{ asset('assets-web/img/icon/package.png') }}" width="6%" height="6%">  Tersisa 24 Pax</div>
                                    <div class="mb-3"> <img src="{{ asset('assets-web/img/icon/room.png') }}" alt="{{ asset('assets-web/img/icon/room.png') }}" width="6%" height="6%">  Tersedia 3 Pilihan Kamar</div>
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <div>Mulai dari</div>
                                            <div>Rp. 30.000.000</div>
                                        </div>
                                        <div class="col-md-6">
                                            <img src="{{ asset('assets-web/img/icon/cicilan2x.png') }}" alt="{{ asset('assets-web/img/icon/cicilan2x.png') }}" width="100%" height="100%" />
                                        </div>
                                    </div>
                                    <div>Rp. 28.500.000 / Orang</div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Package Umroh End -->


    <!-- Why Worship Start -->
    <div class="container-fluid py-5">
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
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <img src="{{ $banner3 }}" alt="{{ $banner3 }}" width="100%" height="100%">
            </div>
        </div>
    </div>
    <!-- Banner End -->


    <!-- Explore& wisata Start -->
    <div class="container-fluid py-5" style="background-image:url('{{ asset('assets-web/img/background/background-2.png') }}');background-repeat: no-repeat;background-size: 100% 100%;">
        <div class="container">
            <div class="text-white text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="display-5 text-white mb-5">Explore & Berwisata Keliling Jazirah Arab</h1>
                <p>Berangkat beribadah tidak pernah semenyenangkan ini dengan bebas atur fasilitas hotel, pesawat, asuransi, visa & destinasi wisata halal impian anda.</p>
            </div>
        </div>
        <div class="container" style="background-image:url('{{ asset('assets-web/img/background/background-3.png') }}');background-repeat: no-repeat;background-size: 100% 100%;">
            <div class="row p-5">
                <div class="col-md-4">
                    <h3 class="mb-4 text-white" style="font-size: 48px;">Paket <br/> Umroh Plus+</h3>
                    <p class="mb-4 text-light" style="font-size: 20px;">Perjalanan umroh lengkap dengan paket hotel berbintang, penerbangan & VISA.</p>
                    <div class="row mb-5">
                        <div class="col-4">
                            <img src="{{ asset('assets-web/img/icon/hotel-umrah.png')}}" alt="{{ asset('assets-web/img/icon/hotel-umrah.png')}}" width="40px">
                            <span class="ml-2 text-light" style="font-size: 16px;">Hotel</span>
                        </div>
                        <div class="col-4">
                            <img src="{{ asset('assets-web/img/icon/plane-umrah.png')}}" alt="{{ asset('assets-web/img/icon/plane-umrah.png')}}" height="40px">
                            <span class="ml-2 text-light" style="font-size: 16px;">Pesawat</span>
                        </div>
                    </div>
                    <a href="#" class="btn btn-success">Lihat Semua Paket ></a>
                </div>
                <div class="col-md-2"></div>
                @foreach($package_product_wisata_halal as $wisata_halal)
                    <div class="col-md-3">
                        <a href="{{ url('/package', $wisata_halal['id_packet']) }}">
                            <div class="card" style="width: 100$;">
                                <div class="card-body" style="padding: 1rem !important;">
                                    <img src="{{ $wisata_halal['url_banner'] }}" width="100%" alt="{{ $wisata_halal['url_banner'] }}">
                                    <h5 class="card-titl mt-4">{{ $wisata_halal['name'] }}</h5>
                                    <div> <img src="{{ asset('assets-web/img/icon/package.png') }}" alt="{{ asset('assets-web/img/icon/package.png') }}" width="6%" height="6%">  Tersisa 24 Pax</div>
                                    <div class="mb-3"> <img src="{{ asset('assets-web/img/icon/room.png') }}" alt="{{ asset('assets-web/img/icon/room.png') }}" width="6%" height="6%">  Tersedia 3 Pilihan Kamar</div>
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <div>Mulai dari</div>
                                            <div>Rp. 30.000.000</div>
                                        </div>
                                        <div class="col-md-6">
                                            <img src="{{ asset('assets-web/img/icon/cicilan2x.png') }}" alt="{{ asset('assets-web/img/icon/cicilan2x.png') }}" width="100%" height="100%" />
                                        </div>
                                    </div>
                                    <div>Rp. 28.500.000 / Orang</div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
                
            </div>                
        </div>
    </div>
    <!-- Explore& wisata End -->

    
    <!-- Experience Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="display-5 mb-5">Pengalaman ibadah mereka bersama UMRA.ID</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.3s">
                @foreach($experience as $experience)
                    <div class="testimonial-item">
                        <div class="bg-white testimonial-text border rounded p-4 pt-5 mb-5">
                            Tadinya takut umroh sendiri, lalu coba UMRA.ID umroh jadi seru dan berkesan
                        </div>
                        <img class="rounded-circle mb-3" src="{{ asset('assets-web/img/testimonial-1.jpg')}}" alt="">
                        <h4 class="text-white">Client Name</h4>
                        <span class="text-light">Profession</span>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Experience End -->


    <!-- Testimonial Start -->
    <div class="container-fluid py-5" style="background-image:url('{{ asset('assets-web/img/background/background-5.png') }}');background-repeat: no-repeat;background-size: 100% 100%;">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="text-drak display-5 mb-5">Apa kata mereka tentang UMRA.ID?</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.3s">
                @foreach($experience2 as $experience2)
                    <div class="testimonial-item">
                        <div class="bg-white testimonial-text border rounded p-4 pt-5 mb-5">
                            <div class="btn-square bg-white border rounded-circle">
                                <i class="fa fa-quote-right fa-2x text-primary"></i>
                            </div>
                            Tadinya takut umroh sendiri, lalu coba UMRA.ID umroh jadi seru dan berkesan
                        </div>
                        <img class="rounded-circle mb-3" src="{{ asset('assets-web/img/testimonial-1.jpg')}}" alt="">
                        <h4 class="text-drak">Client Name</h4>
                        <span class="text-light">Profession</span>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Mitra Start -->
    <div class="container-fluid py-5" style="background-image:url('{{ asset('assets-web/img/background/background-4.png') }}');background-repeat: no-repeat;background-size: 100% 100%;">
        <div class="container">
            <div class="text-white text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="display-5 text-white mb-5">Explore & Berwisata Keliling Jazirah Arab</h1>
                <p>Berangkat beribadah tidak pernah semenyenangkan ini dengan bebas atur fasilitas hotel, pesawat, asuransi, visa & destinasi wisata halal impian anda.</p>
            </div>

            <div class="row">
                <div class="col-md-6">
                    @foreach($mitras as $mitra)
                    <div class="card" style="width: 100$;">
                        <div class="card-body">
                            <div>{{ $mitra['name'] }}</div>
                            <div>{{ $mitra['address'] }}</div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="col-md-6">
                    <div class="card" style="width: 100$;">
                        <div class="card-body">
                            <div>Gabung Sebagai Agen Penjualan</div>
                            <div>Jadi agen penjualan, pelayanan & mendaftarkan calon jamaah akan lebih mudah menggunakan aplikasi dan ekosistem UMRA.</div>
                            <div>Dibantu pemasaran oleh tim digital marketing UMRA.ID</div>
                            <div>Konsulitasi strategi penjualan dengan UMRA</div>
                            <div>Share profit transaksi perjalanan jamaah yang selesai</div>
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
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="display-5 mb-5">Partner Terpercaya Kami</h1>
                <p>Kami memiliki partner yang terpercaya di bidangnya, dan kami selalu berusaha memberikan pengalaman terbaik untuk ibadah Anda</p>
            </div>

            <div class="row justify-content-md-center">
                @foreach($partners as $partner)
                    <div class="col-md-3">
                        <img src="{{ $partner['url'] }}" alt="{{ $partner['url'] }}">
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
                    <a href="{{ url('/news') }}" class="text-white">Lihat Semua ></a>
                </div>
            </div>

            <div class="row g-4 align-items-center">
                @foreach($news as $new)
                    <div class="col-md-6">
                        <div class="card" style="width: 100$;">
                            <div class="card-body" style="padding: 1rem !important;">
                                <img src="{{ $new['url_banner'] }}" width="100%" alt="{{ $new['url_banner'] }}">
                                <h5 class="card-titl mt-4">{{ $new['subject'] }}</h5>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Testimonial End -->
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