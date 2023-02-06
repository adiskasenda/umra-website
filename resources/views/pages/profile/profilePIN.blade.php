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
                        {{-- @if ( empty($user['pin_number']) ) --}}
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
                        {{-- @elseif ( !empty($user['pin_number']) && !empty($user['email']) ) --}}
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
                        {{--  @endif --}}
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

                <!-- Modal Form Input -->
                <div class="modal-body text-center" style="padding:40px;" id="reset-pin-modal">
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
            console.log('new pin');
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
                    } else {
                        errorNewPIN();
                        $('#message-error-new-pin').html(data.message)
                    }
                }
            });
        });
    </script>

    <!-- Update PIN -->
    <script>
        function inputResetPIN() {
            $('#reset-pin-modal').css("display", "block");
            $('#success-reset-pin').css("display", "none");
            $('#error-reset-pin').css("display", "none");
            $('input').val('');
        }
        function successResetPIN() {
            $('#reset-pin-modal').css("display", "none");
            $('#success-reset-pin').css("display", "block");
            $('#error-reset-pin').css("display", "none");
        }
        function errorResetPIN() {
            $('#reset-pin-modal').css("display", "block");
            $('#success-reset-pin').css("display", "none");
            $('#error-reset-pin').css("display", "block");
        }

        $('#lupa-pin').click(function(){
            inputResetPIN();
        });
        $('#btn-reset-pin').click(function(){
            console.log('new pin');
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
                    } else {
                        errorResetPIN();
                        $('#message-error-reset-pin').html(data.message)
                    }
                }
            });
        });

    </script>
@endpush
