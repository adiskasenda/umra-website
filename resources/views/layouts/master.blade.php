<!DOCTYPE html>
<html lang="en">
    <head>
        @include('layouts.partials.meta')

        @include('layouts.partials.style')
        <!-- @include('layouts.partials.style1') -->
    </head>

    <body>
        @include('layouts.partials.spinner')

        @include('layouts.partials.navbarMaster')

        <!-- Content Start -->
        <div class="content">
            @yield('content')
        </div>
        
        @include('layouts.partials.footer')
        
        @include('layouts.partials.script')
        <!-- @include('layouts.partials.script1') -->
    </body>
</html>