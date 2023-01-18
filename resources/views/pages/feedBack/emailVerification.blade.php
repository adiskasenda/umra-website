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

                <button class="btn mt-5 text-green" style="border: 1px solid #006B67;" data-bs-toggle="modal" data-bs-target="#modal-alert">
                    <img src="{{ asset('assets-web/img/icon/icon-bolak-balik.png') }}" alt="{{ asset('assets-web/img/icon/icon-bolak-balik.png') }}"> Kirim ulang tautan
                </button>
            </div>
        </div>
    @endif
    <!-- Banner End -->

    <!-- modal -->
    <div class="modal fade" tabindex="-1" id="modal-alert">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">Modal title</h3>

                    <!--begin::Close-->
                    <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                        <span class="svg-icon svg-icon-1"></span>
                    </div>
                    <!--end::Close-->
                </div>

                <div class="modal-body">
                    <p>Modal body text goes here.</p>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

@endsection


@push('page_js')
    <script>

    </script>
@endpush