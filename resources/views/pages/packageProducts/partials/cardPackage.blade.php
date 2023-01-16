<a href="{{ $url }}">
    <div class="card card-bordered" style="width: 100$;">
        <div class="card-body" style="padding: 1rem !important;">
            <img src="{{ $url_banner }}" width="100%" alt="{{ $url_banner }}">
            <h5 class="card-titl mt-4 mb-4">{{ $name }}</h5>

            @if ( $quota == 0 )
                <div class="text-danger"> 
                    <img class="icon-package" src="{{ asset('assets-web/img/icon/package.png') }}" alt="{{ asset('assets-web/img/icon/package.png') }}">  
                    Seat Penuh
                </div>
            @else
                <div class="text-tertiary"> 
                    <img class="icon-package" src="{{ asset('assets-web/img/icon/package.png') }}" alt="{{ asset('assets-web/img/icon/package.png') }}">  
                    Tersisa  {{ $quota }} Pax
                </div>
                <div class="mb-3 mt-3 text-tertiary"> 
                    <img class="icon-package" src="{{ asset('assets-web/img/icon/room.png') }}" alt="{{ asset('assets-web/img/icon/room.png') }}">  
                    Tersedia 3 Pilihan Kamar
                </div>
            @endif

            <div class="row mb-4 mt-4">
                <div class="col-6">
                    <div class="text-dark">Mulai dari</div>
                    <div class="text-tertiary" style="text-decoration: line-through;">Rp. {{ number_format($price + ( $price * $percent_markup )) }}</div>
                </div>
                <div class="col-6" style="margin:auto;">
                    <img class="icon-cicilan" src="{{ asset('assets-web/img/icon/cicilan2x.png') }}" alt="{{ asset('assets-web/img/icon/cicilan2x.png') }}"/>
                </div>
            </div>

            <div class="text-green">
                <span style="font-size: 20px;">Rp. {{ number_format($price) }}</span>
                <span class="text-tertiary">/ Orang</span> 
            </div>
        </div>
    </div>
</a>

<!-- $url -->
<!-- $url_banner -->
<!-- $name -->
<!-- $percent_markup -->
<!-- $price -->