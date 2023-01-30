@extends('layouts.master')

@section('content')

    <!-- Banner Umroh Plus Start -->
    @include('pages.packageProducts.partials.bannerUmrohPlus')
    <!-- Banner Umroh Plus End -->

    <!-- Package Umroh Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row">
                @foreach($package_products as $package_product)
                    <div class="col-lg-3 col-md-4 my-5">
                        <!-- package Product -->
                        @include('pages.packageProducts.partials.cardPackage', [
                            'url' => url('/package', $package_product['id_packet']),
                            'url_banner' => $package_product['url_banner'],
                            'name' => $package_product['name'],
                            'quota' => $package_product['quota'],
                            'percent_markup' => $package_product['percent_markup'],
                            'price' => $package_product['price'],
                            'image_configuration' => $configuration['data'][3]['value_configuration'],
                            'status' => $package_product['status']
                        ])
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Package Umroh End -->

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