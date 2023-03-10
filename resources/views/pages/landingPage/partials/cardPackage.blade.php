<a href="{{ $url }}">
    <div class="card card-bordered" style="width: 100%; height: 100%;">
        <div class="card-body" style="padding: 1rem !important;">
            <img class="img-card lozad" src="{{ $url_banner }}" width="100%" alt="{{ $url_banner }}">
            <div class="text-dark text-weight-600 fs-20 mt-4 mb-4" style="min-height: 55px;font-weight: bold;">{{ strlen($name) > 37 ? substr_replace($name, '...', 37) : $name }}</div>

            <div style="min-height: 60px;">
                @if ( $status == 3 || $status == 4 )
                    <div class="text-danger text-weight-400 lable-danger fs-16">
                        <img class="icon-package" src="{{ asset('assets-web/img/icon/calendar-danger.png') }}" alt="{{ asset('assets-web/img/icon/calendar-danger.png') }}">
                        Paket sudah berakhir
                    </div>
                @elseif ( $quota == 0 || $status == 2 )
                    <div class="text-danger text-weight-400 lable-danger fs-16">
                        <img class="icon-package" src="{{ asset('assets-web/img/icon/package-danger.png') }}" alt="{{ asset('assets-web/img/icon/package-danger.png') }}">
                        Seat Penuh
                    </div>
                @else
                    <div class="text-tertiary text-weight-400 fs-16">
                        <img class="icon-package" src="{{ asset('assets-web/img/icon/package.png') }}" alt="{{ asset('assets-web/img/icon/package.png') }}">
                        Tersisa  {{ $quota }} Pax
                    </div>
                    <div class="mb-3 mt-3 text-tertiary text-weight-400 fs-16">
                        <img class="icon-package" src="{{ asset('assets-web/img/icon/room.png') }}" alt="{{ asset('assets-web/img/icon/room.png') }}">
                        Tersedia 3 Pilihan Kamar
                    </div>
                @endif
            </div>

            <div class="row mb-4 mt-4">
                @if( $percent_markup > 0 )
                    <div class="col-6">
                        <div class="text-dark text-weight-600 fs-16" style="font-weight: bold;">Mulai dari</div>
                        <div class="text-weight-400 fs-16" style="color: rgba(16, 16, 16, 0.4); text-decoration: line-through;">Rp. {{ number_format($price + ( $price * $percent_markup )) }}</div>
                    </div>
                @endif
                <div class="col-6" style="margin:auto;">
                    <img class="icon-cicilan lozad" src="{{ $image_configuration }}" alt="{{ $image_configuration }}"/>
                </div>
            </div>

            <div style="color:var(--green-light-3);">
                <span class="text-weight-600 fs-20" style="font-weight: bold;">Rp. {{ number_format($price) }}</span>
                <span class="text-tertiary">/ PAX</span>
            </div>
        </div>
    </div>
</a>

<!-- $url -->
<!-- $url_banner -->
<!-- $name -->
<!-- $percent_markup -->
<!-- $price -->
<!-- $image_configuration -->