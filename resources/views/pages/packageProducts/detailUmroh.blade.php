@extends('layouts.master')

@section('content')
    <!-- Detail Paket -->
    <img src="{{ $package_product['url_banner'] }}" alt="{{ $package_product['url_banner'] }}">
    <button>Pesan Sekarang</button>
    <img src="{{ asset('assets-web/img/icon/cart.png') }}" alt="{{ asset('assets-web/img/icon/cart.png') }}">
    
    <div>Harga mulai dari</div>
    <div>Jadwal Keberangkatan</div>
    <div>Hotel & Penginapan</div>
    <div>Maskapai Penerbangan</div>
    <div>Pilihan Kamar Hotel</div>
    <div>Negara yang dikunjungi</div>
    <div>Kota yang dikunjungi</div>
    <div>Detail Faslitas</div>
    
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