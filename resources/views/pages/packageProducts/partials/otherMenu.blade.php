<div class="container-fluid py-5">
    <div class="container">
        <div class="mx-auto">
            <div class="mb-5" style="font-size: 32px;">Paket Layanan lain</div>
        </div>
        <div class="row">
            @foreach( $otherMenus as $otherMenu )
                <div class="col-md-6">
                    <div class="card" style="width: 100$;">
                        <div class="card-body">
                            <div class="row mb-3">
                                <div class="col-md-3">
                                    <img src="{{ $otherMenu['icon'] }}" alt="{{ $otherMenu['icon'] }}" width="100px" height="100px" />
                                </div>
                                <div class="col-md-9">
                                    <div class="text-dark">{{ $otherMenu['title'] }}</div>
                                    <div class="text-tertiary">{{ $otherMenu['description'] }}</div>
                                </div>
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