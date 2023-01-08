@extends('layouts.master')

@section('content')
    <!-- Banner Form Start -->
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-interval="3000" data-bs-ride="carousel">
        <div class="carousel-inner">
            @foreach( $news_banners as $key => $news_banner )
            <div @if( $key == 0) class="carousel-item active"  @else class="carousel-item" @endif>
                <img class="d-block w-100" src="{{ $news_banner['url_banner'] }}" alt="First slide">
            </div>
            @endforeach
        </div>
    </div>
    <div class="container" style="position: relative;top: -35px;">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="bg-white border rounded p-3 p-sm-4 wow fadeInUp" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                    <form class="row" method="GET" action="{{ url('/news') }}">
                        <div class="col-md-10">
                            <div class="row">
                                <div class="col-sm-8" style="margin:auto;">
                                    <label for="specificSizeInputGroupUsername">Cari Berita Terkini mengenai perjalanan ibadah  umroh Anda</label>
                                </div>
                                <div class="col-sm-4 justify-content-md-center">
                                    <input type="text" id="search" placeholder="Pencarian" name="search" value="{{ $search }}" class="form-control" required/>
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
                    <div class="col-lg-3">
                        @include('pages.news.partials.cardNews', [
                            'url' => url('/news', $new['id_blog']),
                            'url_banner' => $new['url_banner'],
                            'subject' => $new['subject'],
                            'created_date' => $new['created_date']
                        ])
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection