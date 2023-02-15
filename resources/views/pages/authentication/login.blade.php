@extends('layouts.authentication')

@section('content')

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
                <div class="d-flex flex-stack flex-wrap gap-3 fs-base fw-semibold mb-8">
                    <div></div>
                    <a href="#" class="link-primary" id="reset-password" style="color: var(--green) !important;" data-bs-toggle="modal" data-bs-target="#modal-reset-password">Lupa Kata Sandi ?</a>
                </div>

                <div class="d-grid mb-10">
                    <button type="submit" id="kt_sign_in_submit" class="btn btn-success">
                        <span class="indicator-label">Masuk</span>
                    </button>
                </div>
            </form>
        </div>
    </div>                            
    
    <div class="text-gray-500 text-center fw-semibold fs-6 mt-5 mb-5">
        Dengan masuk. Anda Menyetujui 
        <a href="#" target="_blank" class="text-green url-term-and-condition">Syarat & Ketentuan</a> dan 
        <a href="#" target="_blank" class="text-green url-privacy-policy">Kebijakan Privasi</a> UMRA ID. 
    </div>
    <div class="text-gray-500 text-center fw-semibold fs-6">Belum punya Akun? <a href="{{ url('/register') }}">Daftar</a></div>
              
    
    <!-- modal send email reset password -->
    <div class="modal fade" tabindex="-1" id="modal-reset-password">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <div class="modal-body text-center" style="padding:40px;" id="email-reset-send-email">
                    <img src="{{ asset('assets-web/img/icon/lupa-password.png') }}" alt="{{ asset('assets-web/img/icon/lupa-password.png') }}">
                    
                    <div class="mb-5">
                        <div class="mt-5 text-weight-700 fs-20" style="font-weight: bold;">Lupa kata sandi?</div>
                        <div class="mt-5 text-weight-400 fs-16">Jangan khawatir. Tuliskan email Anda untuk membuat kata sandi baru.</div>
                        
                        <div id="email-reset-send-email-failed" style="display:none;">
                            <div class="mt-5 alert alert-message alert-danger d-flex align-items-center">
                                <span class="svg-icon svg-icon-2hx svg-icon-danger me-3">--</span>
                                <div class="d-flex flex-column">
                                    <span>Email Tidak ditemukan, Silahkan Daftar Terlebih dahulu</span>
                                </div>
                            </div>
                        </div>

                        <input class="mt-5 form-control bg-transparent" type="email" placeholder="Masukan Email" name="email-reset-password"/>
                    </div>
                    <div class="d-grid">
                        <button type="button" id="btn-send-email-password" class="btn btn-success">
                            <span class="indicator-label">Kirim</span>
                        </button>
                    </div>
                </div>

                <div class="modal-body text-center" style="padding:40px;" id="email-reset-otp">
                    <div class="mb-5">
                        <div class="mt-5 text-weight-700 fs-20" style="font-weight: bold;">Masukan OTP</div>
                        <div class="mt-5 text-weight-400 fs-16">Masukan OTP yang anda terima di email anda.</div>
                        
                        <div class="pincode-input-otp-email"></div>
                    </div>
                </div>

                <div class="modal-body text-center" style="padding:40px;" id="email-reset-password">
                    <div id="email-reset-password-failed" style="display:none;">
                        <div class="mt-5 alert alert-message alert-danger d-flex align-items-center">
                            <span class="svg-icon svg-icon-2hx svg-icon-danger me-3">--</span>
                            <div class="d-flex flex-column">
                                <span>Email Tidak ditemukan, Silahkan Daftar Terlebih dahulu</span>
                            </div>
                        </div>
                    </div>

                    <div class="fv-row mb-8">
                        <input type="password" placeholder="Kata Sandi Baru" name="password_new" class="form-control bg-transparent" required/>
                    </div>
                    <div class="fv-row mb-8">
                        <input type="password" placeholder="Ulangi Kata Sandi Baru" name="password_confirm" class="form-control bg-transparent" required/>
                    </div>
                </div>

                <div class="modal-body text-center" style="padding:40px; display:none;" id="email-reset-success">
                    <img src="{{ asset('assets-web/img/icon/icon-success.png') }}" alt="{{ asset('assets-web/img/icon/icon-success.png') }}">
                    <div>
                        <div class="mt-5 text-weight-700 fs-20" style="font-weight: bold;">Password berhasil Diubah!</div>
                        <div class="mt-5 text-weight-400 fs-16">Anda sekarang dapat login menggunakan password yang baru</div>
                    </div>
                    <button type="button" class="btn mt-10 btn-primary text-center" data-bs-dismiss="modal" aria-label="Close" style="width:150px;">OK</button>
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

    <!-- Reset Password Start -->

        <!-- Script Function Reset Password Start -->
        <script>
            function isValidEmailAddress(emailAddress) {
                var pattern = new RegExp(/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);
                return pattern.test(emailAddress);
            }

            // reset message
            function resetPassword() {
                $('#email-reset-send-email').css("display", "block");
                $('#email-reset-send-email-failed').css("display", "none");
                $('#email-reset-otp').css("display", "none");
                $('#email-reset-password').css("display", "none");
                $('#email-reset-password-failed').css("display", "none");
                $('#email-reset-success').css("display", "none");
                $('input[name="email-reset-password"]').val('');
            }

            // failed Message
            function SendEmailFailed() {
                $('#email-reset-send-email').css("display", "block");
                $('#email-reset-send-email-failed').css("display", "block");
                $('#email-reset-otp').css("display", "none");
                $('#email-reset-password').css("display", "none");
                $('#email-reset-password-failed').css("display", "none");
                $('#email-reset-success').css("display", "none");
            }

            // form input Otp Email
            function inputOTPEmail() {
                $('#email-reset-send-email').css("display", "none");
                $('#email-reset-send-email-failed').css("display", "none");
                $('#email-reset-otp').css("display", "block");
                $('#email-reset-password').css("display", "none");
                $('#email-reset-password-failed').css("display", "none");
                $('#email-reset-success').css("display", "none");
            }

            // form input New password
            function inputPassword() {
                $('#email-reset-send-email').css("display", "none");
                $('#email-reset-send-email-failed').css("display", "none");
                $('#email-reset-otp').css("display", "none");
                $('#email-reset-password').css("display", "block");
                $('#email-reset-password-failed').css("display", "none");
                $('#email-reset-success').css("display", "none");
                $('input[name="password_new"]').val('');
                $('input[name="password_confirm"]').val('');
            }

            // form input New password
            function inputPasswordFailed() {
                $('#email-reset-send-email').css("display", "none");
                $('#email-reset-send-email-failed').css("display", "none");
                $('#email-reset-otp').css("display", "none");
                $('#email-reset-password').css("display", "block");
                $('#email-reset-password-failed').css("display", "block");
                $('#email-reset-success').css("display", "none");
                $('input[name="password_new"]').val('');
                $('input[name="password_confirm"]').val('');
            }

            // Success Message
            function responseSuccess() {
                $('#email-reset-send-email').css("display", "none");
                $('#email-reset-send-email-failed').css("display", "none");
                $('#email-reset-otp').css("display", "none");
                $('#email-reset-password').css("display", "none");
                $('#email-reset-password-failed').css("display", "none");
                $('#email-reset-success').css("display", "block");
                $('input[name="password_new"]').val('');
                $('input[name="password_confirm"]').val('');
            }
        </script>
        <!-- Script Function Reset Password End -->
    
    <script>
        let user_id;
        $('#reset-password').click(function () {
            resetPassword();
        });

        $('#btn-send-email-password').click(function () {
            const email = $('input[name="email-reset-password"]').val();
            if ( isValidEmailAddress(email) ) {
                $.ajax({
                    url: "{{ url('/reset-password/send-email') }}",
                    type: 'POST',
                    data: {
                        "_token": "{{ csrf_token() }}",
                        'email' : email
                    },
                    dataType: "JSON",
                    success: function(data) {
                        if ( data.status == '1' ) {
                            return inputOTPEmail();
                        } else {
                            return SendEmailFailed();
                        }
                    }
                })
            }
        });

        new PincodeInput('.pincode-input-otp-email', {
            count: 6,
            onInput: (value) => {
                if ( value.length >= 6 ) {
                    const email = $('input[name="email-reset-password"]').val();
                    $.ajax({
                        url: "{{ url('/reset-password/validate-otp') }}",
                        type: 'POST',
                        data: {
                            "_token": "{{ csrf_token() }}",
                            "email" : email,
                            "otp" : value
                        },
                        dataType: "JSON",
                        success: function(data) {
                            if ( data.status == 1 ) {
                                inputPassword()
                                console.log(data, 'ini data user');
                            } else {
                                $('.pincode-input.pincode-input--filled').css('border', '1px solid red');
                            }
                            return false;
                        }
                    });
                }
            }
        });

        $('#btn-reset-password').click(function () {
            const password_new = $('input[name="password_new"]').val();
            const password_confirm = $('input[name="password_confirm"]').val();

            $.ajax({
                url: "{{ url('/reset-password/update-password') }}",
                type: 'POST',
                data: {
                    "_token": "{{ csrf_token() }}",
                    "password_new" : password_new,
                    "password_confirm" : password_confirm,
                    "user_id" : user_id
                },
                dataType: "JSON",
                success: function(data) {
                    if ( data.status == '1' ) {
                        return responseSuccess();
                    } else {
                        return inputPasswordFailed();
                    }
                }
            })
        });
    </script>
    <!-- Reset Password End -->
@endpush