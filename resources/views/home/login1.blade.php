<!DOCTYPE html>
<html>
  <head>
    <title>{{$titulo}}</title>
    <!-- Bootstrap -->
    <link href="{{ URL::asset ('sistema/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" media="screen">
    <link href="{{ URL::asset ('sistema/bootstrap/css/bootstrap-responsive.min.css') }}" rel="stylesheet" media="screen">
    <link href="{{ URL::asset ('sistema/assets/styles.css') }}" rel="stylesheet" media="screen">
     <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <script src="{{ URL::asset ('sistema/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js') }}"></script>
  </head>
  <body id="login">
    <div class="container">

      <form action="{{ route('valida') }}" method="POST" class="form-signin" >
         {{ csrf_field() }}
        <h2 class="form-signin-heading"><center>Iniciar Sesión</center></h2>
        <input type="text" class="input-block-level" placeholder="Correo Electronico"  value="{{old('correo')}}" name="correo">
         {!! $errors->first('correo','<div class="alert alert-warning" role="alert"><span class="help-block">:message </span></div>') !!}  

        <input type="password" class="input-block-level" placeholder="Contraseña" value="{{old('password')}}" name="password">
         {!! $errors->first('password','<div class="alert alert-warning" role="alert"><span class="help-block">:message </span></div>') !!}  
        <label class="checkbox">
          <input type="checkbox" value="remember-me"> Recordarme
        </label><br>
        <center><font color="Red"><b>{{ $mesage ?? '' }}</b></font></center><br>  
        <center><button class="btn btn-large btn-primary" type="submit">Iniciar Sesión</button></center>
      </form>

    </div> <!-- /container -->
    <script src="{{ URL::asset ('sistema/vendors/jquery-1.9.1.min.js') }}"></script>
    <script src="{{ URL::asset ('sistema/bootstrap/js/bootstrap.min.js') }}"></script>
  </body>
</html>