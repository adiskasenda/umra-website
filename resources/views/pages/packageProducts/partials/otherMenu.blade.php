<div class="container-fluid py-5">
    <div class="container">
        <div class="mx-auto">
            <div class="mb-4 text-weight-700 fs-44" style="font-weight: bold;">Paket Layanan lain</div>
        </div>
        <div class="row">
            @foreach( $otherMenus as $otherMenu )
                <div class="col-md-6 mb-8">
                    <div class="card card-bordered" style="width: 100$;">
                        <div class="card-body">
                            <div class="row mb-5">
                                <div class="col-3" style="margin:auto;">
                                    <img src="{{ $otherMenu['icon'] }}" alt="{{ $otherMenu['icon'] }}" width="100%" />
                                </div>
                                <div class="col-9" style="margin:auto;">
                                    <div class="text-dark text-weight-700 fs-20" style="font-weight: bold;">{{ $otherMenu['title'] }}</div>
                                    <div class="text-tertiary text-weight-400 fs-16">{{ $otherMenu['description'] }}</div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="d-grid gap-2">
                                        <a href="{{ $otherMenu['url'] }}" class="btn btn-success" style="width:100%;">Lihat Selengapnya</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>