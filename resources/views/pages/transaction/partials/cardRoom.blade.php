<div class="card card-bordered mt-5" style="width: 100$;">
    <div class="card-header" style="background: #F8FCFC; display:inline;">
        <div class="row mt-5 mb-5">
            <div class="col-lg-2 col-md-3 col-4 mt-2">
                <img src="{{ $icon }}" width="40px" height="40px" alt="{{ $icon }}">
                <span class="font-normal-600 fs-16">{{ $name }}</span>
            </div>
            <div class="col-lg-2 col-md-3 col-4 mt-3">
                <div class="font-normal-600 fs-16">
                    <i class="fa-solid fa-user-group me-2" style="color: var(--dark)"></i>
                    <span class="count-people-{{ $type_room }}">0</span> Orang
                </div>
            </div>
            <div class="col-lg-8 col-md-6 col-4 text-right">
                <button class="btn btn-success" id="btn-add-jamaah-{{ $type_room }}">
                    <i class="fa-solid fa-plus me-2"></i>
                    Tambah Jamaah
                </button>
            </div>
        </div>
    </div>
    <div class="card-body" style="padding: 1rem !important;">
        <div id="form-room-{{ $type_room }}">
            <!--begin::Accordion-->
                {{-- @include('pages.transaction.partials.detailJamaah') --}}
                {{-- @include('pages.transaction.partials.formJamaah') --}}
                {{-- @include('pages.transaction.partials.NotFoundJamaah') --}}
            <!--end::Accordion-->
        </div>
    </div>
</div>

@push('page_js')
    <script>
        function addCountJamaah(room, addCount) {
            const cardData = JSON.parse(localStorage.getItem("cartData"));

            if ( room == 'doble' ) {
                cardData[0][0]['doble'] = parseInt(cardData[0][0]['doble']) + parseInt(addCount)
                addFormJamaah(uuid(), room);
            } else if ( room == 'triple' ) {
                cardData[0][1]['triple'] = parseInt(cardData[0][1]['triple']) + parseInt(addCount)
                addFormJamaah(uuid(), room);
            } else {
                cardData[0][2]['quad'] = parseInt(cardData[0][2]['quad']) + parseInt(addCount)
                addFormJamaah(uuid(), room);
            }

            localStorage.setItem("cartData", JSON.stringify(cardData));

        }

        function addFormJamaah(i, room) {
            count = checkCountRoom(room);
            if ( count == 0 ) {
                $('#form-room-'+room).html(``);
            }

            $('#form-room-'+room).append(`@include('pages.transaction.partials.formJamaah',[
                'id' => '`+ i +`',
                'first_name' => '',
                'last_name' => '',
                'birth_date' => '',
                'gender' => '',
                'address' => '',
                'phone_number' => '',
                'ktp_number' => '',
                'passport_number' => '',
                'passport_expiry_date' => '',
                'vaccine_status' => '',
                'room' => '`+ room +`'
            ])`);

            $(".date").flatpickr({
                dateFormat: "d-m-Y",
            });

            load_js();
            return ;
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
            let html = $('#form-room-'+room).append(`@include('pages.transaction.partials.detailJamaah',[
                'id' => '`+ data.id +`',
                'first_name' => '`+ data.first_name +`',
                'last_name' => '`+ data.last_name +`',
                'birth_date' => '`+ data.birth_date +`',
                'gender' => '`+ gender +`',
                'address' => '`+ data.address +`',
                'phone_number' => '`+ data.phone_number +`',
                'ktp_number' => '`+ data.ktp_number +`',
                'passport_number' => '`+ data.passport_number +`',
                'passport_expiry_date' => '`+ data.passport_expiry_date +`',
                'vaccine_status' => '`+ vaccine_status +`',
                'room' => '`+ room +`',
            ])`);

            html.find('img[class="ktp_url"]').attr("src", data.ktp_url);

            return ;
        }

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
    </script>

    <!-- Action Form Start -->
    <script>
        $('#btn-add-jamaah-{{ $type_room }}').click(function () {
            addCountJamaah("{{ $type_room }}", 1);
            const count = checkCountRoom("{{ $type_room }}");
            $('.count-people-{{ $type_room }}').html(count);
            total();
        });
    </script>
    <script>
        $('#form-room-{{ $type_room }}').on('click', '.remove_form_jamaah', function(e) {
            e.preventDefault();
            const cardData = JSON.parse(localStorage.getItem("cartData"));
            const room = '{{ $type_room }}';
            const id = $(this).data('id');

            if ( room == 'doble' ) {
                const jamaah = cardData[0][0]['jamaah'].filter(jamaah => jamaah.id !== id);
                cardData[0][0]['doble'] = parseInt(cardData[0][0]['doble']) - 1
                cardData[0][0]['jamaah'] = jamaah;

                if ( cardData[0][0]['doble'] == 0 ) {
                    $('#form-room-{{ $type_room }}').append(`@include('pages.transaction.partials.NotFoundJamaah')`);
                }
            } else if ( room == 'triple' ) {
                const jamaah = cardData[0][1]['jamaah'].filter(jamaah => jamaah.id !== id);
                cardData[0][1]['triple'] = parseInt(cardData[0][1]['triple']) - 1
                cardData[0][1]['jamaah'] = jamaah;

                if ( cardData[0][1]['triple'] == 0 ) {
                    $('#form-room-{{ $type_room }}').append(`@include('pages.transaction.partials.NotFoundJamaah')`);
                }
            } else {
                const jamaah = cardData[0][2]['jamaah'].filter(jamaah => jamaah.id !== id);
                cardData[0][2]['quad'] = parseInt(cardData[0][2]['quad']) - 1
                cardData[0][2]['jamaah'] = jamaah;

                if ( cardData[0][2]['quad'] == 0 ) {
                    $('#form-room-{{ $type_room }}').append(`@include('pages.transaction.partials.NotFoundJamaah')`);
                }
            }

            // Remove Item
            $(this).parent().parent().parent().parent().parent().parent().remove()
            localStorage.setItem("cartData", JSON.stringify(cardData));
            total();
        });

        $('#form-room-{{ $type_room }}').on('change', '.ktp_url_upload', function() {
            const html_input_ktp = $(this).parent().find('input[name="ktp_url"]');
            var reader = new FileReader();
            reader.readAsDataURL($(this)[0].files[0]);
            reader.onload = function (e) {
                html_input_ktp.parent().find('input[name="ktp_url"]').val(e.target.result)
            }
        }); 

        $('#form-room-{{ $type_room }}').on('click', '.btn-save', function(e) {
            e.preventDefault();
            var cardData = JSON.parse(localStorage.getItem("cartData"));
            let data = {};
            Object.assign(data, { id: $(this).data('id') });
            let formSubmit = $(this).parent().parent().parent().parent().serializeArray();
            $.each(formSubmit, function() {
                if (data[this.name]) {
                    if (!data[this.name].push) {
                        data[this.name] = [data[this.name]];
                    }
                    data[this.name].push(this.value || '');
                } else {
                    data[this.name] = this.value || '';
                }
                
            });

            const message = validationFrom(data);
            if ( message.length > 0 ) {
                $(this).parent().parent().parent().parent().parent().parent().find('input').removeClass('is-invalid');
                $(this).parent().parent().parent().parent().parent().parent().find('.message-validation').html(``);

                message.map( res => {
                    $(this).parent().parent().parent().parent().parent().parent().find('input[name="'+res.name+'"]').addClass('is-invalid')
                    $(this).parent().parent().parent().parent().parent().parent().find('.message-validation.'+res.name).html(`@include('pages.transaction.partials.messageValidation',[
                        'message' => '`+ res.message +`'
                    ])`);
                })

                return false;
            }

            const room = '{{ $type_room }}';
            if ( room == 'doble' ) {
                const jamaah = cardData[0][0]['jamaah'].filter(jamaah => jamaah.id !== data.id);
                cardData[0][0]['jamaah'] = jamaah;
                cardData[0][0]['jamaah'].push(data);
            } else if ( room == 'triple' ) {
                const jamaah = cardData[0][1]['jamaah'].filter(jamaah => jamaah.id !== data.id);
                cardData[0][1]['jamaah'] = jamaah;
                cardData[0][1]['jamaah'].push(data);

            } else {
                const jamaah = cardData[0][2]['jamaah'].filter(jamaah => jamaah.id !== data.id);
                cardData[0][2]['jamaah'] = jamaah;
                cardData[0][2]['jamaah'].push(data);
            }

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
            let html = $(this).parent().parent().parent().parent().parent().parent().parent().parent().html(`@include('pages.transaction.partials.detailJamaah',[
                'id' => '`+ data.id +`',
                'first_name' => '`+ data.first_name +`',
                'last_name' => '`+ data.last_name +`',
                'birth_date' => '`+ data.birth_date +`',
                'gender' => '`+ gender +`',
                'address' => '`+ data.address +`',
                'phone_number' => '`+ data.phone_number +`',
                'ktp_number' => '`+ data.ktp_number +`',
                'passport_number' => '`+ data.passport_number +`',
                'passport_expiry_date' => '`+ data.passport_expiry_date +`',
                'vaccine_status' => '`+ vaccine_status +`',
                'room' => '`+ room +`',
            ])`);

            html.find('img[class="ktp_url"]').attr("src", data.ktp_url);

            localStorage.setItem("cartData", JSON.stringify(cardData));
            total();
        });

        $('#form-room-{{ $type_room }}').on('click', '.btn-edit', function(e) {
            var cardData = JSON.parse(localStorage.getItem("cartData"));
            const room = "{{ $type_room }}";
            const id = $(this).data('id');
            let data;

            if ( room == 'doble' ) {
                data = cardData[0][0]['jamaah'].filter(jamaah => jamaah.id == id);
            } else if ( room == 'triple' ) {
                data = cardData[0][1]['jamaah'].filter(jamaah => jamaah.id == id);
            } else {
                data = cardData[0][2]['jamaah'].filter(jamaah => jamaah.id == id);
            }

            let html = $(this).parent().parent().parent().parent().parent().parent().parent().html(`@include('pages.transaction.partials.formJamaah',[
                'id' => '`+ id +`',
                'first_name' => '`+ data[0].first_name +`',
                'last_name' => '`+ data[0].last_name +`',
                'birth_date' => '`+ data[0].birth_date +`',
                'gender' => '`+ data[0].gender +`',
                'address' => '`+ data[0].address +`',
                'phone_number' => '`+ data[0].phone_number +`',
                'ktp_number' => '`+ data[0].ktp_number +`',
                'passport_number' => '`+ data[0].passport_number +`',
                'passport_expiry_date' => '`+ data[0].passport_expiry_date +`',
                'vaccine_status' => '`+ data[0].vaccine_status +`',
                'room' => '`+ room +`'
            ])`);

            // Set Url image KTP
            if ( data[0].ktp_url.length != 0 ) {
                html.find('input[name="ktp_url"]').val(data[0].ktp_url.length);

                html.find(".input-ktp").removeClass('image-input-empty').addClass('image-input-changed');
                html.find('.image-input-wrapper').css('background-image', `url(`+data[0].ktp_url+`)`);
            }

            $(".date").flatpickr({
                dateFormat: "d-m-Y",
            });

            total();

            load_js();
        });
    </script>
    <!-- Action Form End -->

    <!-- Document Ready Start -->
    <script>
        $(document).ready(function() {
            count = checkCountRoom("{{ $type_room }}");
            jamaah = checkJamaahRoom("{{ $type_room }}");

            if ( count > 0 ) {
                // Detail Jamaah Register
                jamaah.map(data => {
                    detailJamaah(data, "{{ $type_room }}")
                })

                // Add Form Register
                for ( var i = jamaah.length; i < count; i++ ) {
                    addFormJamaah(uuid(), "{{ $type_room }}");
                }
            } else {
                $('#form-room-{{ $type_room }}').append(`@include('pages.transaction.partials.NotFoundJamaah')`);
            }
        });
    </script>
    <!-- Document Ready End -->

@endpush
