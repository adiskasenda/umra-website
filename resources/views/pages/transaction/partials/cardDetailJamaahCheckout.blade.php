<div class="row mb-5 mt-5">
    <div class="col-10">
        <div class="font-normal-400 fs-12 text-green">
            <i class="fa-solid fa-user-group me-2" style="color: var(--green)"></i>
            Calon Jamaah
        </div>
        <div class="font-normal-700 fs-16 mt-2">
            {{ $first_name.' '.$last_name }}
        </div>
    </div>
    <div class="col-2">
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
                        <div class="row mb-5">
                            <div class="col-md-6">
                                <div class="mt-2 font-normal-400 fs-14">
                                    Nama Lengkap
                                </div>
                                <div class="mt-1 font-normal-700 fs-16">
                                    {{ $first_name.' '.$last_name }}
                                </div>

                                <div class="mt-5 font-normal-400 fs-14">
                                    Tanggal Lahir
                                </div>
                                <div class="mt-1 font-normal-700 fs-16">
                                    {{ $birth_date }}
                                </div>

                                <div class="mt-5 font-normal-400 fs-14">
                                    Jenis Kelamin
                                </div>
                                <div class="mt-1 font-normal-700 fs-16">
                                    {{ $gender }}
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mt-2 font-normal-400 fs-14">
                                    Nomor Telepon
                                    <!-- <i class="fa-solid fa-copy" style="color: var(--green)"></i> -->
                                </div>
                                <div class="mt-1 font-normal-700 fs-16">
                                    {{ $phone_number }}
                                </div>

                                <div class="mt-5 font-normal-400 fs-14">
                                    Nomor KTP
                                </div>
                                <div class="mt-1 font-normal-700 fs-16">
                                    {{ $ktp_number }}
                                    <!-- <i class="fa-solid fa-copy" style="color: var(--green)"></i> -->
                                </div>
                                <div class="mt-5 font-normal-400 fs-14">
                                    Alamat
                                </div>
                                <div class="mt-1 font-normal-700 fs-16">
                                    {{ $address }}
                                    <!-- <i class="fa-solid fa-copy" style="color: var(--green)"></i> -->
                                </div>
                            </div>
                        </div>

                        <hr>

                        <div class="row">
                            <div class="col-md-4 text-center">
                                <div class="mt-2 font-normal-400 fs-14">
                                    Nomor Passport
                                </div>
                                <div class="mt-1 font-normal-700 fs-16">
                                    {{ $passport_number }}
                                    <!-- <i class="fa-solid fa-copy" style="color: var(--green)"></i> -->
                                </div>
                            </div>
                            <div class="col-md-4 text-center">
                                <div class="mt-2 font-normal-400 fs-14">
                                    Tanggal Kadaluarsa
                                </div>
                                <div class="mt-1 font-normal-700 fs-16">
                                    {{ $passport_expiry_date }}
                                </div>
                            </div>
                            <div class="col-md-4 text-center">
                                <div class="mt-2 font-normal-400 fs-14">
                                    Vaksinasi Terakhir
                                </div>
                                <div class="mt-1 font-normal-700 fs-16">
                                    {{ $vaccine_status }}
                                </div>
                            </div>
                        </div>

                        <!-- <div class="card-body card-bordered mt-5 p-3" style="background-color: #F8FCFC">
                            <div class="font-normal-500 fs-16">
                                <i class="fa-solid fa-circle-info" style="color: var(--primary)"></i>
                                Syarat Passport
                            </div>
                            <div class="font-normal-500 fs-12 mt-3">
                                Masa berlaku passport harus tersisa <strong>minimal 7 bulan</strong> dari hari keberangkatan sesuai peraturan perjalanan yang telah ditetapkan negara
                            </div>
                        </div>

                        <hr>

                        <div class="card-body card-bordered mt-5 p-3" style="background-color: #FCF8F8">
                            <div class="font-normal-500 fs-16">
                                Status Verifikasi Data <span class="font-normal-400 fs-12" style="border-radius: 15px; background-color: #FEEEED; color: #B3261E; border:none; padding:5px 10px; width:max-content; margin-left: 10px;">Belum Diverifikasi</span>
                            </div>
                            <div class="font-normal-500 fs-12 mt-3">
                                Data yang telah dimasukkan akan diverifikasi oleh admin UmraID untuk mengecek kelengkapannya.
                            </div>
                        </div> -->

                    </div>
                    <div class="modal-footer">
                        <!-- <a href="#" class="text-left text-green">
                            <i class="fa-solid fa-pen-to-square" style="color: var(--green)"></i>
                            Edit Biodata
                        </a> -->
                        <button type="button" class="btn btn-success" data-bs-dismiss="modal">Tutup</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>