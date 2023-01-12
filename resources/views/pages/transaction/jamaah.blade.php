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
                        'step' => 1
                    ])
                </div>
                <div class="col-md-9">
                    <div>Langkah 1 dari 3</div>
                    <h1 class="font-normal-700 fs-32">Jumlah Calon Jamaah</h1>
                    <div>Silakan masukkan jumlah jamaah berdasarkan pilih kamar yang tersedia</div>
                    <div class="card card-bordered mt-5" style="background-color: #F8FCFC">
                        <div class="card-body p-5 font-normal-600 fs-14">
                            Paket ini memiliki penawaran dapat dibayar cicil 2x dengan DP minimal Rp. 5.000.000/orang
                        </div>
                    </div>
                    <div class="card card-bordered mt-5" style="background-color: #F8FCFC">
                        <div class="card-body p-5 font-normal-700 fs-14">
                            Maksimum pembelian per pesanan Rp. 120.000.000
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6"></div>
                        <div class="col-md-6">
                            <div>Jumlah Jamaah</div>
                            <hr>
                            <div>Total Harga</div>
                            <div>Uang Muka</div>
                        </div>
                    </div>
                    <hr>
                    <div style="flex: 1;">
                        <button class="btn">Batal</button>
                        <button class="btn btn-success">Lanjutkan</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

