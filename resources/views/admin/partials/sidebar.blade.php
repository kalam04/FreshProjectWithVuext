<ul class="navigation navigation-main noprint" id="main-menu-navigation" data-menu="menu-navigation">
    {{-- @can('dashboard') --}}
    <li class="{{ Request::segment(1) == 'dashboard' ? 'active' : '' }} nav-item"><a class="d-flex align-items-center"
            href="{{ route('dashboard') }}"><i data-feather="home"></i><span class="menu-title text-truncate"
                data-i18n="Home">Home</span></a>
    </li>
    {{-- @endcan --}}

        <li
            class="{{ Request::segment(1) == 'permission' || Request::segment(2) == 'service'? 'has-sub sidebar-group-active open': '' }} nav-item">
            <a class="d-flex align-items-center" href="#"><i data-feather="layout">
                </i><span class="menu-title text-truncate" data-i18n="Page Layouts">Access Control</span>
            </a>
            <ul class="menu-content">

                    <li class="{{ Request::segment(1) == 'permission' ? 'active' : '' }}">
                        <a class="d-flex align-items-center" href=""><i data-feather="circle">
                            </i><span class="menu-item text-truncate" data-i18n="Layout Boxed">Permission</span></a>
                    </li>

            </ul>
        </li>
   

</ul>
