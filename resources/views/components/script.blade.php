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
<!-- SweetAlert2 -->
<script src="{{ asset('adminlte/plugins/sweetalert2/sweetalert2.min.js') }}"></script>
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
  // Set defaults if not already in localStorage
  const sidebarHeader = localStorage.getItem('sidebar-header-color');
  if (!sidebarHeader) {
      localStorage.setItem('theme', 'light');
      localStorage.setItem('bg-sidebar', 'primary');
  }

  $(window).on('load', function () {
      const themeClass = localStorage.getItem('theme');
      const $body = $('body');
      const $navbar = $('#navbar');

      // Apply theme class
      $body.addClass(`${themeClass}-mode`);

      if (themeClass === 'dark') {
          $navbar.removeClass('navbar-white navbar-light').addClass('navbar-dark');
      } else {
          $navbar.removeClass('navbar-dark').addClass('navbar-white navbar-light');
      }

      // Apply accent color
      const accentClass = localStorage.getItem('accent-color');
      if (accentClass) {
          $body.addClass(`accent-${accentClass}`);
      }

      // Apply sidebar header color
      const $brandLink = $('#brand-link');
      if (sidebarHeader) {
          $brandLink.addClass(sidebarHeader);
      }

      // Apply sidebar color
      const $sidebar = $('#main-sidebar');
      if (localStorage.getItem('sidebar-color-changed')) {
          $sidebar.removeClass('sidebar-light-primary');
      }

      const sidebarColor = localStorage.getItem('sidebar-color');
      if (sidebarColor) {
          $sidebar.addClass(sidebarColor);
      }
  });

  @if ($errors->any())
    Swal.fire({
        icon: 'error',
        title: 'Validation Error',
        html: `{!! implode('<br>', $errors->all()) !!}`,
        timer: 5000,
        showConfirmButton: false,
        toast: true,
        position: 'top-end',
    });
  @endif

  @if(session('success'))
    Swal.fire({
        icon: 'success',
        title: 'Success!',
        text: '{{ session('success') }}',
        timer: 3000,
        showConfirmButton: false,
        toast: true,
        position: 'top-end',
    });
  @endif

  @if(session('error'))
    Swal.fire({
        icon: 'error',
        title: 'Error!',
        text: '{{ session('error') }}',
        timer: 3000,
        showConfirmButton: false,
        toast: true,
        position: 'top-end',
    });
  @endif

</script>