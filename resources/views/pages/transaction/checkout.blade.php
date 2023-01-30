@extends('layouts.master')

@section('content')
<div class="container-fluid py-5 mb-8">
    <div class="container">
        @include('pages.transaction.partials.breadcrumb',[
            'breadcrumb' => 'hello',
        ])
        <div class="row">
            <div class="col-md-3">
                @include('pages.transaction.partials.sidebar', [
                    'step' => 3,
                    'namePackage' => $package_product['name'],
                    'flag_umroh' =>  Helpers::viewFlagUmroh($package_product['flag_umroh']),
                    'quota' => $package_product['quota']
                ])
            </div>
            <div class="col-md-9">
                <a href="#" class="font-normal-400 fs-16 text-green mt-3"><i class="fa-solid fa-arrow-left"></i> Langkah 3 dari 3</a>
                <div class="font-normal-700 fs-32">Checkout Pesanan</div>
                <div class="font-normal-400 fs-16">Periksa & pastikan data pesanan anda sudah sesuai</div>
                <div class="row">
                    <div class="col-6">
                        <div class="card card-bordered mt-5">
                            <div class="card-body p-5">
                                <div class="row">
                                    <div class="col-2">
                                        <img src="{{ asset('assets-web/img/icon/calendar-umroh.png') }}" alt="">
                                    </div>
                                    <div class="col-10">
                                        <div class="font-normal-400 fs-14">Tanggal Keberangkatan</div>
                                        <div class="font-normal-700 fs-18">16 September 2022</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="card card-bordered mt-5">
                            <div class="card-body p-5">
                                <div class="row">
                                    <div class="col-2">
                                        <img src="{{ asset('assets-web/img/icon/time-umroh.png') }}" alt="">
                                    </div>
                                    <div class="col-10">
                                        <div class="font-normal-400 fs-14">Durasi Perjalanan</div>
                                        <div class="font-normal-700 fs-18">9 Hari</div>
                                    </div>
                                </div>
                            </div>
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
                                        <button class="btn btn-success">Detail</button>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-10">
                                        <div class="font-normal-400 fs-12 text-green">
                                            <i class="fa-solid fa-user-group" style="color: var(--green)"></i>
                                            Calon Jamaah 2
                                        </div>
                                        <div class="font-normal-700 fs-16">
                                            Agus Riyadhi
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <button class="btn btn-success">Detail</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end::Accordion-->

                <div class="card card-bordered mt-5" style="background-color: #F8FCFC">
                    <div class="card-body p-5">
                        <div class="row">
                            <div class="col-4">
                                <div class="font-normal-400 fs-14"><i class="fa-solid fa-phone"></i>Kontak Pemesan</div>
                                <div class="font-normal-700 fs-16 text-green">+62897182734</div>
                            </div>
                            <div class="col-5 mt-5">
                                <div class="font-normal-400 fs-12">Ingin menggunakan nomor lain khusus untuk pesanan ini?</div>
                            </div>
                            <div class="col-3 mt-2 text-right">
                                <button class="btn btn-success">Gunakan kontak lain</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card card-bordered mt-5" style="background-color: #F8FCFC">
                    <div class="card-body p-5 font-normal-400 fs-14 pt-2 pb-2">
                        <i class="fa-solid fa-circle-info" style="color: #B3261E"></i>
                        Pastikan nomor yang dijadikan kontak sudah terdaftar akun WhatsApp
                    </div>
                </div>
                <hr>
                {{-- Pilih Jenis Pembayaran --}}
                <div class="font-normal-700 fs-20">Pilih Jenis Pembayaran</div>
                <div class="row">
                    <div class="col-6">
                        <div class="card card-bordered mt-5">
                            <div class="card-body p-5">
                                <div class="row">
                                    <div class="col-1">
                                        <input class="mt-7" type="radio" name="" id="">
                                    </div>
                                    <div class="col-11">
                                        <div class="font-normal-600 fs-14">Cash</div>
                                        <div class="font-normal-400 fs-14">Bayar lunas di depan agar perjalanan ibadah anda lebih tenang</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="card card-bordered mt-5">
                            <div class="card-body p-5">
                                <div class="row">
                                    <div class="col-1">
                                        <input class="mt-7" type="radio" name="" id="">
                                    </div>
                                    <div class="col-11">
                                        <div class="font-normal-600 fs-14">Cicilan hingga 2x</div>
                                        <div class="font-normal-400 fs-14">Cukup bayar uang muka untuk bisa booking tiket perjalanan anda</div>
                                    </div>
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
                            <div class="col-6 font-normal-400 fs-18">Jumlah Jamaah</div>
                            <div class="col-6 font-normal-700 fs-18 text-right">
                                <i class="fa-solid fa-user-group" style="color: var(--dark)"></i>
                                3 Orang
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-6 font-normal-400 fs-18">
                                Total Pesanan
                            </div>
                            <div class="col-6 text-right font-normal-700 fs-18 text-green">
                                Rp. 121.500.000
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="text-right">
                    <button class="btn text-green"><i class="fa-solid fa-chevron-left"></i>Kembali</button>
                    <button class="btn btn-success">Pilih Metode Pembayaran <i class="fa-solid fa-chevron-right"></i></button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
