<!-- Script Template -->
<script src="{{ asset('assets-web/plugins/global/plugins.bundle.js') }}"></script>
<script src="{{ asset('assets-web/js/scripts.bundle.js') }}"></script>

<!-- Script Libraries -->
<script src="{{ asset('assets-web/lib/easing/easing.min.js') }}"></script>
<script src="{{ asset('assets-web/lib/counterup/counterup.min.js')}}"></script>
<script src="{{ asset('assets-web/lib/wow/wow.min.js') }}"></script>
<script src="{{ asset('assets-web/lib/owlcarousel/owl.carousel.min.js')}}"></script>
<script src="{{ asset('assets-web/lib/pincode/pincode-input.min.js')}}"></script>

<!-- Template Javascript -->
<script src="{{ asset('assets-web/js/main.js')}}"></script>

<script>
    // Image Banner Not Found
    $( ".img-banner[src='']" ).attr( "src", "{{ Helpers::imageBannerDefault() }}" );
    $( ".img-banner" ).on("error", function() {
        $( this ).attr( "src", "{{ Helpers::imageBannerDefault() }}" );
    })

    // Image Card Not Found
    $( ".img-card[src='']" ).attr( "src", "{{ Helpers::imageCardDefault() }}" );
    $( ".img-card" ).on("error", function() {
        $( this ).attr( "src", "{{ Helpers::imageCardDefault() }}" );
    })

    // Image Avatar Not found
    $( ".img-avatar[src='']" ).attr( "src", "{{ Helpers::avatarDefault() }}" );
    $( ".img-avatar" ).on("error", function() {
        $( this ).attr( "src", "{{ Helpers::avatarDefault() }}" );
    })
</script>