<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>{{ config('app.name','Laravel') }}</title>  
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">    
  {{ Html::style('bower_components/bootstrap/dist/css/bootstrap.min.css') }}  
  {{ Html::style('bower_components/font-awesome/css/font-awesome.min.css') }}  
  {{ Html::style('bower_components/Ionicons/css/ionicons.min.css') }}  
  {{ Html::style('dist/css/AdminLTE.min.css') }}  
  {{ Html::style('plugins/iCheck/square/blue.css') }}

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="{{ route('login') }}"><b>Lara</b>Dental</a>
  </div>  
  <div class="login-box-body">
    <p class="login-box-msg">Sign in to start your session</p>

    <form action="{{ route('postlogin') }}" method="post">
      @csrf
      <div class="form-group has-feedback {{ $errors->has('email') ? 'has-error' : '' }}">
        <input type="email" class="form-control" placeholder="Email" name="email">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        @if($errors->has('email'))
          <span class="help-block text-red">
            {{ $errors->first('email') }}
          </span>
        @endif
      </div>
      <div class="form-group has-feedback {{ $errors->has('email') ? 'has-error' : '' }}">
        <input type="password" class="form-control" placeholder="Password" name="password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        @if($errors->has('password'))
          <span class="help-block text-red">
            {{ $errors->first('password') }}
          </span>
        @endif
      </div>
      <div class="row">               
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>        
      </div>
    </form>
  </div>  
</div>
<!-- jQuery 3 -->
{{ Html::script('bower_components/jquery/dist/jquery.min.js') }}
<!-- Bootstrap 3.3.7 -->
{{ Html::script('bower_components/bootstrap/dist/js/bootstrap.min.js') }}
<!-- iCheck -->
{{ Html::script('plugins/iCheck/icheck.min.js') }}
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>
</body>
</html>