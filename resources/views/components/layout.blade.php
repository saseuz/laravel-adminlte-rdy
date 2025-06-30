<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ config('app.name') }} | Dashboard</title>
  @include('backend.components.css')
  @stack('extra-css')
</head>
<body class="hold-transition sidebar-mini layout-fixed">

<div class="wrapper">
  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="{{ asset('adminlte/dist/img/Logo.png') }}" alt="{{ config('app.name') }} Logo" height="60" width="60">
  </div>

  <!-- Navbar -->
  @include('backend.components.nav')
  <!-- /.navbar -->

  @include('backend.components.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    {{ $slot }}
  </div>
  <!-- /.content-wrapper -->

  @include('backend.components.footer')

</div>
<!-- ./wrapper -->

@include('backend.components.script')
@stack('extra-script')

</body>
</html>