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
                        'step' => 2,
                        'id_package' => $package_product['id_packet'],
                        'name_package' => $package_product['name'],
                        'flag_umroh' =>  Helpers::viewFlagUmroh($package_product['flag_umroh']),
                        'quota' => $package_product['quota']
                    ])
                </div>
                <div class="col-md-9">
                    <a href="{{ url('/transaction/jamaah', $package_product['id_packet']) }}" class="font-normal-400 fs-16 text-green mt-3">
                        <i class="fa-solid fa-arrow-left me-2"></i> Langkah 2 dari 3
                    </a>

                    <div class="mt-5 font-normal-700 fs-32">Biodata Calon Jamaah</div>
                    <div class="mt-5 mb-10 text-opacity font-normal-400 fs-16">Silakan lengkapi biodata calon jamaah sesuai data KTP & Passport masing-masing</div>
                    
                    <!-- Card Room Jamaah -->
                    @include('pages.transaction.partials.cardRoom', [
                        'icon' => asset('assets-web/img/icon/double.png'),
                        'name' => 'Doble',
                        'type_room' => 'doble',
                    ])

                    @include('pages.transaction.partials.cardRoom', [
                        'icon' => asset('assets-web/img/icon/triple.png'),
                        'name' => 'Triple',
                        'type_room' => 'triple',
                    ])

                    @include('pages.transaction.partials.cardRoom', [
                        'icon' => asset('assets-web/img/icon/quad.png'),
                        'name' => 'Quad',
                        'type_room' => 'quad',
                    ])

                    <div class="card card-bordered mt-10" style="background-color: #E6F1F0">
                        <div class="card-body p-5">
                            <div class="row">
                                <div class="col-6">
                                    <div class="font-normal-700 fs-16 text-dark">Total Calon Jamaah</div>
                                </div>
                                <div class="col-6 text-right">
                                    <div class="font-normal-600 fs-16">
                                        <i class="fa-solid fa-user-group me-2" style="color: var(--green)"></i>
                                        <span id="total_people">0</span> Orang
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>

                    <div class="card card-bordered mt-10" style="background-color: #F8FCFC">
                        <div class="card-body p-5">
                            <div class="row">
                                <div class="col-6">
                                    <div class="font-normal-400 fs-14">
                                        <i class="fa-solid fa-phone me-sm-3"></i>
                                        Kontak Pemesan
                                    </div>
                                    <div class="font-normal-700 fs-16 text-green">{{ Session::get('user')['phone'] }} ( {{ Session::get('user')['firstname'].' '.Session::get('user')['lastname'] }} )</div>
                                </div>
                                <!-- <div class="col-6 mt-2 text-right">
                                    <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modal-tambah-telepon">Tambahkan Nomor Telepon</button>
                                </div> -->
                            </div>
                        </div>
                    </div>

                    <div class="card card-bordered mt-8 mb-10" style="background-color: #F8FCFC">
                        <div class="card-body p-5 font-normal-400 fs-14 pt-3 pb-3">
                            <i class="fa-solid fa-circle-info me-sm-3" style="color: #327DFA"></i>
                            Pastikan nomor yang dijadikan kontak sudah terdaftar akun WhatsApp
                        </div>
                    </div>
                    <hr>

                    <div class="text-right">
                        <a href="{{ url('/transaction/jamaah', $package_product['id_packet']) }}">
                            <button class="btn text-green">
                                <i class="fa-solid fa-chevron-left me-2"></i> Kembali
                            </button>
                        </a>
                        <!-- <i class="fa-solid fa-circle-info me-2" style="color: #B3261E; font-size: 23px;" data-bs-toggle="tooltip" data-bs-placement="top" data-html="true" title="Lengkapi data berikut untuk melanjutkan :"></i> -->
                        <button class="btn btn-success" id="btn-next" disabled>
                            Lanjutkan <i class="fa-solid fa-chevron-right mx-2"></i>
                        </button>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- Modal Add Telephone -->
    <!-- <div class="modal fade" tabindex="-1" id="modal-tambah-telepon">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">Tambahkan Nomor Telepon</h3>

                    <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                        <span class="svg-icon svg-icon-1">X</span>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="row mb-5">
                        <div class="col-md-12">
                            <div class="mb-2">
                                <label for="nama" class="required form-label">Nama Pemesan</label>
                                <input type="text" class="form-control" placeholder="Masukkan nama pemesan"/>
                            </div>
                            <div class="mb-2">
                                <label for="nama" class="required form-label">Nomor Telepon (WhatsApp)</label>
                                <input type="text" class="form-control" placeholder="Masukkan nomor telepon"/>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer" style="display: block;">
                    <div class="row">
                        <div class="col-md-6 text-center mt-2">
                            <a href="#" class="font-normal-16 fs-20 text-green" data-bs-dismiss="modal">Batal</a>
                        </div>
                        <div class="col-md-6 text-center">
                            <a href="#" class="btn btn-success">
                                Tambahkan
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
@endsection

@push('page_js')
    <!-- Check Cart Start -->
    <script>
        function validationFrom(data) {
            let message = [];
            let messageValidasi;

            if ( data.first_name.length == 0 ) {
                message.push({
                    name : 'first_name',
                    message : 'Nama Depan Tidak Boleh Kosong'
                });
            }

            if ( data.last_name.length == 0 ) {
                message.push({
                    name : 'last_name',
                    message : 'Nama Belakang Tidak Boleh Kosong'
                });
            }

            if ( data.birth_date.length == 0 ) {
                message.push({
                    name : 'birth_date',
                    message : 'Tanggal Lahir Tidak Boleh Kosong'
                });
            }

            if ( data.phone_number.length == 0 || data.phone_number.length < 11 || data.phone_number.length > 14 || data.phone_number[0] != 6 || data.phone_number[1] != 2 ) {
                if ( data.phone_number.length == 0 ) {
                    messageValidasi = 'Nomor Telepon Tidak Boleh Kosong'
                } else if( data.phone_number.length  < 11 ) {
                    messageValidasi = 'Nomor Telepon Kurang Dari 11 Angka'
                } else if( data.phone_number.length  > 14 ) {
                    messageValidasi = 'Nomor Telepon Lebih Dari 14 Angka'
                } else if ( data.phone_number[0] != 6 || data.phone_number[1] != 2 ) {
                    messageValidasi = 'Nomor Telepon Harus Diawali Dengan 62'
                }

                message.push({
                    name : 'phone_number',
                    message : messageValidasi
                });
            }

            if ( data.ktp_number.length == 0 || data.ktp_number.length < 16 || data.ktp_number.length > 16) {
                if ( data.ktp_number.length == 0 ){
                    messageValidasi = 'Nomor KTP Tidak Boleh Kosong'
                } else if ( data.ktp_number.length < 16 ) {
                    messageValidasi = 'Nomor KTP Kurang Dari 16 Digit'
                } else if ( data.ktp_number.length > 16 ) {
                    messageValidasi = 'Nomor KTP Lebih Dari 16 Digit'
                }

                message.push({
                    name : 'ktp_number',
                    message : messageValidasi
                });
            }

            if ( data.address.length == 0 ) {
                message.push({
                    name : 'address',
                    message : 'Alamat Tidak Boleh Kosong'
                });
            }

            if ( data.passport_number.length == 0 || data.passport_number.length < 5 ) {
                if ( data.passport_number.length == 0 ) {
                    messageValidasi = 'Nomor Passport Tidak Boleh Kosong'
                } else if ( data.passport_number.length < 5 ) {
                    messageValidasi = 'Nomor Passport Kurang Dari 5 Digit'
                }

                message.push({
                    name : 'passport_number',
                    message : messageValidasi
                });
            }

            if ( data.passport_expiry_date.length == 0 ) {
                message.push({
                    name : 'passport_expiry_date',
                    message : 'Tanggal Expaired Passport Tidak Boleh Kosong'
                });
            }

            return message;
        }
    </script>
    <script>
        function checkChart() {
            if ( "{{ Session::get('user')['phone'] }}".length <= 0 ) {
                window.location.href = "{{ url('/profile/edit').'?status=phone-failed' }}";
                return false;
            }
            
            if ( localStorage.getItem("cartId") != "{{ $package_product['uuid_packet'].'-'.Session::get('user')['uuid'] }}" || localStorage.getItem("step") < 2 ) {
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

            // View Count Room
            $('.count-people-doble').html(count_people_doble);
            $('.count-people-triple').html(count_people_triple);
            $('.count-people-quad').html(count_people_quad);

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
            
            // Validation
            const maxPriceBuyPackage = "{{ $configuration[1]['value_configuration'] }}";
            const maxPeopleBuyPackage = "{{ $configuration[0]['value_configuration'] }}";

            if ( total_price >= maxPriceBuyPackage || total_people >= maxPeopleBuyPackage ) {
                $('#btn-add-jamaah-doble').attr('disabled','disabled');
                $('#btn-add-jamaah-triple').attr('disabled','disabled');
                $('#btn-add-jamaah-quad').attr('disabled','disabled');
            } else {
                $('#btn-add-jamaah-doble').removeAttr("disabled");
                $('#btn-add-jamaah-triple').removeAttr("disabled");
                $('#btn-add-jamaah-quad').removeAttr("disabled");
            }
            
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
                localStorage.setItem("step", "3");
                window.location.href = "{{ url('/transaction/checkout', $package_product['id_packet']) }}";
                return false;
            } else {
                return false;
            }
        });
    </script>
    <!-- Link Button End -->
@endpush