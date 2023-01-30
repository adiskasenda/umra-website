<!DOCTYPE html>
<html lang="en">
    <head>
        @include('layouts.partials.meta')

        @include('layouts.partials.style')
        @stack('page_css')
    </head>

    <body class="bg-white">
        <div class="card card-bordered" style="margin: auto; width: 640px; padding: 50px;">
            <div class="card-body text-center" style="padding:40px;">
                <img src="{{ asset('assets-web/img/icon/lupa-password.png') }}" alt="{{ asset('assets-web/img/icon/lupa-password.png') }}">

                <div class="mb-5">
                    <div class="mt-5 text-weight-700 fs-20" style="font-weight: bold;">Buat kata sandi baru</div>
                    <div class="mt-5 text-weight-400 fs-16">Buatlah kata sandi yang menurut Anda mudah untuk diingat dan sulit untuk ditebak</div>

                    <input class="mt-5 form-control bg-transparent" type="password" placeholder="Masukan Kata Sandi" name="email-reset-password"/>
                </div>
                <div class="d-grid">
                    <button type="button" id="btn-reset-password" class="btn btn-success">
                        <span class="indicator-label">Kirim</span>
                    </button>
                </div>
            </div>
        </div>

        @include('layouts.partials.script')
        @stack('page_js')
    </body>
</html>

