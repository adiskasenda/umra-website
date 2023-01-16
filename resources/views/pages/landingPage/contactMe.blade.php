@extends('layouts.master')

@section('content')

    <!-- Banner Start -->
    <div class="container-fluid py-5">
        <div class="container" style="margin-top: 5%; margin-bottom: 5%;">
            <div class="row">
                <div class="col-md-6" style="margin-top: 5%;">
                    <div class="mb-4 text-weight-700 fs-44" style="font-weight: bold;">Pusat Pengaduan <br/> Customer</div>
                    <div class="mb-4 text-weight-400 fs-20">UMRA.ID berkomitmen untuk senantiasa memberikan pelayanan terbaik bagi seluruh jamaah & customer UMRA.ID. Apabila anda memiliki kritik & saran atas layanan kami, anda dapat menghubungi Customer Service kami.</div>
                </div>
                <div class="col-md-6">
                    <img class="image-center" width="80%" src="{{ asset('assets-web/img/image/hubungi-kami.png')}}" alt="{{ asset('assets-web/img/image/hubungi-kami.png')}}">
                </div>
            </div>
        </div>
    </div>
    <!-- Banner End -->

    <!-- Sosmed Start -->
    <div class="container-fluid py-5" style="background-image:url('{{ asset('assets-web/img/background/background-6.png') }}');background-repeat: no-repeat;background-size: 100% 100%;">
        <div class="container" style="margin-top: 5%; margin-bottom:5%;">
            <div class="row">
                <div class="col-md-6" style="margin:auto;">
                    <h2 class="font-normal-700 text-green fs-32" style="font-weight: bold;">Kunjungi juga Sosial Media Kami</h2>
                </div>
                <div class="col-md-6 py-5">
                    <!-- Sosmed -->
                    <div class="d-flex justify-content-center">
                        <a class="btn btn-square btn-success rounded-circle me-2 mx-4" target="_blank" href="https://web.facebook.com/umraidn?_rdc=1&_rdr">
                            <i class="fab fa-facebook-f" style="margin-left:6px;"></i>
                        </a>
                        <a class="btn btn-square btn-success rounded-circle me-2 mx-4" target="_blank" href="https://twitter.com/umra_idn">
                            <i class="fab fa-twitter" style="margin-left:6px;"></i>
                        </a>
                        <a class="btn btn-square btn-success rounded-circle me-2 mx-4" target="_blank" href="https://instagram.com/umra.id">
                            <i class="fab fa-instagram" style="margin-left:6px;"></i>
                        </a>
                        <a class="btn btn-square btn-success rounded-circle me-2 mx-4" target="_blank" href="https://api.whatsapp.com/send?phone=+628118748886&text=Halo Umra, saya mau bertanya..">
                            <i class="fab fa-whatsapp" style="margin-left:6px;"></i>
                        </a>
                        <a class="btn btn-square btn-success rounded-circle me-2 mx-4" target="_blank" href="https://www.tiktok.com/@umradotid">
                            <i class="fab fa-tiktok" style="margin-left:6px;"></i>
                        </a>
                        <a class="btn btn-square btn-success rounded-circle me-2 mx-4" target="_blank" href="https://www.youtube.com/channel/UCYG0l-187D4h6jVHSWXDuRw?sub_confirmation=1">
                            <i class="fab fa-youtube" style="margin-left:6px;"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Sosmed End -->

@endsection
