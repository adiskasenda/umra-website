@extends('layouts.master')

@section('content')
    <div class="container-fluid py-5 mb-8">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    @include('pages.profile.partials.sidebar')
                </div>
                <div class="col-md-9">
                    <a href="{{ url('/profile') }}" class="font-normal-700 fs-16 text-dark">
                        <i class="fa fa-arrow-left" style="color: black" aria-hidden="true"></i> Edit Profil
                    </a>
                    
                    <div class="mt-5">
                        @include('layouts.partials.message')
                    </div>

                    <div class="card card-bordered mt-5" style="width: 100%;">
                        <form class="form" method="POST" action="{{ url('/profile') }}">
                            @method('patch')
                            @csrf
                            <div class="card-body">
                                <div class="row">
                                    <div class="font-normal-600 fs-14 mb-4">
                                        Foto Profil
                                    </div>
                                    <div class="symbol symbol-circle me-5">

                                        <div class="image-input image-input-circle" data-kt-image-input="true" style="background-image: url('{{ Helpers::avatarDefault() }}')">
                                            <div class="image-input-wrapper w-125px h-125px img-avatar" style="background-image: url('{{ $user['url_photo'] }}')"></div>

                                            <label class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                                                data-kt-image-input-action="change"
                                                data-bs-toggle="tooltip"
                                                data-bs-dismiss="click"
                                                title="Change avatar">
                                                    <i class="bi bi-pencil-fill fs-7"></i>
                                                    <input type="file" name="avatar" accept=".png, .jpg, .jpeg" />
                                                    <input type="hidden" name="avatar_old" value="{{ $user['url_photo'] }}"/>
                                            </label>

                                            <span class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                                                data-kt-image-input-action="cancel"
                                                data-bs-toggle="tooltip"
                                                data-bs-dismiss="click"
                                                title="Cancel avatar">
                                                    <i class="bi bi-x fs-2"></i>
                                            </span>
                                        </div>

                                    </div>
                                </div>
                                <div class="row mt-5">
                                    <div class="col-6">
                                        <div class="font-normal-600 fs-14 mb-3">Informasi Pemilik Akun</div>

                                            <div class="form-floating">
                                                <input type="text" class="form-control" placeholder="Nama Depan" name="firstname" value="{{ $user['firstname'] }}"/>
                                                <label for="floatingInputValue">Nama Depan</label>
                                            </div>

                                            <div class="form-floating mt-3">
                                                <input type="text" class="form-control" placeholder="Nama Belakang" name="lastname" value="{{ $user['lastname'] }}"/>
                                                <label for="floatingInputValue">Nama Belakang</label>
                                            </div>

                                            <div class="form-floating mt-3">
                                                <input type="text" id="birthday" class="form-control" placeholder="Tanggal Lahir" name="birthday" value="{{ date('d-m-Y',strtotime($user['birthday'])) }}"/>
                                                <label for="floatingInputValue">Tanggal Lahir</label>
                                            </div>
                                            
                                            <label for="jenis_kelamin" class="mt-3">Jenis Kelamin</label>
                                            <div class="row">
                                                <div class="col-4">
                                                    <div class="form-check form-check-custom form-check-solid">
                                                        <input class="form-check-input" type="radio" value="1" name="gender" id="laki-laki" checked/>
                                                        <label class="form-check-label" for="laki-laki">
                                                            Laki Laki
                                                        </label>
                                                    </div>
                                                </div>

                                                <div class="col-4">
                                                    <label class="form-check form-check-custom form-check-solid">
                                                        <input class="form-check-input" type="radio" value="0"  name="gender" id="perempuan"/>
                                                        <span class="form-check-label"  for="perempuan">
                                                            Perempuan
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>

                                            <label for="alamat" class="mt-3">Alamat</label>
                                            <textarea class="form-control" placeholder="Masukan Alamat" name="address" id="floatingTextarea2" style="height: 100px" maxlength="250">{{ $user['address'] }}</textarea>

                                    </div>
                                    <div class="col-6">
                                        <div class="font-normal-600 fs-14">Email dan Nomor Ponsel</div>

                                        <label for="email" class="font-normal-400 fs-12 mt-3">Email</label>
                                        <div class="card card-bordered" style="background-color: #F8FCFC">
                                            <div class="card-body p-5">
                                                <div class="row">
                                                    <div class="col-10">
                                                        <div class="font-normal-400 fs-12">
                                                            {{ $user['email'] }}
                                                        </div>
                                                        <div class="font-normal-400 fs-12 mt-2">
                                                            <i class="fa-solid fa-circle-check" style="margin-right: 5px; color: green;"></i>
                                                            Sudah diverifikasi
                                                        </div>
                                                    </div>
                                                    <div class="col-2 mt-2">
                                                        <a href="" class="font-normal-500 fs-12 text-green" data-bs-toggle="modal" data-bs-target="#modal-ubah-email">Ubah</a>
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
                                                            {{ $user['phone'] }}
                                                        </div>
                                                        <div class="font-normal-400 fs-12 mt-2">
                                                            <i class="fa-solid fa-circle-check" style="margin-right: 5px; color: green;"></i>
                                                            Sudah diverifikasi
                                                        </div>
                                                    </div>
                                                    <div class="col-2 mt-2">
                                                        <a href="" class="font-normal-500 fs-12 text-green" data-bs-toggle="modal" data-bs-target="#modal-ubah-telepon">Ubah</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-right">
                                <a href="{{ url('/profile') }}" class="btn text-green">
                                    <span class="indicator-label">Batal</span>
                                </a>
                                <button type="submit" id="editProfile" class="btn btn-success">
                                    <span class="indicator-label">Simpan</span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    <!-- modal Ubah Email -->
    <div class="modal fade" tabindex="-1" id="modal-ubah-email">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                {{-- begin:Input PIN --}}
                <div class="modal-body text-center" style="padding:40px;" id="input-pin">

                    <img src="{{ asset('assets-web/img/icon/lupa-password.png') }}" alt="{{ asset('assets-web/img/icon/lupa-password.png') }}">

                    <div class="mb-5">
                        <div class="text-weight-700 fs-20 mt-5 mb-5" style="font-weight: bold;">Masukkan PIN</div>
                        <div class="pincode-input-container"></div>
                        <div class="mt-5 text-weight-400 fs-16">Lupa PIN anda?</div>
                        <a href="" class="font-normal-500 fs-12 text-green" id="gunakan-sandi">Gunakan Kata Sandi</a>
                    </div>
                    <div class="d-grid">
                        <button type="button" id="btn-pin-lanjutkan" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modal-input-email">
                            <span class="indicator-label">Lanjutkan</span>
                        </button>
                    </div>
                </div>
                {{-- end:Input PIN --}}

                {{-- begin:Input Password --}}
                <div class="modal-body text-center" style="padding:40px; display:none;" id="input-password">

                    <img src="{{ asset('assets-web/img/icon/lupa-password.png') }}" alt="{{ asset('assets-web/img/icon/lupa-password.png') }}">

                    <div class="mb-5">
                        <div class="text-weight-700 fs-20 mt-5 mb-5" style="font-weight: bold;">Masukkan Kata Sandi Anda</div>
                        <div class="fv-row mb-8">
                            <input type="password" placeholder="Masukkan password anda" name="password" class="form-control bg-transparent" required/>
                        </div>
                    </div>
                    <div class="d-grid">
                        <button type="button" id="btn-password-lanjutkan" class="btn btn-success">
                            <span class="indicator-label">Lanjutkan</span>
                        </button>
                    </div>
                </div>
                {{-- end:Input Password --}}

                {{-- begin:Input Email --}}
                <div class="modal-body text-center" style="padding:40px; display:none;" id="input-email">

                    <img src="{{ asset('assets-web/img/icon/lupa-password.png') }}" alt="{{ asset('assets-web/img/icon/lupa-password.png') }}">

                    <div class="mb-5">
                        <div class="text-weight-700 fs-20 mt-5 mb-5" style="font-weight: bold;">Tambahkan Email Anda</div>
                        <div class="text-weight-400 fs-16 mt-5 mb-5">Pastikan email anda aktif untuk menerima tautan dari kami.</div>
                        <div class="fv-row mb-8">
                            <input type="email" placeholder="Masukkan email anda" name="email" class="form-control bg-transparent" required/>
                        </div>
                    </div>
                    <div class="d-grid">
                        <button type="button" id="btn-kirim-email" class="btn btn-success">
                            <span class="indicator-label">Kirim</span>
                        </button>
                    </div>
                </div>
                {{-- end:Input Email --}}

                {{-- begin:Terkirim --}}
                <div class="modal-body text-center" style="padding:40px; display:none;" id="email-terkirim">
                    <img src="{{ asset('assets-web/img/icon/icon-success.png') }}" alt="{{ asset('assets-web/img/icon/icon-success.png') }}">
                    <div>
                        <div class="mt-5 text-weight-700 fs-20" style="font-weight: bold;">Email berhasil terkirim!</div>
                        <div class="mt-5 text-weight-400 fs-16">Kami telah mengirimkan tautan ke email <strong id="recipient-email">Anantasyaaluia@gmail.com</strong>, klik tautan tersebut untuk melanjutkan mengubah kata sandi</div>
                    </div>
                    <button type="button" class="btn mt-10 btn-primary text-center" data-bs-dismiss="modal" aria-label="Close" style="width:150px;">OK</button>
                </div>
                {{-- end:Terkirim --}}
                <div class="modal-body text-center" style="padding:40px; display:none;" id="email-reset-load">
                    @include('layouts.partials.loadingResponse')
                </div>
            </div>
        </div>
    </div>

    <!-- modal Ubah Telepon -->
    <div class="modal fade" tabindex="-1" id="modal-ubah-telepon">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <div class="modal-body text-center" style="padding:40px;" id="input-telepon">

                    <img src="{{ asset('assets-web/img/icon/lupa-password.png') }}" alt="{{ asset('assets-web/img/icon/lupa-password.png') }}">

                    <div class="mb-5">
                        <div class="text-weight-700 fs-20 mt-5 mb-5" style="font-weight: bold;">Tambahkan Nomor Telepon Anda</div>
                        <div class="text-weight-400 fs-16 mt-5 mb-5">Pastikan nomor telepon anda terhubung dengan WhatsApp untuk menerima kode OTP dari kami</div>
                        <div class="fv-row mb-8">
                            <input type="text" placeholder="Masukkan nomor telepon whatsapp anda" name="telepon" class="form-control bg-transparent" required/>
                        </div>
                    </div>
                    <div class="d-grid">
                        <button type="button" id="btn-kirim-telepon" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modal-input-email">
                            <span class="indicator-label">Kirim</span>
                        </button>
                    </div>
                </div>



                <div class="modal-body text-center" style="padding:40px;" id="input-pin">

                    <img src="{{ asset('assets-web/img/icon/lupa-password.png') }}" alt="{{ asset('assets-web/img/icon/lupa-password.png') }}">

                    <div class="mb-5">
                        <div class="text-weight-700 fs-20 mt-5 mb-5" style="font-weight: bold;">Verifikasi Nomor Telepon Anda</div>
                        <div class="text-weight-400 fs-16 mt-5 mb-5">Kami telah mengirimkan kode OTP ke nomor WhatsApp <strong>34242111</strong>, Jangan berikan kode verifikasi ke siapa pun.</div>
                        <div class="pincode-input-container"></div>
                        <div class="text-weight-400 fs-16 mt-5 mb-5">Kirim ulang kode verifikasi baru (00:30)</div>
                        <div class="text-weight-400 fs-16 mt-5 mb-5">Bukan Nomor Anda? Ubah</div>
                    </div>
                </div>


                <div class="modal-body text-center" style="padding:40px; display:none;" id="email-terkirim">
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
@endsection


@push('page_js')
    <script>
        $("#birthday").flatpickr({
            dateFormat: "d-m-Y",
        });

        // Set Gender
        if ( "{{ old('gender') }}" ) {
            $(`input[name=gender][value="{{ old('gender') }}"]`).prop('checked',true);
        } else {
            $(`input[name=gender][value={{ $user['gender'] }}]`).prop('checked',true);
        }
    </script>
    
    <!-- Check PIN -->
    <script>
        new PincodeInput('.pincode-input-container', {
            count: 6,
            onInput: (value) => {
                console.log(value.length)
                if ( value.length >= 6 ) {
                    $.ajax({
                        url: "{{ url('/login-phone/validate-otp') }}",
                        type: 'POST',
                        data: {
                            "_token": "{{ csrf_token() }}",
                            'otp' : value
                        },
                        dataType: "JSON",
                        success: function(data) {
                            if ( data.status == '1' ) {
                                // return window.location.href = "{{ url('/') }}"
                                $("#modalGantiPassword").modal('show');
                            } else {
                                // border-color: red;
                                return false;
                            }
                        }
                    })
                }
            }
        })
    </script>

    <!-- btn Edit Email  -->
    <script>
        function isValidEmailAddress(emailAddress) {
            var pattern = new RegExp(/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);
            return pattern.test(emailAddress);
        }

        // input password
        function inputPassword() {
            $('#input-pin').css("display", "none");
            $('#input-password').css("display", "block");
            $('#input-email').css("display", "none");
            $('#email-terkirim').css("display", "none");
        }

        // input email
        function inputEmail() {
            $('#input-pin').css("display", "none");
            $('#input-password').css("display", "none");
            $('#input-email').css("display", "block");
            $('#email-terkirim').css("display", "none");
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
            $('#input-pin').css("display", "none");
            $('#input-password').css("display", "none");
            $('#input-email').css("display", "none");
            $('#email-terkirim').css("display", "block");
        }
        
        $('#gunakan-sandi').click(function () {
            inputPassword();
        });

        $('#btn-pin-lanjutkan').click(function () {
            inputEmail();
        });

        $('#btn-password-lanjutkan').click(function () {
            inputEmail();
        });

        $('#btn-kirim-email').click(function () {
            const email = $('input[name="email"]').val();

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
    </script>

    <!-- btn Edit Phone -->
    <script>

    </script>
@endpush