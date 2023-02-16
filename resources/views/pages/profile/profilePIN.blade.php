@extends('layouts.master')

@section('content')
    <div class="container-fluid py-5 mb-8">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    @include('pages.profile.partials.sidebar')
                </div>
                <div class="col-md-9">
                    <div class="font-normal-700 fs-20">
                        Atur Pin
                    </div>
                    <div class="row mt-5">
                        @if ( empty($user['pin_number']) )
                            <div class="col-md-6">
                                <a href="#" class="card card-bordered" id="buat-pin" data-bs-toggle="modal" data-bs-target="#modal-buat-pin">
                                    <div class="card-body text-dark">
                                        <div class="font-normal-700 fs-14">Buat Pin Baru</div>
                                        <div class="font-normal-400 fs-12 mt-3">
                                            Anda dapat membuat Pin untuk membuat transaksi Anda lebih aman!
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @elseif ( !empty($user['pin_number']) && !empty($user['email']) )
                            <div class="col-md-6">
                                <a href="#" class="card card-bordered" id="lupa-pin" data-bs-toggle="modal" data-bs-target="#modal-lupa-pin">
                                    <div class="card-body text-dark">
                                        <div class="font-normal-700 fs-14">Lupa Pin</div>
                                        <div class="font-normal-400 fs-12 mt-3">
                                            Jangan khawatir, Anda dapat mengubah Pin Anda dengan mudah.
                                        </div>
                                    </div>
                                </a>
                            </div>
                         @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- modal Buat Pin -->
    <div class="modal fade" tabindex="-1" id="modal-buat-pin">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <!-- Modal Form Input -->
                <div class="modal-body text-center" style="padding:40px;" id="buat-pin-modal">
                    <img src="{{ asset('assets-web/img/icon/lupa-password.png') }}" alt="{{ asset('assets-web/img/icon/lupa-password.png') }}">

                    <form action="#" id="form-new-pin">
                        <div class="mb-5">
                            <div class="mt-5 text-weight-700 fs-20" style="font-weight: bold;">Buat Pin</div>
                            <div class="mt-5 text-weight-400 fs-16">Buatlah PIN baru yang menurut Anda mudah untuk diingat dan sulit untuk ditebak</div>

                            <div id="error-new-pin">
                                <div class="mt-5 alert alert-message alert-danger d-flex align-items-center">
                                    <span class="svg-icon svg-icon-2hx svg-icon-danger me-3">--</span>
                                    <div class="d-flex flex-column">
                                        <span id="message-error-new-pin"></span>
                                    </div>
                                </div>
                            </div>

                            <div class="fv-row mb-5 mt-8">
                                <input type="number" placeholder="Masukan PIN Baru" name="pin_new" class="form-control bg-transparent"/>
                            </div>
                            <div class="fv-row mb-5">
                                <input type="number" placeholder="Ulangi PIN Baru" name="pin_confirm" class="form-control bg-transparent"/>
                            </div>
                        </div>

                        <div class="d-grid">
                            <button type="button" id="btn-buat-pin" class="btn btn-success">
                                <span class="indicator-label">Kirim</span>
                            </button>
                        </div>
                    </form>
                </div>

                <!-- Modal Success Form Input -->
                <div class="modal-body text-center" style="padding:40px; display:none;" id="success-new-pin">
                    <img src="{{ asset('assets-web/img/icon/icon-success.png') }}" alt="{{ asset('assets-web/img/icon/icon-success.png') }}">
                    <div class="mt-5 text-weight-700 fs-20" style="font-weight: bold;">Pin berhasil diubah</div>
                </div>
            </div>
        </div>
    </div>

    <!-- modal Lupa Pin -->
    <div class="modal fade" tabindex="-1" id="modal-lupa-pin">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <!-- Modal Input PIN -->
                <div class="modal-body text-center" style="padding:40px;" id="pin-modal">
                    <img src="{{ asset('assets-web/img/icon/lupa-password.png') }}" alt="{{ asset('assets-web/img/icon/lupa-password.png') }}">
                    <div class="mb-5">
                        <div class="mt-5 text-weight-700 fs-20" style="font-weight: bold;">Masukan Pin Sekarang</div>
                    </div>
                    <div class="fv-row mb-8">
                        <div class="pincode-input-pin"></div>
                    </div>

                    @if( !empty($user['email']) )
                        <button class="btn text-weight-400 fs-16" id="forgot-pin">
                            Lupa PIN ?
                        </button>
                    @endif
                </div>

                <!-- Modal send EMAIl -->
                <div class="modal-body text-center" style="padding:40px; display:none;" id="send-email-modal">
                    <img src="{{ asset('assets-web/img/icon/lupa-password.png') }}" alt="{{ asset('assets-web/img/icon/lupa-password.png') }}">

                    <div id="error-send-email">
                        <div class="mt-5 alert alert-message alert-danger d-flex align-items-center">
                            <span class="svg-icon svg-icon-2hx svg-icon-danger me-3">--</span>
                            <div class="d-flex flex-column">
                                <span id="message-error-send-email"></span>
                            </div>
                        </div>
                    </div>

                    <div class="fv-row mb-5 mt-8">
                        <input type="email" placeholder="Masukan Email" name="email" class="form-control bg-transparent"/>
                    </div>
                    <div class="d-grid">
                        <button type="button" id="btn-send-email" class="btn btn-success">
                            <span class="indicator-label">Lanjutkan</span>
                        </button>
                    </div>
                </div>

                <!-- Modal otp Email -->
                <div class="modal-body text-center" style="padding:40px; display:none;" id="otp-email-modal">
                    <img src="{{ asset('assets-web/img/icon/lupa-password.png') }}" alt="{{ asset('assets-web/img/icon/lupa-password.png') }}">

                    <div class="mt-5 text-weight-700 fs-20" style="font-weight: bold;">Verifikasi Email OTP Anda</div>
                    <div class="mt-5 text-weight-400 fs-16">Kami Telah Mengirimkan OTP ke email Anda. Jangan Berikan kode verifikasi ke siapa pun</div>

                    <div class="fv-row mb-5 mt-8">
                        <div class="pincode-input-otp-email"></div>
                    </div>
                </div>

                <!-- Modal Form Input -->
                <div class="modal-body text-center" style="padding:40px; display:none;" id="reset-pin-modal">
                    <img src="{{ asset('assets-web/img/icon/lupa-password.png') }}" alt="{{ asset('assets-web/img/icon/lupa-password.png') }}">

                    <form action="#" id="form-reset-pin">
                        <div class="mb-5">
                            <div class="mt-5 text-weight-700 fs-20" style="font-weight: bold;">Buat Pin</div>
                            <div class="mt-5 text-weight-400 fs-16">Buatlah PIN baru yang menurut Anda mudah untuk diingat dan sulit untuk ditebak</div>

                            <div id="error-reset-pin">
                                <div class="mt-5 alert alert-message alert-danger d-flex align-items-center">
                                    <span class="svg-icon svg-icon-2hx svg-icon-danger me-3">--</span>
                                    <div class="d-flex flex-column">
                                        <span id="message-error-reset-pin"></span>
                                    </div>
                                </div>
                            </div>

                            <div class="fv-row mb-5 mt-8">
                                <input type="number" placeholder="Masukan PIN Baru" name="pin_new" class="form-control bg-transparent"/>
                            </div>
                            <div class="fv-row mb-5">
                                <input type="number" placeholder="Ulangi PIN Baru" name="pin_confirm" class="form-control bg-transparent"/>
                            </div>
                        </div>

                        <div class="d-grid">
                            <button type="button" id="btn-reset-pin" class="btn btn-success">
                                <span class="indicator-label">Kirim</span>
                            </button>
                        </div>
                    </form>
                </div>

                <!-- Modal Success Form Reset -->
                <div class="modal-body text-center" style="padding:40px; display:none;" id="success-reset-pin">
                    <img src="{{ asset('assets-web/img/icon/icon-success.png') }}" alt="{{ asset('assets-web/img/icon/icon-success.png') }}">
                    <div class="mt-5 text-weight-700 fs-20" style="font-weight: bold;">Pin berhasil diubah</div>
                </div>

            </div>
        </div>
    </div>
@endsection

@push('page_js')
    <!-- Create NEW PIN -->
    <script>
        function inputNewPIN() {
            $('#buat-pin-modal').css("display", "block");
            $('#success-new-pin').css("display", "none");
            $('#error-new-pin').css("display", "none");
            $('input').val('');
        }
        function successNewPIN() {
            $('#buat-pin-modal').css("display", "none");
            $('#success-new-pin').css("display", "block");
            $('#error-new-pin').css("display", "none");
        }
        function errorNewPIN() {
            $('#buat-pin-modal').css("display", "block");
            $('#success-new-pin').css("display", "none");
            $('#error-new-pin').css("display", "block");
        }

        $('#buat-pin').click(function() {
            inputNewPIN();
        });
        $('#btn-buat-pin').click(function(){
            var formInput = {};
            var a = $('#form-new-pin').serializeArray();
            $.each(a, function() {
                if (formInput[this.name]) {
                    if (!formInput[this.name].push) {
                        formInput[this.name] = [formInput[this.name]];
                    }
                    formInput[this.name].push(this.value || '');
                } else {
                    formInput[this.name] = this.value || '';
                }
            });
            $.ajax({
                url: "{{ url('/profile/new-pin') }}",
                type: 'PATCH',
                data: {
                    "_token": "{{ csrf_token() }}",
                    ...formInput
                },
                dataType: "JSON",
                success: function(data) {
                    if ( data.status == '1' ) {
                        successNewPIN();
                        window.location = "{{ url('/profile/pin') }}";
                    } else {
                        errorNewPIN();
                        $('#message-error-new-pin').html(data.message)
                        return false
                    }
                }
            });
        });
    </script>

    <!-- Update PIN -->
    <script>
        function inputPIN() {
            $('#otp-email-modal').css("display", "none");
            $('#pin-modal').css("display", "block");
            $('#reset-pin-modal').css("display", "none");
            $('#success-reset-pin').css("display", "none");
            $('#error-reset-pin').css("display", "none");
            $('#send-email-modal').css("display", "none");
            $('input').val('');
        }
        function forgotPIN() {
            $('#otp-email-modal').css("display", "none");
            $('#error-send-email').css("display", "none");
            $('#send-email-modal').css("display", "block");
            $('#pin-modal').css("display", "none");
            $('#reset-pin-modal').css("display", "none");
            $('#success-reset-pin').css("display", "none");
            $('input').val('');
        }
        function errorForgotPIN() {
            $('#otp-email-modal').css("display", "none");
            $('#error-send-email').css("display", "block");
            $('#send-email-modal').css("display", "block");
            $('#pin-modal').css("display", "none");
            $('#reset-pin-modal').css("display", "none");
            $('#success-reset-pin').css("display", "none");
            $('input').val('');
        }
        function inputOTPEmail() {
            $('#otp-email-modal').css("display", "block");
            $('#send-email-modal').css("display", "none");
            $('#pin-modal').css("display", "none");
            $('#reset-pin-modal').css("display", "none");
            $('#success-reset-pin').css("display", "none");
        }

        function inputResetPIN() {
            $('#otp-email-modal').css("display", "none");
            $('#pin-modal').css("display", "none");
            $('#reset-pin-modal').css("display", "block");
            $('#success-reset-pin').css("display", "none");
            $('#error-reset-pin').css("display", "none");
            $('#send-email-modal').css("display", "none");
            $('input').val('');
        }
        function successResetPIN() {
            $('#otp-email-modal').css("display", "none");
            $('#pin-modal').css("display", "none");
            $('#reset-pin-modal').css("display", "none");
            $('#success-reset-pin').css("display", "block");
            $('#error-reset-pin').css("display", "none");
            $('#send-email-modal').css("display", "none");
            $('input').val('');
        }
        function errorResetPIN() {
            $('#otp-email-modal').css("display", "none");
            $('#pin-modal').css("display", "none");
            $('#reset-pin-modal').css("display", "block");
            $('#success-reset-pin').css("display", "none");
            $('#error-reset-pin').css("display", "block");
            $('#send-email-modal').css("display", "none");
            $('input').val('');
        }

        $('#lupa-pin').click(function(){
            inputPIN();
        });

        new PincodeInput('.pincode-input-pin', {
            count: 6,
            onInput: (value) => {
                if ( value.length >= 6 ) {
                    $.ajax({
                        url: "{{ url('/validate-otp') }}",
                        type: 'POST',
                        data: {
                            "_token": "{{ csrf_token() }}",
                            'pin' : value
                        },
                        dataType: "JSON",
                        success: function(data) {
                            if ( data.status == '1' ) {
                                inputResetPIN();
                                return false;
                            } else {
                                $('.pincode-input.pincode-input--filled').css('border', '1px solid red');
                                return false;
                            }
                        }
                    })
                }
            }
        })

        new PincodeInput('.pincode-input-otp-email', {
            count: 6,
            onInput: (value) => {
                if ( value.length >= 6 ) {
                    const email = $('input[name="email"]').val();
                    $.ajax({
                        url: "{{ url('/validate-otp/email') }}",
                        type: 'POST',
                        data: {
                            "_token": "{{ csrf_token() }}",
                            "email": email,
                            'otp' : value
                        },
                        dataType: "JSON",
                        success: function(data) {
                            if ( data.status == '1' ) {
                                inputResetPIN();
                                return false;
                            } else {
                                $('.pincode-input.pincode-input--filled').css('border', '1px solid red');
                                return false;
                            }
                        }
                    })
                }
            }
        })

        $('#forgot-pin').click(function(){
            forgotPIN();
        });

        $('#btn-send-email').click(function(){
            const email = $('input[name="email"]').val();
            $.ajax({
                url: "{{ url('/validate-otp/send-email') }}",
                type: 'POST',
                data: {
                    "_token": "{{ csrf_token() }}",
                    'email' : email
                },
                dataType: "JSON",
                success: function(data) {
                    if ( data.status == '1' ) {
                        inputOTPEmail();
                    } else {
                        errorForgotPIN();
                        $('#message-error-send-email').html(data.message)
                    }
                    return false;
                }
            })
        });

        $('#btn-reset-pin').click(function(){
            var formInput = {};
            var a = $('#form-reset-pin').serializeArray();
            $.each(a, function() {
                if (formInput[this.name]) {
                    if (!formInput[this.name].push) {
                        formInput[this.name] = [formInput[this.name]];
                    }
                    formInput[this.name].push(this.value || '');
                } else {
                    formInput[this.name] = this.value || '';
                }
            });
            $.ajax({
                url: "{{ url('/profile/new-pin') }}",
                type: 'PATCH',
                data: {
                    "_token": "{{ csrf_token() }}",
                    ...formInput
                },
                dataType: "JSON",
                success: function(data) {
                    if ( data.status == '1' ) {
                        successResetPIN();
                        window.location = "{{ url('/profile/pin') }}"
                    } else {
                        errorResetPIN();
                        $('#message-error-reset-pin').html(data.message)
                        return false
                    }
                }
            });
        });

    </script>
@endpush
