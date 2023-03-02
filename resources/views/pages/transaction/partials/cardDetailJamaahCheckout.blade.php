<div class="row mb-5 mt-5">
    <div class="col-lg-10 col-md-10 col-9">
        <div class="font-normal-400 fs-12 text-green">
            <i class="fa-solid fa-user-group me-2" style="color: var(--green)"></i>
            Calon Jamaah
        </div>
        <div class="font-normal-700 fs-16 mt-2">
            {{ $first_name.' '.$last_name }}
        </div>
    </div>
    <div class="col-lg-2 col-md-2 col-3">
        <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modal-detail-jamaah-{{ $room }}-{{ $id }}">Detail</button>

        <!-- modal detail jamaah -->
        <div class="modal fade" tabindex="-1" id="modal-detail-jamaah-{{ $room }}-{{ $id }}">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title">Detail Jamaah</h3>

                        <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                            <span class="svg-icon svg-icon-1">X</span>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <!-- Nama Depan Field -->
                            <div class="form-group col-6 mb-5">
                                <label for="first_name" class="form-label">Nama Depan</label>
                                <div class="font-normal-700 fs-16">
                                    {{ $first_name }}
                                </div>
                            </div>

                            <!-- Nama Belakang Field -->
                            <div class="form-group col-6 mb-5">
                                <label for="last_name" class="form-label">Nama Depan</label>
                                <div class="font-normal-700 fs-16">
                                    {{ $last_name }}
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <!-- Jenis Kelamin Field -->
                            <div class="form-group col-6 mb-5">
                                <label for="gender" class="form-label">Jenis Kelamin</label>
                                <div class="font-normal-700 fs-16">
                                    {{ $gender }}
                                </div>
                            </div>

                            <!-- Nomor KTP Field -->
                            <div class="form-group col-6 mb-5">
                                <label for="ktp_number" class="form-label">Nomor KTP</label>
                                <div class="font-normal-700 fs-16">
                                    {{ $ktp_number }}
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <!-- Tanggal Lahir & Alamat Field & Nomor Telepon -->
                            <div class="col-6">
                                <div class="form-group mb-5">
                                    <label for="birth_date" class="form-label">Tanggal Lahir</label>
                                    <div class="font-normal-700 fs-16">
                                        {{ $birth_date }}
                                    </div>
                                </div>
                                <div class="form-group mb-5">
                                    <label for="address" class="form-label">Alamat</label>
                                    <div class="font-normal-700 fs-16">
                                        {{ $address }}
                                    </div>
                                </div>
                                <div class="form-group mb-5">
                                    <label for="phone_number" class="form-label">Nomor Telepon</label>
                                    <div class="font-normal-700 fs-16">
                                        {{ $phone_number }}
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Vaksinasi Field & Image KTP Field -->
                            <div class="col-6">
                                <div class="form-group mb-5">
                                    <label for="vaccine_status" class="form-label">Status Vaksinasi</label>
                                    <div class="font-normal-700 fs-16">
                                        {{ $vaccine_status }}
                                    </div>
                                </div>
                                <div class="form-group mb-5">
                                    <label for="ktp_url" class="form-label">Image KTP</label>
                                    <div><img width="70%" class="ktp_url" src="{{ $ktp_url }}" alt="{{ $ktp_url }}"></div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <!-- Nomor Passport Field -->
                            <div class="form-group col-6 mb-5">
                                <label for="passport_number" class="form-label">Nomor Passport</label>
                                <div class="font-normal-700 fs-16">
                                    {{ $passport_number ? $passport_number : '-' }}
                                </div>
                            </div>

                            <!-- Passport Expaired Field -->
                            <div class="form-group col-6 mb-5">
                                <label for="passport_number" class="form-label">Nomor Passport</label>
                                <div class="font-normal-700 fs-16">
                                    {{ $passport_number ? $passport_number : '-' }}
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success" data-bs-dismiss="modal">Tutup</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

