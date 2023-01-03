@extends('layouts.master')

@section('content')
    <!-- Banner Form Start -->
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-interval="3000" data-bs-ride="carousel">
        <div class="carousel-inner">
            @foreach( $banners as $key => $banner )
            <div @if( $key == 0) class="carousel-item active"  @else class="carousel-item" @endif>
                <img class="d-block w-100" src="{{ $banner['url'] }}" alt="First slide">
            </div>
            @endforeach
        </div>
    </div>
    <div class="container" style="position: relative;top: -60px;">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="bg-white border rounded p-3 p-sm-4 wow fadeInUp" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                    <form class="row" method="GET" action="{{ url('/package/umroh') }}">
                        <div class="col-md-10">
                            <div class="row">
                                <div class="col-sm-8">
                                    <label for="specificSizeInputGroupUsername">Cari Berita Terkini mengenai perjalanan ibadah  umroh Anda</label>
                                </div>
                                <div class="col-sm-4 justify-content-md-center">
                                    <input type="text" id="tanggal" placeholder="Pencarian" name="tanggal" class="form-control" required/>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 justify-content-md-center">
                            <button type="submit" class="btn btn-success" style="width: 100%;">Cari</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Form End -->

    <!-- Artikel Start -->
    <div class="container-fluid py-5 mb-8">
        <div class="container">
            <div class="row g-4 align-items-center">
                @foreach($news as $new)
                    <div class="col-lg-3 wow fadeInUp" data-wow-delay="0.1s">
                        <a href="{{ url('/news', $new['id_blog']) }}">
                            <div class="card" style="width: 100$;">
                                <div class="card-body" style="padding: 1rem !important;">
                                    <img src="{{ $new['url_banner'] }}" width="100%" alt="" srcset="">
                                    <h5 class="card-title mt-4">Dengan Teknologi Umroh bisa sendiri dengan blablabla</h5>
                                    <p>28 May 2022 00:21</p>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection