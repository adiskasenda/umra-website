<!-- Footer Start -->
<div class="container-fluid text-dark footer bg-white wow fadeIn" data-wow-delay="0.1s">
    <div class="container pt-20 pb-20">
        <div class="row">
            <div class="col-lg-4 col-md-5">
                <a href="{{ url('/') }}"> 
                    <div class="row">
                        <div class="col-lg-3 col-md-4 col-4" style="border-right: 2px solid #DFE4FD;">
                            <img class="mt-5 mb-5" src="{{ asset('assets-web/img/logo/footer-1.png') }}" alt="{{ asset('assets-web/img/logo/footer-1.png') }}">
                        </div>
                        <div class="col-lg-9 col-md-8 col-8">
                            <img class="mt-5 mb-5" src="{{ asset('assets-web/img/logo/footer-2.png') }}" alt="{{ asset('assets-web/img/logo/footer-2.png') }}">
                        </div>
                    </div>
                </a>
                <div class="text-tertiary font-normal-600 fs-16 mt-5">
                    <div>PT Umra Mandiri Rihlah Amanah</div>
                    <div>SK. PPIU NO 177 TAHUN 2020</div>
                    <div>SK PIHK NO 782/ 2019 PT CGN</div>
                    <div>License by PT Central Global Network</div>
                </div>

                <div class="d-flex mt-5 mb-5">
                    <a class="btn btn-square btn-success rounded-circle me-2" target="_blank" href="https://web.facebook.com/umraidn?_rdc=1&_rdr"><i class="fab fa-facebook-f" style="margin-left: 6px;"></i></a>
                    <a class="btn btn-square btn-success rounded-circle me-2" target="_blank" href="https://twitter.com/umra_idn"><i class="fab fa-twitter" style="margin-left: 6px;"></i></a>
                    <a class="btn btn-square btn-success rounded-circle me-2" target="_blank" href="https://instagram.com/umra.id"><i class="fab fa-instagram" style="margin-left: 6px;"></i></a>
                    <a class="btn btn-square btn-success rounded-circle me-2" target="_blank" href="https://api.whatsapp.com/send?phone=+628118748886&text=Halo Umra, saya mau bertanya.."><i class="fab fa-whatsapp" style="margin-left: 6px;"></i></a>
                    <a class="btn btn-square btn-success rounded-circle me-2" target="_blank" href="https://www.tiktok.com/@umradotid"><i class="fab fa-tiktok" style="margin-left: 6px;"></i></a>
                    <a class="btn btn-square btn-success rounded-circle me-2" target="_blank" href="https://www.youtube.com/channel/UCYG0l-187D4h6jVHSWXDuRw?sub_confirmation=1"><i class="fab fa-youtube" style="margin-left: 6px;"></i></a>
                </div>
            </div>
            <div class="col-lg-8 col-md-7">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 mt-10">
                        <h4 class="text-dark mb-4">Layanan</h4>
                        <a class="btn btn-link" href="{{ url('/package/umroh') }}">Umroh</a>
                        <a class="btn btn-link" href="{{ url('/package/umroh-plus') }}">Umroh+</a>
                        <a class="btn btn-link" href="{{ url('/package/wisata-halal') }}">Wisata Halal</a>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 mt-10">
                        <h4 class="text-dark mb-4">Perusahaan</h4>
                        <a class="btn btn-link" href="{{ url('/about-me') }}">Tentang Kami</a>
                        <!-- <a class="btn btn-link" href="{{ url('/location-me') }}">Lokasi Kami</a> -->
                        <a class="btn btn-link" href="{{ url('/contact-me') }}">Kontak Kami</a>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 mt-10">
                        <h4 class="text-dark mb-4">Lainya</h4>
                        <a class="btn btn-link url-term-and-condition" href="#" target="_blank">Syarat & Ketentuan</a>
                        <a class="btn btn-link url-privacy-policy" href="#" target="_blank">Kebijakan data pengguna</a>
                        <a class="btn btn-link" href="{{ url('/faq') }}">FaQ</a>
                    </div>
                </div>
            </div>
        </div>
        <hr/>
        <div class="text-center mt-10">
            Copyright &copy; 2019 - 2023, UMRA.ID.
        </div>
    </div>
</div>
<!-- Footer End -->

<!-- Copyright Start -->
<!-- <div class="container-fluid copyright py-5 bg-white">
    <div class="container py-5">
        
    </div>
</div> -->
<!-- Copyright End -->

@push('page_js')
    <script>
        $.ajax({
            url: "{{ url('/api/configuration/META') }}",
            dataType: "json",
            type: 'GET',
            success: function(response) {
                $('.url-term-and-condition').attr('href', response.data[2].value_configuration);
                $('.url-privacy-policy').attr('href', response.data[5].value_configuration);
            },
           
        })
    </script>
@endpush