<div class="card card-bordered mt-5">
    <div class="card-header pt-3" style="display: block;">
        <div class="row">
            <div class="col-lg-1 col-md-2 col-2 mt-1">
                <img src="{{ $icon }}" alt="{{ $icon }}">
            </div>
            <div class="col-lg-7 col-md-5 col-4">
                <div class="font-normal-700 fs-16">{{ $name }}</div>
                <div class="font-normal-600 fs-14 text-green">Rp. {{ $price }} /Orang</div>
            </div>

            <div class="col-lg-2 col-md-2 col-3 text-right mt-4">
                Jumlah Jamaah
            </div>
            <div class="col-lg-2 col-md-3 col-3 mt-2 text-right">

                <div class="input-group w-md-300px"
                    data-kt-dialer="true"
                    data-kt-dialer-min="0"
                    data-kt-dialer-max="{{ $configuration[0]['value_configuration'] }}">

                    <button class="btn btn-square rounded-circle btn-icon btn-outline btn-success" style="width:25.6px; height:25.6px; top:3.3px; left:3.2px;"  type="button" data-kt-dialer-control="decrease">
                        <i class="bi bi-dash fs-1"></i>
                    </button>

                    <input type="text" class="mx-4 form-control count-people-{{ $type_room }}" style="height:25.6px; top:3.3px; left:3.2px; max-width:45px;text-align: center;"  readonly value="0" data-kt-dialer-control="input"/>

                    <button class="btn btn-square rounded-circle btn-icon btn-outline btn-success" style="width:25.6px; height:25.6px; top:3.3px; left:3.2px;" type="button" data-kt-dialer-control="increase">
                        <i class="bi bi-plus fs-1"></i>
                    </button>
                </div>

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
