@extends('layouts.master')

@section('content')
    <div class="container-fluid bg-green py-5 artikel">
        <div class="container py-5">
            <div class="text-white">Frequently Asked Questions (FAQ)</div>
            <div class="text-light">Jika tidak dapat menemukan jawaban dari pertanyaan anda, tanya kami lewat halaman Hubungi Kami</div>
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
            @foreach($faqs as $faq)
                <div>{{ $faq['question'] }}</div>
                <div>{{ $faq['answer'] }}</div>
            @endforeach
        </div>
    </div>

@endsection