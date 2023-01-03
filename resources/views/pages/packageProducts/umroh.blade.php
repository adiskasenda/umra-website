@extends('layouts.master')

@section('content')
    <div class="container-fluid" style="background-image:url('{{ asset('assets-web/img/background/package-umroh.png') }}');background-repeat: no-repeat;background-size: 100% 100%;">
        <div class="container py-5">
            <h3 class="text-white mb-4">Paket Ibadah Umrah</h3>
            <p class="text-white mb-4">Perjalanan umroh lengkap dengan paket hotel berbintang, penerbangan & VISA.</p>
        </div>
    </div>

    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="row g-4 align-items-center">
            @foreach($package_products as $package_product)
                <div class="col-md-3">
                    <a href="{{ url('/package', $package_product['id_packet']) }}">
                        <div class="card" style="width: 100$;">
                            <div class="card-body" style="padding: 1rem !important;">
                                <img src="{{ $package_product['url_banner'] }}" width="100%" alt="" srcset="">
                                <h5 class="card-titl mt-4">{{ $package_product['name'] }}</h5>
                                <div> <img src="{{ asset('assets-web/img/icon/package.png') }}" alt="{{ asset('assets-web/img/icon/package.png') }}" width="6%" height="6%">  Tersisa 24 Pax</div>
                                <div class="mb-3"> <img src="{{ asset('assets-web/img/icon/room.png') }}" alt="{{ asset('assets-web/img/icon/room.png') }}" width="6%" height="6%">  Tersedia 3 Pilihan Kamar</div>
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <div>Mulai dari</div>
                                        <div>Rp. {{ number_format($package_product['price']) }}</div>
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

   <!-- Banner Start -->
    <div class="container-xxl py-5">
        <div class="row">
            <div class="col-md-7">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        @foreach( $banners as $key => $banner )
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{ $key }}" @if( $key == 0) class="active" @endif aria-current="true" aria-label="Slide {{ $key }}"></button>
                        @endforeach
                    </div>
                    <div class="carousel-inner">
                        @foreach( $banners as $key => $banner )
                            <div @if( $key == 0) class="carousel-item active"  @else class="carousel-item" @endif>
                                <img src="{{ $banner['url_banner_web'] }}" class="d-block w-100" alt="{{ $banner['url_banner_web'] }}" width="100%" height="200px;">
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
    <!-- Banner End -->

    <!-- Paket Lain Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="mx-auto wow fadeInUp" data-wow-delay="0.1s">
                <h1 class="display-5 mb-5">Paket Layanan lain</h1>
            </div>
            <div class="row">
                @foreach( $otherMenus as $otherMenu )
                    <div class="col-md-6">
                        <div class="card" style="width: 100$;">
                            <div class="card-body">
                                <div class="row mb-3">
                                    <div class="col-md-3">
                                        <img src="{{ $otherMenu['icon'] }}" alt="{{ $otherMenu['icon'] }}" width="100px" height="100px" />
                                    </div>
                                    <div class="col-md-9">
                                        <div>{{ $otherMenu['title'] }}</div>
                                        <div>{{ $otherMenu['description'] }}</div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="d-grid gap-2">
                                            <a href="{{ $otherMenu['url'] }}" class="btn btn-success btn-block">Lihat Selengapnya</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Paket Lain End -->
@endsection