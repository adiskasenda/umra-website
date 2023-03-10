@extends('layouts.authentication')

@section('content')

    <div class="text-center mb-11">
        <h1 class="text-green fw-bolder mb-3">Buat Akun</h1>
    </div>

    @if ( old('type') == 'gmail' ) 
        @include('layouts.partials.message')
    @endif
    <div class="d-grid mb-10">
        <a href="{{ url('/auth/google') }}" class="btn btn-flex btn-outline btn-text-gray-700 btn-active-color-primary bg-state-light flex-center text-nowrap w-100">
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
            <a class="nav-link active" data-bs-toggle="tab" href="#kt_tab_register_with_phone">Nomor Telephone</a>
        </li>
        <li class="nav-item" style="width: 50%; text-align: center;">
            <a class="nav-link" data-bs-toggle="tab" href="#kt_tab_register_with_email">Email</a>
        </li>
    </ul>


    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="kt_tab_register_with_phone" role="tabpanel">
            @if ( old('type') == 'phone' ) 
                @include('layouts.partials.message')
            @endif
            <form class="form w-100" method="POST" action="{{ url('/register-phone') }}">
                @csrf
                <div class="fv-row mb-8">
                    <input type="number" placeholder="Nomer Ponsel" value="{{ old('phone') }}" name="phone" class="form-control bg-transparent" required/>
                </div>
                <div class="fv-row mb-8">
                    <input type="text" placeholder="Nama Depan" name="firstname" class="form-control bg-transparent" required/>
                </div>
                <div class="fv-row mb-8">
                    <input type="text" placeholder="Nama Belakang" name="lastname" class="form-control bg-transparent" required/>
                </div>
                <div class="fv-row mb-8">
                    <input type="text" placeholder="Tanggal Lahir" name="birthday" class="form-control bg-transparent" required/>
                </div>

                <div class="d-grid mb-10">
                    <button type="submit" id="kt_sign_in_submit" class="btn btn-success">
                        <span class="indicator-label">Daftar</span>
                    </button>
                </div>
            </form>
        </div>
        <div class="tab-pane fade" id="kt_tab_register_with_email" role="tabpanel">
            @if ( old('type') == 'email' ) 
                @include('layouts.partials.message')
            @endif

            <form class="form w-100" method="POST" action="{{ url('/register-email') }}">
                @csrf
                <div class="fv-row mb-8">
                    <input type="text" placeholder="Email" value="{{ old('email') }}" name="email" class="form-control bg-transparent" required/>
                </div>
                <div class="fv-row mb-8">
                    <input type="text" placeholder="Nama Depan" name="firstname" class="form-control bg-transparent" required/>
                </div>
                <div class="fv-row mb-8">
                    <input type="text" placeholder="Nama Belakang" name="lastname" class="form-control bg-transparent" required/>
                </div>
                <div class="fv-row mb-8">
                    <input type="text" id="birthday" placeholder="Tanggal Lahir" name="birthday" class="form-control bg-transparent" required/>
                </div>
                <div class="fv-row mb-8">
                    <input type="password" placeholder="Kata Sandi" name="password" class="form-control bg-transparent" required/>
                </div>
                <div class="fv-row mb-8">
                    <input type="password" placeholder="Ulang Kata Sandi" name="password_confirmed" class="form-control bg-transparent" required/>
                </div>
                <div class="d-grid mb-10">
                    <button type="submit" id="kt_sign_in_submit" class="btn btn-success">
                        <span class="indicator-label">Daftar</span>
                    </button>
                </div>
            </form>
        </div>
    </div>      

    <div class="text-gray-500 text-center fw-semibold fs-6 mb-8">Dengan membuat akun Anda menyetujui Syarat & Ketentuan dan Kebijakan Privasi Umra.id.</div>
    <div class="text-gray-500 text-center fw-semibold fs-6">Sudah punya Akun? <a href="{{ url('/login') }}">Masuk</a></div>
    
@endsection

@push('page_js')
    <script>
        $( document ).ready(function() {
            $("input[name='birthday']").flatpickr({
                dateFormat: "d-m-Y",
            });

            // Check condition Validation
            if ( '{{ old('type') }}' == 'email' ) {
                $('#kt_tab_register_with_phone').removeClass('active')
                $('a[href="#kt_tab_register_with_phone"]').removeClass('show active')

                $('a[href="#kt_tab_register_with_email"]').addClass('active')
                $('#kt_tab_register_with_email').addClass('show active')
            } else {
                $('a[href="#kt_tab_register_with_email"]').removeClass('active')
                $('#kt_tab_register_with_email').removeClass('show active')

                $('a[href="#kt_tab_register_with_phone"]').addClass('active');
                $('#kt_tab_register_with_phone').addClass('show active');
            }
        });
    </script>
@endpush