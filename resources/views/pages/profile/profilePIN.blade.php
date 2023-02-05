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
                        {{-- @elseif ( !empty($user['pin_number']) && !empty($user['email']) )
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
                        @endif --}}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- modal Buat Pin -->
    <div class="modal fade" tabindex="-1" id="modal-buat-pin">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body text-center" style="padding:40px;" id="buat-pin-modal">

                    <img src="{{ asset('assets-web/img/icon/lupa-password.png') }}" alt="{{ asset('assets-web/img/icon/lupa-password.png') }}">

                    <div class="mb-5">
                        <div class="mt-5 text-weight-700 fs-20" style="font-weight: bold;">Buat Pin</div>
                        <div class="mt-5 text-weight-400 fs-16">Buatlah pin baru yang menurut Anda mudah untuk diingat dan sulit untuk ditebak</div>

                        <!-- <div class="pincode-input-new-pin mt-8"></div> -->
                        <div class="fv-row mb-5 mt-8">
                            <input type="number" max="6" min="6" placeholder="Masukan PIN Baru" name="pin_new" class="form-control bg-transparent" onkeyup=enforceMinMax(this)/>
                        </div>
                        <div class="fv-row mb-5">
                            <input type="number" max="6" min="6" placeholder="Ulangi PIN Baru" name="pin_confirm" class="form-control bg-transparent" onkeyup=enforceMinMax(this)/>
                        </div>
                    </div>

                    <div class="d-grid">
                        <button type="button" id="btn-reset-pin" class="btn btn-success">
                            <span class="indicator-label">Kirim</span>
                        </button>
                    </div>
                </div>
                <!-- <div class="modal-body text-center" style="padding:40px; display:none;" id="email-reset-success">
                    <img src="{{ asset('assets-web/img/icon/lupa-password.png') }}" alt="{{ asset('assets-web/img/icon/lupa-password.png') }}">

                    <div>
                        <div class="mt-5 text-weight-700 fs-20" style="font-weight: bold;">Ulangi PIN</div>
                        <div class="mt-5 text-weight-400 fs-16">Ulangi pin baru yang sudah Anda buat dan pastikan sama dengan pin baru Anda.</div>
                    </div>
                    <div class="pincode-input-container"></div>
                    <button type="button" class="btn mt-10 btn-success text-center" style="width:150px;">Simpan</button>
                </div>
                <div class="modal-body text-center" style="padding:40px; display:none;" id="email-reset-load">
                    
                </div> -->
            </div>
        </div>
    </div>

    <!-- modal Lupa Pin -->
    <!-- <div class="modal fade" tabindex="-1" id="modal-lupa-pin">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body text-center" style="padding:40px;" id="email-reset-failed">
                    <img src="{{ asset('assets-web/img/icon/lupa-password.png') }}" alt="{{ asset('assets-web/img/icon/lupa-password.png') }}">

                    <div class="mb-5">
                        <div class="mt-5 text-weight-700 fs-20" style="font-weight: bold;">Lupa Pin?</div>
                        <div class="mt-5 text-weight-400 fs-16">Jangan khawatir. Tuliskan email Anda untuk membuat pin baru.</div>

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
                        <button type="button" id="btn-reset-pin" class="btn btn-success">
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
                    
                </div>
            </div>
        </div>
    </div> -->
@endsection

@push('page_js')
    <!-- Create NEW PIN -->
    <script>
        
    </script>

    <!-- Lupa PIN -->
    <script>

    </script>

    <!-- Update PIN -->
    <script>

    </script>
@endpush
