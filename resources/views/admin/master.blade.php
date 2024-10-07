<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="PIXINVENT">
    {{-- <link rel="shortcut icon" type="image/x-icon" --}}

    <title>@yield('title')</title>

    @include('admin.partials.style')

    {{-- @yield('style-css') --}}
    <style>
        .pace{
            display: none!important;
        }

        .choose-position .select2-container {
            width: 100% !important;
        }

        .choose-position .select2-container--default .select2-selection--single {
            width: 100% !important;
            display: flex;
            align-items: center;
            padding: 0 30px;
            height: 50px;
            line-height: 50px;
            font-weight: 500;
            font-size: 16px;
            background-color: #fafafa;
            border: 1px solid #eeeeee;
            border-radius: 25px;
            transition: 0.1s;
        }

        .choose-position .select2-search {
            display: none;
        }

        .choose-position .select2-results__option {
            display: flex;
            align-items: center;
        }

        .choose-position .select2-results__option .img-flag {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            object-fit: cover;
            margin-right: 10px;
        }

        .choose-position .select2-container--default.select2-container--focus .select2-selection--single {
            border: 1px solid #c9c9c9 !important;
            outline: 0;
        }

        .choose-position span.select2-selection.select2-selection--single {
            outline: none;
        }

        .choose-position .select2-container--default .select2-selection--single .select2-selection__arrow {
            height: 35px;
            top: 50%;
            transform: translateY(-50%);
            right: 10px;
            width: 35px;
            background-color: #fff;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 5px 20px rgba(35, 49, 45, 0.14);
        }

        .select2-container--default .select2-selection--single .select2-selection__arrow b {
            background-image: url(https://cdn4.iconfinder.com/data/icons/user-interface-174/32/UIF-76-512.png);
            background-color: transparent;
            background-size: contain;
            border: none !important;
            height: 20px !important;
            width: 20px !important;
            margin: auto !important;
            top: auto !important;
            left: auto !important;
        }
    </style>
</head>
<!-- END: Head-->
@stack('css')
<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern  navbar-floating footer-static  " data-open="click" id="bodyId"
    data-menu="vertical-menu-modern" data-col="">

    <!-- BEGIN: Header-->
    @include('admin.partials.topbar')
    <!-- END: Header-->

    <!-- BEGIN: Main Menu-->
    {{-- @php
        $shop = \App\Models\shopInformation::first();
    @endphp --}}
    <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow noprint" data-scroll-to-active="true">
        <div class="navbar-header noprint">
            <ul class="nav navbar-nav flex-row">
                {{-- @can('dashboard') --}}
                <li class="nav-item mr-auto">
                    <a class="navbar-brand noprint" href="{{ route('dashboard') }}">
                        @if (isset($shop->img_url))

                            <img width="auto" height="40" src="{{asset('storage/shop/'.$shop->img_url)}}" alt="No Image">
                        @endif
                        <h2 class="brand-text noprint">{{$shop->name ?? "Company"}}</h2>
                    </a>
                </li>
                {{-- @endcan --}}
                <li class="nav-item nav-toggle">
                    <a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse">
                        <i class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i>
                        <i class="d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary"
                            data-feather="disc" data-ticon="disc"></i>
                    </a>
                </li>
            </ul>
        </div>
        <div class="shadow-bottom"></div>
        <div class="main-menu-content">

            @include('admin.partials.sidebar')

        </div>
    </div>
    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    @yield('main-content')
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    @include('admin.partials.footer')
    <!-- END: Footer-->



    @include('admin.partials.js')


    @stack('script')

</body>
<!-- END: Body-->
@yield('print')
</html>
