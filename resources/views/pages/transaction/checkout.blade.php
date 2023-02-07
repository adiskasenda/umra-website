@extends('layouts.master')

@section('content')
<div class="container-fluid py-5 mb-8">
    <div class="container">
        @include('pages.transaction.partials.breadcrumb',[
            'name_package' => $package_product['name'],
        ])
        <div class="row">
            <div class="col-md-3">
                @include('pages.transaction.partials.sidebar', [
                    'step' => 3,
                    'id_package' => $package_product['id_packet'],
                    'name_package' => $package_product['name'],
                    'flag_umroh' =>  Helpers::viewFlagUmroh($package_product['flag_umroh']),
                    'quota' => $package_product['quota']
                ])
            </div>
            <div class="col-md-9">
                <a href="{{ url('/transaction/biodata', $package_product['id_packet']) }}" class="font-normal-400 fs-16 text-green mt-3">
                    <i class="fa-solid fa-arrow-left me-2"></i> Langkah 3 dari 3
                </a>
                <div class="font-normal-700 fs-32">Checkout Pesanan</div>
                <div class="font-normal-400 fs-16">Periksa & pastikan data pesanan anda sudah sesuai</div>

                <div class="row">
                    <div class="col-6">
                        <div class="card card-bordered mt-5">
                            <div class="card-body p-5">
                                <div class="row">
                                    <div class="col-2">
                                        <img src="{{ asset('assets-web/img/icon/calendar-umroh.png') }}" alt="">
                                    </div>
                                    <div class="col-10">
                                        <div class="font-normal-400 fs-14">Tanggal Keberangkatan</div>
                                        <div class="font-normal-700 fs-18">{{ date('d M Y', strtotime($package_product['date_end'])) }}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="card card-bordered mt-5">
                            <div class="card-body p-5">
                                <div class="row">
                                    <div class="col-2">
                                        <img src="{{ asset('assets-web/img/icon/time-umroh.png') }}" alt="">
                                    </div>
                                    <div class="col-10">
                                        <div class="font-normal-400 fs-14">Durasi Perjalanan</div>
                                        <div class="font-normal-700 fs-18">{{ $package_product['day_duration'] }} Hari</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card Room Jamaah -->
                @include('pages.transaction.partials.cardRoomCheckout', [
                    'icon' => asset('assets-web/img/icon/double.png'),
                    'name' => 'Doble',
                    'type_room' => 'doble',
                ])

                @include('pages.transaction.partials.cardRoomCheckout', [
                    'icon' => asset('assets-web/img/icon/triple.png'),
                    'name' => 'Triple',
                    'type_room' => 'triple',
                ])

                @include('pages.transaction.partials.cardRoomCheckout', [
                    'icon' => asset('assets-web/img/icon/quad.png'),
                    'name' => 'Quad',
                    'type_room' => 'quad',
                ])

                <div class="card card-bordered mt-5" style="background-color: #F8FCFC">
                    <div class="card-body p-5">
                        <div class="row">
                            <div class="col-4">
                                <div class="font-normal-400 fs-14">
                                    <i class="fa-solid fa-phone me-2"></i>
                                    Kontak Pemesan
                                </div>
                                <div class="font-normal-700 fs-16 text-green">{{ Session::get('user')['phone'] }} ( {{ Session::get('user')['firstname'].' '.Session::get('user')['lastname'] }} )</div>
                            </div>
                            <!-- <div class="col-5 mt-5">
                                <div class="font-normal-400 fs-12">Ingin menggunakan nomor lain khusus untuk pesanan ini?</div>
                            </div>
                            <div class="col-3 mt-2 text-right">
                                <button class="btn btn-success">Gunakan kontak lain</button>
                            </div> -->
                        </div>
                    </div>
                </div>

                <div class="card card-bordered mt-5" style="background-color: #F8FCFC">
                    <div class="card-body p-5 font-normal-400 fs-16 pt-2 pb-2">
                        <i class="fa-solid fa-circle-info me-2 text-primary"></i>
                        Pastikan nomor yang dijadikan kontak sudah terdaftar akun WhatsApp
                    </div>
                </div>
                <hr>

                <div class="font-normal-700 fs-20">Pilih Jenis Pembayaran</div>
                <div class="row">

                    <div class="col-6">
                        <div class="card card-bordered mt-5" for="CASH">
                            <div class="card-body p-5">
                                <div class="row">
                                    <div class="col-1">
                                        <input class="form-check-input mt-7" type="radio" value="CASH" name="gender" id="CASH" checked>
                                    </div>
                                    <div class="col-11">
                                        <div class="font-normal-600 fs-14">Cash</div>
                                        <div class="font-normal-400 fs-14">Bayar lunas di depan agar perjalanan ibadah anda lebih tenang</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="card card-bordered mt-5" for="DOWNPAYMENT">
                            <div class="card-body p-5">
                                <div class="row">
                                    <div class="col-1">
                                        <input class="form-check-input mt-7" type="radio" value="DOWNPAYMENT" name="gender" id="DOWNPAYMENT">
                                    </div>
                                    <div class="col-11">
                                        <div class="font-normal-600 fs-14">Cicilan hingga 2x</div>
                                        <div class="font-normal-400 fs-14">Cukup bayar uang muka untuk bisa booking tiket perjalanan anda</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <hr>

                <div class="row">
                    <div class="col-md-6"></div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-6 font-normal-400 fs-18">Jumlah Jamaah</div>
                            <div class="col-6 font-normal-700 fs-18 text-right">
                                <i class="fa-solid fa-user-group me-2" style="color: var(--dark)"></i>
                                <span id="total_people">0</span> Orang
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-6 font-normal-400 fs-18">
                                Total Pesanan
                            </div>
                            <div class="col-6 text-right font-normal-700 fs-18 text-green">
                                Rp. <span id="total_price">0</span>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="text-right">
                    <a href="{{ url('/transaction/biodata', $package_product['id_packet']) }}">
                        <button class="btn text-green">
                            <i class="fa-solid fa-chevron-left me-2"></i> Kembali
                        </button>
                    </a>
                    <button class="btn btn-success" id="btn-next" disabled>
                        Pilih Metode Pembayaran <i class="fa-solid fa-chevron-right"></i>
                    </button>
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
            if ( localStorage.getItem("cartId") !== "{{ $package_product['uuid_packet'] }}" ) {
                window.location.href = "{{ url('/transaction/jamaah', $package_product['id_packet']) }}";
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

            // Count register
            const count_people_register_doble = cardData[0][0]['jamaah'].length;
            const count_people_register_triple = cardData[0][1]['jamaah'].length;
            const count_people_register_quad = cardData[0][2]['jamaah'].length;

            // Count Price
            const count_price_doble = parseInt(count_people_doble) * "{{$package_product['price_double']}}";
            const count_price_triple = parseInt(count_people_triple) * "{{$package_product['price_triple']}}";
            const count_price_quad = parseInt(count_people_quad) * "{{$package_product['price_quad']}}";

            const total_people = parseInt(count_people_doble) + parseInt(count_people_triple) + parseInt(count_people_quad);
            $('#total_people').html(total_people);
            const total_people_register = parseInt(count_people_register_doble) + parseInt(count_people_register_triple) + parseInt(count_people_register_quad);
            const total_price = parseInt(count_price_doble) + parseInt(count_price_triple) + parseInt(count_price_quad);
            $('#total_price').html(formatRupiah(total_price))

            // Validation
            if ( total_people > 0 && total_people == total_people_register ) {
                $('#btn-next').removeAttr("disabled");
            } else {
                $('#btn-next').attr('disabled','disabled');
            }
        }
    </script>
    <!-- Check Cart End -->

    <!-- Document Ready Start -->
    <script>
        $(document).ready(function() {
            checkChart();
            total();
        });
    </script>
    <!-- Document Ready End -->

    <!-- Link Button Start -->
    <script>
        $('#btn-next').click(function() {
            const cardData = JSON.parse(localStorage.getItem("cartData"));

            // Count Jmaaah
            const count_people_doble = cardData[0][0]['doble'];
            const count_people_triple = cardData[0][1]['triple'];
            const count_people_quad = cardData[0][2]['quad'];

            const total_people = parseInt(count_people_doble) + parseInt(count_people_triple) + parseInt(count_people_quad);

            // Count Jamaah Register
            const count_people_register_doble = cardData[0][0]['jamaah'].length;
            const count_people_register_triple = cardData[0][1]['jamaah'].length;
            const count_people_register_quad = cardData[0][2]['jamaah'].length;

            const total_people_register = parseInt(count_people_register_doble) + parseInt(count_people_register_triple) + parseInt(count_people_register_quad);

            if ( total_people > 0 && total_people == total_people_register ) {
                window.location.href = "{{ url('/transaction/payment', $package_product['id_packet']) }}";
                return false;
            } else {
                return false;
            }
        });
    </script>
    <!-- Link Button End -->

    <script>
        // $('#btn-next').click(function() {
        //     const cardData = JSON.parse(localStorage.getItem("cartData"));
            
        //     $.ajax({
        //         url: "{{ url('/transaction/checkout', $package_product['id_packet']) }}",
        //         type: 'POST',
        //         data: {
        //             "_token": "{{ csrf_token() }}",
        //             'data' : cardData
        //         },
        //         dataType: "JSON",
        //         success: function(data) {
        //             console.log(data);
        //         }
        //     })
        // });
    </script>
@endpush