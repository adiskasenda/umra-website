<div class="accordion mt-5 mb-5" id="kt_accordion_1">
    <div class="accordion-item">
        <h2 class="accordion-header" id="kt_accordion_1_header_1">
            <button class="accordion-button fs-4 fw-semibold" style="background-color: white" aria-expanded="true"  type="button" data-bs-toggle="collapse" data-bs-target="#kt_accordion_{{ $type_room }}" aria-controls="kt_accordion_{{ $type_room }}">
                <div class="row" style="width:100%;">
                    <div class="col-2">
                        <img src="{{ $icon }}" width="40px" height="40px" alt="{{ $icon }}">
                    </div>
                    <div class="col-5">
                        <div class="font-normal-700 fs-16">{{ $name }}</div>
                        <div class="font-normal-600 fs-14 text-green">
                            <i class="fa-solid fa-user-group" style="color: var(--green)"></i>
                            <span class="count-people-{{ $type_room }}">0</span> Orang
                        </div>
                    </div>
                    <div class="col-5">
                        <div class="font-normal-700 fs-18 text-green">
                            Rp. <span id="total_price-{{ $type_room }}">0</span>
                        </div>
                    </div>
                </div>
            </button>
        </h2>
        <div id="kt_accordion_{{ $type_room }}" class="accordion-collapse collapse show" aria-labelledby="kt_accordion_1" data-bs-parent="#kt_accordion_1_header_1">
            <div class="accordion-body" style="background-color: #F8FCFC">
                @include('pages.transaction.partials.cardDetailJamaahCheckout')
                @include('pages.transaction.partials.cardDetailJamaahCheckout')
            </div>
        </div>
    </div>
</div>