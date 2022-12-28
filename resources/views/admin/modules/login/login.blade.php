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
    <a href="{{ route('admin.login') }}">
{{--        EMPRESA--}}
        <img class="img-fluid" src="{{ url(asset('backend/dist/img/logos/logo_dsmhost_black.png')) }}" />
    </a>
  </div>
  <!-- /.login-logo -->
    @foreach($errors->all() as $error)
        <div class="alert alert-danger">{{ $error }}</div>
    @endforeach
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Acesso Restrito!</p>

      <form name="login" action="{{ route('admin.login.do') }}" method="post" autocomplete="off">

        <div class="input-group mb-3">
          <input type="text" name="email" class="form-control" placeholder="E-mail">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="password_check" class="form-control" placeholder="Senha">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Lembrar-me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Logar</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
      <p class="mb-1">
        <a href="{{ route('admin.forgot-password') }}">Esqueci minha senha</a>
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
