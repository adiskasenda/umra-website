@extends('layouts.authentication')

@section('content')
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