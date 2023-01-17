@extends('layouts.authentication')

@section('content')



    <div class="d-flex flex-column flex-root" id="kt_app_root">
        <div class="d-flex flex-column flex-lg-row flex-column-fluid">
            <div class="d-flex flex-lg-row-fluid">
                <div class="d-flex flex-column flex-center pb-0 pb-lg-10 p-10 w-100">
                    <img class="theme-light-show mx-auto mw-100 w-150px w-lg-300px mb-10 mb-lg-20" src="{{ asset('assets-web/img/logo/logo_umra_icon.png') }}" alt="" />
                </div>
            </div>
            <div class="d-flex flex-column-fluid flex-lg-row-auto justify-content-center justify-content-lg-end">
                <div class="bg-body d-flex flex-center rounded-4 w-md-600px p-10">
                    <div class="w-md-400px">

                        <div class="text-center mb-11">
                            <h1 class="fw-bolder mb-3 text-green">Masuk ke UMRA</h1>
                        </div>

                        @if ( old('type') == 'gmail' ) 
                            @include('layouts.partials.message')
                        @endif

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
                                <a class="nav-link" data-bs-toggle="tab" href="#kt_tab_login_with_phone">Nomor Telephone</a>
                            </li>
                            <li class="nav-item" style="width: 50%; text-align: center;">
                                <a class="nav-link" data-bs-toggle="tab" href="#kt_tab_login_with_email">Email</a>
                            </li>
                        </ul>

                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade" id="kt_tab_login_with_phone" role="tabpanel">
                                @if ( old('type') == 'phone' ) 
                                    @include('layouts.partials.message')
                                @endif
                                <form class="form w-100" method="POST" action="{{ url('/login-phone') }}">
                                    @csrf
                                    <div class="fv-row mb-8">
                                        <input type="text" placeholder="Nomor Telephone" name="phone" value="{{ old('phone') }}" class="form-control bg-transparent" required/>
                                    </div>
                                    
                                    <div class="d-grid mb-10">
                                        <button type="submit" id="kt_sign_in_submit" class="btn btn-success">
                                            <span class="indicator-label">Masuk</span>
                                        </button>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane fade" id="kt_tab_login_with_email" role="tabpanel">
                                @if ( old('type') == 'email' ) 
                                    @include('layouts.partials.message')
                                @endif
                                <form class="form w-100" method="POST" action="{{ url('/login-email') }}">
                                    @csrf
                                    <div class="fv-row mb-8">
                                        <input type="email" placeholder="Email" name="email" value="{{ old('email') }}" class="form-control bg-transparent" required/>
                                    </div>
                                    <div class="fv-row mb-8">
                                        <input type="password" placeholder="Password" name="password" class="form-control bg-transparent" required/>
                                    </div>

                                    <div class="d-grid mb-10">
                                        <button type="submit" id="kt_sign_in_submit" class="btn btn-success">
                                            <span class="indicator-label">Masuk</span>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>                            
                        
                        <div class="text-gray-500 text-center fw-semibold fs-6">Belum punya Akun? <a href="{{ url('/register') }}">Daftar</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('page_js')
    <script>
        if ( '{{ old('type') }}' == 'email' ) {
            $('#kt_tab_login_with_phone').removeClass('active')
            $('a[href="#kt_tab_login_with_phone"]').removeClass('show active')

            $('a[href="#kt_tab_login_with_email"]').addClass('active')
            $('#kt_tab_login_with_email').addClass('show active')
        } else {
            $('a[href="#kt_tab_login_with_email"]').removeClass('active')
            $('#kt_tab_login_with_email').removeClass('show active')

            $('a[href="#kt_tab_login_with_phone"]').addClass('active');
            $('#kt_tab_login_with_phone').addClass('show active');
        }
    </script>
@endpush