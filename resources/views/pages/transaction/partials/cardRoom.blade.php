<div class="card card-bordered mt-5" style="width: 100$;">
    <div class="card-header" style="background: #F8FCFC; display:inline;">
        <div class="row mt-5 mb-5">
            <div class="col-2 mt-2">
                <img src="{{ asset('assets-web/img/icon/double.png') }}" width="40px" height="40px" alt="{{ asset('assets-web/img/icon/double.png') }}">
                <span class="font-normal-600 fs-16">Double</span>
            </div>
            <div class="col-2 mt-3">
                <div class="font-normal-600 fs-16">
                    <i class="fa-solid fa-user-group" style="color: var(--dark)"></i>
                    <span class="count-people-{{ $type_room }}">0</span> Orang
                </div>
            </div>
            <div class="col-8 text-right">
                <button class="btn btn-success" id="btn-add-jamaah">
                    <i class="fa-solid fa-plus"></i>
                    Tambah Jamaah
                </button>
            </div>
        </div>
    </div>
    <div class="card-body" style="padding: 1rem !important;">
        <!--begin::Accordion-->
        
        @include('pages.transaction.partials.formJamaah')
        <!--end::Accordion-->
    </div>
</div>

@push('page_js')
    <script>
        var count, jamaah;
        const cardData = JSON.parse(localStorage.getItem("cartData"));
        console.log(cardData);
        console.log(cardData[0]['jamaah']);
        console.log(cardData[0]['jamaah'].length);

        if ( "{{ $type_room }}" == 'doble' ) {
            count = cardData[0]['doble'];
            jamaah = cardData[0]['jamaah'];
        } else if ( "{{ $type_room }}" == 'doble' ) {
            count = cardData[1]['triple'];
            jamaah = cardData[0]['jamaah'];
        } else {
            count = cardData[2]['quad'];
            jamaah = cardData[0]['jamaah'];
        }

        $('.count-people-{{ $type_room }}').html(count);

        // Jamaah Not Register
        for ( var i = jamaah.length; i < count; i++ ) {
            console.log('oke 2');
        }

        // Jamaah Done Register
        jamaah.map(data => {
            console.log('ok');
        })

    </script>
@endpush