<div class="container-fluid py-5">
    <div class="container">
        <div class="mx-auto">
            <div class="mb-5" style="font-size: 32px;">Paket Layanan lain</div>
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
                                    <div class="text-dark" style="font-size: 24px;">{{ $otherMenu['title'] }}</div>
                                    <div class="text-tertiary" style="font-size: 16px;">{{ $otherMenu['description'] }}</div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="d-grid gap-2">
                                        <a href="{{ $otherMenu['url'] }}" class="btn btn-success btn-block">Lihat Selengapnya</a>
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