@extends('layouts.master')

@section('content')

    <!-- Banner Start -->
    <div class="container-fluid py-5">
        <div class="container" style="margin-top: 3%; margin-bottom:3%;">
            <div class="row">
                <div class="col-md-8" style="margin-top: 5%">
                    <h1 class="display-5">Hadir Untuk Kenyamanan</h1>
                    <h1 class="display-5">Beribadah Jamaah</h1>
                    <h4 class="text-opacity" style="margin-top: 2%">UMRA.ID hadir untuk memberikan kenyamanan beribadah umroh kepada jamaah.</h4>
                    <p class="font-normal-400" style="margin-top: 2%">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deserunt voluptatum nisi soluta, aut commodi dolores odit iste, nostrum aliquid, dicta numquam neque. Non dicta doloremque natus repellendus fuga ratione officiis.</p>
                </div>
                <div class="col-md-4">
                    <img src="{{ asset('assets-web/img/image/about-me.png')}}" alt="" width="80%" height="100%" style="margin-left: 10%">
                </div>
            </div>
        </div>
    </div>
    <!-- Banner End -->


    <!-- visi & misi Start -->
    <div class="container-fluid py-5" style="background-image:url('{{ asset('assets-web/img/background/background-6.png') }}');background-repeat: no-repeat;background-size: 100% 100%;">
        <div class="container-fluid py-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-6" style="margin-top:10%; margin-bottom:2%;">
                        <p class="font-normal-700 text-green" style="font-size: 48px;">Visi & Misi Kami</p>
                        <p class="font-normal-400">Kami sangat percaya bahwa dengan adanya UMRA akan memudahkan para calon jamaah untuk beribadah dan lebih mendekatkan diri dengan Sang Pencipta Allah SWT.</p>
                    </div>
                    <div class="col-md-6">
                        <p class="font-normal-700 text-green" style="font-size: 32px; line-height: 48px;">Visi</p>
                        <p class="font-normal-400">Visi kami adalah memberikan kenyamanan beribadah umrah kepada jamaah</p>
                        <p class="font-normal-700 text-green" style="font-size: 32px; line-height: 48px; margin-top:5%;">Misi</p>
                        <p class="font-normal-400">Misi kami adalah memberikan kenyamanan beribadah umroh kepada jamaan</p>
                        <p class="font-normal-400"><i class="fa-solid fa-circle-check" style="color: green"></i>  Lorem, ipsum dolor sit amet consectetur adipisicing elit. Recusandae, nobis ullam ipsa dicta rem ipsam expedita architecto</p>
                        <p class="font-normal-400"><i class="fa-solid fa-circle-check" style="color: green"></i>  Lorem, ipsum dolor sit amet consectetur adipisicing elit. Recusandae, nobis ullam ipsa dicta rem ipsam expedita architecto</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- visi & misi End -->


    <!-- Kegiatan Kami Start -->
    <div class="container-fluid py-5">
        <div class="container" style="margin-top: 5%;">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;margin-top:4%;margin-bottom:4%">
                <h1 class="display-5 mb-5">Kegiatan Kami</h1>
                <h3 class="text-opacity">Kami memiliki berbagai macam kegiatan dan perjalanan untuk memberikan Jamaah iami pengalaman yang terbaik dalam beribadah</h3>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.3s">
                {{-- @foreach($experience as $experience) --}}
                        <img src="{{ asset('assets-web/img/image/kegiatan-1.png') }}" style="height: 100%" alt="">
                {{-- @endforeach --}}
            </div>
            <hr style="margin-top: 3%;">
        </div>
    </div>
    <!-- Kegiatan Kami End -->


    <!-- Partner Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;margin-top:4%;margin-bottom:4%">
                <h1 class="display-5 mb-5">Partner Terpercaya Kami</h1>
                <h3 class="text-opacity">Kami memiliki partner yang terpercaya di bidangnya, dan kami selalu berusaha memberikan pengalaman terbaik untuk ibadah Anda</h3>
            </div>

            <div class="row justify-content-md-center" style="margin-bottom: 5%">
                @foreach($partners as $partner)
                    <div class="col-md-3 mt-5">
                        <img src="{{ $partner['url'] }}" alt="{{ $partner['url'] }}">
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Partner End -->


    <!-- Kerja sama Start -->
    <div class="container-fluid py-5" style="background-image:url('{{ asset('assets-web/img/background/background-7.png') }}');background-repeat: no-repeat;background-size: 100% 100%;">
        <div class="container-fluid py-5">
            <div class="container">
                <div class="text-white text-center mx-auto" style="max-width: 800px;margin-top:5%">
                    <h1 class="display-5 text-white mb-5 text-normal-700" style="font-size: 48px; line-height:60px;">Ingin Bekerjasama dengan Kami?</h1>
                </div>
                <div class="text-white text-center mx-auto" style="max-width: 800px; margin-bottom:3%;">
                    <p class="text-opacity text-normal-400">Kami sangat senang untuk bekerjasama dengan Anda, baik itu berupa kerjasama antar perusahaan ataupun perseorangan, Kami tunggu kerjasama Anda!</p>
                </div>
                <div class="row">
                    <div class="col-md-6" style="margin-bottom: 3%;">
                        <div class="card" style="width: 100$;">
                            <div class="card-body">
                                <div>
                                    <h1>Gabung Sebagai Agen Penjualan</h1>
                                </div>
                                <div>
                                   <p>Jadi agen penjualan, pelayanan & mendaftarkan calon jamaah akan lebih mudah menggunakan aplikasi dan ekosistem UMRA.</p>
                                </div>
                                <hr>
                                <div class="mt-5">
                                    <button class="btn btn-success font-normal-500" style="width: 100%">Gabung Sekarang</button>
                                </div>
                                <div class="mt-5">
                                   <center><a href="#">Lihat semua mitra umra</a></center>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6" style="margin-bottom: 3%;">
                        <div class="card" style="width: 100$;">
                            <div class="card-body bg-green-card">
                                <div>
                                    <h1 class="text-white">Jadi Affiliate Umra bisa dapat untung?</h1>
                                </div>
                                <div>
                                   <p class="text-white">Siapa saja bisa menjadi affiliate Umra hanya dengan gawai anda, Share referral & jadi Digital Referrer Umrapreneur.</p>
                                </div>
                                <hr>
                                <div class="mt-5">
                                    <a href="#" class="btn btn-white" style="width: 100%; font-color: #7CB041;">Daftar Affiliate</a>
                                </div>
                                <div class="mt-5">
                                    <center><a href="#" class="text-white font-normal-500">Syarat & Ketentuan</a></center>
                                 </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Kerja sama End -->

@endsection