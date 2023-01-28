@extends('layouts.authentication')

@section('content')
    <form class="form w-100" method="POST" action="{{ url('/login-phone/validate-otp') }}">
        @csrf
        
        <div class="text-center mb-11">
            <h1 class="fw-bolder mb-3 text-green">Masukan Kode OTP</h1>
            <div class="text-gray-500 fw-semibold fs-6">Kami telah mengirimkan kode OTP ke nomor WhatsApp 08138401939, Jangan berikan kode verifikasi ke siapa pun.</div>
        </div>
        
        <div class="fv-row mb-8">
            <input type="text" name="phone" value="{{ $phone }}" class="form-control bg-transparent" style="display:none;"/>
            <input type="text" placeholder="Masukan Kode OTP" name="otp" class="form-control bg-transparent"/>
        </div>

        <div class="text-center text-gray-500 mb-4">
            <span id="timer">
                Kirim ulang dalam <span id="time">30</span>      
            </span>
        </div>

        <div class="d-grid mb-10">
            <button type="submit" id="kt_sign_in_submit" class="btn btn-success">
                <span class="indicator-label">Verifikasi</span>
            </button>
        </div>
    </form>
    
    <div class="pincode-input-container"></div>
@endsection

@push('page_js')
    <script>
        new PincodeInput('.pincode-input-container', {
            count: 6,
            onInput: (value) => {
                console.log(value)
            }
        })
    </script>
@endpush