@extends('layouts.master')

@section('content')
    
    <!-- Banner Form Start -->
    {{ dd($new) }}
    <div class="container-xxl py-5">
        <div class="container">
            @include('pages.news.partials.breadcrumb',[
                'breadcrumb' => $new['name']
            ])

            <div>{{ $new['subject'] }}</div>
            <div>DIpublikasikan pada 28 May 2022 00:21:47</div>
            <img src="{{ $new['url_banner'] }}" alt="{{ $new['url_banner'] }}" width="100%">
            <div>{!! $new['content'] !!}</div>
        </div>
    </div>

    <!-- Artikel Start -->
    <div class="container-fluid py-5 mb-8">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3 wow fadeInUp" data-wow-delay="0.1s">
                    <a href="{{ url('/news/1') }}">
                        <div class="card" style="width: 100$;">
                            <div class="card-body" style="padding: 1rem !important;">
                                <img src="https://asset.kompas.com/crops/_Gklmi7JJu6ArpsXWwE8pd0ybfM=/0x0:739x493/750x500/data/photo/2020/06/04/5ed85d403302a.jpg" width="100%" alt="" srcset="">
                                <h5 class="card-title mt-4">Dengan Teknologi Umroh bisa sendiri dengan blablabla</h5>
                                <p>28 May 2022 00:21</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection