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
                            <div class="font-normal-700 fs-20"> Profile</div>
                        </div>
                        <div class="col-6">
                            <div class="font-normal-500 fs-16 text-right">
                                <a href="{{ url('/profile/edit') }}" class="text-green">
                                    <i class="fa-solid fa-pen-to-square" style="color: green"></i>
                                    Edit Profil
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card card-bordered mt-5" style="width: 100%;">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-5">
                                    <div class="font-normal-400 fs-14">Nama Lengkap</div>
                                    <div class="font-normal-700 fs-16 mt-1">{{ $user['firstname'].' '.$user['lastname'] }}</div>
                                </div>
                                <div class="col-7">
                                    <div class="font-normal-400 fs-14">Alamat Domisili</div>
                                    <div class="font-normal-700 fs-16 mt-1">{{ $user['address'] }}</div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-5">
                                    <div class="font-normal-400 fs-14 mt-10">Jenis Kelamin</div>
                                    <div class="font-normal-700 fs-16 mt-1">
                                        @if ( $user['gender'] == 1 )
                                            Laki-laki <span><i class="fa-solid fa-mars" style="color: black"></i></span>
                                        @else
                                            Perempuan <span><i class="fa-solid fa-mars" style="color: black"></i></span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-7">
                                    <div class="font-normal-400 fs-14 mt-10">Email</div>
                                    <div class="font-normal-700 fs-16 mt-1">{{ $user['email'] }}</div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-5">
                                    <div class="font-normal-400 fs-14 mt-10">Tanggal Lahir</div>
                                    <div class="font-normal-700 fs-16 mt-1">15 Januari 1977 {{ date('d M Y',strtotime($user['birthday'])) }}</div>
                                </div>
                                <div class="col-7">
                                    <div class="font-normal-400 fs-14 mt-10">Nomor Telepon</div>
                                    <div class="font-normal-700 fs-16 mt-1">{{ $user['phone'] }}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
