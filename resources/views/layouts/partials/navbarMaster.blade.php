<!-- Navbar Start -->
<div class="container-fluid px-0 wow fadeIn bg-white shadow" style="position: fixed;top: 0;right: 0;left: 0;z-index: 1030;" data-wow-delay="0.1s">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
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
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Paket Perjalanan</a>
                        <div class="dropdown-menu border-light m-0">
                            <a href="{{ url('/package/umroh') }}" class="dropdown-item">Paket Umrah</a>
                            <a href="{{ url('/package/umroh-plus') }}" class="dropdown-item">Paket Umrah Plush+</a>
                            <a href="{{ url('/package/wisata-halal') }}" class="dropdown-item">Wisata Halal</a>
                        </div>
                    </div>
                    <a href="#" class="nav-item nav-link">Tentang Kami</a>
                    <a href="{{ url('/news') }}" class="nav-item nav-link">Artikel</a>
                    <a href="#" class="nav-item nav-link">Hubungi Kami</a>

                </div>
                <div class="form-inline ms-auto">
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
                </div>
            </div>
        </nav>
    </div>
</div>
<!-- Navbar End -->