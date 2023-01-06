<div class="container-fluid py-5">
    <div class="container">
        <div class="mx-auto">
            <h1 class="display-5 mb-5">Paket Layanan lain</h1>
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
                                    <div>{{ $otherMenu['title'] }}</div>
                                    <div>{{ $otherMenu['description'] }}</div>
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