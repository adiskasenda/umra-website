@extends('layouts.master')

@section('content')
    <!-- Banner Start -->
    @if ( $status == '1' )
        <div class="container-fluid py-5">
            <div class="container mt-20 mb-20 text-center">
                <img src="{{ asset('assets-web/img/icon/icon-success.png') }}" alt="{{ asset('assets-web/img/icon/icon-success.png') }}">
                <div>
                    <div class="mt-5 text-weight-700 fs-44" style="font-weight: bold;">Email anda berhasil diverifikasi!</div>
                    <div class="mt-5 text-tertiary text-weight-400 fs-20">Anda dapat menutup atau meninggalkan halaman ini & melanjutkan menggunakan aplikasi UMRA.ID</div>
                </div>
            </div>
        </div>
    @else
        <div class="container-fluid py-5">
            <div class="container mt-20 mb-20 text-center">
                <img src="{{ asset('assets-web/img/icon/icon-failed.png') }}" alt="{{ asset('assets-web/img/icon/icon-failed.png') }}">
                <div>
                    <div class="mt-5 text-weight-700 fs-44" style="font-weight: bold;">Email anda gagal diverifikasi!</div>
                    <div class="mt-5 text-tertiary text-weight-400 fs-20">Tautan yang Anda gunakan sudah kadaluarsa (Expired), silahkan kirim ulang tautan yang baru!</div>
                </div>
                <a href="{{ url('/package/umroh') }}" class="btn mt-5 text-green" style="border: 1px solid #006B67;">
                    <img src="{{ asset('assets-web/img/icon/icon-bolak-balik.png') }}" alt="{{ asset('assets-web/img/icon/icon-bolak-balik.png') }}"> Kirim ulang tautan
                </a>
            </div>
        </div>
    @endif
    <!-- Banner End -->

    <!-- modal -->
    <!--begin::Alert-->
    <div class="alert alert-dismissible bg-light-danger d-flex flex-center flex-column py-10 px-10 px-lg-20 mb-10">
        <!--begin::Close-->
        <button type="button" class="position-absolute top-0 end-0 m-2 btn btn-icon btn-icon-danger" data-bs-dismiss="alert">
            <span class="svg-icon svg-icon-1">...</span>
        </button>
        <!--end::Close-->

        <!--begin::Icon-->
        <span class="svg-icon svg-icon-5tx svg-icon-danger mb-5">...</span>
        <!--end::Icon-->

        <!--begin::Wrapper-->
        <div class="text-center">
            <!--begin::Title-->
            <h1 class="fw-bold mb-5">This is an alert</h1>
            <!--end::Title-->

            <!--begin::Separator-->
            <div class="separator separator-dashed border-danger opacity-25 mb-5"></div>
            <!--end::Separator-->

            <!--begin::Content-->
            <div class="mb-9 text-dark">
                The alert component can be used to highlight certain parts of your page for <strong>higher content visibility</strong>.<br/>
                Please read our <a href="#" class="fw-bold me-1">Terms and Conditions</a> for more info.
            </div>
            <!--end::Content-->

            <!--begin::Buttons-->
            <div class="d-flex flex-center flex-wrap">
                <a href="#" class="btn btn-outline btn-outline-danger btn-active-danger m-2">Cancel</a>
                <a href="#" class="btn btn-danger m-2">Ok, I got it</a>
            </div>
        </div>
    </div>
@endsection


@push('page_js')
    <script>

    </script>
@endpush