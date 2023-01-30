@extends('layouts.master')

@section('content')

    <!-- Detail Paket -->
    <div class="container-xxl py-5">
        <div class="container">
            @include('pages.packageProducts.partials.breadcrumb',[
                'breadcrumb' => $package_product['name']
            ])

            <div class="row">
                <div class="col-md-4 mt-5">
                    <div style="position: -webkit-sticky;position: sticky;top: 120px;">
                        <img class="img-card" src="{{ $package_product['url_banner'] }}" alt="{{ $package_product['url_banner'] }}" width="100%">
                        <div class="row mb-3 mt-5">
                            <div class="col-6">
                                @if ( $package_product['quota'] == 0 )
                                    <div class="text-tertiary"> 
                                        <img class="icon-package" style="margin-right:5px;" src="{{ asset('assets-web/img/icon/package-danger.png') }}" alt="{{ asset('assets-web/img/icon/package.png') }}" height="36px">  
                                        <span class="font-normal-400 fs-16">Seat Penuh</span>
                                    </div>
                                @else
                                    <div class="text-tertiary"> 
                                        <img class="icon-package" style="margin-right:5px;" src="{{ asset('assets-web/img/icon/package.png') }}" alt="{{ asset('assets-web/img/icon/package.png') }}" height="36px">  
                                        <span class="font-normal-400 fs-16">Tersisa {{ $package_product['quota'] }} Pax</span>
                                    </div>
                                @endif
                            </div>

                            <div class="col-6" style="margin:auto;">
                                <img class="icon-cicilan" src="{{ $configuration['data'][3]['value_configuration'] }}" alt="{{ $configuration['data'][3]['value_configuration'] }}" height="36px"/>
                            </div>
                        </div>

                        @if( $package_product['quota'] == 0 )
                            <button class="btn btn-success mt-3" style="width: 100%;" disabled>Pesan Sekarang</button>
                        @else
                            <a href="{{ url('/transaction/jamaah', $package_product['id_packet']) }}" class="btn btn-success mt-3" style="width: 100%;">Pesan Sekarang</a>
                        @endif
                    </div>
                </div>
                <div class="col-md-8 mt-5">
                    @if ( $package_product['flag_umroh'] == 0 )
                        <a href="{{ url('/package/umroh') }}" class="text-tertiary fs-16"> 
                            <i class="fa fa-arrow-left mr-2" aria-hidden="true"></i> Umroh
                        </a>
                    @elseif ( $package_product['flag_umroh'] == 1 )
                        <a href="{{ url('/package/umroh-plus') }}" class="text-tertiary fs-16">
                            <i class="fa fa-arrow-left mr-2" aria-hidden="true"></i> Umroh Plus
                        </a>
                    @elseif ( $package_product['flag_umroh'] == 2 )
                        <a href="{{ url('/package/wisata-halal') }}" class="text-tertiary fs-16">
                            <i class="fa fa-arrow-left mr-2" aria-hidden="true"></i> Wisata Halal
                        </a>
                    @endif

                    <div class="text-dark font-normal-700 fs-32">{{ $package_product['name'] }}</div>
                    <div class="text-tertiary font-normal-400 fs-16 py-5">{!! $package_product['description'] !!}</div>

                    <div class="row">
                        <div class="col-md-4 mt-5">
                            <div class="card card-bordered" style="width: 100$;">
                                <div class="card-body" style="padding: 1rem !important;">
                                    @if( $package_product['percent_markup'] > 0 )
                                        <div class="text-dark font-normal-600 fs-16">Harga mulai dari</div>
                                        <div class="text-tertiary font-normal-400 fs-14" style="text-decoration: line-through;">Rp. {{ number_format($package_product['price'] + ( $package_product['price'] * $package_product['percent_markup'] )) }}</div>
                                    @else
                                        <div class="text-dark font-normal-600 fs-16">Harga</div>
                                    @endif
                                    <div class="text-green mb-3">
                                        <span class="font-normal-700 fs-20">Rp. {{ number_format($package_product['price']) }}</span>
                                        <span class="text-tertiary font-normal-500 fs-14">/ Orang</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8 mt-5">
                            <div class="card card-bordered" style="width: 100$;">
                                <div class="card-body" style="padding: 1rem !important;">
                                    <div class="text-dark font-normal-600 fs-16">Jadwal Keberangkatan</div>
                                    
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="row mt-5">
                                                <div class="col-lg-2 col-md-4 col-2">
                                                    <img src="{{ asset('assets-web/img/icon/calendar-umroh.png') }}" alt="{{ asset('assets-web/img/icon/calendar-umroh.png') }}">
                                                </div>
                                                <div class="col-lg-10 col-md-8 col-10">
                                                    <div class="text-tertiary font-normal-400 fs-14">Tanggal Keberangkatan</div>
                                                    <div class="font-normal-600 fs-14">{{ date('d M Y', strtotime($package_product['date_end'])) }}</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="row mt-5">
                                                <div class="col-lg-2 col-md-4 col-2">
                                                    <img src="{{ asset('assets-web/img/icon/time-umroh.png') }}" alt="{{ asset('assets-web/img/icon/time-umroh.png') }}">
                                                </div>
                                                <div class="col-lg-10 col-md-8 col-10">
                                                    <div class="text-tertiary font-normal-400 fs-14">Durasi Perjalanan</div>
                                                    <div class="font-normal-600 fs-14">{{ $package_product['day_duration'] }} Hari</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="text-dark font-normal-700 fs-20 mt-5">Hotel & Penginapan</div>
                    <div class="row mt-2">
                        @foreach($package_product['list_hotel'] as $list_hotel)
                            <div class="col-md-6">
                                <div class="card card-bordered mb-5" style="background: #F8FCFC;">
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

                    <div class="text-dark font-normal-700 fs-20 mt-5">Maskapai Penerbangan</div>
                    <div class="row mt-2">
                        <div class="col-md-6">
                            <div class="card card-bordered mb-5" style="background: #F8FCFC;">
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
                    
                    <div class="text-dark font-normal-700 fs-20 mt-5">Pilihan Kamar Hotel</div>
                    <div class="row">
                        <div class="col-md-4 mt-5">
                            <div class="card card-bordered" style="width: 100$;">
                                <div class="card-header" style="background: #F8FCFC;">
                                    <div class="image-center mt-2">
                                        <img src="{{ asset('assets-web/img/icon/double.png') }}" alt="{{ asset('assets-web/img/icon/double.png') }}">
                                        <div class="font-normal-700 fs-14">Double</div>
                                    </div>
                                </div>
                                <div class="card-body text-center" style="padding: 1rem !important;">
                                    <div>
                                        <span class="text-dark font-normal-700 fs-16">Rp. {{ number_format($package_product['price_double']) }}</span>
                                        <span class="text-tertiary font-normal-500 fs-14">/Orang</span>
                                    </div>
                                    <div class="text-tertiary font-normal-400 fs-12">*1 Kamar terdiri dari 2 jamaah</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mt-5">
                            <div class="card card-bordered" style="width: 100$;">
                                <div class="card-header" style="background: #F8FCFC;">
                                    <div class="image-center mt-2">
                                        <img src="{{ asset('assets-web/img/icon/triple.png') }}" alt="{{ asset('assets-web/img/icon/triple.png') }}">
                                        <div class="font-normal-700 fs-14">Triple</div>
                                    </div>
                                </div>
                                <div class="card-body text-center" style="padding: 1rem !important;">
                                    <div>
                                       <span class="text-dark font-normal-700 fs-16">Rp. {{ number_format($package_product['price_triple']) }} </span>
                                       <span class="text-tertiary font-normal-500 fs-14">/Orang</span>
                                    </div>
                                    <div class="text-tertiary font-normal-400 fs-12">*1 Kamar terdiri dari 3 jamaah</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mt-5">
                            <div class="card card-bordered" style="width: 100$;">
                                <div class="card-header" style="background: #F8FCFC;">
                                    <div class="image-center mt-2">
                                        <img src="{{ asset('assets-web/img/icon/quad.png') }}" alt="{{ asset('assets-web/img/icon/quad.png') }}">
                                        <div class="font-normal-700 fs-14">Quad</div>
                                    </div>
                                </div>
                                <div class="card-body text-center" style="padding: 1rem !important;">
                                    <div>
                                        <span class="text-dark font-normal-700 fs-16">Rp. {{ number_format($package_product['price_quad']) }} </span>
                                        <span class="text-tertiary font-normal-500 fs-14">/Orang</span>
                                    </div>
                                    <div class="text-tertiary font-normal-400 fs-12">*1 Kamar terdiri dari 4 jamaah</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--begin::Alert-->
                    <div class="notice d-flex bg-light-primary rounded border-primary border border-dashed mb-5 mt-5 p-6">
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
                        <div class="col-md-6 mt-5">
                            <div class="text-dark font-normal-700 fs-20">Negara yang dikunjungi</div>
                            @foreach( explode(',', $package_product['tour_country']) as $tour_country )
                                @if( $tour_country )
                                    <div class="text-tertiary font-normal-500 fs-14 mt-3">
                                        <i class="fas fa-flag mx-3 text-green"></i> {{ $tour_country }}
                                    </div>
                                @endif
                            @endforeach
                        </div>
                        <div class="col-md-6 mt-5">
                            <div class="text-dark font-normal-700 fs-20">Kota yang dikunjungi</div>
                            @foreach( explode(',', $package_product['tour_city']) as $tour_city )
                                @if( $tour_city )
                                    <div class="text-tertiary font-normal-500 fs-14 mt-3">
                                        <i class="fas fa-location-dot mx-3 text-green"></i> {{ $tour_city }}
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>

                    <!-- Detail Fasilitas -->
                    <div class="text-dark font-normal-700 fs-20 mt-5">Detail Faslitas</div>
                    <div class="row mt-2">
                        <div class="col-md-6 mt-5">
                            <div class="card card-bordered" >
                                <div class="card-header" style="background: #F8FCFC;">
                                    <div class="card-title">
                                        <h2 class="mb-0 text-success">
                                            <i class="fa-solid fa-circle-check mx-3 text-green"></i>
                                            Sudah Termasuk
                                        </h2>
                                    </div>
                                </div>
                                <div class="card-body pt-0">
                                    <div class="d-flex flex-column text-gray-600">
                                        @foreach($package_product['list_include'] as $include)
                                            <div class="d-flex align-items-center py-2">
                                                <i class="fas fa-circle mx-3"></i> {{ $include['include'] }}
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mt-5">
                            <div class="card card-bordered">
                                <div class="card-header" style="background: #FCF8F8;">
                                    <div class="card-title">
                                        <h2 class="mb-0 text-danger">
                                            <i class="fa-solid fa-circle-xmark mx-3 text-danger"></i>
                                            Belum Termasuk
                                        </h2>
                                    </div>
                                </div>
                                <div class="card-body pt-0">
                                    <div class="d-flex flex-column text-gray-600">
                                        @foreach($package_product['list_exclude'] as $exclude)
                                            <div class="d-flex align-items-center py-2">
                                                <i class="fas fa-circle mx-3"></i> {{ $exclude['exclude'] }}
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
            <div class="mx-auto">
                <div class="font-normal-700 fs-32 mb-5">Paket Layanan lain</div>
            </div>
            <div class="row">
                <!-- Paket Lain -->
                @foreach( $other_packages as $other_package )
                    <div class="col-lg-3 col-md-4">
                        @include('pages.packageProducts.partials.cardPackage', [
                            'url' => url('/package', $other_package['id_packet']),
                            'url_banner' => $other_package['url_banner'],
                            'name' => $other_package['name'],
                            'quota' => $other_package['quota'],
                            'percent_markup' => $other_package['percent_markup'],
                            'price' => $other_package['price'],
                            'image_configuration' => $configuration['data'][3]['value_configuration'],
                            'status' => $other_package['status']
                        ])
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Paket Lain End -->

    <!-- you Have Question Start -->
        @include('layouts.partials.question')
    <!-- you Have Question End -->
@endsection