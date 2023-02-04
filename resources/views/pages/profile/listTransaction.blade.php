@extends('layouts.master')

@section('content')
<div class="container-fluid py-5 mb-8">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                @include('pages.profile.partials.sidebar', [
                    'step' => 3
                ])
            </div>
            <div class="col-md-9">
                <div class="font-normal-700 fs-20">Riwayat Transaksi</div>
                @if ( count($order_customers) > 0 )
                    @foreach ($order_customers as $order_customer)
                        <a href="{{ url('/transaction', $order_customer['id_order'] ).'/detail' }}" class="card card-bordered mt-5 text-dark">
                            <div class="card-header pt-3" style="display: block;">
                                <div class="row mb-3">
                                    <div class="col-1 mt-1">
                                        <img width="100%" src="{{ $order_customer['package_product']['url_banner'] }}" alt="{{ $order_customer['package_product']['url_banner'] }}">
                                    </div>
                                    <div class="col-8">
                                        <div class="font-normal-400 fs-12">{{ Helpers::viewFlagUmroh($order_customer['package_product']['flag_umroh']) }}</div>
                                        <div class="font-normal-700 fs-18">{{ $order_customer['package_product']['name'] }}</div>
                                        <div class="row">
                                            <div class="col-1">
                                                <img src="{{ asset('assets-web/img/icon/calendar-umroh.png') }}" alt="{{ asset('assets-web/img/icon/calendar-umroh.png') }}">
                                            </div>
                                            <div class="col-4" style="padding-left: 1px">
                                                <div class="font-normal-400 fs-12 mt-2">
                                                    Keberangkatan {{ date('Y-m-d', strtotime($order_customer['package_product']['date_start'])) }} 
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="row">
                                                    <div class="col-4">
                                                        <img src="{{ asset('assets-web/img/icon/time-umroh.png') }}" alt="{{ asset('assets-web/img/icon/time-umroh.png') }}">
                                                    </div>
                                                    <div class="col-8" style="padding-left: 1px">
                                                        <div class="font-normal-400 fs-12 mt-2">
                                                            Durasi {{ $order_customer['package_product']['day_duration'] }} Hari
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-4"></div>
                                        </div>
                                    </div>
                                    <div class="col-3 mt-5">
                                        <div class="font-normall-500 fs-12 text-right">
                                            <span class="badge badge-warning" style="border-radius: 10px"></span>
                                        </div>
                                        <div class="font-normall-700 fs-16 text-right text-green mt-2">
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-4">
                                        <div class="font-normal-500 fs-12">
                                            <i class="fa-solid fa-user-group me-2" style="color: var(--green)"></i>
                                            Calon 1 Jamaah
                                        </div>
                                    </div>
                                    <div class="col-8">
                                        <div class="font-normal-500 fs-12 text-right">
                                            <i class="fa-solid fa-circle-info me-2" style="color: #B3261E"></i>
                                            Tenggat pelunasan maksimal <span class="text-red"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    @endforeach
                @else
                    @include('layouts.partials.message-search-not-found')
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
