@extends('layouts.authentication')

@section('content')
    <form class="form w-100" method="POST" action="{{ url('/login-phone/validate-otp') }}">
        @csrf
        
        <div class="text-center mb-11">
            <h1 class="fw-bolder mb-3 text-green">Masukan Kode OTP</h1>
            <div class="text-gray-500 fw-semibold fs-6">Kami telah mengirimkan kode OTP ke nomor WhatsApp {{ $phone }}, Jangan berikan kode verifikasi ke siapa pun.</div>
        </div>
        
        <div class="fv-row mb-8">
            <!-- <input type="text" placeholder="Masukan Kode OTP" name="otp" class="form-control bg-transparent"/> -->
            <div class="pincode-input-container"></div>
        </div>

        <!-- <div class="text-center text-gray-500 mb-4">
            <span id="timer">
                Kirim ulang dalam <span id="time">30</span>      
            </span>
        </div> -->

        <!-- <div class="d-grid mb-10">
            <button type="submit" id="kt_sign_in_submit" class="btn btn-success">
                <span class="indicator-label">Verifikasi</span>
            </button>
        </div> -->
    </form>
@endsection

@push('page_js')
    <!-- <script>
        var counter = 30;
        var interval = setInterval(function() {
            counter--;
            // Display 'counter' wherever you want to display it.
            if (counter <= 0) {
                    clearInterval(interval);
                    $('#timer').html("<a href='{{ url('/login-phone/check-otp?phone=').$phone }}'>Kirim ulang</a>");  
                return;
            }else{
                $('#time').text(counter);
            }
        }, 1000);
    </script> -->

    <script>
        new PincodeInput('.pincode-input-container', {
            count: 6,
            onInput: (value) => {
                console.log(value.length)
                if ( value.length >= 6 ) {
                    $.ajax({
                        url: "{{ url('/login-phone/validate-otp') }}",
                        type: 'POST',
                        data: {
                            "_token": "{{ csrf_token() }}",
                            'phone' : "{{ $phone }}",
                            'otp' : value
                        },
                        dataType: "JSON",
                        success: function(data) {
                            if ( data.status == '1' ) {
                                return window.location.href = "{{ url('/') }}"
                            } else {
                                // border-color: red;
                                return false;
                            }
                        }
                    })
                }
            }
        })
    </script>
@endpush