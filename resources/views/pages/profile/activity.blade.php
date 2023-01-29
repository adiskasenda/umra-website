@extends('layouts.master')

@section('content')
    <div class="container-fluid py-5 mb-8">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    @include('pages.profile.partials.sidebar')
                </div>
                <div class="col-md-9">
                    <div class="row">
                        <div class="col-6">
                            <div class="font-normal-700 fs-20 text-left mt-3"> Aktivitas Anda</div>
                        </div>
                        <div class="col-6 text-right">
                            <div class="row">
                                <div class="col-8"></div>
                                <div class="col-4">
                                    <select class="form-select" aria-label="Select example">
                                        <option>Terbaru</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                            </div>
                        </div>
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
                                <tr class="py-5 fw-semibold  border-bottom border-gray-300 fs-6">
                                    <td>
                                        <div class="font-normal-700 fs-14"><i class="fa-solid fa-circle-check" style="margin-right: 10px; color:green;"></i>Anda berhasil login!</div>
                                        <div class="font-normal-500 fs-12 px-7">Anda berhasil login pada perangkat android pada 12 feb 2023 19:31</div>
                                    </td>
                                    <td class="font-normal-500 fs-12 text-right">2 menit</td>
                                </tr>
                                <tr class="py-5 fw-semibold  border-bottom border-gray-300 fs-6">
                                    <td>
                                        <div class="font-normal-700 fs-14"><i class="fa-solid fa-circle-check" style="margin-right: 10px; color:green;"></i>Anda berhasil login!</div>
                                        <div class="font-normal-500 fs-12 px-7">Anda berhasil login pada perangkat android pada 12 feb 2023 19:31</div>
                                    </td>
                                    <td class="font-normal-500 fs-12 text-right">2 menit</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
