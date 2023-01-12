@extends('layouts.master')

@section('content')
    <div class="container-fluid bg-green py-5 artikel">
        <div class="container" style="margin-top: 5%; margin-bottom: 5%;">
            <h1 class="text-white font-normal-700 fs-44">Frequently Asked Questions (FAQ)</h1>
            <h1 class="text-light font-normal-400 fs-16 mt-5">Jika tidak dapat menemukan jawaban dari pertanyaan anda, tanya kami lewat halaman <a href="{{ url('/contact-me') }}" class="text-light" style="text-decoration: underline;">Hubungi Kami</a></h1>
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
            <!--begin::Accordion-->
            @foreach($faqs as $key => $faq)
                <div class="accordion mb-5" id="kt_accordion_{{ $faq['id_faq'] }}">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="kt_accordion_{{ $faq['id_faq'] }}_header_{{ $faq['id_faq'] }}">
                            <button @if ( $key == 0 ) class="accordion-button fs-4 fw-semibold" aria-expanded="true" @else class="accordion-button fs-4 fw-semibold collapsed" aria-expanded="true" @endif  type="button" data-bs-toggle="collapse" data-bs-target="#kt_accordion_{{ $faq['id_faq'] }}_body_{{ $faq['id_faq'] }}" aria-controls="kt_accordion_{{ $faq['id_faq'] }}_body_{{ $faq['id_faq'] }}">
                                {{ $faq['question'] }}
                            </button>
                        </h2>
                            <div id="kt_accordion_{{ $faq['id_faq'] }}_body_{{ $faq['id_faq'] }}" @if ( $key == 0 ) class="accordion-collapse collapse show" @else class="accordion-collapse collapse" @endif aria-labelledby="kt_accordion_{{ $faq['id_faq'] }}" data-bs-parent="#kt_accordion_{{ $faq['id_faq'] }}_header_{{ $faq['id_faq'] }}">
                            <div class="accordion-body">
                                {{ $faq['answer'] }}
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            <!--end::Accordion-->
        </div>
    </div>

@endsection
