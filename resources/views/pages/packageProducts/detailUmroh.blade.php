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
                    <img src="{{ $package_product['url_banner'] }}" alt="{{ $package_product['url_banner'] }}" width="100%">

                    <button type="submit" class="btn btn-success mt-3" style="width: 100%;">Pesan Sekarang</button>
                    <!-- <button>  <img src="{{ asset('assets-web/img/icon/cart.png') }}" alt="{{ asset('assets-web/img/icon/cart.png') }}"> Pesan Sekarang</button> -->
                </div>
                <div class="col-md-8">
                    <div>{{ $package_product['name'] }}</div>
                    <div>{!! $package_product['description'] !!}</div>

                    <div class="row">
                        <div class="col-md-4">
                            <div>Harga mulai dari</div>
                            <div>{{ $package_product['price'] }}</div>
                        </div>
                        <div class="col-md-8">
                            <div>Jadwal Keberangkatan</div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div>Tanggal Keberangkatan</div>
                                    <div>{{ $package_product['date_end'] }}</div>
                                </div>
                                <div class="col-md-6">
                                    <div>Durasi Perjalanan</div>
                                    <div>{{ $package_product['day_duration'] }}</div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div>Hotel & Penginapan</div>
                    
                    <div class="row">
                        @foreach($package_product['list_hotel'] as $list_hotel)
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-body" style="padding: 1rem !important;">
                                        <div class="d-flex flex-stack flex-wrap">
                                            <div class="d-flex align-items-center pe-2">
                                                {{ $list_hotel['hotel'] }}
                                            </div>
                                            <span class="my-2">
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
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <div>Maskapai Penerbangan</div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body" style="padding: 1rem !important;">
                                    <div class="d-flex flex-stack flex-wrap">
                                        <div class="d-flex align-items-center pe-2">
                                            {{ $package_product['airline_desc'] }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    
                    <div>Pilihan Kamar Hotel</div>
                    <div class="row">
                        <div class="col-md-4">
                            <div>{{ number_format($package_product['price_double']) }}</div>
                        </div>
                        <div class="col-md-4">
                            <div>{{ number_format($package_product['price_triple']) }}</div>
                        </div>
                        <div class="col-md-4">
                            <div>{{ number_format($package_product['price_quad']) }}</div>
                        </div>
                    </div>

                    <!--begin::Alert-->
                    <div class="notice d-flex bg-light-primary rounded border-primary border border-dashed mb-9 p-6">
                        <span class="svg-icon svg-icon-2tx svg-icon-primary me-4">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor"></rect>
                                <rect x="11" y="14" width="7" height="2" rx="1" transform="rotate(-90 11 14)" fill="currentColor"></rect>
                                <rect x="11" y="17" width="2" height="2" rx="1" transform="rotate(-90 11 17)" fill="currentColor"></rect>
                            </svg>
                        </span>
                        <div class="d-flex flex-stack flex-grow-1">
                            <div class="fw-semibold">
                                <div class="fs-6 text-gray-700"> {{ $package_product['note'] }} </div>
                            </div>
                        </div>
                    </div>
                    <!--end::Alert-->

                    <!-- Tour Count -->
                    <div class="row">
                        <div class="col-md-6">
                            <div>Negara yang dikunjungi</div>
                            <div>{{ $package_product['tour_country'] }}</div>
                        </div>
                        <div class="col-md-6">
                            <div>Kota yang dikunjungi</div>
                            <div>{{ $package_product['tour_city'] }}</div>
                        </div>
                    </div>

                    <!-- Detail Fasilitas -->
                    <div class="mt-4">Detail Faslitas</div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card card-flush">
                                <div class="card-header">
                                    <div class="card-title">
                                        <h2 class="mb-0">Sudah Termasuk</h2>
                                    </div>
                                </div>
                                <div class="card-body pt-0">
                                    <div class="d-flex flex-column text-gray-600">
                                        @foreach($package_product['list_include'] as $include)
                                            <div class="d-flex align-items-center py-2">
                                                <span class="bullet bg-primary me-3"></span> {{ $include['include'] }}
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card card-flush">
                                <div class="card-header">
                                    <div class="card-title">
                                        <h2 class="mb-0">Belum Termasuk</h2>
                                    </div>
                                </div>
                                <div class="card-body pt-0">
                                    <div class="d-flex flex-column text-gray-600">
                                        @foreach($package_product['list_exclude'] as $exclude)
                                            <div class="d-flex align-items-center py-2">
                                                <span class="bullet bg-primary me-3"></span> {{ $exclude['exclude'] }}
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
                <div class="col-md-3">
                    <a href="{{ url('/package/1') }}">
                        <div class="card" style="width: 100$;">
                            <div class="card-body" style="padding: 1rem !important;">
                                <img src="https://sit.umra.id/uploads/packet_banner/1410112022-8397ba55-be9a-4639-9590-fe452b8a2212.jpg" width="100%" alt="https://sit.umra.id/uploads/packet_banner/1410112022-8397ba55-be9a-4639-9590-fe452b8a2212.jpg">
                                <h5 class="card-titl mt-4">test umra</h5>
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
            </div>
        </div>
    </div>
    <!-- Paket Lain End -->
@endsection