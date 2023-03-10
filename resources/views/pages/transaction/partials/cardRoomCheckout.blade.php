<div class="accordion mt-5 mb-5" id="kt_accordion_1">
    <div class="accordion-item">
        <h2 class="accordion-header" id="kt_accordion_1_header_1">
            <button class="accordion-button fs-4 fw-semibold" style="background-color: white" aria-expanded="true"  type="button" data-bs-toggle="collapse" data-bs-target="#kt_accordion_{{ $type_room }}" aria-controls="kt_accordion_{{ $type_room }}">
                <div class="row" style="width:100%;">
                    <div class="col-lg-1 col-md-2 col-2">
                        <img src="{{ $icon }}" width="40px" height="40px" alt="{{ $icon }}">
                    </div>
                    <div class="col-lg-5 col-md-5 col-5">
                        <div class="font-normal-700 fs-16">{{ $name }}</div>
                        <div class="font-normal-600 fs-14 text-green">
                            <i class="fa-solid fa-user-group me-2" style="color: var(--green)"></i>
                            <span class="count-people-{{ $type_room }}">0</span> Orang
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-5 col-5">
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
                {{-- @include('pages.transaction.partials.cardDetailJamaahCheckout') --}}
                {{-- @include('pages.transaction.partials.NotFoundJamaah') --}}
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

        function detailJamaah(data, room) {
            const gender = data.gender == '1' ? 'Laki Laki <span><i class="fa-solid fa-mars me-2" style="color: black"></i></span>' : 'Perempuan <span><i class="fa-solid fa-venus me-2" style="color: black"></i></span>';
            let vaccine_status;
            switch(data.vaccine_status) {
                case '0':
                    vaccine_status = 'Belum Vaksin'
                    break;
                case '1':
                    vaccine_status = 'Dosis Pertama'
                    break;
                case '2':
                    vaccine_status = 'Dosis Kedua'
                    break;
                case '3':
                    vaccine_status = 'Booster'
                    break;
                default:
                    vaccine_status = 'Booster Kedua'
            }
            $('#detail-room-'+room).append(`@include('pages.transaction.partials.cardDetailJamaahCheckout',[
                'id' => '`+ data.id +`',
                'first_name' => '`+ data.first_name +`',
                'last_name' => '`+ data.last_name +`',
                'birth_date' => '`+ data.birth_date +`',
                'gender' => '`+ gender +`',
                'address' => '`+ data.address +`',
                'phone_number' => '`+ data.phone_number +`',
                'ktp_url' => '`+ data.ktp_url +`',
                'ktp_number' => '`+ data.ktp_number +`',
                'passport_number' => '`+ data.passport_number +`',
                'passport_expiry_date' => '`+ data.passport_expiry_date +`',
                'vaccine_status' => '`+ vaccine_status +`',
                'room' => '`+ room +`',
            ])`);

            return ;
        }
    </script>
    <script>
        $(document).ready(function() {
            var count = checkCountRoom("{{ $type_room }}");
            var price = checkTotalPriceRoom("{{ $type_room }}");
            var jamaah = checkJamaahRoom("{{ $type_room }}");

            // View Detail Jamaah Room
            if ( count > 0 ) {
                jamaah.map(data => {
                    detailJamaah(data, "{{ $type_room }}")
                })

            } else {
                $('#detail-room-{{ $type_room }}').append(`@include('pages.transaction.partials.NotFoundJamaah')`);
            }

            // View Count & Price Room
            $('.count-people-{{ $type_room }}').html(count);
            $('.total-price-{{ $type_room }}').html(formatRupiah(price));
        });
    </script>
@endpush

