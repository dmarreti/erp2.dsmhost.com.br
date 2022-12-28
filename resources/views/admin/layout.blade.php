<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>CaféControl | {!! $head ?? '' !!}</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ url(mix('backend/plugins/fontawesome-free/css/all.css')) }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- plugins libs -->
    <link rel="stylesheet" href="{{ url(mix('backend/plugins/libs.css')) }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ url(mix('backend/dist/css/adminlte.css')) }}">
    <!-- plugins libs2 -->
    <link rel="stylesheet" href="{{ url(mix('backend/plugins/libs2.css')) }}">
</head>
{{-- para ativar o dark mode colocar dar-mode na class da body  --}}
<body class="sidebar-mini layout-fixed layout-navbar-fixed sidebar-closed">
<div class="wrapper">

{{--    <!-- Preloader -->--}}
{{--    <div class="preloader flex-column justify-content-center align-items-center">--}}
{{--        <img class="animation__shake" src="{{ url(asset('backend/dist/img/loading-buffering.gif')) }}" alt="">--}}
{{--    </div>--}}

    <!-- Navbar Header -->
    @include('admin.modules.includes.header')
    <!-- /.navbar Header -->

    <!-- Main Sidebar Container -->
    @include('admin.modules.includes.menu')

    <!-- Content Wrapper. Contains page content -->
    @yield('content')
    <!-- /.content-wrapper -->

    <!-- Footer -->
    @include('admin.modules.includes.footer')
    <!-- /.Footer -->

</div>
<!-- ./wrapper -->

    <!-- jQuery -->
    <script src="{{ url(mix('backend/plugins/jquery/jquery.js')) }}"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{ url(mix('backend/plugins/jquery-ui/jquery-ui.js')) }}"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- libs JS -->
    <script src="{{ url(mix('backend/plugins/libs.js')) }}"></script>
    <!-- Custom Scripts -->
    <script src="{{ url(mix('backend/dist/js/scripts.js')) }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ url(mix('backend/dist/js/adminlte.js')) }}"></script>
    <script src="{{ url(mix('backend/dist/js/pages/dashboard.js')) }}"></script>
</body>
</html>
