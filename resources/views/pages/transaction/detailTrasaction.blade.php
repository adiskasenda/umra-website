@extends('layouts.master')

@section('content')
<div class="container-fluid py-5 mb-8">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                @include('pages.profile.partials.sidebar')
            </div>
            <div class="col-md-9">
                <div class="font-normal-700 fs-20">Detail Pesanan</div>

                <div class="card card-bordered mt-5">
                    <div class="card-header pt-3" style="display: block; background-color: #E6F1F0;">
                        <div class="row mb-3">
                            <div class="col-6">
                                <div class="font-normal-600 fs-12">Invoice ID</div>
                                <div class="font-normal-700 fs-20 text-green">{{ $order['order_code'] }}</div>
                            </div>
                            <div class="col-6 text-right">
                                <div class="font-normal-600 fs-12">Tanggal Pesanan</div>
                                <div class="font-normal-600 fs-14 text-green">{{ date('d M Y', strtotime($order['order_customer']['created_at'])) }}</div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <!-- Detail Package -->
                        <div class="card card-bordered">
                            <div class="card-header pt-3" style="display: block;">
                                <div class="row mb-3">
                                    <div class="col-6">
                                        <div class="font-normal-400 fs-12">{{ Helpers::viewFlagUmroh($order['package_product']['flag_umroh']) }}</div>
                                        <div class="font-normal-700 fs-18">{{ $order['package_product']['name'] }}</div>
                                    </div>
                                    <div class="col-6 text-right">
                                        <div class="font-normal-400 fs-12">Keberangkatan {{ date('d M Y', strtotime($order['package_product']['date_start'])) }}</div>
                                        <div class="font-normal-400 fs-12">Durasi {{ $order['package_product']['day_duration'] }} Hari</div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="font-normal-400 fs-14">Hotel & Penginapan</div>
                                <div class="row mt-2">
                                    @foreach($order['package_product']['list_hotel'] as $list_hotel)
                                        <div class="col-md-6">
                                            <div class="card card-bordered mb-5" style="background: #F8FCFC;">
                                                <div class="card-body" style="padding: 1rem !important;">
                                                    <div class="d-flex flex-stack flex-wrap">
                                                        <div class="d-flex align-items-center pe-2">
                                                            {{ $list_hotel['hotel'] }}
                                                        </div>
                                                        <span class="my-2">
                                                            <div class="rating">
                                                                <div class="rating-label me-2 {{ $list_hotel['bintang'] >= 1 ? 'checked' : '' }}">
                                                                    <i class="bi bi-star fs-1"></i>
                                                                </div>
                                                                <div class="rating-label me-2 {{ $list_hotel['bintang'] >= 2 ? 'checked' : '' }}">
                                                                    <i class="bi bi-star fs-1"></i>
                                                                </div>
                                                                <div class="rating-label me-2 {{ $list_hotel['bintang'] >= 3 ? 'checked' : '' }}">
                                                                    <i class="bi bi-star fs-1"></i>
                                                                </div>
                                                                <div class="rating-label me-2 {{ $list_hotel['bintang'] >= 4 ? 'checked' : '' }}">
                                                                    <i class="bi bi-star fs-1"></i>
                                                                </div>
                                                                <div class="rating-label me-2 {{ $list_hotel['bintang'] >= 5 ? 'checked' : '' }}">
                                                                    <i class="bi bi-star fs-1"></i>
                                                                </div>
                                                                <div class="rating-label me-2 {{ $list_hotel['bintang'] >= 6 ? 'checked' : '' }}">
                                                                    <i class="bi bi-star fs-1"></i>
                                                                </div>
                                                            </div>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>

                                <div class="text-dark font-normal-700 fs-20 mt-5">Maskapai Penerbangan</div>
                                <div class="row mt-2">
                                    <div class="col-md-6">
                                        <div class="card card-bordered mb-5" style="background: #F8FCFC;">
                                            <div class="card-body" style="padding: 1rem !important;">
                                                <div class="d-flex flex-stack flex-wrap">
                                                    <div class="d-flex align-items-center pe-2">
                                                        {{ $order['package_product']['airline_desc'] }}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <button type="button" class="btn btn-success" style="width: 100%;" data-bs-toggle="modal" data-bs-target="#detailFasilitasModal">
                                    Lihat Detail Fasilitas
                                </button>
                            </div>
                        </div>

                        <!-- Detail Jamaah -->
                        <div class="card card-bordered mt-5">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="font-normal-700 fs-16">
                                            <i class="fa-solid fa-user-group me-2" style="color: var(--green)"></i>
                                            Calon Jamaah
                                        </div>
                                    </div>
                                    <div class="col-6 text-right">
                                        <div class="font-normal-400 fs-14">
                                            Jumlah jamaah : {{ count($order['order_guest_double']) + count($order['order_guest_triple']) + count($order['order_guest_quad']) }} Orang
                                        </div>
                                    </div>
                                </div>

                                <!-- Option Room Start -->
                                @if ( count($order['order_guest_double']) > 0 )
                                    @include('pages.transaction.partials.cardDetailJamaah', [
                                        'icon' => asset('assets-web/img/icon/double.png'),
                                        'name' => 'Doble',
                                        'type_room' => 'doble',
                                        'jamaah' => $order['order_guest_double'],
                                        'price' => $order['package_product']['price_double'],
                                    ])
                                @endif

                                @if ( count($order['order_guest_triple']) > 0 )
                                    @include('pages.transaction.partials.cardDetailJamaah', [
                                        'icon' => asset('assets-web/img/icon/triple.png'),
                                        'name' => 'Triple',
                                        'type_room' => 'triple',
                                        'jamaah' => $order['order_guest_triple'],
                                        'price' => $order['package_product']['price_triple']
                                    ])
                                @endif

                                @if ( count($order['order_guest_quad']) > 0 )
                                    @include('pages.transaction.partials.cardDetailJamaah', [
                                        'icon' => asset('assets-web/img/icon/quad.png'),
                                        'name' => 'Quad',
                                        'type_room' => 'quad',
                                        'jamaah' => $order['order_guest_quad'],
                                        'price' => $order['package_product']['price_quad']
                                    ])
                                @endif
                                <!-- Option Room End -->
                            </div>
                        </div>
                        
                        <!-- Riwayat Payment -->
                        <div class="card card-bordered mt-5">
                            <div class="card-body">
                                <div class="font-normal-700 fs-16">
                                    <i class="fa-solid fa-credit-card me-2" style="color: var(--green)"></i>
                                    Riwayat Pembayaran
                                </div>

                                <!-- Term Payment -->
                                @foreach($order['order_payment'] as $key => $order_payment)
                                    <div class="card card-bordered mt-5">
                                        <div class="card-header pt-5" style="display: block;">
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="font-normal-600 fs-14">
                                                        <span class="me-2">Pembayaran {{ $key+1 }}</span>
                                                        <span class="badge badge-success px-5 py-2" style="border-radius: 10px">{{ Helpers::typePayment($order_payment['payment_type']) }}</span>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="font-normal-400 fs-12 text-right text-green">
                                                        @if ( $order_payment['payment_status'] == 0 )
                                                            <span class="badge badge-warning px-5 py-2" style="border-radius: 10px;">Menunggu Pembayaran</span>
                                                        @elseif ( $order_payment['payment_status'] == 1 )
                                                            <span class="badge badge-green-light px-5 py-2" style="border-radius: 10px;">Dibayar pada {{ date('d M Y H:i', strtotime($order_payment['success_date'])) }}</span>
                                                        @else
                                                            <span class="badge badge-green-light px-5 py-2" style="border-radius: 10px;">Pembayaran kadaluarsa</span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-4">
                                                    <div class="font-normal-500 fs-12">
                                                        Metode Pembayaran
                                                    </div>
                                                    <div class="font-normal-700 fs-14">
                                                        {{ $order_payment['payment_method'] }}
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="font-normal-500 fs-12">
                                                        Nomor Virtual Account
                                                    </div>
                                                    <div class="font-normal-700 fs-14">
                                                        <span id="copy-text-va">{{ $order_payment['payment_code'] }}</span>
                                                        <i class="fa-solid fa-copy mx-2" style="color: var(--green);cursor: pointer;" onclick="copy_clipboard('copy-text-va')"></i>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="font-normal-500 fs-12">
                                                        Nominal
                                                    </div>
                                                    <div class="font-normal-700 fs-14">
                                                        Rp. {{ number_format($order_payment['payment_price']) }}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                <hr>
                                
                                <!-- Total Payment -->
                                <div class="row justify-content-end mt-5">
                                    <div class="col-md-6">
                                        @foreach( $order['ringkasan_pesanan'] as $ringkasan_pesanan )
                                            <div class="row mt-3">
                                                <div class="col-6 font-normal-400 fs-14">{{ $ringkasan_pesanan['name'] }}</div>
                                                <div class="col-6 font-normal-400 fs-14 text-right">
                                                    Rp. {{ number_format($ringkasan_pesanan['value']) }}
                                                </div>
                                            </div>
                                        @endforeach
                                        
                                        @if( $order['need_pay'] )
                                            <div class="row mt-8">
                                                <div class="col-6">
                                                    <div class="font-normal-400 fs-14">
                                                        {{ $order['need_pay']['name'] }}
                                                    </div>
                                                    <div class="font-normal-700 fs-16 text-green-light">Rp. {{ number_format($order['need_pay']['value']) }}</div>
                                                </div>
                                                <div class="col-6 font-normal-400 fs-14 text-right">
                                                    <a href="{{ url('/transaction/payment-need-pay', $order['id_order']) }}" class="btn btn-success">Bayar Sekarang</a>
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                </div>

                                <!-- Note Payment -->
                                @if ( $order['alert_pesanan_batal_otomatis'] )
                                    <div class="card card-bordered mt-5 bg-red-canceled">
                                        <div class="card-body p-5 pt-2 pb-2">
                                            <div class="font-normal-500 fs-14">
                                                <i class="fa-solid fa-circle-info me-2" style="color: #B3261E"></i>
                                                Pesanan Batal Otomatis
                                            </div>
                                            <div class="font-normal-400 fs-12">
                                                {{ str_replace("%DATE%",  date('d M Y H:i', strtotime(last($order['order_payment'])['expired_date'])), $configurationPayment[0]['value_configuration']) }}
                                            </div>
                                        </div>
                                    </div>
                                @elseif ( $order['alert_tenggat_waktu_pelunasan'] )
                                    <div class="card card-bordered mt-5 bg-payment-deadline">
                                        <div class="card-body p-5 pt-2 pb-2">
                                            <div class="font-normal-500 fs-14">
                                                <i class="fa-solid fa-circle-info me-2" style="var(--primary)"></i>
                                                Tenggat waktu pelunasan
                                            </div>
                                            <div class="font-normal-400 fs-12">
                                                {{ $configurationPayment[1]['value_configuration'] }}
                                            </div>
                                        </div>
                                    </div>
                                @elseif ( $order['alert_lunas'] )
                                    <div class="card card-bordered mt-5 bg-green-paid">
                                        <div class="card-body p-5 pt-2 pb-2">
                                            <div class="font-normal-500 fs-14">
                                                <i class="fa-solid fa-circle-check me-2" style="color: green"></i>
                                                Lunas
                                            </div>
                                            <div class="font-normal-400 fs-12">
                                                {{ $configurationPayment[2]['value_configuration'] }}
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>

                    </div>
                </div>
                
                <div class="row">
                    <div class="col-6">
                        <div class="card card-bordered mt-5">
                            <div class="card-body p-5">
                                <div class="font-normal-700 fs-18 mb-4">
                                    Kebijakan UMRA ID
                                </div>

                                <a href="{{ $configuration[2]['value_configuration'] }}" target="_blank">
                                    <div class="row">
                                        <div class="col-10">
                                                <div class="font-normal-400 fs-12 mt-2 text-dark">
                                                    <i class="fa-solid fa-bag-shopping me-2" style="color: var(--green)"></i>
                                                    Kebijakan Pesanan
                                                </div>
                                        </div>
                                        <div class="col-2 text-right">
                                            <i class="fa-solid fa-arrow-right me-2"></i>
                                        </div>
                                    </div>
                                </a>
                                <hr>
                                <a href="{{ $configuration[3]['value_configuration'] }}" target="_blank">
                                    <div class="row">
                                        <div class="col-10">
                                            <div class="font-normal-400 fs-12 text-dark">
                                                <i class="fa-solid fa-file me-2" style="color: var(--green)"></i>
                                                Kebijakan Pembatalan
                                            </div>
                                        </div>
                                        <div class="col-2 text-right">
                                            <i class="fa-solid fa-arrow-right me-2"></i>
                                        </div>
                                    </div>
                                </a>
                                <hr>
                                <a href="{{ $configuration[3]['value_configuration'] }}" target="_blank">
                                    <div class="row">
                                        <div class="col-10">
                                            <div class="font-normal-400 fs-12 text-dark">
                                                <i class="fa-solid fa-wallet me-2" style="color: var(--green)"></i>
                                                Kebijakan Pengembalian Dana
                                            </div>
                                        </div>
                                        <div class="col-2 text-right">
                                            <i class="fa-solid fa-arrow-right me-2"></i>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="card bg-image-1 mt-5">
                            <div class="card-body text-white p-6">
                                <div class="text-weight-600 fs-20 mb-5" style="font-weight: bold;">Pusat Bantuan</div>
                                <div class="text-weight-400 fs-16">Punya pertanyaan lain seputar pesanan?</div>
                                
                                <div>
                                    <a href="https://api.whatsapp.com/send?phone=+628118748886&text=Halo Umra, saya mau bertanya.." target="_blank" class="btn mb-4 mt-4 me-5" style="color:#7CB041; background-color:white; border-color:white;">Hubungi Kami</a>
                                    <a href="{{ url('/faq') }}" class="text-white">Baca FAQ</a>
                                </div>  
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" tabindex="-1" id="detailFasilitasModal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Detail Fasilitas</h3>
            </div>

            <div class="modal-body">
                <div class="row">
                    <div class="col-6">
                        <div class="text-dark font-normal-700 fs-20">Negara yang dikunjungi</div>
                        @foreach( explode(',', $order['package_product']['tour_country']) as $tour_country )
                            @if( $tour_country )
                                <div class="text-tertiary font-normal-500 fs-14 mt-3">
                                    <i class="fas fa-flag mx-3 text-green"></i> {{ $tour_country }}
                                </div>
                            @endif
                        @endforeach
                    </div>
                    <div class="col-6">
                        <div class="text-dark font-normal-700 fs-20">Kota yang dikunjungi</div>
                        @foreach( explode(',', $order['package_product']['tour_city']) as $tour_city )
                            @if( $tour_city )
                                <div class="text-tertiary font-normal-500 fs-14 mt-3">
                                    <i class="fas fa-location-dot mx-3 text-green"></i> {{ $tour_city }}
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>

                <!-- Detail Fasilitas -->
                <div class="text-dark font-normal-700 fs-20 mt-5">Detail Faslitas</div>
                <div class="row mt-2">
                    <div class="col-md-6">
                        <div class="card card-bordered">
                            <div class="card-header" style="background-color: #F8FCFC">
                                <div class="card-title">
                                    <h4 class="mb-0 text-green">
                                        <i class="fa-solid fa-circle-check mx-3 text-green"></i>
                                        Sudah Termasuk
                                    </h4>
                                </div>
                            </div>
                            <div class="card-body pt-0">
                                <div class="d-flex flex-column text-gray-600">
                                    @foreach($order['package_product']['list_include'] as $include)
                                        <div class="d-flex align-items-center py-2">
                                            <i class="fas fa-circle mx-3"></i> {{ $include['include'] }}
                                        </div>
                                    @endforeach 
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card card-bordered">
                            <div class="card-header" style="background-color: #FCF8F8">
                                <div class="card-title">
                                    <h4 class="mb-0 text-danger">
                                        <i class="fa-solid fa-circle-xmark mx-3 text-danger"></i>
                                        Belum Termasuk
                                    </h4>
                                </div>
                            </div>
                            <div class="card-body pt-0">
                                <div class="d-flex flex-column text-gray-600">
                                    @foreach($order['package_product']['list_exclude'] as $exclude)
                                        <div class="d-flex align-items-center py-2">
                                            <i class="fas fa-circle mx-3"></i> {{ $exclude['exclude'] }}
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-success" data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>
@endsection