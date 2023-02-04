@extends('layouts.master')

@section('content')
    <div class="container-fluid bg-green py-5 artikel mb-4">
        <div class="container" style="margin-top: 5%; margin-bottom: 5%;">
            <div class="text-white font-normal-700 fs-44">Mitra Umra diseluruh Indonesia</div>
            <div class="text-light font-normal-400 fs-16 mt-5">UMRA ID mengajak anda sebagai perusahaan atau perseorangan untuk bergabung menjadi Mitra Umra untuk mendapatkan manfaat yang saling menguntungkan!</div>
        </div>
    </div>
    <div class="container" style="position: relative;top: -35px;">
        <div class="bg-white border rounded p-3 p-sm-4 wow fadeInUp" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
            <form class="row" method="GET" action="{{ url('/news') }}">
                <div class="col-md-10 mb-2">
                    <input type="text" id="search" placeholder="Cari nama kota anda" name="search" class="form-control" required/>
                </div>
                <div class="col-md-2 mb-2 justify-content-md-center">
                    <button type="submit" class="btn btn-success" style="width: 100%;">Cari</button>
                </div>
            </form>
        </div>
    </div>

    <div class="container-fluid py-5">
        <div class="container py-5">
            @foreach($mitras as $key => $mitra)
                <!-- Detail Mitra -->
                <a href="{{ $mitra['link'] }}" class="card bg-green-light mb-5 text-dark" target="_blank">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-11">
                                <div class="text-normal-700 fs-20 fw-bold">{{ $mitra['name'] }}</div>
                                <div>
                                    <i class="fa-solid fa-location-dot me-2" style="color: green;"></i>
                                    {{ $mitra['address'] }}
                                </div>
                            </div>
                            <div class="col-1">
                                <i class="fa-solid fa-arrow-right fs-2x mt-5 me-2"></i>
                            </div>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>

@endsection