@extends('layouts.master')

@section('content')
    <!-- Banner Start -->
    @if ( $status == '1' )
        <div class="container-fluid py-5" style="height:50vh; display: flex; align-items: center; justify-content: center;">
            <div class="container text-center" >
                <img src="{{ asset('assets-web/img/icon/icon-success.png') }}" alt="{{ asset('assets-web/img/icon/icon-success.png') }}">
                <div>
                    <div class="mt-5 text-weight-700 fs-20" style="font-weight: bold;">Email anda berhasil diverifikasi!</div>
                    <div class="mt-5 text-tertiary text-weight-400 fs-16">Anda dapat menutup atau meninggalkan halaman ini & <br/> melanjutkan menggunakan aplikasi UMRA.ID</div>
                </div>
            </div>
        </div>
    @else
        <div class="container-fluid py-5" style="height:50vh; display: flex; align-items: center; justify-content: center;">
            <div class="container text-center">
                <img src="{{ asset('assets-web/img/icon/icon-failed.png') }}" alt="{{ asset('assets-web/img/icon/icon-failed.png') }}">
                <div>
                    <div class="mt-5 text-weight-700 fs-20" style="font-weight: bold;">Email anda gagal diverifikasi!</div>
                    <div class="mt-5 text-tertiary text-weight-400 fs-16">Tautan yang Anda gunakan sudah <span class="text-danger">kadaluarsa</span> (Expired),<br/> silahkan kirim ulang tautan yang baru!</div>
                </div>

                <button class="btn mt-10 text-green" style="border: 1px solid #006B67;" id="btn-resending">
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
                <div class="modal-body text-center" style="padding:40px;">
                    <img src="{{ asset('assets-web/img/icon/icon-success.png') }}" alt="{{ asset('assets-web/img/icon/icon-success.png') }}">
                    <div>
                        <div class="mt-5 text-weight-700 fs-20" style="font-weight: bold;">Email berhasil terkirim!</div>
                        <div class="mt-5 text-weight-400 fs-16">Kami telah mengirimkan tautan ke email  Anda, klik tautan tersebut untuk melanjutkan registrasi.</div>
                    </div>
                    <button type="button" class="btn mt-10 btn-primary text-center" data-bs-dismiss="modal" aria-label="Close" style="width:150px;">OK</button>
                </div>
            </div>
        </div>
    </div>

@endsection


@push('page_js')
    <script>
        $('#btn-resending').click(function() {
            $.ajax({
                url: "{{ $sendretry }}",
                type: 'GET',
                dataType: "JSON",
                success: function(data) {
                    if(data.status == 1) {
                        $('#modal-alert').modal('show');
                    } else {
                        $('#modal-alert').modal('show'); 
                    }
                }
            })
        });

        $('#modal-alert').on('hidden.bs.modal', function () {
            return window.location.href = "{{ url('/') }}";
        })
    </script>
@endpush