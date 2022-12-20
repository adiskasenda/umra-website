@extends('layouts.master')

@section('content')
    <!-- Banner Form Start -->
    <div class="pt-4">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-interval="3000" data-bs-ride="carousel">
            <div class="carousel-inner">
                @foreach( $banners as $key => $banner )
                <div @if( $key == 0) class="carousel-item active"  @else class="carousel-item" @endif>
                    <img class="d-block w-100" src="{{ $banner['url'] }}" alt="First slide">
                </div>
                @endforeach
            </div>
        </div>
        <div style="position: relative;top: -60px;">
            <div class="container justify-content-center">
                <div class="bg-white border rounded p-3 p-sm-4 wow fadeInUp" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                    <form class="row" action="">
                        <div class="col-md-10">
                            <div class="row">
                                <div class="col-sm-3 justify-content-md-center">
                                    <label for="specificSizeInputGroupUsername">Layanan</label>
                                    
                                    <div class="input-group">
                                        <div class="input-group-text">@</div>
                                        <input type="text" class="form-control" id="specificSizeInputGroupUsername" placeholder="Username">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <label for="specificSizeInputGroupUsername">Tanggal Keberangkatan</label>
                                    <div class="input-group">
                                        <div class="input-group-text">@</div>
                                        <input type="text" class="form-control" id="specificSizeInputGroupUsername" placeholder="Username">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <label for="specificSizeInputGroupUsername">Tanggal Kepulangan</label>
                                    <div class="input-group">
                                        <div class="input-group-text">@</div>
                                        <input type="text" class="form-control" id="specificSizeInputGroupUsername" placeholder="Username">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <label for="specificSizeInputGroupUsername">Total Jamaah</label>
                                    <div class="input-group">
                                        <div class="input-group-text">@</div>
                                        <input type="text" class="form-control" id="specificSizeInputGroupUsername" placeholder="Username">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 justify-content-md-center">
                            <button type="submit" class="btn btn-success my-2 my-sm-0" type="submit">Cari</button>
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
            <div class="row align-items-center">
                <div class="col-lg-3 wow fadeInUp" data-wow-delay="0.1s">
                    <a href="{{ url('/news/1') }}">
                        <div class="card" style="width: 100$;">
                            <div class="card-body">
                                <img src="https://asset.kompas.com/crops/_Gklmi7JJu6ArpsXWwE8pd0ybfM=/0x0:739x493/750x500/data/photo/2020/06/04/5ed85d403302a.jpg" width="100%" alt="" srcset="">
                                <h5 class="card-title mt-4">Dengan Teknologi Umroh bisa sendiri dengan blablabla</h5>
                                <p>28 May 2022 00:21</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="card" style="width: 100$;">
                        <div class="card-body">
                            <img src="https://asset.kompas.com/crops/_Gklmi7JJu6ArpsXWwE8pd0ybfM=/0x0:739x493/750x500/data/photo/2020/06/04/5ed85d403302a.jpg" width="100%" alt="" srcset="">
                            <h5 class="card-title mt-4">Dengan Teknologi Umroh bisa sendiri dengan blablabla</h5>
                            <p>28 May 2022 00:21</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="card" style="width: 100$;">
                        <div class="card-body">
                            <img src="https://asset.kompas.com/crops/_Gklmi7JJu6ArpsXWwE8pd0ybfM=/0x0:739x493/750x500/data/photo/2020/06/04/5ed85d403302a.jpg" width="100%" alt="" srcset="">
                            <h5 class="card-title mt-4">Dengan Teknologi Umroh bisa sendiri dengan blablabla</h5>
                            <p>28 May 2022 00:21</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="card" style="width: 100$;">
                        <div class="card-body">
                            <img src="https://asset.kompas.com/crops/_Gklmi7JJu6ArpsXWwE8pd0ybfM=/0x0:739x493/750x500/data/photo/2020/06/04/5ed85d403302a.jpg" width="100%" alt="" srcset="">
                            <h5 class="card-title mt-4">Dengan Teknologi Umroh bisa sendiri dengan blablabla</h5>
                            <p>28 May 2022 00:21</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection