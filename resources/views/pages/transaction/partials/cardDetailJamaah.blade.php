<div class="accordion mt-5 mb-5" id="kt_accordion_1">
    <div class="accordion-item">
        <h2 class="accordion-header" id="kt_accordion_1_header_1">
            <button class="accordion-button fs-4 fw-semibold" style="background-color: white;" aria-expanded="true"  type="button" data-bs-toggle="collapse" data-bs-target="#kt_accordion_1_body_1" aria-controls="kt_accordion_1_body_1">
                <div class="row" style="width: 100%;">
                    <div class="col-1 mt-1">
                        <img src="{{ $icon }}" alt="{{ $icon }}">
                    </div>
                    <div class="col-5">
                        <div class="font-normal-700 fs-16">{{ $name }}</div>
                        <div class="font-normal-600 fs-14 text-green">
                            <i class="fa-solid fa-user-group me-2" style="color: var(--green)"></i>
                            {{ count($jamaah) }} Orang
                        </div>
                    </div>
                    <div class="col-5 mt-5">
                        <div class="font-normal-700 fs-18 text-green">
                            Rp. {{ number_format($price * count($jamaah)) }}
                        </div>
                    </div>
                </div>
            </button>
        </h2>
        <div id="kt_accordion_1_body_1" class="accordion-collapse collapse show" aria-labelledby="kt_accordion_1" data-bs-parent="#kt_accordion_1_header_1">
            <div class="accordion-body" style="background-color: #F8FCFC">
                @foreach($jamaah as $key => $jamaah)
                    <div class="row">
                        <div class="col-10">
                            <div class="font-normal-400 fs-12 text-green">
                                <i class="fa-solid fa-user-group me-2" style="color: var(--green)"></i>
                                Calon Jamaah {{ $key+1 }}
                            </div>
                            <div class="font-normal-700 fs-16">
                                {{ $jamaah['first_name'].' '.$jamaah['last_name'] }}
                            </div>
                        </div>
                        <div class="col-2">
                            <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modal-detail-jamaah-{{ $key }}-{{ $type_room }}">Detail</button>

                            <!-- modal detail jamaah -->
                            <div class="modal fade" tabindex="-1" id="modal-detail-jamaah-{{ $key }}-{{ $type_room }}">
                                <div class="modal-dialog modal-lg modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h3 class="modal-title">Detail Jamaah</h3>
                                            <!--begin::Close-->
                                            <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                                                <span class="svg-icon svg-icon-1">X</span>
                                            </div>
                                            <!--end::Close-->
                                        </div>
                                        <div class="modal-body">
                                            <div class="row mb-5">
                                                <div class="col-md-6">
                                                    <div class="mt-2 font-normal-400 fs-14">
                                                        Nama Lengkap
                                                    </div>
                                                    <div class="mt-1 font-normal-700 fs-16">
                                                        {{ $jamaah['first_name'].' '.$jamaah['last_name'] }}
                                                    </div>

                                                    <div class="mt-5 font-normal-400 fs-14">
                                                        Jenis Kelamin
                                                    </div>
                                                    <div class="mt-1 font-normal-700 fs-16">
                                                        @if ( $jamaah['gender'] == 1 )
                                                            Laki-laki <span><i class="fa-solid fa-mars" style="color: black"></i></span>
                                                        @else
                                                            Perempuan <span><i class="fa-solid fa-venus" style="color: black"></i></span>
                                                        @endif
                                                    </div>

                                                    <div class="mt-5 font-normal-400 fs-14">
                                                        Tempat, Tanggal Lahir
                                                    </div>
                                                    <div class="mt-1 font-normal-700 fs-16">
                                                        Kab. Jepara, {{ date('d M Y',strtotime($jamaah['birth_date'])) }}
                                                    </div>

                                                    <div class="mt-5 font-normal-400 fs-14">
                                                        Nama Ayah Kandung
                                                    </div>
                                                    <div class="mt-1 font-normal-700 fs-16">
                                                        Sumaryono
                                                    </div>

                                                    <div class="mt-5 font-normal-400 fs-14">
                                                        Alamat Domisili
                                                    </div>
                                                    <div class="mt-1 font-normal-700 fs-16">
                                                        {{ $jamaah['address'] }}
                                                        <i class="fa-solid fa-copy mx-2" style="color: var(--green)"></i>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mt-2 font-normal-400 fs-14">
                                                        Nomor Telepon
                                                        <i class="fa-solid fa-copy mx-2" style="color: var(--green)"></i>
                                                    </div>
                                                    <div class="mt-1 font-normal-700 fs-16">
                                                        {{ $jamaah['phone_number'] }}
                                                    </div>

                                                    <div class="mt-5 font-normal-400 fs-14">
                                                        Umur
                                                    </div>
                                                    <div class="mt-1 font-normal-700 fs-16">
                                                        48 Tahun 6 Bulan
                                                    </div>

                                                    <div class="mt-5 font-normal-400 fs-14">
                                                        Nomor KTP
                                                    </div>
                                                    <div class="mt-1 font-normal-700 fs-16">
                                                        {{ $jamaah['ktp_number'] }}
                                                        <i class="fa-solid fa-copy mx-2" style="color: var(--green)"></i>
                                                    </div>

                                                    <div class="mt-5 font-normal-400 fs-14">
                                                        Foto KTP
                                                    </div>
                                                    <div class="mt-1 font-normal-700 fs-16">
                                                        <img style="max-width:100%;" class="image-default" src="{{ $jamaah['ktp_url'] }}"  alt="{{ $jamaah['ktp_url'] }}">
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="mt-2 font-normal-400 fs-14">
                                                        Nomor Passport
                                                    </div>
                                                    <div class="mt-1 font-normal-700 fs-16">
                                                        {{ $jamaah['passport_number'] }}
                                                        <i class="fa-solid fa-copy mx-2" style="color: var(--green)"></i>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="mt-2 font-normal-400 fs-14">
                                                        Tanggal Kadaluarsa
                                                    </div>
                                                    <div class="mt-1 font-normal-700 fs-16">
                                                        {{ date('d M Y',strtotime($jamaah['passport_expiry_date']))  }}
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="mt-2 font-normal-400 fs-14">
                                                        Vaksinasi Terakhir
                                                    </div>
                                                    <div class="mt-1 font-normal-700 fs-16">
                                                        Booster 2
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="mt-5 font-normal-400 fs-14">
                                                        Foto Passport
                                                    </div>
                                                    <div class="mt-1 font-normal-700 fs-16">
                                                        <img src="{{ asset('assets-web/img/image/ktp.jpg') }}" style="max-width:100%;" alt="">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mt-5 font-normal-400 fs-14">
                                                        Foto Surat Vaksin
                                                    </div>
                                                    <div class="mt-1 font-normal-700 fs-16">
                                                        <img src="{{ asset('assets-web/img/image/ktp.jpg') }}" style="max-width:100%;" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>