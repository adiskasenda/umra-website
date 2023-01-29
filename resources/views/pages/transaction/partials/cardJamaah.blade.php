<div class="card card-bordered mt-5">
    <div class="card-header pt-3" style="display: block;">
        <div class="row">
            <div class="col-1 mt-1">
                <img src="{{ $icon }}" alt="{{ $icon }}">
            </div>
            <div class="col-7">
                <div class="font-normal-700 fs-16">{{ $name }}</div>
                <div class="font-normal-600 fs-14 text-green">Rp. {{ $price }} /Orang</div>
            </div>
            <div class="col-4 mt-5">
                Jumlah Jamaah
                <!--begin::Dialer-->
                <div class="input-group w-md-300px"
                    data-kt-dialer="true"
                    data-kt-dialer-min="0"
                    data-kt-dialer-max="10">

                    <!--begin::Decrease control-->
                    <button class="btn btn-square rounded-circle btn-icon btn-outline btn-success" type="button" data-kt-dialer-control="decrease">
                        <i class="bi bi-dash fs-1"></i>
                    </button>
                    <!--end::Decrease control-->

                    <!--begin::Input control-->
                    <input type="text" class="mx-4 form-control count-people-{{ $type_room }}" readonly value="0" data-kt-dialer-control="input"/>
                    <!--end::Input control-->

                    <!--begin::Increase control-->
                    <button class="btn btn-square rounded-circle btn-icon btn-outline btn-success" type="button" data-kt-dialer-control="increase">
                        <i class="bi bi-plus fs-1"></i>
                    </button>
                    <!--end::Increase control-->
                </div>
                <!--end::Dialer-->
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-6 pt-1">
                *) {{ $note }}
            </div>
            <div class="col-6 text-right">
                Total Harga <span class="font-normal-600 fs-16 text-green">Rp. <span id="count-price-{{ $type_room }}">0</span></span>
            </div>
        </div>
    </div>
</div>