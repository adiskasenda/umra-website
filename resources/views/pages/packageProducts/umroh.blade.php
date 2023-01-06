@extends('layouts.master')

@section('content')
    <div class="container-fluid py-5" style="background-image:url('{{ asset('assets-web/img/background/package-umroh.png') }}');background-repeat: no-repeat;background-size: 100% 100%;">
        <div class="container">
            <div class="text-white mb-4">Paket Ibadah Umrah</div>
            <div class="text-white mb-4">Perjalanan umroh lengkap dengan paket hotel berbintang, penerbangan & VISA.</div>
            <div class="row mt-5">
                <div class="col-md-2">
                    <img src="{{ asset('assets-web/img/icon/hotel-umrah.png')}}" alt="{{ asset('assets-web/img/icon/hotel-umrah.png')}}" width="40px">
                    <span style="font-size: 16px;">Hotel</span>
                </div>
                <div class="col-md-2">
                    <img src="{{ asset('assets-web/img/icon/plane-umrah.png')}}" alt="{{ asset('assets-web/img/icon/plane-umrah.png')}}" height="40px">
                    <span style="font-size: 16px;">Pesawat</span>
                </div>
                <div class="col-md-2">
                    <img src="{{ asset('assets-web/img/icon/visa-umroh.png')}}" alt="{{ asset('assets-web/img/icon/visa-umroh.png')}}" height="40px">
                    <span style="font-size: 16px;">VISA Perjalanan</span>
                </div>
                <div class="col-md-2">
                    <img src="{{ asset('assets-web/img/icon/asuransi-umroh.png')}}" alt="{{ asset('assets-web/img/icon/asuransi-umroh.png')}}" height="40px">
                    <span style="font-size: 16px;">Asuransi</span>
                </div>
                <div class="col-md-2">
                    <img src="{{ asset('assets-web/img/icon/tour-lead-umrah.png')}}" alt="{{ asset('assets-web/img/icon/tour-lead-umrah.png')}}" height="40px">
                    <span style="font-size: 16px;">Tour Leader</span>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
    </div>

    <!-- Package Umroh Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row g-4 align-items-center">
                @foreach($package_products as $package_product)
                    <div class="col-md-3">
                        @include('pages.packageProducts.partials.cardPackage', [
                            'url' => url('/package', $package_product['id_packet']),
                            'url_banner' => $package_product['url_banner'],
                            'name' => $package_product['name']
                        ])
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Package Umroh End -->


   <!-- Banner Header Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            @foreach( $banner_headers as $key => $banner_header )
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{ $key }}" @if( $key == 0) class="active" @endif aria-current="true" aria-label="Slide {{ $key }}"></button>
                            @endforeach
                        </div>
                        <div class="carousel-inner">
                            @foreach( $banner_headers as $key => $banner_header )
                                <div @if( $key == 0) class="carousel-item active"  @else class="carousel-item" @endif>
                                    <img src="{{ $banner_header['url_banner_web'] }}" class="d-block w-100" alt="{{ $banner_header['url_banner_web'] }}" width="100%" height="200px;">
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
    <!-- Banner Header End -->


    <!-- Paket Lain Start -->
    @include('pages.packageProducts.partials.otherMenu')
    <!-- Paket Lain End -->


    <!-- Banner Start -->
    <div class="container-fluid py-5">
        <div class="container" style="margin-top: 4%; margin-bottom:3%;">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <img src="{{ $banner }}" alt="{{ $banner }}" width="100%" height="100%">
            </div>
        </div>
    </div>
    <!-- Banner End -->
@endsection