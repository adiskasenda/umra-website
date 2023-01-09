<a href="{{ $url }}">
    <div class="card card-bordered" style="width: 100$;">
        <div class="card-body" style="padding: 1rem !important;">
            <img src="{{ $url_banner }}" width="100%" alt="{{ $url_banner }}">
            <h5 class="card-titl mt-4">{{ $name }}</h5>
            
            <div class="text-tertiary"> 
                <img class="icon-package" src="{{ asset('assets-web/img/icon/package.png') }}" alt="{{ asset('assets-web/img/icon/package.png') }}">  
                Tersisa 24 Pax
            </div>
            <div class="mb-3 text-tertiary"> 
                <img class="icon-package" src="{{ asset('assets-web/img/icon/room.png') }}" alt="{{ asset('assets-web/img/icon/room.png') }}">  
                Tersedia 3 Pilihan Kamar
            </div>

            <div class="row mb-3">
                <div class="col-6">
                    <div class="text-dark">Mulai dari</div>
                    <div class="text-tertiary" style="text-decoration : line-through;">Rp. 30.000.000</div>
                </div>
                <div class="col-6" style="margin:auto;">
                    <img class="icon-cicilan" src="{{ asset('assets-web/img/icon/cicilan2x.png') }}" alt="{{ asset('assets-web/img/icon/cicilan2x.png') }}"/>
                </div>
            </div>

            <div class="text-green">
                <span style="font-size: 20px;">Rp. 28.500.000</span>
                <span class="text-tertiary">/ Orang</span>
            </div>
        </div>
    </div>
</a>

<!-- $url -->
<!-- $url_banner -->
<!-- $name -->