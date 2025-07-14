<x-admin-layout>
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Site Settings</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route(admin_route_name().'dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active">Site Settings</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-12">
                    <div class="card card-default">
                        <div class="card-header">
                            <h3 class="card-title">Themes / Colors</h3>
                            
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Light/Dark</label>
                                        <select class="form-control select2" style="width: 100%;" id="color-theme">
                                            <option value="null">None Selected</option>
                                            <option class="bg-light" value="light">Light</option>
                                            <option class="bg-dark" value="dark">Dark</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- /.col -->
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Accent Color Variants</label>
                                        <select class="form-control select2" style="width: 100%;" id="accent-color">
                                            <option value="null">None Selected</option>
                                            <option class="bg-primary" value="primary">Primary</option>
                                            <option class="bg-warning" value="warning">Warning</option>
                                            <option class="bg-info" value="info">Info</option>
                                            <option class="bg-success" value="success">Success</option>
                                            <option class="bg-indigo" value="indigo">Indigo</option>
                                            <option class="bg-lightblue" value="lightblue">Lightblue</option>
                                            <option class="bg-navy" value="navy">Navy</option>
                                            <option class="bg-purple" value="purple">Purple</option>
                                            <option class="bg-fuchsia" value="fuchsia">Fuchsia</option>
                                            <option class="bg-pink" value="pink">Pink</option>
                                            <option class="bg-maroon" value="maroon">Maroon</option>
                                            <option class="bg-orange" value="orange">Orange</option>
                                            <option class="bg-lime" value="lime">Lime</option>
                                            <option class="bg-teal" value="teal">Teal</option>
                                            <option class="bg-olive" value="olive">Olive</option>
                                            <option class="bg-white" value="white">White</option>
                                            <option class="bg-light" value="light">Light</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- /.col -->
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Sidebar Variants</label>
                                        <select class="form-control select2" style="width: 100%;" id="sidebar-color">
                                            <option class="bg-primary" value="primary">Primary</option>
                                            <option class="bg-warning" value="warning">Warning</option>
                                            <option class="bg-info" value="info">Info</option>
                                            <option class="bg-danger" value="danger">Danger</option>
                                            <option class="bg-success" value="success">Success</option>
                                            <option class="bg-indigo" value="indigo">Indigo</option>
                                            <option class="bg-lightblue" value="lightblue">Lightblue</option>
                                            <option class="bg-navy" value="navy">Navy</option>
                                            <option class="bg-purple" value="purple">Purple</option>
                                            <option class="bg-fuchsia" value="fuchsia">Fuchsia</option>
                                            <option class="bg-pink" value="pink">Pink</option>
                                            <option class="bg-maroon" value="maroon">Maroon</option>
                                            <option class="bg-orange" value="orange">Orange</option>
                                            <option class="bg-lime" value="lime">Lime</option>
                                            <option class="bg-teal" value="teal">Teal</option>
                                            <option class="bg-olive" value="olive">Olive</option>
                                            <option class="bg-white" value="white">White</option>
                                            <option class="bg-light" value="light">Light</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- /.col -->
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Brand Logo Variants</label>
                                        <select class="form-control select2" style="width: 100%;" id="sidebar-header-color">
                                            <option value="null">None Selected</option>
                                            <option class="bg-primary" value="bg-primary">Primary</option>
                                            <option class="bg-warning" value="bg-warning">Warning</option>
                                            <option class="bg-info" value="bg-info">Info</option>
                                            <option class="bg-danger" value="bg-danger">Danger</option>
                                            <option class="bg-success" value="bg-success">Success</option>
                                            <option class="bg-indigo" value="bg-indigo">Indigo</option>
                                            <option class="bg-lightblue" value="bg-lightblue">Lightblue</option>
                                            <option class="bg-navy" value="bg-navy">Navy</option>
                                            <option class="bg-purple" value="bg-purple">Purple</option>
                                            <option class="bg-fuchsia" value="bg-fuchsia">Fuchsia</option>
                                            <option class="bg-pink" value="bg-pink">Pink</option>
                                            <option class="bg-maroon" value="bg-maroon">Maroon</option>
                                            <option class="bg-orange" value="bg-orange">Orange</option>
                                            <option class="bg-lime" value="bg-lime">Lime</option>
                                            <option class="bg-teal" value="bg-teal">Teal</option>
                                            <option class="bg-olive" value="bg-olive">Olive</option>
                                            <option class="bg-white" value="bg-white">White</option>
                                            <option class="bg-light" value="bg-light">Light</option>
                                            <option class="bg-black" value="bg-black">Black</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

@push('extra-script')
<!-- Site Settings Script -->
<script>
    $(document).ready(function () {

        // Theme toggle
        const $theme = $('#color-theme');
        $theme.val(localStorage.getItem('theme'));
        $theme.on('click', function (e) {
            toggleTheme(e);
        });

        // Accent color
        const $accentColor = $('#accent-color');
        $accentColor.val(localStorage.getItem('accent-color'));
        $accentColor.on('click', function (e) {
            changeAccentColor(e);
        });

        // Sidebar header color
        const $sidebarHeader = $('#sidebar-header-color');
        $sidebarHeader.val(localStorage.getItem('sidebar-header-color'));
        $sidebarHeader.on('click', function (e) {
            changeSidebarHeader(e);
        });

        // Sidebar background color
        const $sidebarColor = $('#sidebar-color');
        $sidebarColor.val(localStorage.getItem('bg-sidebar'));
        $sidebarColor.on('click', function (e) {
            changeSidebarColor(e);
        });

        function toggleTheme(e) {
            const $body = $('body');
            const value = $(e.target).val();
            const $navbar = $('#navbar');

            if (value === 'dark') {
                $body.addClass('dark-mode');
                $navbar.removeClass('navbar-white navbar-light').addClass('navbar-dark');
            } else {
                $body.removeClass('dark-mode');
                $navbar.removeClass('navbar-dark').addClass('navbar-white navbar-light');
            }

            localStorage.setItem('theme', value);
        }

        function changeAccentColor(e) {
            const $body = $('body');
            const currentColor = localStorage.getItem('accent-color');
            const colorValue = $(e.target).val();

            if (currentColor !== colorValue) {
                $body.removeClass(`accent-${currentColor}`);
            }

            $body.addClass(`accent-${colorValue}`);
            localStorage.setItem('accent-color', colorValue);
        }

        function changeSidebarHeader(e) {
            const $brandLink = $('#brand-link');
            const currentColor = localStorage.getItem('sidebar-header-color');
            const colorValue = $(e.target).val();

            if (currentColor !== colorValue) {
                $brandLink.removeClass(currentColor);
            }

            $brandLink.addClass(colorValue);
            localStorage.setItem('sidebar-header-color', colorValue);
        }

        function changeSidebarColor(e) {
            const $sidebar = $('#main-sidebar');
            const currentColor = localStorage.getItem('sidebar-color');
            const value = $(e.target).val();
            const theme = localStorage.getItem('theme');
            const colorClass = `sidebar-${theme}-${value}`;

            if (currentColor !== colorClass) {
                $sidebar.removeClass(currentColor);
            }

            $sidebar.addClass(colorClass);
            localStorage.setItem('sidebar-color', colorClass);
            localStorage.setItem('sidebar-color-changed', true);
            localStorage.setItem('bg-sidebar', value);
        }
    });

    
</script>
@endpush

</x-admin-layout>

