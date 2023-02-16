@extends('layouts.master')

@section('content')
<div class="container-fluid py-5 mb-8">
    <div class="container">
        @include('pages.transaction.partials.breadcrumb',[
            // 'name_package' => $package_product['name'],
        ])
        <div class="row">
            <div class="col-md-12">
                <a href="{{ url('/transaction/checkout', $package_product['id_packet']) }}" class="font-normal-700 fs-24 text-dark mt-3">
                    <i class="fa-solid fa-arrow-left me-2"></i> Pilih Metode Pembayaran
                </a>
                <div class="font-normal-400 fs-14 mt-3" style="margin-left: 19px;">Pilih metode pembayaran yang tersedia</div>
                <div class="row">
                    <div class="col-6">

                        <div class="card card-bordered mt-5">
                            <div class="card-body p-5">
                                <div class="font-normal-700 fs-16">
                                    Metode Pembayaran
                                </div>
                                <a href="{{ url('/transaction/payment-option', $package_product['id_packet']) }}" class="row mx-2 my-5">
                                    <div class="col-11">
                                        <div class="font-normal-600 fs-14 text-dark">Virtual Account (VA)</div>
                                    </div>
                                    <div class="col-1 mt-1">
                                        <i class="fa-solid fa-chevron-right"></i>
                                    </div>
                                </a>
                                <hr>
                                <!-- <div class="row mx-2 my-5">
                                    <div class="col-7">
                                        <div class="font-normal-600 fs-14">QRIS</div>
                                    </div>
                                    <div class="col-1 mt-1">
                                        <i class="fa-solid fa-chevron-right"></i>
                                    </div>
                                </div> -->
                            </div>
                        </div>

                        <!-- <div class="card card-bordered mt-5">
                            <div class="card-body p-5">
                                <div class="font-normal-700 fs-16">
                                    Metode Pembayaran Cross Border
                                </div>
                                <div class="row mx-2 my-5">
                                    <div class="col-7">
                                        <div class="font-normal-600 fs-14">Kartu Kredit</div>
                                    </div>
                                    <div class="col-1 mt-1">
                                        <i class="fa-solid fa-chevron-right"></i>
                                    </div>
                                </div>
                                <hr>
                                <div class="row mx-2 my-5">
                                    <div class="col-7">
                                        <div class="font-normal-600 fs-14">e-wallet & Bank-transfer ASIA</div>
                                    </div>
                                    <div class="col-1 mt-1">
                                        <i class="fa-solid fa-chevron-right"></i>
                                    </div>
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
                                    <div class="col-6">
                                        <div class="font-normal-400 fs-18">
                                            Total Tagihan
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="font-700 fs-24 text-green text-right">
                                            Rp. <span id="total_bill">0</span>
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
</div>
@endsection

@push('page_js')
    <!-- Check Cart Start -->
    <script>
        function checkChart() {
            if ( "{{ Session::get('user')['phone'] }}".length <= 0 ) {
                window.location.href = "{{ url('/package', $package_product['id_packet']).'?status=phone-failed' }}";
                return false;
            }
            
            if ( localStorage.getItem("cartId") != "{{ $package_product['uuid_packet'].'-'.Session::get('user')['uuid'] }}" ) {
                window.location.href = "{{ url('/transaction/jamaah', $package_product['id_packet']) }}";
                return false;
            }
            if ( localStorage.getItem("step") < 4 ) {
                window.location.href = "{{ url('/transaction/biodata', $package_product['id_packet']) }}";
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
    </script>
    <!-- Check Cart End -->

    <!-- Document Ready Start -->
    <script>
        checkChart();
        total();
    </script>
    <!-- Document Ready End -->
@endpush
