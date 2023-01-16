@extends('layouts.master')

@push('page_css')
    <link href="{{ asset('assets-web/css/landing/style.css') }}" rel="stylesheet">
@endpush

@section('content')

    <!-- Banner Start -->
    <div class="container-fluid py-5">
        <div class="container" style="margin-top: 3%; margin-bottom:3%;">
            <div class="row">
                <div class="col-md-8" style="margin-top: 5%">
                    <div class="text-weight-700 fs-44" style="font-weight: bold;">Hadir Untuk Kenyamanan Beribadah Jamaah</div>
                    <div class="text-opacity text-weight-700 fs-20 mt-5">UMRA ID hadir untuk memberikan kenyamanan, kemudahan dan keleluasaan beribadah umroh dan wisata Islam lainnya</div>
                    <div class="font-normal-400 fs-16 mt-5">Kami menjawab berbagai persoalan klasik yang calon jamaah hadapi saat merancang umroh 'konvensional'. Selain menyediakan paket umroh yang telah terjadwal atau terprogram, UMRA ID juga memberi kemudahan dalam menyusun perjalanan umroh yang "customized/ Do It Yourself" atau swakelola</div>
                </div>
                <div class="col-md-4">
                    <img style="margin-top:40px;" class="image-center" src="{{ asset('assets-web/img/image/about-me.png')}}" alt="{{ asset('assets-web/img/image/about-me.png')}}" width="80%" height="100%">
                </div>
            </div>
        </div>
    </div>
    <!-- Banner End -->


    <!-- visi & misi Start -->
    <!-- <div class="container-fluid py-5 bg-image-6">
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
    </div> -->
    <!-- visi & misi End -->


    <!-- Kegiatan Kami Start -->
    <div class="container-fluid py-5 bg-image-6">
        <div class="container mt-20 mb-20">
            <div class="text-center mx-auto" style="max-width: 800px;margin-top:4%;margin-bottom:4%">
                <div class="text-weight-700 fs-44 mb-5">Kegiatan Kami</div>
                <div class="text-opacity text-weight-400 fs-20">Sejak dikembangkan mulai tahun 2017 kemudian diluncurkan pada 28 November 2019, kami terus melakukan perbaikan dan meningkatkan pelayanan.</div>
            </div>
            <div class="owl-carousel event-carousel" data-wow-delay="0.3s">
                @foreach($activity_me as $activity)
                        <img src="{{ $activity['image'] }}" style="height: 100%" alt="{{ $activity['image'] }}">
                @endforeach
            </div>
        </div>
    </div>
    <!-- Kegiatan Kami End -->


    <!-- Partner Start -->
    <div class="container-fluid py-5">
        <div class="container mt-20 mb-20">
            <div class="text-center mx-auto">
                <div class="text-weight-700 fs-44 mb-5">Partner Terpercaya Kami</div>
                <div class="text-opacity text-weight-400 fs-20">Kami memiliki partner yang terpercaya di bidangnya, dan kami selalu berusaha memberikan pengalaman terbaik untuk ibadah Anda</div>
            </div>

            <div class="row justify-content-md-center mt-5">
                @foreach($partners as $partner)
                    <div class="col-md-3 mt-5">
                        <img class="image-center" src="{{ $partner['url'] }}" alt="{{ $partner['url'] }}">
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Partner End -->


    <!-- Kerja sama Start -->
    <div class="container-fluid py-5 bg-image-7">
        <div class="container-fluid py-5">
            <div class="container">
                <div class="text-white text-center mx-auto">
                    <div class="text-white text-weight-700 fs-44 mb-5">Ingin Bekerjasama dengan Kami?</div>
                    <div class="text-light text-weight-400 fs-20">Kami sangat senang untuk bekerjasama dengan Anda, baik itu berupa kerjasama antar perusahaan ataupun perseorangan, Kami tunggu kerjasama Anda!</div>
                </div>

                <div class="row mt-5">
                    <div class="col-md-6" style="margin-bottom: 3%;">
                        <div class="card card-bordered" style="width: 100$;">
                            <div class="card-body">
                                <div class="text-weight-60 fs-20" style="font-weight: bold;">Gabung Sebagai Agen Penjualan</div>
                                <div class="text-weight-400 fs-16">Jadi agen penjualan, pelayanan & mendaftarkan calon jamaah akan lebih mudah menggunakan aplikasi dan ekosistem UMRA.</div>
                                <hr>
                                <div class="mt-5">
                                    <button class="btn btn-success font-normal-500" style="width: 100%">Gabung Sekarang</button>
                                </div>
                                <!-- <div class="mt-5">
                                   <center><a href="#">Lihat semua mitra umra</a></center>
                                </div> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6" style="margin-bottom: 3%;">
                        <div class="card" style="width: 100$;">
                            <div class="card-body bg-green-card text-white">
                                <div class="text-weight-60 fs-20" style="font-weight: bold;">Jadi Affiliate Umra bisa dapat untung?</div>
                                <div class="text-weight-400 fs-16">Siapa saja bisa menjadi affiliate Umra hanya dengan gawai anda, Share referral & jadi Digital Referrer Umrapreneur.</div>
                                <hr>
                                <div class="mt-5">
                                    <a href="https://zeals.asia/" class="btn mb-3" style="color:#7CB041; background-color:white; width: 100%; border-color:white;">Daftar Affiliate</a>
                                </div>
                                <!-- <div class="mt-5">
                                    <center><a href="#" class="text-white font-normal-500">Syarat & Ketentuan</a></center>
                                 </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Kerja sama End -->
@endsection
