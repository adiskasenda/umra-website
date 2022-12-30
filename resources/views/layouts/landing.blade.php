<!DOCTYPE html>
<html lang="en">
    <head>
		@include('layouts.partials.meta')

        @include('layouts.partials.style') 
        {{-- <!-- @include('layouts.partials.style1') --> --}}
        @stack('page_css')
    </head>

    <body>
        @include('layouts.partials.spinner')

        @include('layouts.partials.navbarLanding')

        <!-- Content -->
        <div class="content" style="margin-top:80px;">
            @yield('content')
        </div>

        @include('layouts.partials.footer')

        @include('layouts.partials.script')
        {{-- <!-- @include('layouts.partials.script1') --> --}}
        @stack('page_js')
    </body>

</html>