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
                        'step' => 1,
                        'id_package' => $package_product['id_packet'],
                        'name_package' => $package_product['name'],
                        'flag_umroh' => Helpers::viewFlagUmroh($package_product['flag_umroh']),
                        'quota' => $package_product['quota']
                    ])
                </div>
                <div class="col-md-9">
                    <a href="{{ url('/package', $package_product['id_packet']) }}" class="font-normal-400 fs-16 text-green mt-3">
                        <i class="fa-solid fa-arrow-left me-2"></i> Langkah 1 dari 3
                    </a>
                    
                    <div class="mt-5 font-normal-700 fs-32">Jumlah Calon Jamaah</div>
                    <div class="mt-5 mb-10 text-opacity font-normal-400 fs-16">Silakan masukkan jumlah jamaah berdasarkan pilih kamar yang tersedia</div>
                    

                    <!--begin::Alert-->
                    <div class="notice rounded border-success border mb-5 mt-5 p-6">
                        <div class="row" style="font-weight: bold;"> 
                            <div class="col-md-10 col-9 fs-6 text-gray-700"> Paket ini memiliki penawaran dapat dibayar cicil 2x dengan DP minimal Rp. {{ number_format($configuration[2]['value_configuration']) }}/orang </div>
                            <div class="col-md-2 col-3">
                                <img src="{{ $configuration[3]['value_configuration'] }}" alt="{{ $configuration[3]['value_configuration'] }}"> 
                            </div>
                        </div>
                    </div>
                    <!--end::Alert-->

                     <!-- Option Kamar Start -->
                    @include('pages.transaction.partials.cardJamaah', [
                        'icon' => asset('assets-web/img/icon/double.png'),
                        'name' => 'Doble',
                        'type_room' => 'doble',
                        'price' => number_format($package_product['price_double']),
                        'note' => 'Kamar terdiri dari 2 jamaah'
                    ])

                    @include('pages.transaction.partials.cardJamaah', [
                        'icon' => asset('assets-web/img/icon/triple.png'),
                        'name' => 'Triple',
                        'type_room' => 'triple',
                        'price' => number_format($package_product['price_triple']),
                        'note' => 'Kamar terdiri dari 3 jamaah'
                    ])

                    @include('pages.transaction.partials.cardJamaah', [
                        'icon' => asset('assets-web/img/icon/quad.png'),
                        'name' => 'Quad',
                        'type_room' => 'quad',
                        'price' => number_format($package_product['price_quad']),
                        'note' => 'Kamar terdiri dari 4 jamaah'
                    ])
                    <!-- Option Kamar End  -->

                    <div class="notice d-flex bg-light-primary rounded border-primary border border-dashed mb-5 mt-5 p-6">
                        <span class="svg-icon svg-icon-2tx svg-icon-primary me-4">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor"></rect>
                                <rect x="11" y="14" width="7" height="2" rx="1" transform="rotate(-90 11 14)" fill="currentColor"></rect>
                                <rect x="11" y="17" width="2" height="2" rx="1" transform="rotate(-90 11 17)" fill="currentColor"></rect>
                            </svg>
                        </span>
                        <div class="d-flex flex-stack flex-grow-1">
                            <div class="fw-semibold">
                                <div class="fs-6 text-gray-700"> Maksimum pembelian per pesanan <strong>Rp. {{ number_format($configuration[1]['value_configuration']) }}</strong> </div>
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
                                    <i class="fa-solid fa-user-group me-2"></i>
                                    <span id="total_people">0</span> Orang
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-6 font-normal-400 fs-18">
                                    Total Harga
                                </div>
                                <div class="col-6 text-right font-normal-700 fs-18 text-green">
                                    Rp. <span id="total_price">0</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6 font-normal-400 fs-18">
                                    Uang Muka
                                    <i class="fa-solid fa-circle-info mx-2"></i>
                                </div>
                                <div class="col-6 text-right font-normal-700 fs-18 text-green">
                                    Rp. <span id="down_payment">0</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="text-right">
                        <a href="{{ url('/package', $package_product['id_packet']) }}">
                            <button class="btn text-green">
                                <i class="fa-solid fa-chevron-left me-2"></i> Kembali
                            </button>
                        </a>
                        <button class="btn btn-success" id="btn-next" disabled>
                            Lanjutkan <i class="fa-solid fa-chevron-right mx-2"></i>
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
            if ( "{{ Session::get('user')['phone'] }}".length <= 0 ) {
                window.location.href = "{{ url('/profile/edit').'?status=phone-failed' }}";
                return false;
            }

            if ( localStorage.getItem("cartId") != "{{ $package_product['uuid_packet'].'-'.Session::get('user')['uuid'] }}" ) {
                localStorage.setItem("step", "1");
                localStorage.setItem("cartId", "{{ $package_product['uuid_packet'].'-'.Session::get('user')['uuid'] }}");
                localStorage.setItem("cartData", '[[{ "doble" : 0, "jamaah" : [] }, { "triple" : 0, "jamaah" : [] }, { "quad" : 0, "jamaah" : [] } ]]');   
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
            $('#count-price-doble').html(formatRupiah( count_price_doble ));
            const count_price_triple = parseInt(count_people_triple) * "{{$package_product['price_triple']}}";
            $('#count-price-triple').html(formatRupiah( count_price_triple ));
            const count_price_quad = parseInt(count_people_quad) * "{{$package_product['price_quad']}}";
            $('#count-price-quad').html(formatRupiah( count_price_quad ));
        
            // Count Total Price
            const total_people = parseInt(count_people_doble) + parseInt(count_people_triple) + parseInt(count_people_quad);
            $('#total_people').html(total_people);
            const total_price = parseInt(count_price_doble) + parseInt(count_price_triple) + parseInt(count_price_quad);
            $('#total_price').html(formatRupiah( total_price ));
            const down_payment = total_people * "{{ $configuration[2]['value_configuration'] }}";
            $('#down_payment').html(formatRupiah( down_payment ));

            // Update Value Form
            $('.count-people-doble').val(count_people_doble);
            $('.count-people-triple').val(count_people_triple);
            $('.count-people-quad').val(count_people_quad);

            // Validation
            const maxPriceBuyPackage = "{{ $configuration[1]['value_configuration'] }}";
            const maxPeopleBuyPackage = "{{ $configuration[0]['value_configuration'] }}";

            if ( total_price >= maxPriceBuyPackage || total_people >= maxPeopleBuyPackage ) {
                $('button[data-kt-dialer-control="increase"]').attr('disabled','disabled');
            } else {
                $('button[data-kt-dialer-control="increase"]').removeAttr("disabled");
            }

            if ( total_people > 0 ) {
                $('#btn-next').removeAttr("disabled");
            } else {
                $('#btn-next').attr('disabled','disabled');
            }
        }

        function count_people() {
            const cardData = JSON.parse(localStorage.getItem("cartData"));

            const count_people_doble = $('.count-people-doble').val();
            const count_people_triple = $('.count-people-triple').val();
            const count_people_quad = $('.count-people-quad').val();

            cardData[0][0]['doble'] = count_people_doble;
            cardData[0][1]['triple'] = count_people_triple;
            cardData[0][2]['quad'] = count_people_quad;
            
            localStorage.setItem("cartData", JSON.stringify(cardData));
        }
    </script>
    <!-- Check Cart End -->

    <!-- Document Ready Start -->
    <script>
        checkChart();
        total();
    </script>
    <!-- Document Ready End -->

    <!-- Count Price People Start -->
    <script>
        $('.count-people-doble').change(function() {
            count_people();
            total();
        })
        $('.count-people-triple').change(function() {
            count_people();
            total();
        })
        $('.count-people-quad').change(function() {
            console.log(2);
            count_people();
            total();
        })
    </script>
    <!-- Count Price People End -->


    <!-- Link Button Start -->
    <script>
        $('#btn-next').click(function() {
            const count_people_doble = $('.count-people-doble').val();
            const count_people_triple = $('.count-people-triple').val();
            const count_people_quad = $('.count-people-quad').val();

            const total_people = parseInt(count_people_doble) + parseInt(count_people_triple) + parseInt(count_people_quad);
            
            if ( total_people > 0 ) {
                localStorage.setItem("step", "2");
                window.location.href = "{{ url('/transaction/biodata', $package_product['id_packet']) }}";
                return false;
            } else {
                return false;
            }
        });
    </script>
    <!-- Link Button End -->
@endpush

