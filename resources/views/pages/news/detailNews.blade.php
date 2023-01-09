@extends('layouts.master')

@section('content')

    <!-- Banner Form Start -->
    <div class="container-xxl py-5">
        <div class="container">
            @include('pages.news.partials.breadcrumb',[
                'breadcrumb' => $new['subject']
            ])
            <a href="{{ url('/news') }}" class="mt-5" style="text-decoration: none"><i class="fa fa-arrow-left mr-2" aria-hidden="true"></i> Kembali</a>
            <h2 class="font-normal-700" style="font-size:40px; margin-top: 1px;">{{ $new['subject'] }}</h2>
            <div class="mt-5 mb-3">Dipublikasikan pada {{ date('d M Y H:i', strtotime($new['created_date'])) }}</div>
            <img src="{{ $new['url_banner'] }}" alt="{{ $new['url_banner'] }}" width="100%">
            <div>{!! $new['content'] !!}</div>
        </div>
    </div>

    <!-- Artikel Start -->
    <div class="container-fluid py-5 mb-8">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 wow fadeInUp" data-wow-delay="0.1s">
                    @include('pages.news.partials.cardNews', [
                        'url' =>  url('/news/1'),
                        'url_banner' => 'https://asset.kompas.com/crops/_Gklmi7JJu6ArpsXWwE8pd0ybfM=/0x0:739x493/750x500/data/photo/2020/06/04/5ed85d403302a.jpg',
                        'subject' => 'Dengan Teknologi Umroh bisa sendiri dengan blablabla',
                        'created_date' => '28 May 2022 00:21'
                    ])
                </div>
            </div>
        </div>
    </div>
@endsection
