@extends('layouts.authentication')

@section('content')
<div class="d-flex flex-column flex-root" id="kt_app_root">
        <div class="d-flex flex-column flex-lg-row flex-column-fluid">
            <div class="d-flex flex-lg-row-fluid">
                <div class="d-flex flex-column flex-center pb-0 pb-lg-10 p-10 w-100">
                    <img class="theme-light-show mx-auto mw-100 w-150px w-lg-300px mb-10 mb-lg-20" src="{{ asset('assets-web/img/logo/logo_umra_icon.png') }}" alt="" />
                </div>
            </div>
            <div class="d-flex flex-column-fluid flex-lg-row-auto justify-content-center justify-content-lg-end p-12">
                <div class="bg-body d-flex flex-center rounded-4 w-md-600px p-10">
                    <div class="w-md-400px">

                        <div class="text-center mb-11">
                            <h1 class="text-green fw-bolder mb-3">Buat Akun</h1>
                        </div>

                        <div class="d-grid mb-10">
                            <a href="{{ url('/login-gmail') }}" class="btn btn-flex btn-outline btn-text-gray-700 btn-active-color-primary bg-state-light flex-center text-nowrap w-100">
                                <span class="indicator-label">
                                    <img src="{{ asset('assets-web/img/icon/btn-google.png') }}" alt="{{ asset('assets-web/img/icon/btn-google.png') }}" class="h-15px me-3"> Masuk dengan Google
                                </span>
                            </a>
                        </div>

                        <div class="separator separator-content my-14">
                            <span class="w-125px text-gray-500 fw-semibold fs-7">atau</span>
                        </div>
                        

                        <ul class="nav nav-tabs nav-line-tabs mb-5 fs-6">
                            <li class="nav-item" style="width: 50%; text-align: center;">
                                <a class="nav-link active" data-bs-toggle="tab" href="#kt_tab_login_with_phone">Nomor Telephone</a>
                            </li>
                            <li class="nav-item" style="width: 50%; text-align: center;">
                                <a class="nav-link" data-bs-toggle="tab" href="#kt_tab_login_with_email">Email</a>
                            </li>
                        </ul>


                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="kt_tab_login_with_phone" role="tabpanel">
                                <form class="form w-100" method="POST" action="{{ url('/') }}">
                                    @csrf
                                    <div class="fv-row mb-8">
                                        <input type="text" placeholder="Email" name="email" autocomplete="off" class="form-control bg-transparent" />
                                    </div>
                                    <div class="fv-row mb-3">
                                        <input type="password" placeholder="Password" name="password" autocomplete="off" class="form-control bg-transparent" />
                                    </div>
                                    <div class="d-grid mb-10">
                                        <button type="submit" id="kt_sign_in_submit" class="btn btn-primary">
                                            <span class="indicator-label">Daftar</span>
                                        </button>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane fade" id="kt_tab_login_with_email" role="tabpanel">
                                <form class="form w-100" method="POST" action="{{ url('/') }}">
                                    @csrf
                                    <div class="fv-row mb-8">
                                        <input type="text" placeholder="Email" name="email" autocomplete="off" class="form-control bg-transparent" />
                                    </div>
                                    <div class="fv-row mb-3">
                                        <input type="password" placeholder="Password" name="password" autocomplete="off" class="form-control bg-transparent" />
                                    </div>
                                    <div class="d-grid mb-10">
                                        <button type="submit" id="kt_sign_in_submit" class="btn btn-primary">
                                            <span class="indicator-label">Daftar</span>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>      

                        <div class="text-gray-500 text-center fw-semibold fs-6 mb-8">Dengan membuat akun Anda menyetujui Syarat & Ketentuan dan Kebijakan Privasi Umra.id.</div>
                        <div class="text-gray-500 text-center fw-semibold fs-6">Sudah punya Akun? <a href="{{ url('/login') }}">Masuk</a></div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection