<div class="accordion mt-5 mb-5" id="kt_accordion_1">
    <div class="accordion-item">
        <h2 class="accordion-header" id="kt_accordion_1_header_1">
            <button class="accordion-button fs-4 fw-semibold" style="background-color: white" aria-expanded="true"  type="button" data-bs-toggle="collapse" data-bs-target="#kt_accordion_{{ $type_room }}" aria-controls="kt_accordion_{{ $type_room }}">
                <div class="row" style="width:100%;">
                    <div class="col-1">
                        <img src="{{ $icon }}" width="40px" height="40px" alt="{{ $icon }}">
                    </div>
                    <div class="col-5">
                        <div class="font-normal-700 fs-16">{{ $name }}</div>
                        <div class="font-normal-600 fs-14 text-green">
                            <i class="fa-solid fa-user-group me-2" style="color: var(--green)"></i>
                            <span class="count-people-{{ $type_room }}">0</span> Orang
                        </div>
                    </div>
                    <div class="col-5">
                        <div class="font-normal-700 fs-18 text-green mt-3">
                            Rp. <span class="total-price-{{ $type_room }}">0</span>
                        </div>
                    </div>
                </div>
            </button>
        </h2>
        <div id="kt_accordion_{{ $type_room }}" class="accordion-collapse collapse show" aria-labelledby="kt_accordion_1" data-bs-parent="#kt_accordion_1_header_1">
            <div class="accordion-body" style="background-color: #F8FCFC">
                <div id="detail-room-{{ $type_room }}"></div>
                {{-- @include('pages.transaction.partials.cardDetailJamaahCheckout', [
                    "first_name" => "Hanif",
                    "last_name" => "Al Baaits",
                    "birth_date" => "1996-06-06",
                    "gender" => 1,
                    "address" => "Bekasi",
                    "phone_number" => "62811831891",
                    "ktp_number" => "123",
                    "ktp_url" => "",
                    "passport_number" => "",
                    "passport_expiry_date" => "2023-01-01",
                    "passport_url" => "",
                    "nationality" => "",
                    "vaccine_status" => 0,
                    "vaccine_url" => ""
                    "room" => $type_room,
                ]) --}}

            </div>
        </div>
    </div>
</div>

@push('page_js')
    <script>
        function checkCountRoom(room) {
            const cardData = JSON.parse(localStorage.getItem("cartData"));

            if ( room == 'doble' ) {
                return cardData[0][0]['doble'];
            } else if ( room == 'triple' ) {
                return cardData[0][1]['triple'];
            } else {
                return cardData[0][2]['quad'];
            }
        }
        
        function checkTotalPriceRoom(room){
            const cardData = JSON.parse(localStorage.getItem("cartData"));

            if ( room == 'doble' ) {
                return parseInt(cardData[0][0]['doble']) * "{{$package_product['price_double']}}";
            } else if ( room == 'triple' ) {
                return parseInt(cardData[0][1]['triple']) * "{{$package_product['price_triple']}}";
            } else {
                return parseInt(cardData[0][2]['quad']) * "{{$package_product['price_quad']}}";
            }
        }

        function detailJamaah(data, room) {
            $('#detail-room-'+room).append(`@include('pages.transaction.partials.cardDetailJamaahCheckout',[
                'id' => '`+ data.id +`',
                'first_name' => '`+ data.first_name +`',
                'last_name' => '`+ data.last_name +`',
                'birth_date' => '`+ data.birth_date +`',
                'gender' => '`+ data.gender +`',
                'address' => '`+ data.address +`',
                'phone_number' => '`+ data.phone_number +`',
                'ktp_number' => '`+ data.ktp_number +`',
                'passport_number' => '`+ data.passport_number +`',
                'passport_expiry_date' => '`+ data.passport_expiry_date +`',
                'vaccine_status' => '`+ data.vaccine_status +`',
                'room' => '`+ room +`',
            ])`);

            return ;
        }

        function checkJamaahRoom(room) {
            const cardData = JSON.parse(localStorage.getItem("cartData"));

            if ( room == 'doble' ) {
                return cardData[0][0]['jamaah'];
            } else if ( room == 'triple' ) {
                return cardData[0][1]['jamaah'];
            } else {
                return cardData[0][2]['jamaah'];
            }
        }
        
        var count = checkCountRoom("{{ $type_room }}");
        var price = checkTotalPriceRoom("{{ $type_room }}");
        var jamaah = checkJamaahRoom("{{ $type_room }}");

        if ( count > 0 ) {

            // View Detail Jamaah Room
            jamaah.map(data => {
                detailJamaah(data, "{{ $type_room }}")
            })

        } else {
            $('#detail-room-{{ $type_room }}').append(`@include('pages.transaction.partials.NotFoundJamaah')`);
        }

        // View Count Room
        $('.count-people-{{ $type_room }}').html(count);

        // view Total Price Room
        $('.total-price-{{ $type_room }}').html(formatRupiah(price));


    </script>
@endpush