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
                        'step' => 1,
                        'namePackage' => $package_product['name'],
                        'flag_umroh' =>  Helpers::viewFlagUmroh($package_product['flag_umroh']),
                        'quota' => $package_product['quota']
                    ])
                </div>
                <div class="col-md-9">
                    <a href="#" class="font-normal-400 fs-16 text-green mt-3"><i class="fa-solid fa-arrow-left"></i> Langkah 2 dari 3</a>
                    <div class="font-normal-700 fs-32">Biodata Calon Jamaah</div>
                    <div class="font-normal-400 fs-16">Silakan lengkapi biodata calon jamaah sesuai data KTP & Passport masing-masing</div>
                    <div class="card card-bordered mt-5" style="width: 100$;">
                        <div class="card-header" style="background: #F8FCFC; display:inline;">
                            <div class="row mt-5 mb-5">
                                <div class="col-2 mt-2">
                                    <img src="{{ asset('assets-web/img/icon/double.png') }}" width="40px" height="40px" alt="{{ asset('assets-web/img/icon/double.png') }}">
                                    <span class="font-normal-600 fs-16">Double</span>
                                </div>
                                <div class="col-2 mt-3">
                                    <div class="font-normal-600 fs-16">
                                        <i class="fa-solid fa-user-group" style="color: var(--dark)"></i>
                                        1 Orang
                                    </div>
                                </div>
                                <div class="col-8 text-right">
                                    <button class="btn btn-success">
                                        <i class="fa-solid fa-plus"></i>
                                        Tambah Jamaah
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="card-body" style="padding: 1rem !important;">
                            <!--begin::Accordion-->
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
                            <!--end::Accordion-->
                        </div>
                    </div>

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
                        <i class="fa-solid fa-circle-info" style="color: #B3261E"></i>
                        <button class="btn btn-success">
                            Lanjutkan<i class="fa-solid fa-chevron-right"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection