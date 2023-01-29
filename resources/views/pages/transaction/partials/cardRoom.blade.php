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
        @include('pages.transaction.partials.formJamaah')
        <!--end::Accordion-->
    </div>
</div>