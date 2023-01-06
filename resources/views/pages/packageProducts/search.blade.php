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
                    @include('pages.packageProducts.partials.cardPackage', [
                        'url' => url('/package', $package_product['id_packet']),
                        'url_banner' => $package_product['url_banner'],
                        'name' => $package_product['name']
                    ])
                </div>
            @endforeach
        </div>
    </div>

    <!-- Banner Header Start -->
    @include('pages.packageProducts.partials.bannerHeader')
    <!-- Banner Header End -->


    <!-- Paket Lain Start -->
    @include('pages.packageProducts.partials.otherMenu')
    <!-- Paket Lain End -->


    <!-- Banner Start -->
    @include('pages.packageProducts.partials.banner')
    <!-- Banner End -->
@endsection