@extends('layouts.master')

@section('content')
    <div class="container-fluid" style="background-image:url('{{ asset('assets-web/img/background/package-umroh.png') }}');background-repeat: no-repeat;background-size: 100% 100%;">
        <div class="container p-tb-50">
            <div class="mb-4 text-white text-weight-700 fs-44" style="font-weight: bold;">Paket Ibadah Umrah</div>
            <div class="mb-4 text-light text-weight-400 fs-20">Perjalanan umroh lengkap dengan paket hotel berbintang, penerbangan & VISA.</div>
        </div>
    </div>

    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="row">
            @foreach($package_products as $package_product)
                <div class="col-lg-3 col-md-4 my-5">
                    @include('pages.packageProducts.partials.cardPackage', [
                        'url' => url('/package', $package_product['id_packet']),
                        'url_banner' => $package_product['url_banner'],
                        'name' => $package_product['name'],
                        'quota' => $package_product['quota'],
                        'percent_markup' => $package_product['percent_markup'],
                        'price' => $package_product['price'],
                        'image_configuration' => $configuration['data'][3]['value_configuration']
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


    <!-- you Have Question Start -->
    @include('layouts.partials.question')
    <!-- you Have Question End -->
@endsection