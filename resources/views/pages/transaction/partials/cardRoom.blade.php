<div class="card card-bordered mt-5" style="width: 100$;">
    <div class="card-header" style="background: #F8FCFC; display:inline;">
        <div class="row mt-5 mb-5">
            <div class="col-2 mt-2">
            <img src="{{ $icon }}" width="40px" height="40px" alt="{{ $icon }}">
                <span class="font-normal-600 fs-16">{{ $name }}</span>
            </div>
            <div class="col-2 mt-3">
                <div class="font-normal-600 fs-16">
                    <i class="fa-solid fa-user-group" style="color: var(--dark)"></i>
                    <span class="count-people-{{ $type_room }}">0</span> Orang
                </div>
            </div>
            <div class="col-8 text-right">
                <button class="btn btn-success" id="btn-add-jamaah-{{ $type_room }}">
                    <i class="fa-solid fa-plus"></i>
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
                cardData[0][0]['doble'] = parseInt(cardData[0][0]['doble'] + addCount)
                addFormJamaah(cardData[0][0]['doble'] - 1, room);
            } else if ( room == 'triple' ) {
                cardData[0][1]['triple'] = parseInt(cardData[0][1]['triple'] + addCount)
                addFormJamaah(cardData[0][1]['triple'] - 1, room);
            } else {
                cardData[0][2]['quad'] = parseInt(cardData[0][2]['quad'] + addCount)
                addFormJamaah(cardData[0][2]['quad'] - 1, room);
            }
            
            localStorage.setItem("cartData", JSON.stringify(cardData));
            
        }

        function addFormJamaah(i, room) {
            console.log(i, 'ini id nya');
            if ( i == 0 ) {
                $('#form-room-'+room).html(``);
            }

            $('#form-room-'+room).append(`@include('pages.transaction.partials.formJamaah',[
                'id' => '`+ (i+1) +`',
                'room' => '`+ room +`'
            ])`);

            return console.log('view jamaah', i);
        }

        function deatailJamaah(data) {
            return console.log('detail Jamaah', data);
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

        function totalJamaah() {
            const cardData = JSON.parse(localStorage.getItem("cartData"));
            $('#total_jamaah').html( parseInt(cardData[0][0]['doble']) + parseInt(cardData[0][1]['triple']) + parseInt(cardData[0][2]['quad']) );
        }
    </script>
    <script>
        count = checkCountRoom("{{ $type_room }}");
        jamaah = checkJamaahRoom("{{ $type_room }}");

        // View Count Room
        $('.count-people-{{ $type_room }}').html(count);

        if ( count > 0 ) {
            // Add Form Register
            for ( var i = jamaah.length; i < count; i++ ) {
                addFormJamaah(i, "{{ $type_room }}");
            }

            // Detail Jamaah Register
            jamaah.map(data => {
                deatailJamaah(data)
            })
        } else {
            $('#form-room-{{ $type_room }}').append(`@include('pages.transaction.partials.NotFoundJamaah')`);
        }

        totalJamaah();
    </script>
    <script>
        $('#btn-add-jamaah-{{ $type_room }}').click(function () {
            addCountJamaah("{{ $type_room }}", 1);
            const count = checkCountRoom("{{ $type_room }}");
            $('.count-people-{{ $type_room }}').html(count);
            totalJamaah();
        });

        $('.btn-remove-jamaah').click(function () {
            console.log($('#test').attr('id'));
        });
    </script>
@endpush