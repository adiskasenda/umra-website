@extends('layouts.master')

@section('content')

    <!-- Banner DIY Start -->
    @include('pages.packageProducts.partials.bannerDiy')
    <!-- Banner DIY End -->

    <!-- Apa Layanan Umroh DIY Start -->
    <div class="container-fluid py-5">
        <div class="container mt-20 mb-20">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 750px; margin-bottom:5%;">
                <div class="font-normal-700 fs-44" style="font-weight: bold;">Apa Layanan Umroh DIY?</div>
                <div class="font-normal-400 fs-20">Layanan perjalanan ibadah umroh PLUS atau reguler tetapi anda bebas mengatur & memilih sendiri segala fasilitas perjalanan sesuai keinginan anda.</div>
                <a href="#" class="btn btn-success mt-5">Segera Hadir</a>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <img src="{{ asset('assets-web/img/image/package-hp.png')}}" alt="{{ asset('assets-web/img/image/package-hp.png')}}" width="100%">
                </div>
                <div class="col-md-8">
                    <div class="col-sm-12 text-left">
                        <img src="{{ asset('assets-web/img/icon/calendar.png') }}" alt="{{ asset('assets-web/img/icon/calendar.png') }}">
                        <div class="font-normal-700 fs-24 mt-4" style="font-weight: bold;">Waktu Keberangkatan Fleksibel</div>
                        <span class="font-normal-400 fs-16">Umroh lebih singkat agar hemat biaya atau umroh lebih panjang agar bisa berkeliling jazirah arab sesuai budget anda.</span>
                    </div>
                    <div class="col-sm-12 text-left">
                        <img src="{{ asset('assets-web/img/icon/options.png') }}" alt="{{ asset('assets-web/img/icon/options.png') }}">
                        <div class="font-normal-700 fs-24 mt-4" style="font-weight: bold;">Bebas Pilih Tiket Pesawat & Bandara</div>
                        <span class="font-normal-400 fs-16">Kami telah menyediakan berbagai maskapai penerbangan terbaik & bandara pilihan anda untuk perjalanan pulang pergi.</span>
                    </div>
                    <div class="col-sm-12 text-left">
                        <img src="{{ asset('assets-web/img/icon/hotel.png') }}" alt="{{ asset('assets-web/img/icon/hotel.png') }}">
                        <div class="font-normal-700 fs-24 mt-4" style="font-weight: bold;">Hotel & Penginapan Berbintang</div>
                        <span class="font-normal-400 fs-16">Ibadah lebih khusyu’ dengan pilihan hotel berbintang yang kami sediakan, bisa pilih tipe kamar beserta fasilitas lengkap lainnya</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Apa Layanan Umroh DIY End -->

    <!-- Keunggulan Start -->
    <div class="container-fluid bg-yellow-green py-5">
        <div class="container" style="margin-top: 4%; margin-bottom:3%;">
            <div class="row">
                <div class="col-md-4">
                    <div class="text-left wow fadeInUp" data-wow-delay="0.1s">
                        <div class="card card-bordered" style="margin-top: 6%; margin-bottom:5%;">
                            <div class="card-body p-5">
                                <img src="{{ asset('assets-web/img/icon/izin.png')}}" class="mt-4 mb-5" alt="{{ asset('assets-web/img/icon/izin.png')}}" width="50px">
                                <h1 class="font-normal-700 fs-16">Berizin Resmi</h1>
                                <div class="">Kami telah memiliki izin resmi sejak 2009 melayani jamaah baik dari kedutaan Indonesia maupun Arab Saudi</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="text-left wow fadeInUp" data-wow-delay="0.1s">
                        <div class="card card-bordered" style="margin-top: 6%; margin-bottom:5%;">
                            <div class="card-body p-5">
                                <img src="{{ asset('assets-web/img/icon/asuransi.png')}}" class="mt-4 mb-5" alt="{{ asset('assets-web/img/icon/asuransi.png')}}" width="50px">
                                <h1 class="font-normal-700 fs-16">Perlindungan perjalanan</h1>
                                <div class="">Kami memberikan kebebasan kepada jamaah untuk memilih asuransi perjalanan terbaik di setiap perjalanannya.</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="text-left wow fadeInUp" data-wow-delay="0.1s">
                        <div class="card card-bordered" style="margin-top: 6%; margin-bottom:5%;">
                            <div class="card-body p-5">
                                <img src="{{ asset('assets-web/img/icon/bantuan.png')}}" class="mt-4 mb-5" alt="{{ asset('assets-web/img/icon/bantuan.png')}}" width="50px">
                                <h1 class="font-normal-700 fs-16">Bantuan Setiap Saat</h1>
                                <div class="">Layanan bantuan jamaah kami selalu siap siaga setiap saat untuk membantu perjalanan & ibadah anda.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Keunggulan End -->

    <!-- Atur sendiri fasilitas Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="wow fadeInUp" data-wow-delay="0.1s">
                <div class="row">
                    <div class="col-md-7 text-left" style="margin-top: 5%; margin-bottom:5%;">
                        <a href="{{ url('/') }}" class="btn btn-success">Segera Hadir</a>
                        <div class="mt-5 font-normal-700 fs-44" style="font-weight: bold;">Atur sendiri fasilitas <br>perjalanan anda!</div>
                        <div class="text-opacity font-normal-400 fs-20">Berangkat beribadah tidak pernah semenyenangkan ini dengan bebas atur fasilitas hotel, pesawat, asuransi, visa & destinasi wisata halal impian anda.</div>
                    </div>
                    <div class="col-md-5 text-right">
                        <img src="{{ asset('assets-web/img/image/package-device.png')}}" class="mb-5" alt="{{ asset('assets-web/img/image/package-device.png')}}" width="100%">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Atur sendiri fasilitas End -->

    <!-- you Have Question Start -->
        @include('layouts.partials.question')
    <!-- you Have Question End -->

@endsection

