@extends('layouts.master')

@section('content')
<div class="container-fluid py-5 mb-8">
    <div class="container">
        @include('pages.transaction.partials.breadcrumb',[
            // 'name_package' => $order['package_product']['name'],
        ])
        <div class="row">
            <div class="col-md-12">
                <a href="{{ url('/transaction/payment-need-pay',  $order['id_order']) }}" class="font-normal-700 fs-24 text-dark mt-3">
                    <i class="fa-solid fa-arrow-left me-2"></i> Pilih Metode Pembayaran
                </a>
                <div class="font-normal-400 fs-14 mt-3" style="margin-left: 19px;">Pilih metode pembayaran yang tersedia</div>
                <div class="row">

                    <div class="col-6">

                        <div class="card card-bordered mt-5">
                            <div class="card-body p-5">
                                <div class="row">
                                    <div class="col-10">
                                        <div class="font-normal-700 fs-16">
                                            Virtual Account
                                        </div>
                                    </div>
                                </div>
                                @foreach( $payment_method as $payment_method )
                                    <div class="row mx-2 my-5">
                                        <div class="col-2">
                                            <img src="{{ $payment_method['url_logo'] }}" width="40px" alt="{{ $payment_method['url_logo'] }}">
                                        </div>
                                        <div class="col-9">
                                            <div class="font-normal-600 fs-14">{{ $payment_method['name_bank'] }}</div>
                                        </div>
                                        <div class="col-1 mt-1">
                                            <div class="form-check form-check-custom form-check-solid">
                                                <input class="form-check-input" type="radio" value="{{ $payment_method['id_payment_method'] }}" name="payment_method" id="{{ $payment_method['id_payment_method'] }}"/>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                @endforeach
                                <!-- <div class="mb-10">
                                    <label for="exampleFormControlInput1" class="form-label">Nominal Pembayaran</label>
                                    <input type="text" class="form-control" placeholder="Nominal pembayaran"/>
                                </div> -->
                            </div>
                        </div>

                        <!-- <div class="card card-bordered mt-5">
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
                        </div> -->
                    </div>

                    <div class="col-6">
                        <div class="card card-bordered mt-5">
                            <div class="card-body p-5">
                                <div class="row">
                                    <div class="col-2">
                                        <img width="100%" src="{{ $order['package_product']['url_banner'] }}" alt="{{ $order['package_product']['url_banner'] }}">
                                    </div>
                                    <div class="col-6">
                                        <div class="font-normal-400 fs-12">{{ Helpers::viewFlagUmroh($order['package_product']['flag_umroh']) }}</div>
                                        <div class="font-normal-700 fs-16">{{ $order['package_product']['name'] }}</div>
                                        <div class="">
                                            <i class="fa-solid fa-user-group me-2" style="color: var(--green)"></i>
                                            Calon Jamaah
                                            <span class="icon-cicilan">
                                                <i class="fa-solid fa-wallet me-2" style="color: var(--green)"></i>
                                                Cicilan
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="row">
                                    <div class="col-6">
                                        <i class="fa-solid fa-user-group me-2" style="color: var(--green)"></i>
                                        <span class="total_people">{{ count($order['order_guest_double']) + count($order['order_guest_triple']) + count($order['order_guest_quad']) }}</span> Calon Jamaah
                                    </div>
                                    <div class="col-6 text-right">
                                        {{ $order['ringkasan_pesanan'][0]['name'] }} Rp. <span id="total_price">{{ number_format($order['ringkasan_pesanan'][0]['value']) }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <hr class="my-5">

                        <div class="card card-bordered mt-5">
                            <div class="card-body p-5">
                                <div class="row">
                                    <div class="col-10">
                                        <div class="font-normal-400 fs-16">
                                            {{ $order['need_pay']['name'] }}
                                        </div>
                                        <div class="font-700 fs-24 text-green">
                                            Rp. {{ number_format($order['need_pay']['value']) }}
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modal-masukkan-pin">
                                            Bayar
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal PIN -->
<div class="modal fade" tabindex="-1" id="modal-masukkan-pin">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            
            <!-- Modal Input PIN -->
            <div class="modal-body text-center" style="padding:40px;" id="pin-modal">
                <img src="{{ asset('assets-web/img/icon/lupa-password.png') }}" alt="{{ asset('assets-web/img/icon/lupa-password.png') }}">
                <div class="mb-5">
                    <div class="mt-5 text-weight-700 fs-20" style="font-weight: bold;">Masukan Pin</div>
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

        </div>
    </div>
</div>
@endsection

@push('page_js')
    <!-- Check PIN Start -->
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
                                const uuidPacket = "{{ $order['package_product']['uuid_packet'] }}";
                                const paymentMethod = "1";

                                $.ajax({
                                    url: "{{ url('/transaction/need-pay') }}",
                                    type: 'POST',
                                    data: {
                                        "_token": "{{ csrf_token() }}",
                                        "uuid_packet" : uuidPacket,
                                        "type_payment" : typePayment,
                                        "card_data" : cardData,
                                        "payment_method" : paymentMethod,
                                    },
                                    dataType: "JSON",
                                    success: function(data) {
                                        window.location.href = "{{ url('/transaction/payment-status').'/' }}" + data.id_order;
                                        return false;
                                    }
                                });

                                return ;
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
    <!-- Check PIN End -->
@endpush
