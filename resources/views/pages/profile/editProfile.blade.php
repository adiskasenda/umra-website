@extends('layouts.master')

@section('content')
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-3 mb-8">
                    @include('pages.profile.partials.sidebar')
                </div>
                <div class="col-md-9 mb-8">
                    <a href="{{ url('/profile') }}" class="font-normal-700 fs-16 text-dark">
                        <i class="fa fa-arrow-left" style="color: black" aria-hidden="true"></i> Edit Profil
                    </a>

                    <div class="mt-5">
                        @include('layouts.partials.message')
                    </div>

                    <div class="card card-bordered mt-5" style="width: 100%;">
                        <form class="form" method="POST" action="{{ url('/profile') }}" enctype="multipart/form-data">
                            @method('patch')
                            @csrf
                            <div class="card-body">
                                <div class="row">
                                    <div class="font-normal-600 fs-14 mb-4">
                                        Foto Profil
                                    </div>
                                    <div class="symbol symbol-circle me-5">

                                        <div class="image-input image-input-circle" data-kt-image-input="true" style="background-image: url('{{ Helpers::avatarDefault() }}')">
                                            <div class="image-input-wrapper w-80px h-80px img-avatar" style="background-image: url('{{ empty($user['url_photo']) ? Helpers::avatarDefault() : $user['url_photo'] }}')"></div>

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
                                                    <div class="col-lg-8 col-md-6 col-12">
                                                        <div class="font-normal-400 fs-12 {{ $user['email'] ? '' : 'mt-3' }}">
                                                            {{ !empty($user['email']) ? $user['email'] : 'Belum Ada Email' }}
                                                        </div>
                                                        @if( !empty($user['email']) )
                                                            <div class="font-normal-400 fs-12 mt-2">
                                                                <i class="fa-solid fa-circle-check" style="margin-right: 5px; color: green;"></i>
                                                                Sudah diverifikasi
                                                            </div>
                                                        @endif
                                                    </div>
                                                    <div class="col-lg-4 col-md-6 col-12 text-center" style="margin: auto;">
                                                        <button type="button" id="update-email" class="btn font-normal-500 fs-12 text-green" data-bs-toggle="modal" data-bs-target="#modal-ubah-email">{{ !empty($user['email']) ? 'Ubah' : 'Tambahkan' }}</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <label for="no_hp" class="font-normal-400 fs-12 mt-3">Nomor Ponsel</label>
                                        <div class="card card-bordered" style="background-color: #F8FCFC">
                                            <div class="card-body p-5 font-normal-600 fs-14">
                                                <div class="row">
                                                    <div class="col-lg-8 col-md-6 col-12">
                                                        <div class="font-normal-400 fs-12 {{ $user['phone'] ? '' : 'mt-3' }}">
                                                            {{ !empty($user['phone']) ? $user['phone'] : 'Belum Ada Nomer Telepon' }}
                                                        </div>
                                                        @if( !empty($user['phone']) )
                                                            <div class="font-normal-400 fs-12 mt-2">
                                                                <i class="fa-solid fa-circle-check" style="margin-right: 5px; color: green;"></i>
                                                                Sudah diverifikasi
                                                            </div>
                                                        @endif
                                                    </div>
                                                    <div class="col-lg-4 col-md-6 col-12 text-center" style="margin: auto;">
                                                        <button type="button" id="update-phone" class="btn font-normal-500 fs-12 text-green" data-bs-toggle="modal" data-bs-target="#modal-ubah-telepon">{{ !empty($user['phone']) ? 'Ubah' : 'Tambahkan' }}</button>
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

                <!-- Modal PIN Email -->
                <div class="modal-body text-center" style="padding:40px;" id="email-modal">
                    <img src="{{ asset('assets-web/img/icon/lupa-password.png') }}" alt="{{ asset('assets-web/img/icon/lupa-password.png') }}">
                    <div class="mb-5">
                        <div class="mt-5 text-weight-700 fs-20" style="font-weight: bold;">Masukan Pin</div>
                    </div>
                    <div class="fv-row mb-8">
                        <div class="pincode-input-email"></div>
                    </div>
                    @if( !empty(Session::get('user')['email']) )
                        <a href="{{ url('/profile/pin') }}">
                            <button class="btn text-weight-400 fs-16">
                                Lupa PIN ?
                            </button>
                        </a>
                    @endif
                </div>

                <!-- Modal update Email -->
                <div class="modal-body text-center" style="padding:40px; display:none;" id="email-input-modal">
                    <img src="{{ asset('assets-web/img/icon/lupa-password.png') }}" alt="{{ asset('assets-web/img/icon/lupa-password.png') }}">
                    <div class="mb-5">
                        <div class="text-weight-700 fs-20 mt-5 mb-5" style="font-weight: bold;">Tambahkan Email Anda</div>
                        <div class="text-weight-400 fs-16 mt-5 mb-5">Pastikan email anda aktif untuk menerima tautan dari kami.</div>

                        <div id="error-update-email">
                            <div class="mt-5 alert alert-message alert-danger d-flex align-items-center">
                                <span class="svg-icon svg-icon-2hx svg-icon-danger me-3">--</span>
                                <div class="d-flex flex-column">
                                    <span id="message-error-update-email"></span>
                                </div>
                            </div>
                        </div>

                        <div class="fv-row mb-8">
                            <input type="email" placeholder="Masukkan email anda" name="email" class="form-control bg-transparent" required/>
                        </div>
                    </div>
                    <div class="d-grid">
                        <button type="button" id="btn-update-email" class="btn btn-success">
                            <span class="indicator-label">Kirim</span>
                        </button>
                    </div>
                </div>

                <!-- Modal Success Update Email -->
                <div class="modal-body text-center" style="padding:40px; display:none;" id="success-update-email">
                    <img src="{{ asset('assets-web/img/icon/icon-success.png') }}" alt="{{ asset('assets-web/img/icon/icon-success.png') }}">
                    <div class="mt-5 text-weight-700 fs-20" style="font-weight: bold;">Email berhasil diubah</div>
                </div>

            </div>
        </div>
    </div>

    <!-- modal Ubah Telepon -->
    <div class="modal fade" tabindex="-1" id="modal-ubah-telepon">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <!-- Modal PIN Phone -->
                <div class="modal-body text-center" style="padding:40px;" id="phone-modal">
                    <img src="{{ asset('assets-web/img/icon/lupa-password.png') }}" alt="{{ asset('assets-web/img/icon/lupa-password.png') }}">
                    <div class="mb-5">
                        <div class="mt-5 text-weight-700 fs-20" style="font-weight: bold;">Masukan Pin</div>
                    </div>
                    <div class="fv-row mb-8">
                        <div class="pincode-input-phone"></div>
                    </div>
                    @if( !empty(Session::get('user')['email']) )
                        <a href="{{ url('/profile/pin') }}">
                            <button class="btn text-weight-400 fs-16">
                                Lupa PIN ?
                            </button>
                        </a>
                    @endif
                </div>

                <!-- Modal update Phone -->
                <div class="modal-body text-center" style="padding:40px; display:none;" id="phone-input-modal">
                    <img src="{{ asset('assets-web/img/icon/lupa-password.png') }}" alt="{{ asset('assets-web/img/icon/lupa-password.png') }}">
                    <div class="mb-5">
                        <div class="text-weight-700 fs-20 mt-5 mb-5" style="font-weight: bold;">Tambahkan Email Anda</div>
                        <div class="text-weight-400 fs-16 mt-5 mb-5">Pastikan email anda aktif untuk menerima tautan dari kami.</div>

                        <div id="error-update-phone">
                            <div class="mt-5 alert alert-message alert-danger d-flex align-items-center">
                                <span class="svg-icon svg-icon-2hx svg-icon-danger me-3">--</span>
                                <div class="d-flex flex-column">
                                    <span id="message-error-update-phone"></span>
                                </div>
                            </div>
                        </div>

                        <div class="fv-row mb-8">
                            <input type="number" placeholder="Masukkan Nomer Telephon anda" name="phone" class="form-control bg-transparent" required/>
                        </div>
                    </div>
                    <div class="d-grid">
                        <button type="button" id="btn-update-phone" class="btn btn-success">
                            <span class="indicator-label">Kirim</span>
                        </button>
                    </div>

                </div>

                <!-- Modal Success Update Phone -->
                <div class="modal-body text-center" style="padding:40px; display:none;" id="success-update-phone">
                    <img src="{{ asset('assets-web/img/icon/icon-success.png') }}" alt="{{ asset('assets-web/img/icon/icon-success.png') }}">
                    <div class="mt-5 text-weight-700 fs-20" style="font-weight: bold;">Nomer Telephone berhasil diubah</div>
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
            $(`input[name=gender][value="{{ $user['gender'] }}"]`).prop('checked',true);
        }
    </script>

    <!-- Check PIN Email Start -->
    <script>
        function inputPINEmail() {
            $('#email-modal').css("display", "block");
            $('#email-input-modal').css("display", "none");
            $('#error-update-email').css("display", "none");
            $('#success-update-email').css("display", "none");
            $('input[name="email"]').val('');
            $('.pincode-input').val('');
        }
        function formUpdateEmail() {
            $('#email-modal').css("display", "none");
            $('#email-input-modal').css("display", "block");
            $('#error-update-email').css("display", "none");
            $('#success-update-email').css("display", "none");
            $('input[name="email"]').val('');
        }
        function errorFormUpdateEmail() {
            $('#email-modal').css("display", "none");
            $('#email-input-modal').css("display", "block");
            $('#error-update-email').css("display", "block");
            $('#success-update-email').css("display", "none");
        }
        function otpEmail() {
            // masukan Otp untuk Email
        }
        function successFormUpdateEmail() {
            $('#email-modal').css("display", "none");
            $('#email-input-modal').css("display", "none");
            $('#error-update-email').css("display", "none");
            $('#success-update-email').css("display", "block");
        }

        function isValidEmailAddress(emailAddress) {
            var pattern = new RegExp(/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);
            return pattern.test(emailAddress);
        }

        new PincodeInput('.pincode-input-email', {
            count: 6,
            onInput: (value) => {
                console.log('input pin email');
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
                                formUpdateEmail();
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
    </script>
    <script>
        $('#update-email').click(function(){
            inputPINEmail();
        });
        $('#btn-update-email').click(function () {
            const email = $('input[name="email"]').val();
            $.ajax({
                url: "{{ url('/profile/update-email') }}",
                type: 'PATCH',
                data: {
                    "_token": "{{ csrf_token() }}",
                    "email" : email
                },
                dataType: "JSON",
                success: function(data) {
                    if ( data.status == '1' ) {
                        successFormUpdateEmail();
                    } else {
                        errorFormUpdateEmail();
                        $('#message-error-update-email').html(data.message);
                    }
                }
            });
        });
    </script>
    <!-- Check PIN Email End -->

    <!-- Check PIN Phone Start -->
    <script>
        function inputPINPhone() {
            $('#phone-modal').css("display", "block");
            $('#phone-input-modal').css("display", "none");
            $('#error-update-phone').css("display", "none");
            $('#success-update-phone').css("display", "none");
            $('input[name="phone"]').val('');
            $('.pincode-input').val('');
        }
        function formUpdatePhone() {
            $('#phone-modal').css("display", "none");
            $('#phone-input-modal').css("display", "block");
            $('#error-update-phone').css("display", "none");
            $('#success-update-phone').css("display", "none");
        }
        function errorFormUpdatePhone() {
            $('#phone-modal').css("display", "none");
            $('#phone-input-modal').css("display", "block");
            $('#error-update-phone').css("display", "block");
            $('#success-update-phone').css("display", "none");
        }
        function otpPhone() {
            // masukan Otp untuk Phone Number
        }
        function successFormUpdatePhone() {
            $('#phone-modal').css("display", "none");
            $('#phone-input-modal').css("display", "none");
            $('#error-update-phone').css("display", "none");
            $('#success-update-phone').css("display", "block");
        }
        new PincodeInput('.pincode-input-phone', {
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
                                formUpdatePhone();
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
    </script>
    <script>
        $('#update-phone').click(function(){
            inputPINPhone();
        });
        $('#btn-update-phone').click(function () {
            console.log('btn-update');
            const phone = $('input[name="phone"]').val();
            $.ajax({
                url: "{{ url('/profile/update-phone') }}",
                type: 'PATCH',
                data: {
                    "_token": "{{ csrf_token() }}",
                    "phone" : phone
                },
                dataType: "JSON",
                success: function(data) {
                    if ( data.status == '1' ) {
                        successFormUpdatePhone()
                    } else {
                        errorFormUpdatePhone()
                        $('#message-error-update-phone').html(data.message)
                    }
                }
            });
        });
    </script>
@endpush
