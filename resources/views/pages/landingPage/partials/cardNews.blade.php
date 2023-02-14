<a href="{{ $url }}">
    <div class="card card-bordered" style="width: 100%; height: 100%;">
        <div class="card-body" style="padding: 1rem !important;">
            <img class="img-card lozad" src="{{ $url_banner }}" width="100%" alt="{{ $url_banner }}">
            <div class="text-dark text-weight-600 fs-20 mt-4 mb-4" style="font-weight: bold;">{{ strlen($subject) > 50 ? substr_replace($subject, '...', 50) : $subject }}</div>
        </div>
    </div>
</a>


<!-- $url -->
<!-- $url_banner -->
<!-- $subject -->
<!-- $created_date -->
