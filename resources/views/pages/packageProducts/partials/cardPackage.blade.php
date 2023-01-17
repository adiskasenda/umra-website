<a href="{{ $url }}">
    <div class="card card-bordered" style="width: 100%; height: 100%;">
        <div class="card-body" style="padding: 1rem !important;">
            <img src="{{ $url_banner }}" width="100%" alt="{{ $url_banner }}">
            <div class="text-dark text-weight-600 fs-20 mt-4 mb-4" style="font-weight: bold;">{{ $name }}</div>

            @if ( $quota == 0 )
                <div class="text-danger text-weight-400 fs-16"> 
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

            <div class="row mb-4 mt-4">
                @if( $percent_markup > 0 )
                    <div class="col-6">
                        <div class="text-dark text-weight-600 fs-16" style="font-weight: bold;">Mulai dari</div>
                        <div class="text-tertiary text-weight-400 fs-16" style="text-decoration: line-through;">Rp. {{ number_format($price + ( $price * $percent_markup )) }}</div>
                    </div>
                @endif
                <div class="col-6" style="margin:auto;">
                    <img class="icon-cicilan" src="{{ $image_configuration }}" alt="{{ $image_configuration }}"/>
                </div>
            </div>

            <div class="text-green">
                <span class="text-weight-600 fs-20">Rp. {{ number_format($price) }}</span>
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