@push('page_css')
    <style>
        .fixed-top.scrolled {
            background-color: #fff !important;
            transition: background-color 200ms linear;
        }
    </style>
@endpush


<!-- Navbar Start -->
<div class="container-fluid fixed-top px-0">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light py-lg-0">
            <a href="{{ url('/') }}" class="navbar-brand ms-4 ms-lg-0">
                <img src="{{ asset('assets-web/img/icon/icon-logo.png') }}" alt="" srcset="">
            </a>
            <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse"
                data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav p-4 p-lg-0">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" style="font-size: 16px;">Paket Perjalanan</a>
                        <div class="dropdown-menu border-light m-0">
                            <a href="{{ url('/package/umroh') }}" style="width: 380px;" class="dropdown-item">
                                <div class="row" style="width: 380px; margin: 15px 0;">
                                    <div class="col-2">
                                        <img src="{{ asset('assets-web/img/icon/umroh.png') }}" alt="{{ asset('assets-web/img/icon/umroh.png') }}">
                                    </div>
                                    <div class="col-10">
                                        <div style="font-size: 16px;">Paket Umrah</div>   
                                        <div>Perjalanan ibadah umroh dengan nyaman & <br/> fasilitas lengkap dari keberangkatan</div>
                                    </div>
                                </div>
                            </a>
                            <a href="{{ url('/package/umroh-plus') }}" style="width: 380px;" class="dropdown-item">
                                <div class="row" style="width: 380px; margin: 15px 0;">
                                    <div class="col-2">
                                        <img src="{{ asset('assets-web/img/icon/umroh.png') }}" alt="{{ asset('assets-web/img/icon/umroh.png') }}">
                                    </div>
                                    <div class="col-10">
                                        <div style="font-size: 16px;">Paket Umrah Plush+</div>
                                        <div>Ibadah umroh dengan fasilitas terbaik agar <br/> ibadah anda lebih kusyu.</div>
                                    </div>
                                </div>
                            </a>
                            <a href="{{ url('/package/wisata-halal') }}" style="width: 380px;" class="dropdown-item">
                                <div class="row" style="width: 380px; margin: 15px 0;">
                                    <div class="col-2">
                                        <img src="{{ asset('assets-web/img/icon/umroh.png') }}" alt="{{ asset('assets-web/img/icon/umroh.png') }}">
                                    </div>
                                    <div class="col-10">
                                        <div style="font-size: 16px;">Wisata Halal</div>
                                        <div>Berlibur & mengungjungi negara, kota, serta <br/> destinasi halal bersama UMRA.</div>
                                    </div>
                                </div>
                            </a>
                            <!-- <a href="{{ url('/package/wisata-halal') }}" style="width: 380px;" class="dropdown-item">
                                <div class="row" style="width: 380px; margin: 15px 0;">
                                    <div class="col-2">
                                        <img src="{{ asset('assets-web/img/icon/umroh.png') }}" alt="{{ asset('assets-web/img/icon/umroh.png') }}">
                                    </div>
                                    <div class="col-10">
                                        <div style="font-size: 16px;">DIY</div>
                                        <div>Atur sendiri hotel, maskapai, durasi serta <br/> destinasi perjalanan umroh + wisata anda.</div>
                                    </div>
                                </div>
                            </a> -->
                        </div>
                    </div>
                    <a href="{{ url('/about-me') }}" class="nav-item nav-link" style="font-size: 16px;">Tentang Kami</a>
                    <a href="{{ url('/news') }}" class="nav-item nav-link" style="font-size: 16px;">Artikel</a>
                    <a href="{{ url('/contact-me') }}" class="nav-item nav-link" style="font-size: 16px;">Hubungi Kami</a>
                </div>
                <!-- <div class="form-inline ms-auto">
                    @if ( empty(Session::get('user')) ) 
                        <a href="{{ url('/login') }}" class="my-2 my-sm-0 nav-link-href" type="submit">Masuk</a>
                        <a href="{{ url('/register') }}" class="btn btn-outline-success my-2 my-sm-0" type="submit">Daftar</a>
                    @else
                        <div class="navbar-nav p-4 p-lg-0">
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Hello</a>
                                <div class="dropdown-menu border-light m-0">
                                    <a href="{{ url('/logout') }}" class="dropdown-item">Logout</a>
                                </div>
                            </div>
                        </div>
                    @endif
                </div> -->
            </div>
        </nav>
    </div>
</div>
<!-- Navbar End -->


@push('page_js')
    <script>
        var $nav = $(".fixed-top");
        $nav.toggleClass('scrolled', $(document).scrollTop() > $nav.height());

        $(document).scroll(function () {
            var $nav = $(".fixed-top");
            console.log( $(this).scrollTop(), $nav.height() );
            $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
        });
    </script>
@endpush