@extends('layouts.master')

@section('content')
<div class="container-fluid py-5 mb-8">
    <div class="container">
        @include('pages.transaction.partials.breadcrumb',[
            // 'name_package' => $package_product['name'],
        ])
        <div class="row">
            <div class="col-md-12">
                <a href="{{ url('/transaction/payment', $package_product['id_packet']) }}" class="font-normal-700 fs-24 text-dark mt-3">
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
                                @foreach( $payment_method as $key => $payment_method )
                                    <div class="row mx-2 my-5">
                                        <label class="form-check-label" for="{{ $payment_method['id_payment_method'] }}">
                                            <div class="form-check form-check-custom form-check-solid">
                                                <div class="col-11">
                                                    <div class="row">
                                                        <div class="col-3">
                                                            <img src="{{ $payment_method['url_logo'] }}" width="40px" alt="{{ $payment_method['url_logo'] }}">
                                                        </div>
                                                        <div class="col-9">
                                                            <div class="font-normal-600 fs-14">{{ $payment_method['name_bank'] }}</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-1 mt-1">
                                                    <input class="form-check-input" type="radio" value="{{ $payment_method['id_payment_method'] }}" name="id_payment_method" id="{{ $payment_method['id_payment_method'] }}"/>
                                                </div>
                                            </div>
                                        </label>
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
                                        <img width="100%" src="{{ $package_product['url_banner'] }}" alt="{{ $package_product['url_banner'] }}">
                                    </div>
                                    <div class="col-6">
                                        <div class="font-normal-400 fs-12">{{ Helpers::viewFlagUmroh($package_product['flag_umroh']) }}</div>
                                        <div class="font-normal-700 fs-16">{{ $package_product['name'] }}</div>
                                        <div class="">
                                            <i class="fa-solid fa-user-group me-2" style="color: var(--green)"></i>
                                            <span class="total_people">0</span> Calon Jamaah
                                            <i class="fa-solid fa-wallet me-2" style="color: var(--green)"></i>
                                            Cicilan
                                        </div>
                                    </div>
                                    <div class="col-4 text-right">
                                        <div id="down_payment"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="row">
                                    <div class="col-6">
                                        <i class="fa-solid fa-user-group me-2" style="color: var(--green)"></i>
                                        <span class="total_people">0</span> Calon  Jamaah
                                    </div>
                                    <div class="col-6 text-right">
                                        Total Harga Rp. <span id="total_price">0</span>
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
                                            Total Tagihan
                                        </div>
                                        <div class="font-700 fs-24 text-green">
                                            Rp. <span id="total_bill">0</span>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <button id="btn-buy" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modal-masukkan-pin" disabled>
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

<!-- modal PIN -->
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
    <!-- Check Cart Start -->
    <script>
        function checkChart() {
            if ( localStorage.getItem("cartId") != "{{ $package_product['uuid_packet'].'-'.Session::get('user')['uuid'] }}" ) {
                window.location.href = "{{ url('/transaction/jamaah', $package_product['id_packet']) }}";
                return false;
            }
            if ( localStorage.getItem("step") < 4 ) {
                window.location.href = "{{ url('/transaction/checkout', $package_product['id_packet']) }}";
                return false;
            }
        }
    </script>
    <script>
        function total() {
            const cardData = JSON.parse(localStorage.getItem("cartData"));

            // Count Jmaaah
            const count_people_doble = cardData[0][0]['doble'];
            const count_people_triple = cardData[0][1]['triple'];
            const count_people_quad = cardData[0][2]['quad'];

            // Count Price
            const count_price_doble = parseInt(count_people_doble) * "{{$package_product['price_double']}}";
            const count_price_triple = parseInt(count_people_triple) * "{{$package_product['price_triple']}}";
            const count_price_quad = parseInt(count_people_quad) * "{{$package_product['price_quad']}}";

            const total_people = parseInt(count_people_doble) + parseInt(count_people_triple) + parseInt(count_people_quad);
            $('.total_people').html( total_people );
            const down_payment = total_people * "{{ $configuration[2]['value_configuration'] }}";
            const total_price = parseInt(count_price_doble) + parseInt(count_price_triple) + parseInt(count_price_quad);
            $('#total_price').html(formatRupiah( total_price ));

            if ( localStorage.getItem("typePayment") == 'CASH' ) {
                $('#total_bill').html(formatRupiah( down_payment ));

                $('#down_payment').html(`
                    <div class="font-normal-500 fs-12 text-green">Cicilan (DP)</div>
                    <div class="font-normal-700 fs-16">Rp. `+ formatRupiah(down_payment) +`</div>
                `);
            } else {
                $('#total_bill').html(formatRupiah( total_price ));
            }
        }

        function messagePayment(message) {
            console.log('err payment');
        }
    </script>
    <!-- Check Cart End -->

    <!-- Document Ready Start -->
    <script>
        checkChart();
        total();
    </script>
    <!-- Document Ready End -->

    <!-- Btn Buy Start -->
    <script>
        $("input[name='id_payment_method']").click(function() {
            $('#btn-buy').removeAttr("disabled");
        });
        
    </script>
    <!-- Btn Buy End -->

    <!-- Check PIN Start -->
    <script>
        $('#btn-buy').click(function() {
            $('input').val('');
            $('.pincode-input.pincode-input--filled').css('border', '1px solid black');
        });

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
                                const typePayment = localStorage.getItem("typePayment")
                                const cardData = JSON.parse(localStorage.getItem("cartData"));
                                const uuidPacket = "{{ $package_product['uuid_packet'] }}";
                                const paymentMethod = $("input[name='id_payment_method']").val();

                                $.ajax({
                                    url: "{{ url('/transaction/checkout') }}",
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
                                        if ( data.status == 1 ) {
                                            localStorage.removeItem("cartId");
                                            localStorage.removeItem("step");
                                            localStorage.removeItem("typePayment");
                                            localStorage.removeItem("cartData");
                                            window.location.href = "{{ url('/transaction/payment-status').'/' }}" + data.data.order_code;
                                        } else {
                                            messagePayment(data.message);
                                        }
                                        
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
