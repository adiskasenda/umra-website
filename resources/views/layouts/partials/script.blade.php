<!-- Script Template -->
<script src="{{ asset('assets-web/plugins/global/plugins.bundle.js') }}"></script>
<script src="{{ asset('assets-web/js/scripts.bundle.js') }}"></script>

<!-- Script Libraries -->
<script src="{{ asset('assets-web/lib/easing/easing.min.js') }}"></script>
<script src="{{ asset('assets-web/lib/counterup/counterup.min.js')}}"></script>
<script src="{{ asset('assets-web/lib/wow/wow.min.js') }}"></script>
<script src="{{ asset('assets-web/lib/owlcarousel/owl.carousel.min.js')}}"></script>
<script src="{{ asset('assets-web/lib/pincode/pincode-input.min.js')}}"></script>
<script src="{{ asset('assets-web/lib/pagination/jq-paginator.min.js')}}"></script>

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

    function formatRupiah(angka, prefix)
    {
        var angka = angka.toString()   
        var number_string = angka.replace(/[^,\d]/g, '').toString();
        var split    = number_string.split(',');
        var sisa     = split[0].length % 3;
        var rupiah     = split[0].substr(0, sisa);
        var ribuan     = split[0].substr(sisa).match(/\d{3}/gi);
            
        if (ribuan) {
            separator = sisa ? ',' : '';
            rupiah += separator + ribuan.join(',');
        }
        
        rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
        return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
    }

    function uuid() {
        return ([1e7]+-1e3+-4e3+-8e3+-1e11).replace(/[018]/g, c =>
            (c ^ crypto.getRandomValues(new Uint8Array(1))[0] & 15 >> c / 4).toString(16)
        );
    }

    function copy_clipboard(id) {
        var temp = $("<input>");
        $("body").append(temp);
        temp.val($('#'+id+'').text()).select();
        document.execCommand("copy");
        temp.remove();
    }
    
    $.ajax({
        url: "{{ url('/api/configuration/META') }}",
        dataType: "json",
        type: 'GET',
        success: function(response) {
            $('.url-term-and-condition').attr('href', response.data[2].value_configuration);
            $('.url-privacy-policy').attr('href', response.data[5].value_configuration);
        },
        
    })
</script>