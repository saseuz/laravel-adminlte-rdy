<!-- Main Sidebar Container -->
<aside class="main-sidebar main-sidebar-custom sidebar-light-primary elevation-4" id="main-sidebar">
    <!-- Brand Logo -->
    <a href="{{ route(admin_route_name().'dashboard') }}" class="brand-link" id="brand-link">
        <img src="{{ asset('adminlte/dist/img/AdminLTELogo.png') }}" alt="{{ config('app.name') }} Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">{{ config('app.name') }}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
            <img src="{{ asset('adminlte/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
            <a href="#" class="d-block">Alexander Pierce</a>
        </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                with font-awesome or any other icon font library -->
            <li class="nav-item">
                <a href="{{ route(admin_route_name() . 'dashboard') }}" class="nav-link @if(active_state('/dashboard')) active @endif">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                    Dashboard
                    </p>
                </a>
            </li>

            @php
                $sidebars = config('sidebar.backend');
            @endphp

            @isset($sidebars)
            @foreach($sidebars as $key => $sidebar)
                @if(!isset($sidebar['child-view']))
                    @can(isset($sidebar['permission']) ? $sidebar['permission'] : '')
                    <li class="nav-item">
                        <a href="{{ route(admin_route_name().$sidebar['route']) }}" class="nav-link @if(active_state($sidebar['url'])) active @endif">
                            <i class="{{ $sidebar['icon'] }}"></i>
                            <p>
                                {{ $sidebar['name'] }}
                            </p>
                        </a>
                    </li>
                    @endcan
                @else
                    @can(isset($sidebar['permission']) ? $sidebar['permission'] : '')
                        <li class="nav-item has-treeview @if(tree_active_state($sidebar['url'])) menu-open @endif">
                            <a href="#" class="nav-link @if(active_state('/user*') || active_state('/role*')) active @endif">
                                <i class="{{ $sidebar['icon'] }}"></i>
                                <p>
                                    {{ $sidebar['name'] }}
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">

                                @foreach($sidebar['child-view'] as $key => $child)
                                    @can(isset($child['permission']) ? $child['permission'] : '')
                                        <li class="nav-item">
                                            <a href="{{ route(admin_route_name().$child['route']) }}" class="nav-link @if(active_state($child['url'])) active @endif">
                                                <i class="nav-icon fas fa-user-tag"></i>
                                                <p>{{ $child['name'] }}</p>
                                            </a>
                                        </li>
                                    @endcan
                                @endforeach

                            </ul>
                        </li>
                    @endcan
                @endif
            @endforeach
            @endisset
        </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
    <div class="sidebar-custom">
        <a href="{{ route(admin_route_name().'site-settings') }}" class="btn btn-link"><i class="fas fa-cogs"></i></a>
        {{-- <a href="#" class="btn btn-secondary hide-on-collapse pos-right">Help</a> --}}
    </div>
</aside>