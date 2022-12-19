@extends('layouts.master')

@section('content')
    <div class="container-fluid my-5 pt-4" style="background-image:url('{{ asset('assets-web/img/background/package-umroh.png') }}');background-repeat: no-repeat;background-size: 100% 100%;">
        <div class="container py-5">
            <h3 class="text-white mb-4">Paket Ibadah Umrah</h3>
            <p class="text-white mb-4">Perjalanan umroh lengkap dengan paket hotel berbintang, penerbangan & VISA.</p>
        </div>
    </div>


    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="row g-4 align-items-center">
            
            <div class="col-md-3">
                <div class="card" style="width: 100$;">
                    <div class="card-body">
                        <img src="https://asset.kompas.com/crops/_Gklmi7JJu6ArpsXWwE8pd0ybfM=/0x0:739x493/750x500/data/photo/2020/06/04/5ed85d403302a.jpg" width="100%" alt="" srcset="">
                        <h5 class="card-titl mt-4">Umroh Hemat Bonus Tour Thoif</h5>
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
            </div>

        </div>
    </div>


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
                                    <div class="col-md-6">
                                        <img src="{{ $otherMenu['icon'] }}" alt="{{ $otherMenu['icon'] }}" width="100%" height="100%" />
                                    </div>
                                    <div class="col-md-6">
                                        <div>{{ $otherMenu['icon'] }}</div>
                                        <div>{{ $otherMenu['icon'] }}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection