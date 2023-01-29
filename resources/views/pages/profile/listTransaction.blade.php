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
                @foreach ($histories as $history)
                    <a href="{{ url('/transaction/1/detail') }}" class="card card-bordered mt-5 text-dark">
                        <div class="card-header pt-3" style="display: block;">
                            <div class="row mb-3">
                                <div class="col-1 mt-1">
                                    <img src="{{ asset('assets-web/img/icon/double.png') }}" alt="">
                                </div>
                                <div class="col-8">
                                    <div class="font-normal-400 fs-12">{{ $history['type'] }}</div>
                                    <div class="font-normal-700 fs-18">{{ $history['service'] }}</div>
                                    <div class="row">
                                        <div class="col-1">
                                            <img src="{{ asset('assets-web/img/icon/calendar-umroh.png') }}" alt="">
                                        </div>
                                        <div class="col-4" style="padding-left: 1px">
                                            <div class="font-normal-400 fs-12 mt-2">
                                                Keberangkatan {{ $history['departure'] }}
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="row">
                                                <div class="col-4">
                                                    <img src="{{ asset('assets-web/img/icon/time-umroh.png') }}" alt="">
                                                </div>
                                                <div class="col-8" style="padding-left: 1px">
                                                    <div class="font-normal-400 fs-12 mt-2">
                                                        Durasi {{ $history['duration'] }} Hari
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-4"></div>
                                    </div>
                                </div>
                                <div class="col-3 mt-5">
                                    <div class="font-normall-500 fs-12 text-right">
                                        {{ $history['payment_type'] }}
                                        <span class="badge
                                            @if ($history['payment_status'] == 'Belum Lunas')
                                                badge-warning
                                            @elseif ($history['payment_status'] == 'Lunas')
                                                badge-success
                                            @elseif ($history['payment_status'] == 'Dibatalkan')
                                                badge-secondary
                                            @endif
                                        " style="border-radius: 10px">{{ $history['payment_status'] }}</span>
                                    </div>
                                    <div class="font-normall-700 fs-16 text-right text-green mt-2">
                                        {{ $history['nominal'] }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-4">
                                    <div class="font-normal-500 fs-12">
                                        <i class="fa-solid fa-user-group" style="color: var(--green)"></i>
                                        {{ $history['jamaah_count'] }} Calon Jamaah
                                    </div>
                                </div>
                                <div class="col-8">
                                    <div class="font-normal-500 fs-12 text-right">
                                        <i class="fa-solid fa-circle-info" style="color: #B3261E"></i>
                                        Tenggat pelunasan maksimal <span class="text-red">{{ $history['duedate_payment'] }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
