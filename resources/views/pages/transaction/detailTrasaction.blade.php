@extends('layouts.master')

@section('content')
<div class="container-fluid py-5 mb-8">
    <div class="container">
        @include('pages.profile.partials.breadcrumb',[
            'breadcrumb' => 'hello',
        ])
        <div class="row">
            <div class="col-md-3">
                @include('pages.profile.partials.sidebar', [
                    'step' => 3
                ])
            </div>
            <div class="col-md-9">
                <div class="font-normal-700 fs-20">Detail Pesanan</div>

                {{-- begin:Invoice --}}
                <div class="card card-bordered mt-5">
                    <div class="card-header pt-3" style="display: block; background-color: #E6F1F0;">
                        <div class="row mb-3">
                            <div class="col-6">
                                <div class="font-normal-600 fs-12">Invoice ID</div>
                                <div class="font-normal-700 fs-20 text-green">PS003910212</div>
                            </div>
                            <div class="col-6 text-right">
                                <div class="font-normal-600 fs-12">Tanggal Pesanan</div>
                                <div class="font-normal-600 fs-14 text-green">Senin 14 Maret 2023 14:30</div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        {{-- begin:Akomodasi --}}
                        <div class="card card-bordered">
                            <div class="card-header pt-3" style="display: block;">
                                <div class="row mb-3">
                                    <div class="col-6">
                                        <div class="font-normal-400 fs-12">Umroh Reguler</div>
                                        <div class="font-normal-700 fs-18">Umroh Hemat Bonus Tour Thoif</div>
                                    </div>
                                    <div class="col-6 text-right">
                                        <div class="font-normal-400 fs-12">Keberangkatan 14 Maret 2023</div>
                                        <div class="font-normal-400 fs-12">Durasi 9 Hari</div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="font-normal-400 fs-14">Hotel & Penginapan</div>
                                <div class="row mt-2">
                                    <div class="col-md-6">
                                        <div class="card card-bordered mb-5" style="background: #F8FCFC;">
                                            <div class="card-body" style="padding: 1rem !important;">
                                                <div class="d-flex flex-stack flex-wrap">
                                                    <div class="d-flex align-items-center pe-2">
                                                        <div class="font-normal-600 fs-14">
                                                            Dorrat
                                                        </div>
                                                    </div>
                                                    <span class="my-2">
                                                        <div class="rating">
                                                            <div class="rating-label me-2 checked">
                                                                <i class="bi bi-star fs-1"></i>
                                                            </div>
                                                            <div class="rating-label me-2 checked">
                                                                <i class="bi bi-star fs-1"></i>
                                                            </div>
                                                            <div class="rating-label me-2 checked">
                                                                <i class="bi bi-star fs-1"></i>
                                                            </div>
                                                            <div class="rating-label me-2 checked">
                                                                <i class="bi bi-star fs-1"></i>
                                                            </div>
                                                            <div class="rating-label me-2 checked">
                                                                <i class="bi bi-star fs-1"></i>
                                                            </div>
                                                        </div>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card card-bordered mb-5" style="background: #F8FCFC;">
                                            <div class="card-body" style="padding: 1rem !important;">
                                                <div class="d-flex flex-stack flex-wrap">
                                                    <div class="d-flex align-items-center pe-2">
                                                        <div class="font-normal-600 fs-14">
                                                            Dorrat
                                                        </div>
                                                    </div>
                                                    <span class="my-2">
                                                        <div class="rating">
                                                            <div class="rating-label me-2 checked">
                                                                <i class="bi bi-star fs-1"></i>
                                                            </div>
                                                            <div class="rating-label me-2 checked">
                                                                <i class="bi bi-star fs-1"></i>
                                                            </div>
                                                            <div class="rating-label me-2 checked">
                                                                <i class="bi bi-star fs-1"></i>
                                                            </div>
                                                            <div class="rating-label me-2 checked">
                                                                <i class="bi bi-star fs-1"></i>
                                                            </div>
                                                            <div class="rating-label me-2 checked">
                                                                <i class="bi bi-star fs-1"></i>
                                                            </div>
                                                        </div>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="text-dark font-normal-700 fs-20 mt-5">Maskapai Penerbangan</div>
                                <div class="row mt-2">
                                    <div class="col-md-6">
                                        <div class="card card-bordered mb-5" style="background: #F8FCFC;">
                                            <div class="card-body" style="padding: 1rem !important;">
                                                <div class="d-flex flex-stack flex-wrap">
                                                    <div class="d-flex align-items-center pe-2">
                                                        <div class="font-normal-600 fs-12">
                                                            Garuda
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card card-bordered mb-5" style="background: #F8FCFC;">
                                            <div class="card-body" style="padding: 1rem !important;">
                                                <div class="d-flex flex-stack flex-wrap">
                                                    <div class="d-flex align-items-center pe-2">
                                                        <div class="font-normal-600 fs-12">
                                                            Garuda
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <button class="btn btn-success" style="width: 100%;">
                                    Lihat detail fasilitas
                                </button>
                            </div>
                        </div>
                        {{-- end:Akomodasi --}}

                        {{-- begin:Jamaah --}}
                        <div class="card card-bordered mt-5">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="font-normal-700 fs-16">
                                            <i class="fa-solid fa-user-group" style="color: var(--green)"></i>
                                            Calon Jamaah
                                        </div>
                                    </div>
                                    <div class="col-6 text-right">
                                        <div class="font-normal-400 fs-14">
                                            Jumlah jamaah : 2 Orang
                                        </div>
                                    </div>
                                </div>
                                <!--begin::Accordion-->
                                <div class="accordion mt-5 mb-5" id="kt_accordion_1">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="kt_accordion_1_header_1">
                                            <button class="accordion-button fs-4 fw-semibold" style="background-color: white" aria-expanded="true"  type="button" data-bs-toggle="collapse" data-bs-target="#kt_accordion_1_body_1" aria-controls="kt_accordion_1_body_1">
                                                <div class="row">
                                                    <div class="col-2 mt-1">
                                                        <img src="{{ asset('assets-web/img/icon/double.png') }}" alt="">
                                                    </div>
                                                    <div class="col-5">
                                                        <div class="font-normal-700 fs-16">Double</div>
                                                        <div class="font-normal-600 fs-14 text-green">
                                                            <i class="fa-solid fa-user-group" style="color: var(--green)"></i>
                                                            2 Orang
                                                        </div>
                                                    </div>
                                                    <div class="col-5 mt-5">
                                                        <div class="font-normal-700 fs-18 text-green">
                                                            Rp. 40.500.000
                                                        </div>
                                                    </div>
                                                </div>
                                            </button>
                                        </h2>
                                        <div id="kt_accordion_1_body_1" class="accordion-collapse collapse show" aria-labelledby="kt_accordion_1" data-bs-parent="#kt_accordion_1_header_1">
                                            <div class="accordion-body" style="background-color: #F8FCFC">
                                                <div class="row">
                                                    <div class="col-10">
                                                        <div class="font-normal-400 fs-12 text-green">
                                                            <i class="fa-solid fa-user-group" style="color: var(--green)"></i>
                                                            Calon Jamaah 1
                                                        </div>
                                                        <div class="font-normal-700 fs-16">
                                                            Siti Masrurotun
                                                        </div>
                                                    </div>
                                                    <div class="col-2">
                                                        <button class="btn btn-success">View Detail</button>
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-8">
                                                        <div class="font-normal-400 fs-12 text-green">
                                                            <i class="fa-solid fa-user-group" style="color: var(--green)"></i>
                                                            Calon Jamaah 2
                                                        </div>
                                                        <div class="font-normal-700 fs-16">
                                                            Agus Riyadhi
                                                        </div>
                                                    </div>
                                                    <div class="col-2">
                                                        <div class="font-normal-400 fs-12">
                                                            <i class="fa-solid fa-badge-check"style="color: var(--green)"></i>
                                                            Verified on
                                                        </div>
                                                        <div class="font-normal-400 fs-12">
                                                            12 Jan 2022 10:31
                                                        </div>
                                                    </div>
                                                    <div class="col-2">
                                                        <button class="btn btn-success">View Detail</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end::Accordion-->
                            </div>
                        </div>
                        {{-- end:Jamaah --}}

                        {{-- begin:Riwayat Pembayaran --}}
                        <div class="card card-bordered mt-5">
                            <div class="card-body">
                                <div class="font-normal-700 fs-16">
                                    <i class="fa-solid fa-credit-card" style="color: var(--green)"></i>
                                    Riwayat Pembayaran
                                    <span class="badge badge-success px-5 py-2" style="border-radius: 10px">Cicilan 2x</span>
                                </div>
                                <div class="card card-bordered mt-5">
                                    <div class="card-header pt-5" style="display: block;">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="font-normal-600 fs-14">
                                                    Pembayaran 1
                                                    <span class="badge badge-success px-4 py-1" style="border-radius: 10px">DP</span>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="font-normal-400 fs-12 text-right text-green">
                                                    <span class="badge badge-green-light px-4 py-1" style="border-radius: 10px;">Dibayar pada 10 Jan 22 18:31</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-3">
                                                <div class="font-normal-500 fs-12">
                                                    Metode Pembayaran
                                                </div>
                                                <div class="font-normal-700 fs-14">
                                                    Mandiri Virtual Account
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="font-normal-500 fs-12">
                                                    logo bank
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="font-normal-500 fs-12">
                                                    Nomor Virtual Account
                                                </div>
                                                <div class="font-normal-700 fs-14">
                                                    12333123
                                                    <i class="fa-solid fa-copy" style="color: var(--green)"></i>
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="font-normal-500 fs-12">
                                                    Nominal
                                                </div>
                                                <div class="font-normal-700 fs-14">
                                                    Rp. 100.000
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-6"></div>
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-6 font-normal-400 fs-14">Total harga (3 jamaah)</div>
                                            <div class="col-6 font-normal-400 fs-14 text-right">
                                                Rp. 121.500.000
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6 font-normal-400 fs-14">Uang muka (DP)</div>
                                            <div class="col-6 font-normal-400 fs-14 text-right">
                                                Rp. 15.000.000
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6 font-normal-400 fs-14">
                                                Sisa tagihan
                                            </div>
                                            <div class="col-6 text-right font-normal-700 fs-16 text-green">
                                                Rp. 101.500.000
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- begin:Pesanan Batal Otomatis --}}
                                <div class="card card-bordered mt-5" style="background-color: #F8FCFC">
                                    <div class="card-body p-5 pt-2 pb-2">
                                        <div class="font-normal-500 fs-14">
                                            <i class="fa-solid fa-circle-info" style="color: #B3261E"></i>
                                            Pesanan Batal Otomatis
                                        </div>
                                        <div class="font-normal-400 fs-12">
                                            Pesanan akan dibatalkana secara otomatis jika anda belum menyelesaikan <strong>pembayaran pertama</strong> pada <strong style="text-decoration: underline;">Senin 20 Desember 2022 18:30</strong>
                                        </div>
                                    </div>
                                </div>
                                {{-- end:Pesanan Batal Otomatis --}}
                            </div>
                        </div>
                        {{-- end:Riwayat Pembayaran --}}
                    </div>
                </div>
                {{-- end:Invoice --}}

                {{-- begin:Kebijakan --}}
                <div class="row">
                    <div class="col-6">
                        <div class="card card-bordered mt-5">
                            <div class="card-body p-5">
                                <div class="font-normal-700 fs-18">
                                    <i class="fa-solid fa-bag-shopping" style="color: var(--green)"></i>
                                    Kebijakan UMRA ID
                                </div>
                                <div class="row">
                                    <div class="col-10">
                                        <div class="font-normal-400 fs-12 mt-2">
                                            Kebijakan Pesanan
                                        </div>
                                    </div>
                                    <div class="col-2 text-right">
                                        <i class="fa-solid fa-arrow-right"></i>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-10">
                                        <div class="font-normal-400 fs-12">
                                            <i class="fa-solid fa-file" style="color: var(--green)"></i>
                                            Kebijakan Pembatalan
                                        </div>
                                    </div>
                                    <div class="col-2 text-right">
                                        <i class="fa-solid fa-arrow-right"></i>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-10">
                                        <div class="font-normal-400 fs-12">
                                            <i class="fa-solid fa-wallet" style="color: var(--green)"></i>
                                            Kebijakan Pengembalian Dana
                                        </div>
                                    </div>
                                    <div class="col-2 text-right">
                                        <i class="fa-solid fa-arrow-right"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="card bg-image-1 mt-5">
                            <div class="card-body p-5">
                                <div class="font-normal-700 fs-24 text-white mt-3 mb-3">Pusat Bantuan</div>
                                <div class="font-normal-400 fs-16 text-white mt-3 mb-3">Punya pertanyaan lain seputar pesanan?</div>
                                <div class="row mt-6 mb-3">
                                    <div class="col-4">
                                        <button class="btn btn-success">Hubungi Kami</button>
                                    </div>
                                    <div class="col-8">
                                        <a href="" class="font-normal-600 fs-12 text-white">Baca FAQ</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- end:Kebijakan --}}
            </div>
        </div>
    </div>
</div>
@endsection

