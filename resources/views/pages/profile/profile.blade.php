@extends('layouts.master')

@section('content')
    <div class="container-fluid py-5 mb-8">
        <div class="container">
            @include('pages.transaction.partials.breadcrumb',[
                'breadcrumb' => 'hello'
            ])
            <div class="row">
                <div class="col-md-3">
                    @include('pages.profile.partials.sidebar')
                </div>
                <div class="col-md-9">
                    <div> Profile </div>
                    <div class="card" style="width: 100%;">
                        <div>Foto Profile</div>
                        <div>Information Pemilik Akun</div>
                        <div>Email dan Nomor Ponsel</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection