<div class="accordion mt-5 mb-5" id="kt_accordion_1">
    <div class="accordion-item">
        <h2 class="accordion-header" id="kt_accordion_1_header_1">
            <button class="accordion-button fs-4 fw-semibold" style="background-color: white" aria-expanded="true"  type="button" data-bs-toggle="collapse" data-bs-target="#kt_accordion_1_body_1" aria-controls="kt_accordion_1_body_1">
                <div class="row">
                    <div class="col-2 mt-1">
                        <img src="{{ $icon }}" alt="{{ $icon }}">
                    </div>
                    <div class="col-5">
                        <div class="font-normal-700 fs-16">{{ $name }}</div>
                        <div class="font-normal-600 fs-14 text-green">
                            <i class="fa-solid fa-user-group" style="color: var(--green)"></i>
                            {{ count($jamaah) }} Orang
                        </div>
                    </div>
                    <div class="col-5 mt-5">
                        <div class="font-normal-700 fs-18 text-green">
                            Rp. 0
                        </div>
                    </div>
                </div>
            </button>
        </h2>
        <div id="kt_accordion_1_body_1" class="accordion-collapse collapse show" aria-labelledby="kt_accordion_1" data-bs-parent="#kt_accordion_1_header_1">
            <div class="accordion-body" style="background-color: #F8FCFC">
                @foreach($jamaah as $key => $jamaah)
                    <div class="row">
                        <div class="col-10">
                            <div class="font-normal-400 fs-12 text-green">
                                <i class="fa-solid fa-user-group" style="color: var(--green)"></i>
                                Calon Jamaah {{ $key+1 }}
                            </div>
                            <div class="font-normal-700 fs-16">
                                {{ $jamaah['first_name'].' '.$jamaah['last_name'] }}
                            </div>
                        </div>
                        <div class="col-2">
                            <button class="btn btn-success">View Detail</button>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>