@extends('layouts.master')

@section('content')
<div class="container-fluid py-5 mb-8">
    <div class="container">
        @include('pages.transaction.partials.breadcrumb',[
            // 'name_package' => $package_product['name'],
        ])
        <div class="row">
            <div class="col-md-12">
                <a href="" class="font-normal-700 fs-24 text-dark mt-3">
                    <i class="fa-solid fa-arrow-left me-2"></i> Pilih Metode Pembayaran
                </a>
                <div class="font-normal-400 fs-14 mt-3" style="margin-left: 19px;">Pilih metode pembayaran yang tersedia</div>

                <div class="row">
                    <div class="col-6">
                        {{-- begin:Metode Pembayaran --}}
                        <div class="card card-bordered mt-5">
                            <div class="card-body p-5">
                                <div class="row">
                                    <div class="col-10">
                                        <div class="font-normal-700 fs-16">
                                            Virtual Account
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <a href="#" class="font-normal-600 fs-14 text-green text-right">
                                            Ubah
                                        </a>
                                    </div>
                                </div>
                                @foreach(  )
                                <div class="row mx-2 my-5">
                                    <div class="col-2">
                                        <img src="https://api-uploads.umra.id/support/5a80b690-2cbb-41c4-bcba-47d8e94d940b.png" width="40px" alt="">
                                    </div>
                                    <div class="col-9">
                                        <div class="font-normal-600 fs-14">Bank Rakyat Indonesia (BRI)</div>
                                    </div>
                                    <div class="col-1 mt-1">
                                        <div class="form-check form-check-custom form-check-solid">
                                            <input class="form-check-input" type="radio" value="" name="choice" id="flexRadioDefault"/>
                                        </div>
                                    </div>
                                </div>
                                <hr>

                                <div class="mb-10">
                                    <label for="exampleFormControlInput1" class="form-label">Nominal Pembayaran</label>
                                    <input type="text" class="form-control" placeholder="Nominal pembayaran"/>
                                </div>
                            </div>
                        </div>
                        {{-- end:Metode Pembayaran --}}

                        {{-- begin:Form Data Pribadi --}}
                        <div class="card card-bordered mt-5">
                            <div class="card-body p-5">
                                <div class="mb-10">
                                    <label for="exampleFormControlInput1" class="required form-label">Nama Lengkap</label>
                                    <input type="text" class="form-control" placeholder="Nama Lengkap"/>
                                </div>
                                <div class="mb-10">
                                    <label for="exampleFormControlInput1" class="required form-label">No Telepon</label>
                                    <input type="text" class="form-control" placeholder="Nomor telepon"/>
                                </div>
                                <div class="mb-10">
                                    <label for="exampleFormControlInput1" class="required form-label">Email</label>
                                    <input type="email" class="form-control" placeholder="Email"/>
                                </div>
                            </div>
                        </div>
                        {{-- end:Form Data Pribadi --}}
                    </div>
                    {{-- begin:Total --}}
                    <div class="col-6">
                        <div class="card card-bordered mt-5">
                            <div class="card-body p-5">
                                <div class="row">
                                    <div class="col-2">
                                        <img src="{{ asset('assets-web/img/icon/time-umroh.png') }}" alt="">
                                    </div>
                                    <div class="col-6">
                                        <div class="font-normal-400 fs-12">Umroh Reguler</div>
                                        <div class="font-normal-700 fs-16">Umroh Hemat Bonus Tour Thoif</div>
                                        <div class="">
                                            <i class="fa-solid fa-user-group me-2" style="color: var(--green)"></i>
                                            3 Calon Jamaah
                                            <span style="margin-left:5px;">
                                                <i class="fa-solid fa-wallet me-2" style="color: var(--green)"></i>
                                                Cicilan
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-4 text-right">
                                        <div class="font-normal-500 fs-12 text-green">Cicilan (DP)</div>
                                        <div class="font-normal-700 fs-16">Rp. 15.000.000</div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="row">
                                    <div class="col-6">
                                        <i class="fa-solid fa-user-group me-2" style="color: var(--green)"></i>
                                        3 Calon  Jamaah
                                    </div>
                                    <div class="col-6 text-right">
                                        Total Harga <strong>Rp. 40.000.000</strong>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="my-5">
                        <div class="card card-bordered mt-5">
                            <div class="card-body p-5">
                                <div class="row">
                                    <div class="col-8">
                                        <div class="font-normal-400 fs-16">
                                            Total Tagihan
                                        </div>
                                        <div class="font-700 fs-24 text-green">
                                            Rp. 15.000.000
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modal-masukkan-pin">
                                            <i class="fa-regular fa-shield-check me-2"></i>
                                            Bayar
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- end:Total --}}
                </div>
            </div>
        </div>
    </div>
</div>
<!-- modal Ubah Email -->
<div class="modal fade" tabindex="-1" id="modal-masukkan-pin">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <div class="modal-body text-center" style="padding:40px;" id="input-pin">

                <img src="{{ asset('assets-web/img/icon/lupa-password.png') }}" alt="{{ asset('assets-web/img/icon/lupa-password.png') }}">

                <div class="mb-5">
                    <div class="text-weight-700 fs-20 mt-5 mb-5" style="font-weight: bold;">Masukkan PIN</div>
                    <div class="pincode-input-container"></div>
                </div>
                <a href="{{ url('/profile/pin') }}" class="mt-10 text-weight-400 fs-16">Lupa PIN anda?</a>
            </div>

            <div class="modal-body text-center" style="padding:40px; display:none;" id="email-reset-load">
                @include('layouts.partials.loadingResponse')
            </div>
        </div>
    </div>
</div>
@endsection

@push('page_js')

    <!-- Check Cart Start -->
    <script>
        function checkChart() {
            
        }
    </script>

    <script>
        function total() {
        
        }
    </script>
    <!-- Document Ready Start -->
    <script>
        checkChart();
        total();
    </script>
    <!-- Document Ready End -->

    
    <!-- Check PIN -->
    <script>
        var elements = document.getElementsByTagName('row');
            for (var i = 0; i < elements.length; i++) {

            (elements)[i].addEventListener("click", function() {
                const rb = this.querySelector('input[name="choice"]');
                rb.checked = true;

                let selectedValue = rb.value;
                alert(selectedValue);
            });
        }

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

@endpush