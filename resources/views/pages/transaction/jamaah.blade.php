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
                        'step' => 1
                    ])
                </div>
                <div class="col-md-9">
                    <a href="#" class="font-normal-400 fs-16 text-green mt-3"><i class="fa-solid fa-arrow-left"></i> Langkah 1 dari 3</a>
                    <div class="font-normal-700 fs-32">Jumlah Calon Jamaah</div>
                    <div class="font-normal-400 fs-16">Silakan masukkan jumlah jamaah berdasarkan pilih kamar yang tersedia</div>
                    <div class="card card-bordered mt-5" style="background-color: #F8FCFC">
                        <div class="card-body p-5 font-normal-600 fs-14">
                            <div class="row">
                                <div class="col-10">
                                    Paket ini memiliki penawaran dapat dibayar cicil 2x dengan DP minimal Rp. 5.000.000/orang
                                </div>
                                <div class="col-2 mt-2">
                                    <img src="{{ asset('assets-web/img/icon/cicilan2x.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Option Kamar Start --}}
                    <div class="card card-bordered mt-5">
                        <div class="card-header pt-3" style="display: block;">
                            <div class="row">
                                <div class="col-1 mt-1">
                                    <img src="{{ asset('assets-web/img/icon/double.png') }}" alt="">
                                </div>
                                <div class="col-7">
                                    <div class="font-normal-700 fs-16">Double</div>
                                    <div class="font-normal-600 fs-14 text-green">Rp. 40.500.000 /Orang</div>
                                </div>
                                <div class="col-4 mt-5 text-right">
                                    Jumlah Jamaah
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-6 pt-1">
                                    *) Kamar terdiri dari 2 jamaah
                                </div>
                                <div class="col-6 text-right">
                                    Total Harga <span class="font-normal-600 fs-16 text-green">Rp. 81.000.000</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card card-bordered mt-5">
                        <div class="card-header pt-3" style="display: block;">
                            <div class="row">
                                <div class="col-1 mt-1">
                                    <img src="{{ asset('assets-web/img/icon/triple.png') }}" alt="">
                                </div>
                                <div class="col-7">
                                    <div class="font-normal-700 fs-16">Triple</div>
                                    <div class="font-normal-600 fs-14 text-green">Rp. 40.500.000 /Orang</div>
                                </div>
                                <div class="col-4 mt-5 text-right">
                                    Jumlah Jamaah
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-6 pt-1">
                                    *) Kamar terdiri dari 3 jamaah
                                </div>
                                <div class="col-6 text-right">
                                    Total Harga <span class="font-normal-600 fs-16 text-green">Rp. 81.000.000</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card card-bordered mt-5">
                        <div class="card-header pt-3" style="display: block;">
                            <div class="row">
                                <div class="col-1 mt-1">
                                    <img src="{{ asset('assets-web/img/icon/quad.png') }}" alt="">
                                </div>
                                <div class="col-7">
                                    <div class="font-normal-700 fs-16">Quad</div>
                                    <div class="font-normal-600 fs-14 text-green">Rp. 40.500.000 /Orang</div>
                                </div>
                                <div class="col-4 mt-5 text-right">
                                    Jumlah Jamaah
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-6 pt-1">
                                    *) Kamar terdiri dari 2 jamaah
                                </div>
                                <div class="col-6 text-right">
                                    Total Harga <span class="font-normal-600 fs-16 text-green">Rp. 81.000.000</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Option Kamar End --}}

                    <div class="card card-bordered mt-5" style="background-color: #F8FCFC">
                        <div class="card-body p-5 font-normal-400 fs-14 pt-2 pb-2">
                            <i class="fa-solid fa-circle-info"></i>
                            Maksimum pembelian per pesanan <strong>Rp. 120.000.000</strong>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6"></div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-6 font-normal-400 fs-18">Jumlah Jamaah</div>
                                <div class="col-6 font-normal-700 fs-18 text-right">
                                    <i class="fa-solid fa-user-group"></i>
                                    3 Orang
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-6 font-normal-400 fs-18">
                                    Total Harga
                                </div>
                                <div class="col-6 text-right font-normal-700 fs-18 text-green">
                                    Rp. 121.500.000
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6 font-normal-400 fs-18">
                                    Uang Muka
                                    <i class="fa-solid fa-circle-info"></i>
                                </div>
                                <div class="col-6 text-right font-normal-700 fs-18 text-green">
                                    Rp. 1
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="text-right">
                        <button class="btn">Batal</button>
                        <button class="btn btn-success">Lanjutkan <i class="fa-solid fa-chevron-right"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

