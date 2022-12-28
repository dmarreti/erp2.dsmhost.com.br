<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>CaféControl | {!! $head ?? '' !!}</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ url(mix('backend/plugins/fontawesome-free/css/all.css')) }}">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="{{ url(mix('backend/plugins/libs.css')) }}">
    <!-- CSS SweetAlert -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ url(mix('backend/dist/css/adminlte.css')) }}">

</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="{{ route('admin.login') }}"><b>DSM Host - </b>Datacenter</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Preencha o formulario para recuperar sua senha!</p>

      <form action="login.html" method="post">
          <div class="input-group mb-3">
              <input type="text" class="form-control" placeholder="E-mail">
              <div class="input-group-append">
                  <div class="input-group-text">
                      <span class="fas fa-envelope"></span>
                  </div>
              </div>
          </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Senha">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Confirme a Senha">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block">Confirmar</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <p class="mt-3 mb-1">
        <a href="{{ route('admin.login') }}">Login</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="{{ url(mix('backend/plugins/jquery/jquery.js')) }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ url(mix('backend/plugins/libs.js')) }}"></script>
<!-- SweetAlert -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
<!-- AdminLTE App -->
<script src="{{ url(mix('backend/dist/js/scripts.js')) }}"></script>
<script src="{{ url(mix('backend/dist/js/adminlte.js')) }}"></script>

</body>
</html>
