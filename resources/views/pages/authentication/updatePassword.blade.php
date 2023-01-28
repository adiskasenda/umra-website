@extends('layouts.authentication')

@section('content')
    <form class="form w-100" method="POST" action="{{ url('/') }}">
        @csrf
        <div class="text-center mb-11">
            <h1 class="text-dark fw-bolder mb-3">Masuk</h1>
        </div>
        
        <div class="fv-row mb-8">
            <input type="text" placeholder="Email" name="email" autocomplete="off" class="form-control bg-transparent" />
        </div>
        <div class="fv-row mb-3">
            <input type="password" placeholder="Password" name="password" autocomplete="off" class="form-control bg-transparent" />
        </div>
        <div class="d-grid mb-10">
            <button type="submit" id="kt_sign_in_submit" class="btn btn-primary">
                <span class="indicator-label">Masuk</span>
            </button>
        </div>
        <div class="text-gray-500 text-center fw-semibold fs-6">Tidak Memiliki Akun?</div>
        <div class="text-gray-500 text-center fw-semibold fs-6">Silahkan hubungi Administrator.</div>
    </form>
@endsection