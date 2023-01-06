@extends('layouts.master')

@section('content')
    <div class="container-xxl pt-5 mt-5">
        <div class="row">
            <div class="col-md-3">
                @include('pages.transaction.partials.sidebar')
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
@endsection