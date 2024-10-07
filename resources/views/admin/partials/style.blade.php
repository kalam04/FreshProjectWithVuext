{{-- html favicon --}}
{{-- @if (!isset(shopInfo()->img_url)) --}}
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('admin/app-assets/images/ico/favicon.ico')}}" >
{{-- @else --}}
    {{-- <link rel="shortcut icon" type="image/x-icon" href="{{asset('storage/shop/'.shopInfo()->img_url)}}" > --}}
{{-- @endif --}}

<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600"
    rel="stylesheet">

<!-- BEGIN: Vendor CSS-->
<link rel="stylesheet" type="text/css" href="{{ asset('admin') }}/app-assets/vendors/css/vendors.min.css">
<!-- END: Vendor CSS-->

<!-- BEGIN: Theme CSS-->

<link rel="stylesheet" type="text/css" href="{{ asset('admin') }}/app-assets/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="{{ asset('admin') }}/app-assets/css/bootstrap-extended.css">
<script src="{{ asset('admin') }}/cdn.js"></script>
<script src="{{ asset('admin') }}/app-assets/js/core/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="{{ asset('admin') }}/app-assets/css/colors.css">
<link rel="stylesheet" type="text/css" href="{{ asset('admin') }}/app-assets/css/components.css">
<link rel="stylesheet" type="text/css" href="{{ asset('admin') }}/app-assets/css/themes/dark-layout.css">
<link rel="stylesheet" type="text/css" href="{{ asset('admin') }}/app-assets/css/themes/semi-dark-layout.css">

<!-- BEGIN: Page CSS-->
<link rel="stylesheet" type="text/css"
    href="{{ asset('admin') }}/app-assets/css/core/menu/menu-types/vertical-menu.css">
<!-- END: Page CSS-->

<!-- BEGIN: Custom CSS-->
<link rel="stylesheet" type="text/css" href="{{ asset('admin') }}/assets/css/style.css">
<!-- END: Custom CSS-->

 <link rel="stylesheet" href="{{ asset('admin') }}/app-assets/toastr.min.css">
 {{-- <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css"> --}}


