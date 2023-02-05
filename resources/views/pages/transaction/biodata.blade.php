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
                                        <span id="total_jamaah">0</span> Orang
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
    <div class="modal fade" tabindex="-1" id="modal-tambah-telepon">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">Tambahkan Nomor Telepon</h3>
                    <!--begin::Close-->
                    <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                        <span class="svg-icon svg-icon-1">X</span>
                    </div>
                    <!--end::Close-->
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
    </div>
@endsection

@push('page_js')

    <script>
        $(".date").flatpickr({
            dateFormat: "d-m-Y",
        });
    </script>

    <!-- check Chart -->
    <script>
        var cardData = JSON.parse(localStorage.getItem("cartData"));

        // Count Room
        const count_people_doble = cardData[0][0]['doble'];
        $('.count-people-doble').html(count_people_doble);
        const count_people_triple = cardData[0][1]['triple'];
        $('.count-people-triple').html(count_people_triple);
        const count_people_quad = cardData[0][2]['quad']
        $('.count-people-quad').html(count_people_quad);

        // Check Status Register
        const count_jamaah_double = cardData[0][0]['jamaah'].length;
        const count_jamaah_triple = cardData[0][1]['jamaah'].length;
        const count_jamaah_quad = cardData[0][2]['jamaah'].length;

        if ( 
            count_people_doble == count_jamaah_double &&  
            count_people_triple == count_jamaah_triple &&  
            count_people_quad == count_jamaah_quad
        ) {
            $('#btn-next').removeAttr("disabled");
        }

        function count_people () {

        }

        function next_jamaah () {

        }
    </script>

    <!-- Link Button -->
    <script>
        $('#btn-next').click(function() {
            window.location.href = "{{ url('/transaction/checkout', $package_product['id_packet']) }}";
            return false;
        });
    </script>
@endpush