@extends('layouts.master')

@push('page_css')
<style>
    .content-artikel {
        padding-top: 20%;
        padding-bottom: 5%;
    }

    @media (max-width:575.98px) {
        .content-artikel {
            padding-top: 30%;
            padding-bottom: 10%;
        }
    }
</style>
@endpush

@section('content')
    <!-- Banner Form Start -->
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-interval="3000" data-bs-ride="carousel">
        <div class="carousel-inner">
            @foreach( $news_banners as $key => $news_banner )
            <div @if( $key == 0) class="carousel-item active" @else class="carousel-item" @endif style="background-image: url('{{ $news_banner['url_banner'] }}');background-size: cover;background-repeat: no-repeat;background-position: center center;">
                <div class="content-artikel" style="opacity: 0.7; background-color: #101010;">
                    <div class="container">
                        <a href="{{ url('/news', $news_banner['id_blog'] ) }}">
                            <div class="text-white text-weight-700 fs-32" style="font-weight: bold;">{{ $news_banner['subject'] }}</div>
                            <div class="mb-4 text-light text-weight-400 fs-16">{{ date('d M Y H:i', strtotime($news_banner['created_date'])) }}</div>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <div class="container" style="position: relative;top: -35px;">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="bg-white border rounded p-3 p-sm-4">
                    <form class="row" method="GET" action="{{ url('/news') }}">
                        <div class="col-md-10">
                            <div class="row">
                                <div class="col-sm-8" style="margin:auto;">
                                    <label for="specificSizeInputGroupUsername" class="fs-16" style="font-weight: bold;">Cari Berita Terkini mengenai perjalanan ibadah umroh Anda</label>
                                </div>
                                <div class="col-sm-4 mt-3 mb-3 justify-content-md-center">
                                    <input type="text" id="search" placeholder="Pencarian" name="search" value="{{ $search }}" class="form-control" required/>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 mt-3 mb-3 justify-content-md-center">
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
            <div class="row">
                @foreach($news as $new)
                    <div class="col-lg-3 col-md-4 my-5">
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