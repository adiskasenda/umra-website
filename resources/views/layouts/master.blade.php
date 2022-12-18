<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Umra.id</title>
    <link rel="shortcut icon" href="{{ asset('assets-web/img/logo/logo_umra_icon.png') }}" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    @include('layouts.partials.style')
</head>

<body>
    @include('layouts.partials.spinner')

    @include('layouts.partials.navbarMaster')

    <!-- Content Start -->
    <div class="content">
        @yield('content')
    </div>
    
    @include('layouts.partials.footer')

    <!-- Back to Top -->
    <!-- <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a> -->

    @include('layouts.partials.script')
</body>

</html>