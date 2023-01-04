<!DOCTYPE html>
<html lang="en">
    <head>
        @include('layouts.partials.meta')

        @include('layouts.partials.style')
    </head>

    <body>
        @include('layouts.partials.spinner') 

        @include('layouts.partials.navbarMaster')

        <!-- Content Start -->
        <div class="content" style="margin-top: 76px;">
            @yield('content')
            
            @include('layouts.partials.footer')
        </div>
        
        @include('layouts.partials.script') 
    </body>
</html>