@extends('layouts.master')

@section('content')
    <!-- Banner Umroh Start -->
    @if ( $layanan === 'umroh' )
        @include('pages.packageProducts.partials.bannerUmroh')
    @elseif ( $layanan === 'umrohplus' )
        @include('pages.packageProducts.partials.bannerUmrohPlus')
    @else 
        @include('pages.packageProducts.partials.bannerWisataHalal')
    @endif
    <!-- Banner Umroh End -->

    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="row">
            @if( count($package_products) > 0 )
                @foreach($package_products as $package_product)
                    <div class="col-lg-3 col-md-4 my-5">
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
            @else
                @include('layouts.partials.message-search-not-found')
            @endif
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