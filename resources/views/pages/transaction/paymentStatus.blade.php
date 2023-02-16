@extends('layouts.master')

@section('content')
<div class="container-fluid py-5 mb-8">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="mt-5" style="background-color: white; margin: auto; width: 640px; padding: 50px;">
                    {{-- <!--  @if ( $order['alert_pesanan_batal_otomatis'] ) --> --}}
                        <div class="card-body p-5" id="payment-process">
                            <div class="row">
                            <img class="image-center" style="width: 100px;" src="{{ asset('assets-web/img/icon/icon-failed.png') }}" alt="{{ asset('assets-web/img/icon/icon-success.png') }}">
                            </div>
                            <div class="row mt-5">
                                <div class="font-normal-700 fs-20 text-center">Selesaikan Pembayaran</div>
                            </div>
                            <div class="row mt-5">
                                <div class="font-normal-400 fs-16 text-center">
                                    Silakan selesaikan pembayaran berdasarkan metode pembayaran yang telah Anda pilih.
                                </div>
                            </div>
                            <div class="row mt-5">
                                <div class="card-body card-bordered p-3" style="background-color: #E6F1F0">
                                    <div class="row">
                                        <div class="col-md-1">
                                            <i class="fa-solid fa-circle-info mt-5" style="color: #327DFA; margin-left:7px;"></i>
                                        </div>
                                        <div class="col-md-11">
                                            <div class="font-normal-400 fs-14">
                                                Pastikan untuk tidak menyebarkan atau memberikan bukti & data pembayaran <strong>kepada pihak manapun</strong> kecuali UMRA.ID
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-5">
                                <div class="font-normal-400 fs-14">
                                    Batas Akhir Pembayaran
                                </div>
                            </div>
                            <div class="row mt-5">
                                <div class="col-md-9">
                                    <div class="font-normal-700 fs-14">
                                        {{ date('d M Y', strtotime( $order['expired_date'] )) }}
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="font-normal-700 fs-14 text-right" style="color: #FED32C">
                                        {{ date('H:i:s', strtotime( last($order['order_payment'])['expired_date'] )) }}
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-5">
                                <div class="col-md-9">
                                    <div class="font-normal-600 fs-14">
                                        {{ last($order['order_payment'])['payment_method'] }}
                                    </div>
                                </div>
                                <!-- <div class="col-md-3 text-right">
                                    <img src="" width="60px" alt="">
                                </div> -->
                            </div>
                            <hr>
                            <div class="row mt-5">
                                <div class="col-md-9">
                                    <div class="row">
                                        <div class="font-normal-400 fs-14">
                                            Nomor Virtual Account
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="font-normal-700 fs-14" id="copy-text-va">
                                            {{ last($order['order_payment'])['payment_code'] }}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 text-right mt-3" onclick="copy_clipboard('copy-text-va')">
                                    <i class="fa-solid fa-copy mx-2" style="color: var(--green)"></i>
                                    Salin
                                </div>
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
                                                Rp. {{ number_format(last($order['order_payment'])['payment_price']) }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-5">
                                <div class="row">
                                    <button class="btn btn-outline btn-outline-success text-green" style="width:100%; display:inline-block;" data-bs-toggle="modal" data-bs-target="#caraPembayaranModal">Lihat Cara Pembayaran</button>
                                </div>
                                <div class="row mt-5">
                                    <a href="#" class="text-center text-green" style="width:100%; display:inline-block;">
                                        Lihat detail pesanan
                                    </a>
                                </div>
                            </div>
                        </div>
                    {{-- <!-- @elseif ( $order['alert_tenggat_waktu_pelunasan'] )
                        <div class="card-body p-5" id="payment-failed">
                            <div class="row">
                            <img style="width: 100px;" class="image-center" src="{{ asset('assets-web/img/icon/icon-failed.png') }}" alt="{{ asset('assets-web/img/icon/icon-failed.png') }}">
                            </div>
                            <div class="row mt-5">
                                <div class="font-normal-700 fs-20 text-center">Pembayaran Kadaluarsa</div>
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
                                                Rp. {{ number_format(last($order['order_payment'])['payment_price']) }}
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
                                    <a href="{{ url('/transaction', $order['id_order'] ).'/detail' }}">
                                        <button class="btn btn-success" style="width:100%; display:inline-block;">Lihat detail pesanan</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="card-body p-5" id="payment-success">
                            <div class="row">
                            <img style="width: 100px;" class="image-center" src="{{ asset('assets-web/img/icon/icon-success.png') }}" alt="{{ asset('assets-web/img/icon/icon-success.png') }}">
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
                                                Rp. {{ number_format(last($order['order_payment'])['payment_price']) }}
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
                                    <a href="{{ url('/transaction', $order['id_order'] ).'/detail' }}">
                                        <button class="btn btn-success" style="width:100%; display:inline-block;">Lihat detail pesanan</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endif --> --}}
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Cara Bayar Start -->
<div class="modal fade" tabindex="-1" id="caraPembayaranModal">
    <div class="modal-dialog modal-md modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Cara Pembayaran</h3>
                <a href="" class="text-dark" data-bs-dismiss="modal">X</a>
            </div>

            <div class="modal-body">
                <div class="row px-8">
                    <div class="col-3">
                        <img width="60px" src="https://api-uploads.umra.id/support/5a80b690-2cbb-41c4-bcba-47d8e94d940b.png" alt="">
                    </div>
                    <div class="col-9">
                        <div class="text-dark font-normal-400 fs-16 text-center">Mandiri Virtual Account</div>
                    </div>
                </div>
                <hr>
                <div class="row mt-2 px-5">
                    <div class="font-normal-500 fs-16">
                        <ol>
                            <li>Pada menu utama, pilih <strong>Bayar/Beli</strong></li>
                            <li>Pilih <strong>Lainnya</strong></li>
                            <li>Pilih <strong>Multi Payment</strong></li>
                            <li>Masukkan <strong>0000</strong> (kode perusahaan Midtrans), lalu tekan <strong>Benar</strong></li>
                            <li>Masukkan kode pembayaran Anda, lalu tekan <strong>Benar</strong></li>
                            <li>Pada halaman konfirmasi akan muncul detail pembayaran Anda. Jika informasi telah sesuai, tekan <strong>Ya</strong></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal Cara Bayar End -->

@endsection
