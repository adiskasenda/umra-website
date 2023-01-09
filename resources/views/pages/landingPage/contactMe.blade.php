@extends('layouts.master')

@section('content')

    <!-- Banner Start -->
    <div class="container-fluid py-5">
        <div class="container" style="margin-top: 5%; margin-bottom: 5%;">
            <div class="row">
                <div class="col-md-6" style="margin-top: 5%;">
                    <h3 class="mb-4 text-weight-700" style="font-size: 48px;">Pusat Pengaduan <br/> Customer</h3>
                    <p class="font-normal-400">UMRA.ID berkomitmen untuk senantiasa memberikan pelayanan terbaik bagi seluruh jamaah & customer UMRA.ID. Apabila anda memiliki kritik & saran atas layanan kami, anda dapat menghubungi Customer Service kami.</p>
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('assets-web/img/image/hubungi-kami.png')}}" style="margin-left: 5%;" width="90%" alt="{{ asset('assets-web/img/image/hubungi-kami.png')}}">
                </div>
            </div>
        </div>
    </div>
    <!-- Banner End -->

    <!-- Sosmed Start -->
    <div class="container-fluid py-5" style="background-image:url('{{ asset('assets-web/img/background/background-6.png') }}');background-repeat: no-repeat;background-size: 100% 100%;">
        <div class="container" style="margin-top: 5%; margin-bottom:5%;">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="font-normal-700 text-green" style="font-size: 32px;">Kunjungi juga Sosial Media Kami</h2>
                </div>
                <div class="col-md-6">
                    <!-- Sosmed -->
                    <div class="d-flex pt-2">
                        <a class="btn-rounded-green" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square btn-outline-dark rounded-circle me-2" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-outline-dark rounded-circle me-2" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-square btn-outline-dark rounded-circle me-2" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Sosmed End -->

@endsection
