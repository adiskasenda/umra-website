<!-- Step Start -->
<div class="card card-bordered mb-8" style="width: 100%;">
    <div class="card-body">
        <div class="timeline">

            <div class="timeline-item">
                <div class="timeline-line w-40px"></div>
                <div class="timeline-icon symbol symbol-circle symbol-40px">
                    <div class="symbol-label bg-light" @if( $step >= 1 ) style="background: #006B67 !important;" @endif>
                        <span class="svg-icon svg-icon-2 svg-icon-gray-500 fs-20" @if( $step >= 1 ) style="color: white !important;" @endif> 1 </span>
                    </div>
                </div>
                <div class="timeline-content mb-10">
                    <div class="mt-3 fs-5 fw-semibold">Calon Jamaah</div>
                </div>
            </div>

            <div class="timeline-item">
                <div class="timeline-line w-40px"></div>
                <div class="timeline-icon symbol symbol-circle symbol-40px">
                    <div class="symbol-label bg-light" @if( $step >= 2 ) style="background: #006B67 !important;" @endif>
                        <span class="svg-icon svg-icon-2 svg-icon-gray-500 fs-20" @if( $step >= 2 ) style="color: white !important;" @endif> 2 </span>
                    </div>
                </div>
                <div class="timeline-content mb-10">
                    <div class="mt-3 fs-5 fw-semibold">Biodata</div>
                </div>
            </div>

            <div class="timeline-item">
                <div class="timeline-line w-40px"></div>
                <div class="timeline-icon symbol symbol-circle symbol-40px">
                    <div class="symbol-label bg-light" @if( $step >= 3 ) style="background: #006B67 !important;" @endif>
                        <span class="svg-icon svg-icon-2 svg-icon-gray-500 fs-20" @if( $step >= 3 ) style="color: white !important;" @endif> 3 </span>
                    </div>
                </div>
                <div class="mt-3 fs-5 fw-semibold">Checkout</div>
            </div>

        </div>
    </div>
</div>


<!-- Pilihan Paket -->
<div class="card card-bordered">
    <div class="card-header" style="padding: 1rem !important; min-height:auto!important;background: #E6F1F0;">
        <div class="font-normal-600 fs-14">Pilihan Paket</div>
        <a href="{{ url('/package', $id_package) }}"  class="font-normal-400 fs-12 text-green">Lihat Detail</a>
    </div>
    <div class="card-body" style="padding: 1rem !important;background: #F8FCFC;">
        <div class="font-normal-700 fs-16">{{ $name_package }}</div>
        <div class="row mt-3">
            <div class="col-lg-6 col-md-6 col-5">
                <div style="border-radius: 15px; background-color: #006B67; color: white; border:none; padding:5px 10px; font-size: 13px; width:max-content;">
                    <div class="font-normal-400 fs-12">
                        {{ $flag_umroh }}
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-7">
                <div class="text-tertiary">
                    <img class="icon-package" src="{{ asset('assets-web/img/icon/room.png') }}" alt="{{ asset('assets-web/img/icon/room.png') }}">
                    Tersisa {{ $quota }}
                </div>
            </div>
        </div>
    </div>
</div>
