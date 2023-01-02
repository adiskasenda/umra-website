@if( Session::has('error') )
    <div class="alert alert-message alert-danger d-flex align-items-center">
        <span class="svg-icon svg-icon-2hx svg-icon-danger me-3">--</span>
        <div class="d-flex flex-column">
            <span>{{ Session::get('error') }}</span>
        </div>
    </div>
@endif

@if( session('success') )
    <div class="alert alert-message alert-success d-flex align-items-center">
        <span class="svg-icon svg-icon-2hx svg-icon-success me-3">--</span>
        <div class="d-flex flex-column">
            <span>{{ session('success') }}</span>
        </div>
    </div>
@endif