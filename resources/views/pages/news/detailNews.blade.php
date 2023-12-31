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
            <img class="img-artiel lozad" src="{{ $new['url_banner'] == 'https://api-uploads.umra.id/banner/bbf39ed3-e959-470e-a256-d80295b146e0.jpeg' ? Helpers::imageArtikelDefault() : $new['url_banner'] }}" alt="{{ $new['url_banner'] }}" width="100%">
            <div class="mt-5 fs-16">{!! $new['content'] !!}</div>
        </div>
    </div>

    <!-- Artikel Start -->
    <div class="container-fluid py-5 mb-8">
        <div class="container">
            <div class="mx-auto">
                <div class="font-normal-700 fs-32 mb-5" style="font-weight: bold;">Artikel lainnya</div>
            </div>
            <div class="row">
                @foreach( $other_news as $other_new )
                    <div class="col-lg-3 col-md-4 my-5">
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
