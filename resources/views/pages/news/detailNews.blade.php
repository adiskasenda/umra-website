@extends('layouts.master')

@section('content')

    <!-- Banner Form Start -->
    <div class="container-xxl py-5">
        <div class="container">
            @include('pages.news.partials.breadcrumb',[
                'breadcrumb' => $new['subject']
            ])
            <a href="{{ url('/news') }}" class="mt-5 text-tertiary">
                <i class="fa fa-arrow-left mr-2" aria-hidden="true"></i> Kembali
            </a>

            <h2 class="font-normal-700 fs-32 mt-2">{{ $new['subject'] }}</h2>
            <div class="mt-5 mb-3">Dipublikasikan pada {{ date('d M Y H:i', strtotime($new['created_date'])) }}</div>
            <img src="{{ $new['url_banner'] }}" alt="{{ $new['url_banner'] }}" width="100%">
            <div class="mt-5">{!! $new['content'] !!}</div>
        </div>
    </div>

    <!-- Artikel Start -->
    <div class="container-fluid py-5 mb-8">
        <div class="container">
            <div class="mx-auto wow fadeInUp" data-wow-delay="0.1s">
                <div class="font-normal-700 fs-32 mb-5" style="font-weight: bold;">Artikel lainnya</div>
            </div>
            <div class="row">
                @foreach( $other_news as $other_new )
                    <div class="col-lg-3 col-md-4">
                        @include('pages.news.partials.cardNews', [
                            'url' => url('/news', $other_new['id_blog']),
                            'url_banner' => $other_new['url_banner'],
                            'subject' => $other_new['subject'],
                            'created_date' => $other_new['created_date']
                        ])
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
