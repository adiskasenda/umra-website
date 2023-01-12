<!-- Footer Start -->
<div class="container-fluid text-dark footer bg-white wow fadeIn" data-wow-delay="0.1s">
    <div class="container" style="padding-bottom: 1%; padding-top:5%;">
        <div class="row g-5">
            <div class="col-lg-4 col-md-6">
                <a href="{{ url('/') }}"> 
                    <img class="mt-5 mb-5" src="{{ asset('assets-web/img/background/icon-logo-footer.png') }}" alt="{{ asset('assets-web/img/background/icon-logo-footer.png') }}">
                </a>
                <div class="text-tertiary font-normal-600 fs-16">
                    <div>PT. UMRAH MANDIRI RILLAH AMANAH</div>
                    <div>SK. PPIU NO 177 TAHUN 2020</div>
                </div>

                <div class="d-flex mt-5">
                    <a class="btn btn-square btn-success rounded-circle me-2" href="https://web.facebook.com/umraidn?_rdc=1&_rdr"><i class="fab fa-facebook-f" style="margin-left: 6px;"></i></a>
                    <a class="btn btn-square btn-success rounded-circle me-2" href="https://twitter.com/umra_idn"><i class="fab fa-twitter" style="margin-left: 6px;"></i></a>
                    <a class="btn btn-square btn-success rounded-circle me-2" href="https://instagram.com/umra.id"><i class="fab fa-instagram" style="margin-left: 6px;"></i></a>
                    <a class="btn btn-square btn-success rounded-circle me-2" href="https://api.whatsapp.com/send?phone=+628118748886&text=Halo Umra, saya mau bertanya.."><i class="fab fa-whatsapp" style="margin-left: 6px;"></i></a>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 mb-5">
                        <h4 class="text-dark mb-4">Layanan</h4>
                        <a class="btn btn-link" href="{{ url('/package/umroh') }}">Umroh</a>
                        <a class="btn btn-link" href="{{ url('/package/umroh-plus') }}">Umroh Plus+</a>
                        <a class="btn btn-link" href="{{ url('/package/wisata-halal') }}">Wisata Halal</a>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 mb-5">
                        <h4 class="text-dark mb-4">Perusahaan</h4>
                        <a class="btn btn-link" href="{{ url('/about-me') }}">Tentang Kami</a>
                        <!-- <a class="btn btn-link" href="{{ url('/location-me') }}">Lokasi Kami</a> -->
                        <a class="btn btn-link" href="{{ url('/contact-me') }}">Kontak Kami</a>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <h4 class="text-dark mb-4">Lainya</h4>
                        <a class="btn btn-link" href="#">Syarat & Ketentuan</a>
                        <a class="btn btn-link" href="#">Kebijakan data pengguna</a>
                        <a class="btn btn-link" href="{{ url('/faq') }}">FaQ</a>
                    </div>
                </div>
            </div>
        </div>
        <hr/>
    </div>
</div>
<!-- Footer End -->

<!-- Copyright Start -->
<div class="container-fluid copyright py-5 bg-white">
    <div class="container py-5">
        <div class="text-center">
            Copyright &copy; 2020, UMRA.ID.
        </div>
    </div>
</div>
<!-- Copyright End -->
