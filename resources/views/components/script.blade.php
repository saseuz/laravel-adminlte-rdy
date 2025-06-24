<!-- jQuery -->
<script src="{{ asset('adminlte/plugins/jquery/jquery.min.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('adminlte/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ asset('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- ChartJS -->
<script src="{{ asset('adminlte/plugins/chart.js/Chart.min.js') }}"></script>
<!-- Sparkline -->
<script src="{{ asset('adminlte/plugins/sparklines/sparkline.js') }}"></script>
<!-- JQVMap -->
<script src="{{ asset('adminlte/plugins/jqvmap/jquery.vmap.min.js') }}"></script>
<script src="{{ asset('adminlte/plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ asset('adminlte/plugins/jquery-knob/jquery.knob.min.js') }}"></script>
<!-- daterangepicker -->
<script src="{{ asset('adminlte/plugins/moment/moment.min.js') }}"></script>
<script src="{{ asset('adminlte/plugins/daterangepicker/daterangepicker.js') }}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ asset('adminlte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
<!-- Summernote -->
<script src="{{ asset('adminlte/plugins/summernote/summernote-bs4.min.js') }}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('adminlte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('adminlte/dist/js/adminlte.js') }}"></script>

<!-- Theme Color -->
<script>
  const sidebarHeader = localStorage.getItem('sidebar-header-color');
  if (!sidebarHeader) {
    localStorage.setItem('theme', 'light');
    localStorage.setItem('bg-sidebar', 'primary');
  }
  
  window.onload = () => {
    const themeClass = localStorage.getItem('theme');
    const body = document.body;
    const navbar = document.getElementById('navbar');
    body.classList.add(themeClass+'-mode');
    
    if (themeClass == 'dark') {
        navbar.classList.remove('navbar-white', 'navbar-light');
        navbar.classList.add('navbar-dark');
    } else {
        navbar.classList.remove('navbar-dark');
        navbar.classList.add('navbar-white', 'navbar-light');
    }

    const accentClass = localStorage.getItem('accent-color');
    if (accentClass) {
      body.classList.add('accent-'+accentClass);
    }

    const brandLink = document.getElementById('brand-link');
    if (sidebarHeader) {
      brandLink.classList.add(sidebarHeader);
    }

    const sidebar = document.getElementById('main-sidebar');
    if(localStorage.getItem('sidebar-color-changed')) {
      sidebar.classList.remove('sidebar-light-primary');
    }
    const sidebarColor = localStorage.getItem('sidebar-color');
    if (sidebarColor) {
      sidebar.classList.add(sidebarColor);
    }
  }
</script>