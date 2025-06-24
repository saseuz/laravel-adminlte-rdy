<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Dashboard</title>
  @include('adminlte::components.css')
  @stack('extra-css')
</head>
<body class="hold-transition sidebar-mini layout-fixed">

<div class="wrapper">
  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="{{ asset('adminlte/dist/img/AdminLTELogo.png') }}" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  @include('adminlte::components.nav')
  <!-- /.navbar -->

  @include('adminlte::components.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    {{ $slot }}
  </div>
  <!-- /.content-wrapper -->

  @include('adminlte::components.footer')

</div>
<!-- ./wrapper -->

@include('adminlte::components.script')
@stack('extra-script')

</body>
</html>