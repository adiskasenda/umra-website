<div class="accordion mt-5 mb-5" id="kt_accordion_1">
    <div class="accordion-item">
        <h2 class="accordion-header" id="kt_accordion_1_header_1">
            <button class="accordion-button fs-4 fw-semibold" style="background-color: white" aria-expanded="true"  type="button" data-bs-toggle="collapse" data-bs-target="#kt_accordion_room_{{ $room }}_{{ $id }}" aria-controls="kt_accordion_room_{{ $room }}_{{ $id }}">
                <div class="row">
                    <div class="col-12">
                        <div class="font-normal-600 fs-14 text-green">
                            <i class="fa-solid fa-user-group me-2" style="color: var(--green)"></i>
                            Calon jamaah
                        </div>
                        <div class="font-normal-700 fs-16 mt-5">{{ $first_name.' '.$last_name }}</div>
                    </div>
                </div>
            </button>
        </h2>
        <div id="kt_accordion_room_{{ $room }}_{{ $id }}" class="accordion-collapse collapse show" aria-labelledby="kt_accordion_1" data-bs-parent="#kt_accordion_1_header_1">
            <div class="accordion-body" style="background-color: #FAFAFA">
                
                <div class="row">

                    <!-- Nama Depan Field -->
                    <div class="form-group col-sm-6 mb-5">
                        <label for="first_name" class="required form-label">Nama Depan</label>
                        <div class="font-normal-700 fs-16">{{ $first_name ? $first_name : '-' }}</div>
                    </div>

                    <!-- Nama Belakang Field -->
                    <div class="form-group col-sm-6 mb-5">
                        <label for="last_name" class="required form-label">Nama Depan</label>
                        <div class="font-normal-700 fs-16">{{ $last_name ? $last_name : '-' }}</div>
                    </div>

                </div>
                <div class="row">

                    <!-- Jenis Kelamin Field -->
                    <div class="form-group col-sm-6 mb-5">
                        <label for="gender" class="form-label">Jenis Kelamin</label>
                        <div class="font-normal-700 fs-16">
                            @if ( $gender == 1 )
                                Laki-laki <span><i class="fa-solid fa-mars me-2" style="color: black"></i></span>
                            @else
                                Perempuan <span><i class="fa-solid fa-venus me-2" style="color: black"></i></span>
                            @endif
                        </div>
                    </div>

                    <!-- Nomor KTP Field -->
                    <div class="form-group col-sm-6 mb-5">
                        <label for="no_ktp" class="required form-label">Nomor KTP</label>
                        <div class="font-normal-700 fs-16">{{ $ktp_number ? $ktp_number : '-' }}</div>
                    </div>
                    
                </div>
                <div class="row">

                    <!-- Tanggal Lahir & Alamat Field -->
                    <div class="col-sm-6 mb-5">
                        <div class="form-group mb-5">
                            <label for="birth_date" class="required form-label">Tanggal Lahir</label>
                            <div class="font-normal-700 fs-16">{{ $birth_date ? $birth_date : '-' }}</div>
                        </div>
                        <div class="form-group">
                            <label for="address" class="required form-label">Alamat</label>
                            <div class="font-normal-700 fs-16">{{ $address ? $address : '-' }}</div>
                        </div>
                    </div>

                    <!-- Vaksinasi Field -->
                    <div class="form-group col-sm-6 mb-5">
                        <label for="no_ktp" class="required form-label">Vaksinasi</label>
                        <div class="font-normal-700 fs-16">{{ $vaccine_status ? $vaccine_status : '-' }}</div>
                    </div>
                    
                </div>
                <div class="row">
                    <!-- Nomor Telepon Field -->
                    <div class="form-group col-sm-6 mb-5">
                        <label for="no_telp" class="required form-label">Nomor Telepon</label>
                        <div class="font-normal-700 fs-16">{{ $phone_number ? $phone_number : '-' }}</div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <!-- Nomor Passport Field -->
                    <div class="form-group col-sm-6 mb-5">
                        <label for="no_telp" class="required form-label">Nomor Passport</label>
                        <div class="font-normal-700 fs-16">{{ $passport_number ? $passport_number : '-' }}</div>
                    </div>

                    <!-- Nomor Passport Field -->
                    <div class="form-group col-sm-6 mb-5">
                        <label for="no_telp" class="required form-label">Masa Berlaku Passport</label>
                        <div class="font-normal-700 fs-16">{{ $passport_expiry_date ? $passport_expiry_date : '-' }}</div>
                    </div>
                </div>
                <!-- <div class="row">
                    <div class="col-6">
                        <div class="mt-2 font-normal-400 fs-14">
                            Nama Depan
                        </div>
                        <div class="mt-1 font-normal-700 fs-16">
                            hello
                        </div>

                        <div class="mt-5 font-normal-400 fs-14">
                            Tempat Lahir
                        </div>
                        <div class="mt-1 font-normal-700 fs-16">
                            Jakarta
                        </div>

                        <div class="mt-5 font-normal-400 fs-14">
                            Tanggal Lahir
                        </div>
                        <div class="mt-1 font-normal-700 fs-16">
                            15 Jan 1977
                        </div>

                        <div class="mt-5 font-normal-400 fs-14">
                            Alamat Domisili
                        </div>
                        <div class="mt-1 font-normal-700 fs-16">
                            Jl. raya sudirman barat gang III RT 03 RW 12, Jakarta Utara, DKI Jakarta, Indonesia 48100
                        </div>

                        <div class="mt-5 font-normal-400 fs-14">
                            Nomor Telepon
                        </div>
                        <div class="mt-1 font-normal-700 fs-16">
                            08736472643
                            <i class="fa-solid fa-copy mx-2" style="color: var(--green)"></i>
                        </div>

                        <div class="mt-5 font-normal-400 fs-14">
                            Jenis Kelamin
                        </div>
                        <div class="mt-1 font-normal-700 fs-16">
                            Laki-laki
                            <span><i class="fa-solid fa-mars mx-2" style="color: black"></i></span>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mt-5 font-normal-400 fs-14">
                            Nomor KTP
                        </div>
                        <div class="mt-1 font-normal-700 fs-16">
                            76217361245651624
                            <i class="fa-solid fa-copy mx-2" style="color: var(--green)"></i>
                        </div>

                        <div class="mt-5 font-normal-400 fs-14">
                            Foto KTP
                        </div>
                        <div class="mt-1 font-normal-700 fs-16">
                            <img src="{{ asset('assets-web/img/image/ktp.jpg') }}" style="max-width:100%;" alt="">
                        </div>

                        <div class="mt-5 font-normal-400 fs-14">
                            Nama Ayah Kandung
                        </div>
                        <div class="mt-1 font-normal-700 fs-16">
                            Sumaryono
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-6">
                        <div class="mt-5 font-normal-400 fs-14">
                            Nomor Passport
                        </div>
                        <div class="mt-1 font-normal-700 fs-16">
                            762173612456516244374
                            <i class="fa-solid fa-copy mx-2" style="color: var(--green)"></i>
                        </div>

                        <div class="mt-5 font-normal-400 fs-14">
                            Foto Passport
                        </div>
                        <div class="mt-1 font-normal-700 fs-16">
                            <img src="{{ asset('assets-web/img/image/ktp.jpg') }}" style="max-width:100%;" alt="">
                        </div>

                        <div class="mt-5 font-normal-400 fs-14">
                            Tanggal Kadaluarsa Passport
                        </div>
                        <div class="mt-1 font-normal-700 fs-16">
                            23 Februari 2024
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mt-5 font-normal-400 fs-14">
                            Vaksinasi Terakhir
                        </div>
                        <div class="mt-1 font-normal-700 fs-16">
                            Booster 2
                        </div>

                        <div class="mt-5 font-normal-400 fs-14">
                            Foto Surat Vaksin
                        </div>
                        <div class="mt-1 font-normal-700 fs-16">
                            <img src="{{ asset('assets-web/img/image/ktp.jpg') }}" style="max-width:100%;" alt="">
                        </div>
                    </div>
                </div> -->
                <hr>
                <div class="row">
                    <div class="col-4 mt-2">
                        <button class="btn font-normal-500 fs-16 text-red remove_form_jamaah" data-id="{{ $id }}" style="color: var(--secondary);">
                            <i class="fa-solid fa-trash me-2" style="color: var(--secondary)"></i>
                            Hapus Jamaah
                        </button>
                    </div>
                    <div class="col-8">
                        <div class="text-right">
                            <button class="btn btn-outline btn-outline-success text-green btn-edit" data-id="{{ $id }}">
                                <i class="fa-solid fa-pen-to-square me-2" style="color: var(--green)"></i>
                                Edit Biodata
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

