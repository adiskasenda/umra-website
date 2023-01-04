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
@endsection