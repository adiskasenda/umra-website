<div class="accordion mt-5 mb-5" id="kt_accordion_1">
    <div class="accordion-item">
        <h2 class="accordion-header" id="kt_accordion_1_header_1">
            <button class="accordion-button fs-4 fw-semibold" style="background-color: white" aria-expanded="true"  type="button" data-bs-toggle="collapse" data-bs-target="#kt_accordion_1_body_1" aria-controls="kt_accordion_1_body_1">
                <div class="row">
                    <div class="col-12">
                        <div class="font-normal-600 fs-14 text-green">
                            <i class="fa-solid fa-user-group" style="color: var(--green)"></i>
                            Calon jamaah 1
                        </div>
                        <div class="font-normal-700 fs-16">Belum ada nama jamaah</div>
                    </div>
                </div>
            </button>
        </h2>
        <div id="kt_accordion_1_body_1" class="accordion-collapse collapse show" aria-labelledby="kt_accordion_1" data-bs-parent="#kt_accordion_1_header_1">
            <div class="accordion-body" style="background-color: #FAFAFA">
                <div class="card card-bordered mt-1 mb-5" style="background-color: #F8FCFC">
                    <div class="card-body p-5">
                        <div class="row">
                            <div class="col-12">
                                <div class="font-normal-400 fs-14">
                                    <div class="form-check form-check-custom">
                                        <input class="form-check-input" type="checkbox" value="1" id="flexCheckDefault"/>
                                        <label class="form-check-label text-dark" for="flexCheckDefault">
                                            Saya sendiri yang berangkat sebagai pemesan & calon jamaah pada pesanan ini.
                                            <i class="fa-solid fa-circle-info" style="color: #327DFA"></i>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="mb-2">
                            <label for="nama" class="required form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" placeholder="Masukkan nama sesuai KTP"/>
                        </div>
                        <div class="mb-2">
                            <label for="tempat_lahir" class="required form-label">Tempat Lahir</label>
                            <input type="text" class="form-control" placeholder="Masukkan tempat lahir"/>
                        </div>
                        <div class="mb-2">
                            <label for="tanggal_lahir" class="required form-label">Tanggal Lahir</label>
                            <input type="date" class="form-control" placeholder="Masukkan tanggal lahir"/>
                        </div>
                        <div class="mb-2">
                            <label for="no_telp" class="required form-label">Nomor Telepon</label>
                            <input type="text" class="form-control" placeholder="Masukkan nomor telepon"/>
                        </div>
                        <div class="mb-2">
                            <label for="no_passport" class="required form-label">Nomor Passport</label>
                            <input type="text" class="form-control" placeholder="Masukkan nomor passport"/>
                        </div>
                        <div class="mb-2">
                            <label for="kadaluarsa_passport" class="required form-label">Tanggal Kadaluarsa Passport</label>
                            <input type="date" class="form-control" placeholder="Masukkan tanggal kadaluarsa passport"/>
                        </div>
                        <div class="card card-bordered mt-3 mb-2" style="background-color: #EFF5FF">
                            <div class="card-body p-5">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="font-normal-500 fs-16">
                                            <i class="fa-solid fa-circle-info" style="color: #327DFA"></i> Syarat Passport
                                        </div>
                                        <div class="font-normal-400 fs-14">
                                            Masa berlaku passport harus tersisa <strong>minimal 7 bulan</strong> dari hari keberangkatan sesuai peraturan perjalanan yang telah ditetapkan negara.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="row mb-2">
                            <label for="jenis_kelamin" class="required form-label">Jenis Kelamin</label>
                            <div class="col-6">
                                <div class="form-check form-check-custom">
                                    <input class="form-check-input" type="radio" value="" id="flexRadioDefault"/>
                                    <label class="form-check-label text-dark" for="flexRadioDefault">
                                        Laki-laki
                                    </label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-check form-check-custom">
                                    <input class="form-check-input" type="radio" value="" id="flexRadioDefault"/>
                                    <label class="form-check-label text-dark" for="flexRadioDefault">
                                        Perempuan
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="mb-2">
                            <label for="no_ktp" class="required form-label">Nomor KTP</label>
                            <input type="text" class="form-control" placeholder="Masukkan nomor KTP"/>
                        </div>
                        <div class="mb-2">
                            <label for="ayah_kandung" class="required form-label">Nama Ayah Kandung</label>
                            <input type="text" class="form-control" placeholder="Masukkan nama ayah kandung"/>
                        </div>
                        <div class="mb-2">
                            <label for="vaksinasi" class="required form-label">Vaksinasi Terakhir</label>
                            <select class="form-select" data-control="select2" data-placeholder="Select an option">
                                <option></option>
                                <option value="Vaksin 1">Vaksin 1</option>
                                <option value="Vaksin 2">Vaksin 2</option>
                                <option value="Vaksin 3">Vaksin 3</option>
                            </select>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-4 mt-2">
                        <div class="font-normal-500 fs-16 text-red">
                            <i class="fa-solid fa-trash" style="color: var(--secondary)"></i>
                            Hapus Jamaah
                        </div>
                    </div>
                    <div class="col-8">
                        <div class="text-right">
                            <button class="btn text-green">Batal</button>
                            <button class="btn btn-success">
                                Simpan
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>