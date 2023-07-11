<aside class="main-sidebar {{ config('adminlte.classes_sidebar', 'sidebar-dark-primary elevation-4') }}">

    {{-- Sidebar brand logo --}}
    @if(config('adminlte.logo_img_xl'))
        @include('adminlte::partials.common.brand-logo-xl')
    @else
        @include('adminlte::partials.common.brand-logo-xs')
    @endif

    {{-- Sidebar menu --}}
    <div class="sidebar">
        <nav class="pt-2">
            <ul class="nav nav-pills nav-sidebar flex-column {{ config('adminlte.classes_sidebar_nav', '') }}"
                data-widget="treeview" role="menu"
                @if(config('adminlte.sidebar_nav_animation_speed') != 300)
                    data-animation-speed="{{ config('adminlte.sidebar_nav_animation_speed') }}"
                @endif
                @if(!config('adminlte.sidebar_nav_accordion'))
                    data-accordion="false"
                @endif>
                {{-- Configured sidebar links --}}
                @each('adminlte::partials.sidebar.menu-item', $adminlte->menu('sidebar'), 'item')
                <li  class="nav-item">
                    <a class="nav-link" href="{{ route('dashboard.home') }}">
                        <i class="fas fa-fw fa-chart-bar" aria-hidden="true"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li  class="nav-item">
                    <a class="nav-link" href="{{ route('dashboard.bebas-masalah') }}">
                        <i class="fas fa-fw fa-tasks"></i>
                        <p>Bebas Masalah</p>
                    </a>
                </li>
                <li class="nav-item">
                    {{-- <form action="/logout" method="POST">
                        @csrf --}}
                        {{-- <a class="nav-link font-white" href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();">
                            <i class="fas fa-fw fa-sign-out-alt "></i>
                            <p>Keluar</p>
                        </a> --}}
                    {{-- </form> --}}
                </li>
            </ul>
        </nav>
    </div>

</aside>
