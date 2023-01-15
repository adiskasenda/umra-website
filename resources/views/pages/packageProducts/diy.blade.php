@extends('layouts.master')

@section('content')

    <!-- Banner Start -->
    <div class="container-fluid py-5" style="background-image:url('{{ asset('assets-web/img/background/package-diy.png') }}');background-repeat: no-repeat;background-size: 100% 100%;">
        <div class="container-fluid py-5">
            <div class="container" style="margin-top: 3%; margin-bottom:3%;">
                <h1 class="font-normal-700 fs-44 text-white">Perjalanan DIY (Do It Your Self)</h1>
                <h4 class="text-opacity text-white font-normal-400" style="margin-top: 2%">Atur sendiri hotel, maskapai, durasi serta destinasi perjalanan umroh + wisata anda.</h4>
                <div class="row mt-5">
                    <div class="col-2">
                        <img src="{{ asset('assets-web/img/icon/hotel-umrah.png')}}" alt="{{ asset('assets-web/img/icon/hotel-umrah.png')}}" width="30px">
                        <span class="text-light" style="font-size: 16px; margin-left: 5%;">Hotel</span>
                    </div>
                    <div class="col-2">
                        <img src="{{ asset('assets-web/img/icon/plane-umrah.png')}}" alt="{{ asset('assets-web/img/icon/plane-umrah.png')}}" width="30px">
                        <span class="text-light" style="font-size: 16px; margin-left: 5%;">Pesawat</span>
                    </div>
                    <div class="col-3">
                        <img src="{{ asset('assets-web/img/icon/visa-umroh.png')}}" alt="{{ asset('assets-web/img/icon/visa-umroh.png')}}" height="30px">
                        <span class="text-light" style="font-size: 16px; margin-left: 5%;">Visa Perjalanan</span>
                    </div>
                    <div class="col-2">
                        <img src="{{ asset('assets-web/img/icon/asuransi-umroh.png')}}" alt="{{ asset('assets-web/img/icon/asuransi-umroh.png')}}" height="30px">
                        <span class="text-light" style="font-size: 16px; margin-left: 5%;">Asuransi</span>
                    </div>
                    <div class="col-3">
                        <img src="{{ asset('assets-web/img/icon/tour-lead-umrah.png')}}" alt="{{ asset('assets-web/img/icon/tour-lead-umrah.png')}}" height="30px">
                        <span class="text-light" style="font-size: 16px; margin-left: 5%;">Tour Leader</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner End -->

    <!-- Apa Layanan Umroh DIY Start -->
    <div class="container-fluid py-5">
        <div class="container" style="margin-top: 5%; margin-bottom:5%;">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 750px; margin-bottom:5%;">
                <h1 class="font-normal-700 fs-44">Apa Layanan Umroh DIY?</h1>
                <h3 class="text-opacity font-normal-400">Layanan perjalanan ibadah umroh PLUS atau reguler tetapi anda bebas mengatur & memilih sendiri segala fasilitas perjalanan sesuai keinginan anda.</h3>
                <a href="" class="btn btn-success">Segera Hadir</a>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <img src="{{ asset('assets-web/img/image/package-hp.png')}}" class="mt-4 mb-5" alt="{{ asset('assets-web/img/image/package-hp.png')}}" width="100%">
                </div>
                <div class="col-md-8">
                    <div class="col-sm-12 text-left wow fadeIn" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeIn;">
                        <img src="{{ asset('assets-web/img/icon/calendar.png') }}" alt="" srcset="">
                        <h5 class="font-normal-700 fs-24 mt-4">Waktu Keberangkatan Fleksibel</h5>
                        <span class="font-normal-400 fs-16">Umroh lebih singkat agar hemat biaya atau umroh lebih panjang agar bisa berkeliling jazirah arab sesuai budget anda.</span>
                    </div>
                    <div class="col-sm-12 text-left wow fadeIn" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeIn;">
                        <img src="{{ asset('assets-web/img/icon/options.png') }}" alt="" srcset="">
                        <h5 class="font-normal-700 fs-24 mt-4">Bebas Pilih Tiket Pesawat & Bandara</h5>
                        <span class="font-normal-400 fs-16">Kami telah menyediakan berbagai maskapai penerbangan terbaik & bandara pilihan anda untuk perjalanan pulang pergi.</span>
                    </div>
                    <div class="col-sm-12 text-left wow fadeIn" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeIn;">
                        <img src="{{ asset('assets-web/img/icon/hotel.png') }}" alt="" srcset="">
                        <h5 class="font-normal-700 fs-24 mt-4" >Hotel & Penginapan Berbintang</h5>
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
                        <a href="" class="btn btn-success">Segera Hadir</a>
                        <h1 class="font-normal-700 fs-44">Atur sendiri fasilitas <br>perjalanan anda!</h1>
                        <h3 class="text-opacity font-normal-400 fs-20">Berangkat beribadah tidak pernah semenyenangkan ini dengan bebas atur fasilitas hotel, pesawat, asuransi, visa & destinasi wisata halal impian anda.</h3>
                    </div>
                    <div class="col-md-5 text-right">
                        <img src="{{ asset('assets-web/img/image/package-device.png')}}" class="mb-5" alt="{{ asset('assets-web/img/image/package-device.png')}}" width="100%">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Atur sendiri fasilitas End -->

    <!-- Pertanyaan Start -->
    <div class="container-fluid py-5" style="background-image:url('{{ asset('assets-web/img/background/background-1.png') }}');background-repeat: no-repeat;background-size: 100% 100%;">
        <div class="container" style="margin-top: 5%; margin-bottom: 5%;">
            <div class="row">
                <div class="col-md-9" style="margin: auto;">
                    <h3 class="mb-4 text-white font-normal-700 fs-44">Punya pertanyaan seputar <br/> paket perjalanan?</h3>
                    <p class="mb-4 text-light font-normal-400 fs-20">Customer service kami siap membantu anda terkait paket perjalanan sesuai kebutuhan anda.</p>
                </div>
                <div class="col-md-3 text-center" style="margin: auto;">
                    <div class="text-center">
                        <a href="#" class="btn btn-success">Hubungi Kami</a>
                    </div>
                    <div class="text-center mt-5">
                        <a href="" class="text-white font-normal-700 fs-20">Baca FAQ</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pertanyaan End -->

@endsection

