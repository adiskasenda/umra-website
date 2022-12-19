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
                        <form class="form w-100" method="POST" action="{{ url('/') }}">
                            @csrf
                            
                            <div class="text-center mb-11">
                                <h1 class="fw-bolder mb-3 text-green">Masukan Kode OTP</h1>
                                <div class="text-gray-500 fw-semibold fs-6">Kami telah mengirimkan kode OTP ke nomor WhatsApp 08138401939, Jangan berikan kode verifikasi ke siapa pun.</div>
                            </div>
                            
                            <div class="fv-row mb-8">
                                <input type="otp" placeholder="Masukan Kode OTP" name="otp" class="form-control bg-transparent"/>
                            </div>

                            <div class="text-center text-gray-500 mb-4">
                                <span id="timer">
                                    Kirim ulang dalam <span id="time">30</span>      
                                </span>
                            </div>

                            <div class="d-grid mb-10">
                                <button type="submit" id="kt_sign_in_submit" class="btn btn-success">
                                    <span class="indicator-label">Verifikasi</span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('page_js')
    <script>
        var counter = 30;
        var interval = setInterval(function() {
            counter--;
            // Display 'counter' wherever you want to display it.
            if (counter <= 0) {
                    clearInterval(interval);
                    $('#timer').html("<a href='{{ url('/login-phone/check-otp') }}'>Kirim ulang</a>");  
                return;
            }else{
                $('#time').text(counter);
            }
        }, 1000);
    </script>
@endpush