<!DOCTYPE html>
<html lang="en">
    <head>
        @include('layouts.partials.meta')

        @include('layouts.partials.style')
        @stack('page_css')
    </head>

    <body>
        @include('layouts.partials.spinner') 

        @include('layouts.partials.navbarMaster')

        <!-- Content Start -->
        <div class="content bg-white">
            @yield('content')
            
            @include('layouts.partials.footer')
        </div>
        
        @include('layouts.partials.script') 
        @stack('page_js')
    </body>
</html>