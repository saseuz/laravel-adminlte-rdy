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
    document.addEventListener('DOMContentLoaded', () => {

        const theme = document.getElementById('color-theme');
        theme.value = localStorage.getItem('theme');
        theme.addEventListener('click', (e) => {
            toggleTheme(e);
        })


        const accentColor = document.getElementById('accent-color');
        accentColor.value = localStorage.getItem('accent-color');
        accentColor.addEventListener('click', (e) => {
            changeAccentColor(e);
        });

        const sidebarHeader = document.getElementById('sidebar-header-color');
        sidebarHeader.value = localStorage.getItem('sidebar-header-color');
        sidebarHeader.addEventListener('click', (e) => {
            changeSidebarHeader(e);
        });

        const sidebarColor = document.getElementById('sidebar-color');
        sidebarColor.value = localStorage.getItem('bg-sidebar');
        sidebarColor.addEventListener('click', (e) => {
            changeSidebarColor(e);
        });
        
    });

    function toggleTheme(e) {
        const body = document.body;
        let value = e.target.value;
        const navbar = document.getElementById('navbar');

        if (value == 'dark') {

            body.classList.add('dark-mode');

            navbar.classList.remove('navbar-white', 'navbar-light');
            navbar.classList.add('navbar-dark');

            localStorage.setItem('theme', value);
        } else {
            body.classList.remove('dark-mode');

            navbar.classList.remove('navbar-dark');
            navbar.classList.add('navbar-white', 'navbar-light');

            localStorage.setItem('theme', value);
        }
    }

    function changeAccentColor(e) {
        const body = document.body;
        const currentColor = localStorage.getItem('accent-color');
        const colorValue = e.target.value;

        if (currentColor != colorValue) {
            body.classList.remove(`accent-${currentColor}`);
        }
        
        body.classList.add(`accent-${colorValue}`);
        localStorage.setItem('accent-color', colorValue);
    }

    function changeSidebarHeader(e) {
        const brandLink = document.getElementById('brand-link');
        const currentColor = localStorage.getItem('sidebar-header-color');
        const colorValue = e.target.value;

        if (currentColor != colorValue) {
            brandLink.classList.remove(`${currentColor}`);
        }
        
        brandLink.classList.add(`${colorValue}`);
        localStorage.setItem('sidebar-header-color', colorValue);
    }

    function changeSidebarColor(e) {
        const sidebar = document.getElementById('main-sidebar');
        const currentColor = localStorage.getItem('sidebar-color');
        const colorValue = e.target.value;
        const colorClass = 'sidebar-'+ localStorage.getItem('theme') + '-' + colorValue;
        
        if (currentColor != colorClass) {
            sidebar.classList.remove(currentColor);
        }

        sidebar.classList.add(colorClass);
        localStorage.setItem('sidebar-color', colorClass);
        localStorage.setItem('sidebar-color-changed', true);
        localStorage.setItem('bg-sidebar', colorValue);
    }
    
</script>
@endpush

</x-admin-layout>

