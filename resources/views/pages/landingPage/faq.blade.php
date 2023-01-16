@extends('layouts.master')

@section('content')
    <div class="container-fluid bg-green py-5 artikel mb-4">
        <div class="container p-tb-50">
            <div class="text-white font-normal-700 fs-44">Frequently Asked Questions (FAQ)</div>
            <div class="text-light font-normal-400 fs-16 mt-2">Jika tidak dapat menemukan jawaban dari pertanyaan anda, tanya kami lewat halaman <a href="{{ url('/contact-me') }}" class="text-light" style="text-decoration: underline;">Hubungi Kami</a></div>
        </div>
    </div>
    <div class="container" style="position: relative;top: -35px;">
        <div class="bg-white border rounded p-3 p-sm-4">
            <form class="row" method="GET" action="{{ url('/faq') }}">
                <div class="col-md-10 mt-3 mb-3">
                    <input type="text" id="search" placeholder="Pencarian" value="{{ $search }}" name="search" class="form-control" required/>
                </div>
                <div class="col-md-2 mt-3 mb-3 justify-content-md-center">
                    <button type="submit" class="btn btn-success" style="width: 100%;">Cari</button>
                </div>
            </form>
        </div>
    </div>

    <div class="container-fluid py-5" style="margin-top: -40px;">
        <div class="container py-5">
            <!--begin::Accordion-->
            @foreach($faqs as $key => $faq)
                <div class="accordion mb-5" id="kt_accordion_{{ $faq['id_faq'] }}" style="border: 1px solid #E6F1F0;">
                    <div class="accordion-item">
                        <div class="accordion-header" id="kt_accordion_{{ $faq['id_faq'] }}_header_{{ $faq['id_faq'] }}">
                            <button style="font-weight: bold;" @if ( $key == 0 ) class="accordion-button fs-20" aria-expanded="true" @else class="accordion-button fs-20 collapsed" aria-expanded="true" @endif  type="button" data-bs-toggle="collapse" data-bs-target="#kt_accordion_{{ $faq['id_faq'] }}_body_{{ $faq['id_faq'] }}" aria-controls="kt_accordion_{{ $faq['id_faq'] }}_body_{{ $faq['id_faq'] }}">
                                {{ $faq['question'] }}
                            </button>
                        </div>
                            <div id="kt_accordion_{{ $faq['id_faq'] }}_body_{{ $faq['id_faq'] }}" @if ( $key == 0 ) class="accordion-collapse collapse show" @else class="accordion-collapse collapse" @endif aria-labelledby="kt_accordion_{{ $faq['id_faq'] }}" data-bs-parent="#kt_accordion_{{ $faq['id_faq'] }}_header_{{ $faq['id_faq'] }}">
                            <div class="accordion-body fs-16">
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
