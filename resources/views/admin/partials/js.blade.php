<!-- BEGIN: Vendor JS-->
<script src="{{ asset('admin') }}/app-assets/vendors/js/vendors.min.js"></script>

<script src="{{ asset('admin') }}/app-assets/js/core/app-menu.js"></script>
<script src="{{ asset('admin') }}/app-assets/js/core/app.js"></script>

{{-- <script src="{{ asset('admin') }}/cdn.js"></script> --}}

<script>
    $(window).on('load', function() {
        if (feather) {
            feather.replace({
                width: 14,
                height: 14
            });
        }
    })
</script>


{{-- <script src="{{ asset('admin') }}/app-assets/jquery.min.js"></script> --}}


<script src="{{ asset('admin') }}/app-assets/toastr.min.js"></script>

{{-- <script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
<script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script> --}}

{!! Toastr::message() !!}

<script type="text/javascript">
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            toastr.error('{{ $error }}', 'Error', {
            closeButton: true,
            progressBar: true,
            });
        @endforeach
    @endif
</script>

{{-- <script>
    $(window).on('load', function() {
        if (feather) {
            feather.replace({
                width: 14,
                height: 14
            });
        }
    })
</script> --}}
