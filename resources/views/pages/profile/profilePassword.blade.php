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
                        Kata Sandi
                    </div>
                    <div class="row">
                        <div class="col-md-8">
                            <form class="form w-100" method="POST" action="{{ url('/login-email') }}">
                                @csrf
                                <div class="fv-row mb-8 mt-8">
                                    <input type="password" placeholder="Kata Sandi Sekarang" name="password_now" class="form-control bg-transparent" required/>
                                </div>
                                <div class="fv-row mb-8">
                                    <input type="password" placeholder="Kata Sandi Baru" name="password_new" class="form-control bg-transparent" required/>
                                </div>
                                <div class="fv-row mb-8">
                                    <input type="password" placeholder="Ulangi Kata Sandi Baru" name="password_confirm" class="form-control bg-transparent" required/>
                                </div>
                                <div class="row mt-5">
                                    <div class="col-6 mt-2">
                                        <a href="#" class="link-primary" id="reset-password" style="color: var(--green) !important;" data-bs-toggle="modal" data-bs-target="#modal-reset-password">
                                            Lupa Kata Sandi ?
                                        </a>
                                    </div>
                                    <div class="col-6 text-right">
                                        <button type="button" class="btn btn-success" id="btn-ganti-password">
                                            Ganti Kata Sandi
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- modal send email reset password -->
            <div class="modal fade" tabindex="-1" id="modal-reset-password">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-body text-center" style="padding:40px;" id="email-reset-failed">
                            <img src="{{ asset('assets-web/img/icon/lupa-password.png') }}" alt="{{ asset('assets-web/img/icon/lupa-password.png') }}">

                            <div class="mb-5">
                                <div class="mt-5 text-weight-700 fs-20" style="font-weight: bold;">Lupa kata sandi?</div>
                                <div class="mt-5 text-weight-400 fs-16">Jangan khawatir. Tuliskan email Anda untuk membuat kata sandi baru.</div>

                                <div id="user-not-found" style="display:none;">
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
                                <button type="button" id="btn-reset-password" class="btn btn-success">
                                    <span class="indicator-label">Kirim</span>
                                </button>
                            </div>
                        </div>
                        <div class="modal-body text-center" style="padding:40px; display:none;" id="email-reset-success">
                            <img src="{{ asset('assets-web/img/icon/icon-success.png') }}" alt="{{ asset('assets-web/img/icon/icon-success.png') }}">
                            <div>
                                <div class="mt-5 text-weight-700 fs-20" style="font-weight: bold;">Email berhasil terkirim!</div>
                                <div class="mt-5 text-weight-400 fs-16">Kami telah mengirimkan tautan ke email <strong id="recipient-email">Anantasyaaluia@gmail.com</strong>, klik tautan tersebut untuk melanjutkan mengubah kata sandi</div>
                            </div>
                            <button type="button" class="btn mt-10 btn-primary text-center" data-bs-dismiss="modal" aria-label="Close" style="width:150px;">OK</button>
                        </div>
                        <div class="modal-body text-center" style="padding:40px; display:none;" id="email-reset-load">
                            @include('layouts.partials.loadingResponse')
                        </div>
                    </div>
                </div>
            </div>

            <!-- modal ganti password -->
            <div class="modal fade" tabindex="-1" id="modal-ganti-password">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-body text-center" style="padding:40px;" id="email-reset-failed">
                            <img src="{{ asset('assets-web/img/icon/icon-success.png') }}" alt="{{ asset('assets-web/img/icon/icon-success.png') }}">

                            <div class="mb-5">
                                <div class="mt-5 text-weight-700 fs-20" style="font-weight: bold;">Kata Sandi berhasil diganti</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('page_js')
    <script>
        $('#reset-password').click(function () {
            resetMessage();
        });

        $('#btn-reset-password').click(function () {
            const email = $('input[name="email-reset-password"]').val();
            console.log('ajax load',  email);
            console.log(isValidEmailAddress(email));

            if ( isValidEmailAddress(email) ) {
                load();

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
                            return responseSuccess();
                        } else {
                            return responseFailed();
                        }
                    }
                })
            }
        });

        $('#btn-ganti-password').click(function () {
            const password_new = $('input[name="password_new"]').val();
            const password_confirm = $('input[name="password_confirm"]').val();
            console.log('ajax load',  password_new);
            console.log('ajax load',  password_confirm);

            $.ajax({
                url: "{{ url('/profile/update-password') }}",
                type: 'POST',
                data: {
                    "_token": "{{ csrf_token() }}",
                    'password_new' : password_new,
                    'password_confirm' : password_confirm
                },
                dataType: "JSON",
                success: function(data) {
                    $("#modalGantiPassword").modal('show');
                }
            })
        });

        function isValidEmailAddress(emailAddress) {
            var pattern = new RegExp(/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);
            return pattern.test(emailAddress);
        }

        // reset message
        function resetMessage() {
            $('#email-reset-failed').css("display", "block");
            $('#email-reset-load').css("display", "none");
            $('#email-reset-success').css("display", "none");
            $('#user-not-found').css("display", "none");
        }

        // load
        function load() {
            $('#email-reset-failed').css("display", "none");
            $('#email-reset-load').css("display", "none");
            $('#email-reset-success').css("display", "none");
            $('#user-not-found').css("display", "block");
        }

        // success Message
        function responseFailed() {
            $('#email-reset-failed').css("display", "block");
            $('#email-reset-load').css("display", "none");
            $('#email-reset-success').css("display", "none");
            $('#user-not-found').css("display", "block");
        }

        // failed Message
        function responseSuccess() {
            $('#email-reset-failed').css("display", "none");
            $('#email-reset-load').css("display", "none");
            $('#email-reset-success').css("display", "block");
            $('#user-not-found').css("display", "none");
        }
    </script>
@endpush

