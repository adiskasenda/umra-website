@extends('layouts.master')

@section('content')
<div class="container-fluid py-5 mb-8">
    <div class="container">
        @include('pages.transaction.partials.breadcrumb',[
            'breadcrumb' => 'hello',
        ])
        <div class="row">
            <div class="col-md-12">
                <div class="mt-5" style="background-color: white; margin: auto; width: 640px; padding: 50px;">
                    <div class="card-body p-5">
                        <div class="row">
                           <center><img src="{{ asset('assets-web/img/icon/icon-success.png') }}" style="width: 100px;" alt="{{ asset('assets-web/img/icon/icon-success.png') }}"></center>
                        </div>
                        <div class="row mt-5">
                            <div class="font-normal-700 fs-20 text-center">Pembayaran Berhasil</div>
                        </div>
                        <div class="row mt-5">
                            <div class="font-normal-400 fs-16 text-center">Anda akan dihubungi oleh customer service UmraID untuk diverifikasi biodata.</div>
                        </div>
                        <div class="row mt-5">
                            <div class="card-body card-bordered p-8" style="background-color: #E6F1F0">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="font-normal-400 fs-16">
                                            Total Pembayaran
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="font-normal-700 fs-16 text-right">
                                            Rp. 15.500.000
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="col-md-6">
                                <button class="btn btn-outline btn-outline-success text-green" style="width:100%; display:inline-block;">Kembali ke beranda</button>
                            </div>
                            <div class="col-md-6">
                                <button class="btn btn-success" style="width:100%; display:inline-block;">Lihat detail pesanan</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
