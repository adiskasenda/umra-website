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
                            <div class="font-normal-700 fs-20"> Profile</div>
                        </div>
                        <div class="col-6">
                            <div class="font-normal-500 fs-16 text-right">
                                <a href="{{ url('/profile/edit') }}" class="text-green">
                                    <i class="fa-solid fa-pen-to-square me-2" style="color: green"></i>
                                    Edit Profil
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card card-bordered mt-5" style="width: 100%;">
                        <div class="card-body">

                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-12 my-5">
                                    <div class="font-normal-400 fs-14">Nama Lengkap</div>
                                    <div class="font-normal-700 fs-16 mt-1">{{ $user['firstname'].' '.$user['lastname'] }}</div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12 my-5">
                                    <div class="font-normal-400 fs-14">Alamat Domisili</div>
                                    <div class="font-normal-700 fs-16 mt-1">{{ $user['address'] }}</div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-12 my-5">
                                    <div class="font-normal-400 fs-14 mt-10">Jenis Kelamin</div>
                                    <div class="font-normal-700 fs-16 mt-1">
                                        @if ( $user['gender'] == 1 )
                                            Laki-laki <span><i class="fa-solid fa-mars me-2" style="color: black"></i></span>
                                        @else
                                            Perempuan <span><i class="fa-solid fa-venus me-2" style="color: black"></i></span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12 my-5">
                                    <div class="font-normal-400 fs-14 mt-10">Email</div>
                                    <div class="font-normal-700 fs-16 mt-1">
                                        <div class="row">
                                            <div class="col-md-6">
                                                {{ $user['email'] }}
                                            </div>
                                            <div class="col-md-6">
                                                @if( $user['verificate_email'] == 1 && $user['email'] != null )
                                                    <div class="font-normal-400 fs-14">
                                                        <i class="fa-solid fa-circle-check" style="margin-right: 5px; color: green;"></i>
                                                        Sudah diverifikasi
                                                    </div>
                                                @elseif ( $user['verificate_email'] == 1 && $user['email'] != null )
                                                    <span class="badge badge-red-light text-red-error px-5 py-2" style="border-radius: 10px;">
                                                        <i class="fa-solid fa-triangle-exclamation me-2" style="color: #B3261E"></i>
                                                        Belum diverifikasi
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-4">
                                    <div class="font-normal-400 fs-14 mt-10">Tanggal Lahir</div>
                                    <div class="font-normal-700 fs-16 mt-1">{{ date('d M Y',strtotime($user['birthday'])) }}</div>
                                </div>
                                <div class="col-4">
                                    <div class="font-normal-400 fs-14 mt-10">Nomor Telepon</div>
                                    <div class="font-normal-700 fs-16 mt-1">{{ $user['phone'] }}</div>
                                </div>
                                <div class="col-4">
                                    @if( $user['verificate_phone'] == 1 && $user['phone'] != null )
                                        <div class="font-normal-400 fs-14 mt-11">
                                            <i class="fa-solid fa-circle-check" style="margin-right: 5px; color: green;"></i>
                                            Sudah diverifikasi
                                        </div>
                                    @elseif ($user['verificate_phone'] == 0 && $user['phone'] != null )
                                        <span class="badge badge-red-light text-red-error px-5 py-2 mt-10" style="border-radius: 10px;">
                                            <i class="fa-solid fa-triangle-exclamation me-2" style="color: #B3261E"></i>
                                            Belum diverifikasi
                                        </span>
                                    @endif
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
