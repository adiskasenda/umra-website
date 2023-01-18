<div class="container-fluid py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        @foreach( $banner_headers as $key => $banner_header )
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{ $key }}" @if( $key == 0) class="active" @endif aria-current="true" aria-label="Slide {{ $key }}"></button>
                        @endforeach
                    </div>
                    <div class="carousel-inner">
                        @foreach( $banner_headers as $key => $banner_header )
                            <div @if( $key == 0) class="carousel-item active"  @else class="carousel-item" @endif>
                                <img class="img-banner" src="{{ $banner_header['url_banner_web'] }}" class="d-block w-100" alt="{{ $banner_header['url_banner_web'] }}" width="100%" height="176px;">
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            
            <div class="col-md-5">
                <img class="img-banner" src="{{ asset('assets-web/img/banner/banner-download-umra.png') }}" alt="{{ asset('assets-web/img/banner/banner-download-umra.png') }}" width="100%" height="176px;">
            </div>
        </div>
    </div>
</div>