<div class="accordion mt-5 mb-5" id="kt_accordion_1">
    <div class="accordion-item">
        <h2 class="accordion-header" id="kt_accordion_1_header_1">
            <button class="accordion-button fs-4 fw-semibold" style="background-color: white" aria-expanded="true"  type="button" data-bs-toggle="collapse" data-bs-target="#kt_accordion_room_{{ $room }}_{{ $id }}" aria-controls="kt_accordion_room_{{ $room }}_{{ $id }}">
                <div class="row">
                    <div class="col-12">
                        <div class="font-normal-600 fs-14 text-green">
                            <i class="fa-solid fa-user-group me-sm-3" style="color: var(--green)"></i>
                            Calon jamaah
                        </div>
                        <div class="font-normal-700 fs-16 mt-5">
                            @if( empty($first_name) || empty($last_name) ) 
                                Belum ada nama jamaah 
                            @else 
                                {{ $first_name.' '.$last_name }} 
                            @endif</div>
                    </div>
                </div>
            </button>
        </h2>
        <div id="kt_accordion_room_{{ $room }}_{{ $id }}" class="accordion-collapse collapse show" aria-labelledby="kt_accordion_1" data-bs-parent="#kt_accordion_1_header_1">
            <div class="accordion-body" style="background-color: #FAFAFA">
                <form action="#">

                    <!-- Form Jamaah -->
                    <div class="row">
                        
                        <!-- Nama Depan Field -->
                        <div class="form-group col-sm-6 mb-5">
                            <label for="first_name" class="required form-label">Nama Depan</label>
                            <input type="text" class="form-control" name="first_name" value="{{ $first_name }}" placeholder="Masukkan Nama Depan"/>
                        </div>

                        <!-- Nama Belakang Field -->
                        <div class="form-group col-sm-6 mb-5">
                            <label for="last_name" class="form-label">Nama Belakang</label>
                            <input type="text" class="form-control" name="last_name" value="{{ $last_name }}" placeholder="Masukkan Nama Belakang"/>
                        </div>

                    </div>

                    <div class="row">
                        <!-- Jenis Kelamin Field -->
                        <div class="form-group col-sm-6 mb-5">
                            <label for="gender" class="form-label">Jenis Kelamin</label>

                            <div class="row mt-3">
                                <!--begin::Col-->
                                <div class="col-4">
                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" type="radio" value="1" name="gender" id="laki-laki" checked/>
                                        <label class="form-check-label" for="laki-laki">
                                            Laki Laki
                                        </label>
                                    </div>
                                </div>

                                <!--begin::Col-->
                                <div class="col-4">
                                    <label class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" type="radio" value="0"  name="gender" id="perempuan"/>
                                        <span class="form-check-label"  for="perempuan">
                                            Perempuan
                                        </span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Nomor KTP Field -->
                        <div class="form-group col-sm-6 mb-5">
                            <label for="no_ktp" class="required form-label">Nomor KTP</label>
                            <input type="number" class="form-control" name="ktp_number" value="{{ $ktp_number }}" placeholder="Masukkan nomor KTP"/>
                        </div>

                    </div>

                    <div class="row">
                        
                        <!-- Tanggal Lahir & Alamat Field -->
                        <div class="col-sm-6 mb-5">
                            <div class="form-group mb-5">
                                <label for="birth_date" class="required form-label">Tanggal Lahir</label>
                                <input class="form-control date" name="birth_date" value="{{ $birth_date }}" placeholder="Masukan Tanggal Lahir"/>
                            </div>
                            <div class="form-group">
                                <label for="address" class="required form-label">Alamat</label>
                                <textarea class="form-control" placeholder="Masukan Alamat" name="address" data-kt-autosize="true">{{ $address }}</textarea>
                            </div>
                        </div>
                        

                        <!-- Foto KTP Field -->
                        <div class="form-group col-sm-6 mb-5">
                            <!-- <label for="no_ktp" class="required form-label">Foto KTP</label>
                            <div id="input-avatar" class="image-input image-input-empty form-control bg-picture" data-kt-image-input="true">
                                <div class="image-input-wrapper" style="margin: auto;background-repeat: no-repeat;width: 50%;height: 269px;"></div>

                                <label class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                                    data-kt-image-input-action="change"
                                    data-bs-toggle="tooltip"
                                    data-bs-dismiss="click"
                                    title="Change Image">
                                    <i class="bi bi-pencil-fill fs-7"></i>
                                    <input type="file" name="file_url_avatar" accept=".png, .jpg, .jpeg" />
                                    <input type="hidden" name="file_url_avatar_old"/>
                                </label>

                                <span class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                                    data-kt-image-input-action="cancel"
                                    data-bs-toggle="tooltip"
                                    data-bs-dismiss="click"
                                    title="Cancel Image">
                                    <i class="bi bi-x fs-2"></i>
                                </span>

                                <span class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                                    data-kt-image-input-action="remove"
                                    data-bs-toggle="tooltip"
                                    data-bs-dismiss="click"
                                    title="Remove Image">
                                    <i class="bi bi-x fs-2"></i>
                                </span>
                            </div> -->

                            <!-- Vaccine Status Field -->
                            <label for="vaccine_status" class="required form-label">Vaksinasi</label>
                            <div class="row">
                                <!--begin::Col-->
                                <div class="col-4 mt-3">
                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" type="radio" value="0" name="vaccine_status" id="belum_vaksin" checked/>
                                        <label class="form-check-label" for="belum_vaksin">
                                            Belum Vaksin
                                        </label>
                                    </div>
                                </div>

                                <!--begin::Col-->
                                <div class="col-4 mt-3">
                                    <label class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" type="radio" value="1"  name="vaccine_status" id="dosis_pertama"/>
                                        <span class="form-check-label"  for="dosis_pertama">
                                            Dosis Pertama
                                        </span>
                                    </label>
                                </div>

                                <!--begin::Col-->
                                <div class="col-4 mt-3">
                                    <label class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" type="radio" value="2"  name="vaccine_status" id="dosis_kedua"/>
                                        <span class="form-check-label"  for="dosis_kedua">
                                            Dosis Kedua
                                        </span>
                                    </label>
                                </div>

                                <!--begin::Col-->
                                <div class="col-4 mt-3">
                                    <label class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" type="radio" value="3"  name="vaccine_status" id="booster"/>
                                        <span class="form-check-label"  for="booster">
                                            Booster
                                        </span>
                                    </label>
                                </div>

                                <!--begin::Col-->
                                <div class="col-4 mt-3">
                                    <label class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" type="radio" value="4"  name="vaccine_status" id="booster_kedua"/>
                                        <span class="form-check-label"  for="booster_kedua">
                                            Booster Kedua
                                        </span>
                                    </label>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <!-- Nomor Telepon Field -->
                        <div class="form-group col-sm-6 mb-5">
                            <label for="no_telp" class="required form-label">Nomor Telepon</label>
                            <input type="number" class="form-control" name="phone_number" value="{{ $phone_number }}" placeholder="Masukkan nomor telepon"/>
                        </div>
                    </div>

                    <hr>
                    
                    <div class="row">
                        <!-- Nomor Passport Field -->
                        <div class="form-group col-sm-6 mb-5">
                            <label for="no_telp" class="required form-label">Nomor Passport</label>
                            <input type="number" class="form-control" name="passport_number" value="{{ $passport_number }}" placeholder="Masukkan Nomor Passport"/>
                        </div>

                        <!-- Nomor Passport Field -->
                        <div class="form-group col-sm-6 mb-5">
                            <label for="no_telp" class="required form-label">Masa Berlaku Passport</label>
                            <input type="text" class="form-control date" name="passport_expiry_date" value="{{ $passport_expiry_date }}" placeholder="Masukkan Masa Berlaku Passport"/>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-sm-6 mb-5">
                            <div class="card card-bordered mt-3 mb-2" style="background-color: #EFF5FF">
                                <div class="card-body p-5">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="font-normal-500 fs-16">
                                                <i class="fa-solid fa-circle-info me-2" style="color: #327DFA"></i> Syarat Passport
                                            </div>
                                            <div class="font-normal-400 fs-14">
                                                Masa berlaku passport harus tersisa <strong>minimal 7 bulan</strong> dari hari keberangkatan sesuai peraturan perjalanan yang telah ditetapkan negara.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <hr>
                    <!-- Action Form Jamaah -->
                    <div class="row">
                        <div class="col-4 mt-2">
                            <button class="btn font-normal-500 fs-16 text-red remove_form_jamaah" data-id="{{ $id }}" style="color: var(--secondary);">
                                <i class="fa-solid fa-trash me-2" style="color: var(--secondary);"></i>
                                Hapus Jamaah
                            </button>
                        </div>
                        <div class="col-8">
                            <div class="text-right">
                                <button class="btn btn-success btn-save" data-id="{{ $id }}">
                                    Simpan
                                </button>
                            </div>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>