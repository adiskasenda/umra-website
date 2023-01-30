@extends('layouts.master')

@section('content')
    <div class="container-fluid py-5 mb-8">
        <div class="container">
            @include('pages.transaction.partials.breadcrumb',[
                'breadcrumb' => 'hello',
            ])
            <div class="row">
                <div class="col-md-3">
                    @include('pages.transaction.partials.sidebar', [
                        'step' => 2,
                        'namePackage' => $package_product['name'],
                        'flag_umroh' =>  Helpers::viewFlagUmroh($package_product['flag_umroh']),
                        'quota' => $package_product['quota']
                    ])
                </div>
                <div class="col-md-9">
                    <a href="{{ url('/transaction/jamaah', $package_product['id_packet']) }}" class="font-normal-400 fs-16 text-green mt-3">
                        <i class="fa-solid fa-arrow-left"></i> Langkah 2 dari 3
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
                                        <i class="fa-solid fa-user-group" style="color: var(--green)"></i>
                                        3 Orang
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
                                    <div class="font-normal-400 fs-14"><i class="fa-solid fa-phone"></i>Kontak Pemesan</div>
                                    <div class="font-normal-700 fs-16 text-green">+62897182734 (Mimunatun Jannah)</div>
                                </div>
                                <div class="col-6 mt-2 text-right">
                                    <button class="btn btn-success">Tambahkan Nomor Telepon</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card card-bordered mt-8 mb-10" style="background-color: #F8FCFC">
                        <div class="card-body p-5 font-normal-400 fs-14 pt-3 pb-3">
                            <i class="fa-solid fa-circle-info" style="color: #327DFA"></i>
                            Pastikan nomor yang dijadikan kontak sudah terdaftar akun WhatsApp
                        </div>
                    </div>
                    <hr>

                    <div class="text-right">
                        <button class="btn text-green"><i class="fa-solid fa-chevron-left"></i>Kembali</button>
                        
                        <i class="fa-solid fa-circle-info" style="color: #B3261E; font-size: 23px;"></i>
                        
                        <button class="btn btn-success" disabled>
                            Lanjutkan<i class="fa-solid fa-chevron-right"></i>
                        </button>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection

@push('page_js')
    <!-- check Chart -->
    <script type="text/javascript" nonce>
        const cardData = JSON.parse(localStorage.getItem("cartData"));

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
    </script>

    <!-- Link Button -->
    <script>
        $('#btn-next').click(function() {
            window.location.href = "{{ url('/transaction/biodata', $package_product['id_packet']) }}";
            return false;
        });
    </script>
@endpush