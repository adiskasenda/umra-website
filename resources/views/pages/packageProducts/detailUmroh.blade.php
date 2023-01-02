@extends('layouts.master')

@section('content')


    <!-- Detail Paket -->
    <div class="container-xxl py-5">
        <div class="container">
            @include('pages.packageProducts.partials.breadcrumb',[
                'breadcrumb' => $package_product['name']
            ])

            <div class="row">
                <div class="col-md-4">
                    <img src="{{ $package_product['url_banner'] }}" alt="{{ $package_product['url_banner'] }}" width="100%" height="100%">

                    <!-- <button>  <img src="{{ asset('assets-web/img/icon/cart.png') }}" alt="{{ asset('assets-web/img/icon/cart.png') }}"> Pesan Sekarang</button> -->
                </div>
                <div class="col-md-6">
                    <div>{{ $package_product['name'] }}</div>
                    <div>{!! $package_product['description'] !!}</div>

                    <div>Harga mulai dari</div>
                    <div>{{ $package_product['price'] }}</div>

                    <div>Jadwal Keberangkatan</div>
                    <div>{{ $package_product['day_duration'] }}</div>

                    <div>Hotel & Penginapan</div>
                    
                    @foreach($package_product['list_hotel'] as $list_hotel)
                        <div>{{ $list_hotel['hotel'] }}</div>
                        <div class="rating">
                            <div class="rating-label me-2 {{ $list_hotel['bintang'] >= 1 ? 'checked' : '' }}">
                                <i class="bi bi-star fs-1"></i>
                            </div>
                            <div class="rating-label me-2 {{ $list_hotel['bintang'] >= 2 ? 'checked' : '' }}">
                                <i class="bi bi-star fs-1"></i>
                            </div>
                            <div class="rating-label me-2 {{ $list_hotel['bintang'] >= 3 ? 'checked' : '' }}">
                                <i class="bi bi-star fs-1"></i>
                            </div>
                            <div class="rating-label me-2 {{ $list_hotel['bintang'] >= 4 ? 'checked' : '' }}">
                                <i class="bi bi-star fs-1"></i>
                            </div>
                            <div class="rating-label me-2 {{ $list_hotel['bintang'] >= 5 ? 'checked' : '' }}">
                                <i class="bi bi-star fs-1"></i>
                            </div>
                            <div class="rating-label me-2 {{ $list_hotel['bintang'] >= 6 ? 'checked' : '' }}">
                                <i class="bi bi-star fs-1"></i>
                            </div>
                        </div>
                    @endforeach


                    <div>Maskapai Penerbangan</div>
                    <div>{{ $package_product['airline_desc'] }}</div>
                    
                    <div>Pilihan Kamar Hotel</div>
                    <div>{{ $package_product['price_double'] }}</div>
                    <div>{{ $package_product['price_triple'] }}</div>
                    <div>{{ $package_product['price_quad'] }}</div>

                    <div>{{ $package_product['note'] }}</div>


                    <div>Negara yang dikunjungi</div>
                    <div>{{ $package_product['tour_country'] }}</div>

                    <div>Kota yang dikunjungi</div>
                    <div>{{ $package_product['tour_city'] }}</div>

                    <div>Detail Faslitas</div>

                    <div>Sudah Termasuk</div>
                    @foreach($package_product['list_include'] as $include)
                        <div>{{ $include['include'] }}</div>
                    @endforeach
                    
                    <div>Belum Termasuk</div>
                    @foreach($package_product['list_exclude'] as $exclude)
                        <div>{{ $exclude['exclude'] }}</div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
    <!-- Detail Paket -->

    <!-- Paket Lain Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="mx-auto wow fadeInUp" data-wow-delay="0.1s">
                <h1 class="display-5 mb-5">Paket Layanan lain</h1>
            </div>
            <div class="row">
                <!-- Paket Lain -->
            </div>
        </div>
    </div>
    <!-- Paket Lain End -->
@endsection