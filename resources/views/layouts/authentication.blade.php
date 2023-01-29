<!DOCTYPE html>
<html lang="en">
	<head>
		@include('layouts.partials.meta')

		@include('layouts.partials.style')
		
		@stack('page_css')
        <style>
			body { 
				background-image: url('{{ asset("assets-web/img/background/bg10.jpeg") }}'); 
			} 
		</style>
	</head>
	<body id="kt_body" class="app-blank app-blank bgi-size-cover bgi-position-center bgi-no-repeat">
		<div class="d-flex flex-column flex-root" id="kt_app_root">
			<div class="d-flex flex-column flex-lg-row flex-column-fluid">
				<div class="d-flex flex-lg-row-fluid">
					<div class="d-flex flex-column flex-center pb-0 pb-lg-10 p-10 w-100">
						<img class="theme-light-show mx-auto mw-100 w-150px w-lg-300px mb-10 mb-lg-20" src="{{ asset('assets-web/img/logo/logo_umra_icon.png') }}" alt="" />
					</div>
				</div>
				<div class="d-flex flex-column-fluid flex-lg-row-auto justify-content-center justify-content-lg-end">
					<div class="bg-body d-flex flex-center rounded-4 w-md-600px p-10">
						<div class="w-md-400px">
							@yield('content')
						</div>
					</div>
				</div>
			</div>
		</div>

        @include('layouts.partials.script')
		@stack('page_js')
	</body>
</html>