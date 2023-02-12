@extends('layouts.master')

@section('content')
<div class="container-fluid py-5 mb-8">
    <div class="container">
        @include('pages.transaction.partials.breadcrumb',[
            // 'name_package' => $order['package_product']['name'],
        ])
        <div class="row">
            <div class="col-md-12">
                <a href="{{ url('/transaction', $order['id_order'] ).'/detail' }}" class="font-normal-700 fs-24 text-dark mt-3">
                    <i class="fa-solid fa-arrow-left me-2"></i> Pilih Metode Pembayaran
                </a>
                <div class="font-normal-400 fs-14 mt-3" style="margin-left: 19px;">Pilih metode pembayaran yang tersedia</div>
                <div class="row">
                    <div class="col-6">

                        <div class="card card-bordered mt-5">
                            <div class="card-body p-5">
                                <div class="font-normal-700 fs-16">
                                    Metode Pembayaran
                                </div>
                                <a href="{{ url('/transaction/payment-option-need-pay', $order['id_order']) }}" class="row mx-2 my-5">
                                    <div class="col-11">
                                        <div class="font-normal-600 fs-14 text-dark">Virtual Account (VA)</div>
                                    </div>
                                    <div class="col-1 mt-1">
                                        <i class="fa-solid fa-chevron-right"></i>
                                    </div>
                                </a>
                                <hr>
                            </div>
                        </div>

                    </div>

                    <div class="col-6">
                        <div class="card card-bordered mt-5">
                            <div class="card-body p-5">
                                <div class="row">
                                    <div class="col-2">
                                        <img width="100%" src="{{ $order['package_product']['url_banner'] }}" alt="{{ $order['package_product']['url_banner'] }}">
                                    </div>
                                    <div class="col-6">
                                        <div class="font-normal-400 fs-12">{{ Helpers::viewFlagUmroh($order['package_product']['flag_umroh']) }}</div>
                                        <div class="font-normal-700 fs-16">{{ $order['package_product']['name'] }}</div>
                                        <div class="">
                                            <i class="fa-solid fa-user-group me-2" style="color: var(--green)"></i>
                                            Calon Jamaah
                                            <span class="icon-cicilan">
                                                <i class="fa-solid fa-wallet me-2" style="color: var(--green)"></i>
                                                Cicilan
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="row">
                                    <div class="col-6">
                                        <i class="fa-solid fa-user-group me-2" style="color: var(--green)"></i>
                                        <span class="total_people">{{ count($order['order_guest_double']) + count($order['order_guest_triple']) + count($order['order_guest_quad']) }}</span> Calon Jamaah
                                    </div>
                                    <div class="col-6 text-right">
                                        {{ $order['ringkasan_pesanan'][0]['name'] }} Rp. <span id="total_price">{{ number_format($order['ringkasan_pesanan'][0]['value']) }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <hr class="my-5">

                        
                        <div class="card card-bordered mt-5">
                            <div class="card-body p-5">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="font-normal-400 fs-18">
                                            {{ $order['need_pay']['name'] }}
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="font-700 fs-24 text-green text-right">
                                            Rp. {{ number_format($order['need_pay']['value']) }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

