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

                <button class="btn mt-5 text-green" style="border: 1px solid #006B67;" id="btn-resending">
                    <img src="{{ asset('assets-web/img/icon/icon-bolak-balik.png') }}" alt="{{ asset('assets-web/img/icon/icon-bolak-balik.png') }}"> Kirim ulang tautan
                </button>
            </div>
        </div>
    @endif
    <!-- Banner End -->

    <!-- modal -->
    <div class="modal fade" tabindex="-1" id="modal-alert">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <img src="{{ asset('assets-web/img/icon/icon-success.png') }}" alt="{{ asset('assets-web/img/icon/icon-success.png') }}">
                    <div class="mt-5 mb-5">
                        <div class="text-weight-700 fs-20">Email berhasil terkirim!</div>
                        <div class="text-weight-400 fs-16">Kami telah mengirimkan tautan ke email  Anda, klik tautan tersebut untuk melanjutkan registrasi.</div>
                    </div>
                    <button type="button" class="btn btn-primary text-center" data-bs-dismiss="modal" aria-label="Close">OK</button>
                </div>
            </div>
        </div>
    </div>

@endsection


@push('page_js')
    <script>
        $('#btn-resending').click(function() {
            // $.ajax({
            //     // url: "{{ $sendretry }}",
            //     url: 'http://dev-api.umra.id/core-umra/customer/get_verify_email/hanifalbaaits@dataku.id',
            //     type: 'GET',
            //     dataType: "JSON",
            //     success: function(data) {
            //         if(data.status == 1) {
                        $('#modal-alert').modal('show');
            //         } else {
            //             $('#modal-alert').modal('show'); 
            //         }
            //     }
            // })
        });

        $('#modal-alert').on('hidden.bs.modal', function () {
            return window.location.href = "{{ url('/') }}";
        })
    </script>
@endpush