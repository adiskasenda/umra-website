<!DOCTYPE html>
<html lang="en">
	<head>
		@include('layouts.partials.meta')

		@include('layouts.partials.style1')
		
		@stack('page_css')
        <style>
			body { 
				background-image: url('{{ asset("assets-web/img/background/bg10.jpeg") }}'); 
			} 

			/* Chrome, Safari, Edge, Opera */
			input::-webkit-outer-spin-button,
			input::-webkit-inner-spin-button {
				-webkit-appearance: none;
				margin: 0;
			}

			/* Firefox */
			input[type=number] {
				-moz-appearance: textfield;
			}
		</style>
	</head>
	<body id="kt_body" class="app-blank app-blank bgi-size-cover bgi-position-center bgi-no-repeat">
		@yield('content')
	</body>
	@stack('page_js')
</html>