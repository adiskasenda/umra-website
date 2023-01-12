@extends('layouts.master')

@section('content')
    <div class="container-fluid bg-green py-5 artikel">
        <div class="container" style="margin-top: 5%; margin-bottom: 5%;">
            <h1 class="text-white font-normal-700 fs-44">Mitra Umra diseluruh Indonesia</h1>
            <h1 class="text-light font-normal-400 fs-16 mt-5">UMRA ID mengajak anda sebagai perusahaan atau perseorangan untuk bergabung menjadi Mitra Umra untuk mendapatkan manfaat yang saling menguntungkan!</h1>
        </div>
    </div>
    <div class="container" style="position: relative;top: -35px;">
        <div class="bg-white border rounded p-3 p-sm-4 wow fadeInUp" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
            <form class="row" method="GET" action="{{ url('/news') }}">
                <div class="col-md-10">
                    <input type="text" id="search" placeholder="Pencarian" name="search" class="form-control" required/>
                </div>
                <div class="col-md-2 justify-content-md-center">
                    <button type="submit" class="btn btn-success" style="width: 100%;">Cari</button>
                </div>
            </form>
        </div>
    </div>

    <div class="container-fluid py-5">
        <div class="container py-5">
            <!--begin::Accordion-->
            @foreach($mitras as $key => $mitra)
                <!-- Detail Mitra -->
            @endforeach
            <!--end::Accordion-->
        </div>
    </div>

@endsection
