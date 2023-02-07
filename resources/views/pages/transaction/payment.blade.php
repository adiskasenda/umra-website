@extends('layouts.master')

@section('content')
<div class="container-fluid py-5 mb-8">
    <div class="container">
        @include('pages.transaction.partials.breadcrumb',[
            // 'name_package' => $package_product['name'],
        ])
        <div class="row">
            <div class="col-md-12">
                <a href="{{ url('/transaction/checkout', $package_product['id_packet']) }}" class="font-normal-700 fs-24 text-dark mt-3">
                    <i class="fa-solid fa-arrow-left me-2"></i> Pilih Metode Pembayaran
                </a>
                <div class="font-normal-400 fs-14 mt-3" style="margin-left: 19px;">Pilih metode pembayaran yang tersedia</div>
                <div class="row">
                    <div class="col-6">

                        <div class="card card-bordered mt-5">
                            <div class="card-body p-5">
                                <div class="font-normal-700 fs-16">
                                    Metode Pembayaran
                                </div>
                                <a href="{{ url('/transaction/payment-option', $package_product['id_packet']) }}" class="row mx-2 my-5">
                                    <div class="col-7">
                                        <div class="font-normal-600 fs-14 text-dark">Virtual Account (VA)</div>
                                    </div>
                                    <div class="col-2">
                                        <img src="https://api-uploads.umra.id/support/5a80b690-2cbb-41c4-bcba-47d8e94d940b.png" width="40px" alt="">
                                    </div>
                                    <div class="col-2">
                                        <img src="https://api-uploads.umra.id/support/5a80b690-2cbb-41c4-bcba-47d8e94d940b.png" width="40px" alt="">
                                    </div>
                                    <div class="col-1 mt-1">
                                        <i class="fa-solid fa-chevron-right"></i>
                                    </div>
                                </a>
                                <hr>
                                <div class="row mx-2 my-5">
                                    <div class="col-7">
                                        <div class="font-normal-600 fs-14">QRIS</div>
                                    </div>
                                    <div class="col-2">
                                        <img src="https://api-uploads.umra.id/support/5a80b690-2cbb-41c4-bcba-47d8e94d940b.png" width="40px" alt="">
                                    </div>
                                    <div class="col-2">
                                        <img src="https://api-uploads.umra.id/support/5a80b690-2cbb-41c4-bcba-47d8e94d940b.png" width="40px" alt="">
                                    </div>
                                    <div class="col-1 mt-1">
                                        <i class="fa-solid fa-chevron-right"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card card-bordered mt-5">
                            <div class="card-body p-5">
                                <div class="font-normal-700 fs-16">
                                    Metode Pembayaran Cross Border
                                </div>
                                <div class="row mx-2 my-5">
                                    <div class="col-7">
                                        <div class="font-normal-600 fs-14">Kartu Kredit</div>
                                    </div>
                                    <div class="col-2">
                                        <img src="https://api-uploads.umra.id/support/5a80b690-2cbb-41c4-bcba-47d8e94d940b.png" width="40px" alt="">
                                    </div>
                                    <div class="col-2">
                                        <img src="https://api-uploads.umra.id/support/5a80b690-2cbb-41c4-bcba-47d8e94d940b.png" width="40px" alt="">
                                    </div>
                                    <div class="col-1 mt-1">
                                        <i class="fa-solid fa-chevron-right"></i>
                                    </div>
                                </div>
                                <hr>
                                <div class="row mx-2 my-5">
                                    <div class="col-7">
                                        <div class="font-normal-600 fs-14">e-wallet & Bank-transfer ASIA</div>
                                    </div>
                                    <div class="col-2">
                                        <img src="https://api-uploads.umra.id/support/5a80b690-2cbb-41c4-bcba-47d8e94d940b.png" width="40px" alt="">
                                    </div>
                                    <div class="col-2">
                                        <img src="https://api-uploads.umra.id/support/5a80b690-2cbb-41c4-bcba-47d8e94d940b.png" width="40px" alt="">
                                    </div>
                                    <div class="col-1 mt-1">
                                        <i class="fa-solid fa-chevron-right"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-6">
                        <div class="card card-bordered mt-5">
                            <div class="card-body p-5">
                                <div class="row">
                                    <div class="col-2">
                                        <img width="100%" src="{{ $package_product['url_banner'] }}" alt="{{ $package_product['url_banner'] }}">
                                    </div>
                                    <div class="col-6">
                                        <div class="font-normal-400 fs-12">{{ Helpers::viewFlagUmroh($package_product['flag_umroh']) }}</div>
                                        <div class="font-normal-700 fs-16">{{ $package_product['name'] }}</div>
                                        <div class="">
                                            <i class="fa-solid fa-user-group me-2" style="color: var(--green)"></i>
                                            3 Calon Jamaah
                                            <span style="margin-left:5px;">
                                                <i class="fa-solid fa-wallet me-2" style="color: var(--green)"></i>
                                                Cicilan
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-4 text-right">
                                        <div class="font-normal-500 fs-12 text-green">Cicilan (DP)</div>
                                        <div class="font-normal-700 fs-16">Rp. 15.000.000</div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="row">
                                    <div class="col-6">
                                        <i class="fa-solid fa-user-group me-2" style="color: var(--green)"></i>
                                        3 Calon  Jamaah
                                    </div>
                                    <div class="col-6 text-right">
                                        Total Harga <strong>Rp. 40.000.000</strong>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <hr class="my-5">

                        <div class="card card-bordered mt-5">
                            <div class="card-body p-5">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="font-normal-400 fs-18">
                                            Total Tagihan
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="font-700 fs-24 text-green text-right">
                                            Rp. 15.000.000
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('page_js')
    <!-- Check Cart Start -->
    <script>
        function checkChart() {
            
        }
    </script>

    <script>
        function total() {
        
        }
    </script>
    <!-- Document Ready Start -->
    <script>
        checkChart();
        total();
    </script>
    <!-- Document Ready End -->
@endpush
