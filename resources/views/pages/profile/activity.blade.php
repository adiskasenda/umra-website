@extends('layouts.master')

@section('content')
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-3 mb-8">
                    @include('pages.profile.partials.sidebar')
                </div>
                <div class="col-md-9 mb-8">
                    <div class="row">
                        <div class="col-6">
                            <div class="font-normal-700 fs-20 text-left mt-3"> Aktivitas Anda</div>
                        </div>
                        <!-- <div class="col-6 text-right">
                            <div class="row">
                                <div class="col-8"></div>
                                <div class="col-4">
                                    <select class="form-select" aria-label="Select example">
                                        <option value="desc">Terbaru</option>
                                        <option value="asc">Terlama</option>
                                    </select>
                                </div>
                            </div>
                        </div> -->
                    </div>
                    <div class="table-responsive mt-5">
                        <table class="table table-rounded table-flush">
                            <tbody>
                                <tr class="py-5 fw-semibold  border-bottom border-gray-300 fs-6">
                                    <td>
                                        <div class="font-normal-700 fs-14"><i class="fa-solid fa-circle-check" style="margin-right: 10px; color:green;"></i>Anda berhasil login!</div>
                                        <div class="font-normal-500 fs-12 px-7">Anda berhasil login pada perangkat android pada 12 feb 2023 19:31</div>
                                    </td>
                                    <td class="font-normal-500 fs-12 text-right">2 menit</td>
                                </tr>
                                @foreach( $notifications as $notification )
                                    <tr class="py-5 fw-semibold  border-bottom border-gray-300 fs-6">
                                        <td>
                                            <div class="font-normal-700 fs-14">
                                                <i class="fa-solid fa-circle-check" style="margin-right: 10px; color:green;"></i>
                                                {{ $notification['tittle'] }}
                                            </div>
                                            <div class="font-normal-500 fs-12 px-7">
                                                {{ $notification['description'] }}
                                            </div>
                                        </td>
                                        <td class="font-normal-500 fs-12 text-right">{{ \Carbon\Carbon::parse($notification['created_date'])->diffForHumans() }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
