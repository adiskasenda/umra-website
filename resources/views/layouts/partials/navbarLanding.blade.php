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
                <img src="{{ asset('assets-web/img/icon/icon-logo.png') }}" alt="{{ asset('assets-web/img/icon/icon-logo.png') }}">
            </a>
            <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse"
                data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav p-4 p-lg-0">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle {{ Request::is('/package*') ? 'active' : '' }}" data-bs-toggle="dropdown" style="font-size: 16px;">Paket Perjalanan</a>
                        <div class="dropdown-menu border-light m-0">
                            <a href="{{ url('/package/umroh') }}" style="width: 380px;" class="dropdown-item">
                                <div class="row" style="width: 380px; margin: 15px 0;">
                                    <div class="col-2">
                                        <img src="{{ asset('assets-web/img/icon/umroh.png') }}" alt="{{ asset('assets-web/img/icon/umroh.png') }}">
                                    </div>
                                    <div class="col-10">
                                        <div class="fs-16" style="font-weight: bold;">Paket Umrah</div>   
                                        <div>Perjalanan ibadah umroh dengan nyaman & <br/> fasilitas lengkap dari keberangkatan</div>
                                    </div>
                                </div>
                            </a>
                            <a href="{{ url('/package/umroh-plus') }}" style="width: 380px;" class="dropdown-item">
                                <div class="row" style="width: 380px; margin: 15px 0;">
                                    <div class="col-2">
                                        <img src="{{ asset('/assets-web/img/icon/umroh-plus.png') }}" alt="{{ asset('/assets-web/img/icon/umroh-plus.png') }}">
                                    </div>
                                    <div class="col-10">
                                        <div class="fs-16" style="font-weight: bold;">Paket Umrah+</div>
                                        <div>Ibadah umroh dengan fasilitas terbaik agar <br/> ibadah anda lebih kusyu.</div>
                                    </div>
                                </div>
                            </a>
                            <a href="{{ url('/package/wisata-halal') }}" style="width: 380px;" class="dropdown-item">
                                <div class="row" style="width: 380px; margin: 15px 0;">
                                    <div class="col-2">
                                        <img src="{{ asset('/assets-web/img/icon/wisata-halal.png') }}" alt="{{ asset('/assets-web/img/icon/wisata-halal.png') }}">
                                    </div>
                                    <div class="col-10">
                                        <div class="fs-16" style="font-weight: bold;">Wisata Halal</div>
                                        <div>Berlibur & mengungjungi negara, kota, serta <br/> destinasi halal bersama UMRA.</div>
                                    </div>
                                </div>
                            </a>
                            <a href="{{ url('/package/diy') }}" style="width: 380px;" class="dropdown-item">
                                <div class="row" style="width: 380px; margin: 15px 0;">
                                    <div class="col-2">
                                        <img src="{{ asset('assets-web/img/icon/diy.png') }}" alt="{{ asset('assets-web/img/icon/diy.png') }}">
                                    </div>
                                    <div class="col-10">
                                        <div class="fs-16" style="font-weight: bold;">DIY</div>
                                        <div>Atur sendiri hotel, maskapai, durasi serta <br/> destinasi perjalanan Umroh+ wisata anda.</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <a href="{{ url('/about-me') }}" class="nav-item nav-link {{ Request::is('/about-me') ? 'active' : '' }}" style="font-size: 16px;">Tentang Kami</a>
                    <a href="{{ url('/news') }}" class="nav-item nav-link {{ Request::is('/news*') ? 'active' : '' }}" style="font-size: 16px;">Artikel</a>
                    <a href="{{ url('/contact-me') }}" class="nav-item nav-link {{ Request::is('/contact-me') ? 'active' : '' }}" style="font-size: 16px;">Hubungi Kami</a>
                </div>
                <div class="form-inline ms-auto">
                    @if ( empty(Session::get('user')) ) 
                        <a href="{{ url('/login') }}" class="my-2 my-sm-0 nav-link-href" type="submit">Masuk</a>
                        <a href="{{ url('/register') }}" class="btn btn-success my-2 my-sm-0" type="submit">Daftar</a>
                    @else
                        <div class="navbar-nav p-4 p-lg-0">
                            <!-- <div class="symbol" style="margin:auto;">
                                <i class="fa-solid fa-bucket" style="margin-right: 10px; color:#006B67; font-size:25px;"></i>
                            </div>
                            <div class="garis_vertikal mx-5" style="margin:auto;"></div> -->
                            
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                                    <!-- <div class="symbol symbol-circle" style="margin:auto;">
                                        <img alt="Logo" class="img-avatar lozad" style="width: 40px; height:40px;" src="{{ Session::get('user')['url_photo'] }}">
                                    </div> -->
                                    <span class="ms-3">{{ Session::get('user')['firstname'] }}</span>
                                </a>
                                
                                <div class="dropdown-menu border-light m-0" style="left: -100px !important;">
                                    <div class="p-3">Assalamualaikum, {{ Session::get('user')['firstname'] }}</div>
                                    <a href="{{ url('/profile') }}" style="width: 200px;" class="dropdown-item">
                                        <div class="row" style="width: 200px; margin: 8px 0;">
                                            <div class="col-2">
                                                <img src="{{ asset('assets-web/img/icon/icon-sidebar-user.png') }}" alt="{{ asset('assets-web/img/icon/icon-sidebar-user.png') }}">
                                            </div>
                                            <div class="col-10">
                                                <div>Profil</div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="{{ url('/profile/list-transaction') }}" style="width: 200px;" class="dropdown-item">
                                        <div class="row" style="width: 200px; margin: 8px 0;">
                                            <div class="col-2">
                                                <img src="{{ asset('assets-web/img/icon/icon-sidebar-history.png') }}" alt="{{ asset('assets-web/img/icon/icon-sidebar-history.png') }}">
                                            </div>
                                            <div class="col-10">
                                                <div>Riwayat Transaksi</div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="{{ url('/profile/activity') }}" style="width: 200px;" class="dropdown-item">
                                        <div class="row" style="width: 200px; margin: 8px 0;">
                                            <div class="col-2">
                                                <img src="{{ asset('assets-web/img/icon/icon-sidebar-activity.png') }}" alt="{{ asset('assets-web/img/icon/icon-sidebar-activity.png') }}">
                                            </div>
                                            <div class="col-10">
                                                <div>Aktivitas Anda</div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="{{ url('/logout') }}" style="width: 200px;" class="dropdown-item">
                                        <div class="row" style="width: 200px; margin: 8px 0;">
                                            <div class="col-2">
                                                <img src="{{ asset('assets-web/img/icon/icon-sidebar-logout.png') }}" alt="{{ asset('assets-web/img/icon/icon-sidebar-logout.png') }}">
                                            </div>
                                            <div class="col-10">
                                                <div>Keluar</div>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </nav>
    </div>
</div>
<!-- Navbar End -->


@push('page_js')
    <script>
        $( document ).ready(function() {
            var $nav = $(".fixed-top");
            $nav.toggleClass('scrolled', $(document).scrollTop() > $nav.height());
            if( $(document).scrollTop() > $nav.height() ) {
                $(".fixed-top").addClass('bg-white shadow scrolled');
            }
        });

        $(document).scroll(function () {
            var $nav = $(".fixed-top");
            $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
        });
    </script>
@endpush