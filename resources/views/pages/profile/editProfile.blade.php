@extends('layouts.master')

@section('content')
    <div class="container-fluid py-5 mb-8">
        <div class="container">
            @include('pages.transaction.partials.breadcrumb',[
                'breadcrumb' => 'hello'
            ])
            <div class="row">
                <div class="col-md-3">
                    @include('pages.profile.partials.sidebar')
                </div>
                <div class="col-md-9">
                    <a href="{{ url('/profile') }}" class="font-normal-700 fs-20 text-dark">
                        <i class="fa fa-arrow-left mr-2" style="color: black" aria-hidden="true"></i> Edit Profil
                    </a>
                    <div class="card card-bordered mt-5" style="width: 100%;">
                        <div class="card-body">
                            <div class="row">
                                <div class="font-normal-600 fs-14 mb-4">
                                    Foto Profil
                                </div>
                                <div class="symbol symbol-circle me-5">
                                    <img alt="Logo" src="https://preview.keenthemes.com/metronic8/demo1/assets/media/avatars/300-1.jpg">
                                </div>
                            </div>
                            <div class="row mt-5">
                                <div class="col-6">
                                    <div class="font-normal-600 fs-14 mb-3">Informasi Pemilik Akun</div>
                                    <form class="form w-100" method="POST" action="{{ url('/login-email') }}">
                                        @csrf
                                        <div class="form-floating">
                                            <input type="email" class="form-control" id="floatingInputValue" placeholder="Nama Depan" value="Reo"/>
                                            <label for="floatingInputValue">Nama Depan</label>
                                        </div>
                                        <div class="form-floating mt-3">
                                            <input type="email" class="form-control" id="floatingInputValue" placeholder="Nama Belakang" value="nology"/>
                                            <label for="floatingInputValue">Nama Belakang</label>
                                        </div>
                                        <div class="form-floating mt-3">
                                            <input type="date" class="form-control" id="floatingInputValue" placeholder="Tanggal Lahir" value=""/>
                                            <label for="floatingInputValue">Tanggal Lahir</label>
                                        </div>
                                        <label for="jenis_kelamin" class="mt-3">Jenis Kelamin</label>
                                        <div class="fv-row mb-3">
                                            <input type="radio" id="laki-laki" name="laki-laki" value="laki-laki">
                                            <label for="laki-laki" style="margin-right: 10px;">Laki-laki</label>
                                            <input type="radio" id="perempuan" name="perempuan" value="perempuan">
                                            <label for="perempuan">Perempuan</label>
                                        </div>
                                        <label for="alamat" class="form-group">Alamat</label>
                                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px" maxlength="250">
                                        </textarea>
                                    </form>
                                </div>
                                <div class="col-6">
                                    <div class="font-normal-600 fs-14">Email dan Nomor Ponsel</div>
                                    <label for="email" class="font-normal-400 fs-12 mt-3">Email</label>
                                    <div class="card card-bordered" style="background-color: #F8FCFC">
                                        <div class="card-body p-5">
                                            <div class="row">
                                                <div class="col-10">
                                                    <div class="font-normal-400 fs-12">
                                                        Reonology@gmail.com
                                                    </div>
                                                    <div class="font-normal-400 fs-12 mt-2">
                                                        <i class="fa-solid fa-circle-check" style="margin-right: 5px; color: green;"></i>
                                                        Sudah diverifikasi
                                                    </div>
                                                </div>
                                                <div class="col-2 mt-2">
                                                    <a href="" class="font-normal-500 fs-12 text-green">Ubah</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <label for="no_hp" class="font-normal-400 fs-12 mt-3">Nomor Ponsel</label>
                                    <div class="card card-bordered" style="background-color: #F8FCFC">
                                        <div class="card-body p-5 font-normal-600 fs-14">
                                            <div class="row">
                                                <div class="col-10">
                                                    <div class="font-normal-400 fs-12">
                                                        +62 34786465342
                                                    </div>
                                                    <div class="font-normal-400 fs-12 mt-2">
                                                        <i class="fa-solid fa-circle-check" style="margin-right: 5px; color: green;"></i>
                                                        Sudah diverifikasi
                                                    </div>
                                                </div>
                                                <div class="col-2 mt-2">
                                                    <a href="" class="font-normal-500 fs-12 text-green">Ubah</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="card-footer text-right">
                            <button class="btn text-green">
                                <span class="indicator-label">Batal</span>
                            </button>
                            <button type="submit" id="editProfile" class="btn btn-success">
                                <span class="indicator-label">Simpan</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
