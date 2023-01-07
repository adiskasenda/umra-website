<a href="{{ $url }}">
    <div class="card" style="width: 100$;">
        <div class="card-body" style="padding: 1rem !important;">
            <img src="{{ $url_banner }}" width="100%" alt="{{ $url_banner }}">
            <h5 class="card-title mt-4">{{ $subject }}</h5>
            <p>{{ date('d M Y H:i', strtotime($created_date)) }}</p>
        </div>
    </div>
</a>


<!-- $url -->
<!-- $url_banner -->
<!-- $subject -->
<!-- $created_date -->
