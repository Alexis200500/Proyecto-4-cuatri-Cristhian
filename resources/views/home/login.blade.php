<!DOCTYPE html>
<html lang="en">
 <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{$titulo}}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="" />
  <meta name="keywords" content="" />
  <meta name="author" content="" />

  <!-- Facebook and Twitter integration -->
  <meta property="og:title" content=""/>
  <meta property="og:image" content=""/>
  <meta property="og:url" content=""/>
  <meta property="og:site_name" content=""/>
  <meta property="og:description" content=""/>
  <meta name="twitter:title" content="" />
  <meta name="twitter:image" content="" />
  <meta name="twitter:url" content="" />
  <meta name="twitter:card" content="" />

  <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
  
  <!-- Animate.css -->
  <link rel="stylesheet" href="css/animate.css">
  <!-- Icomoon Icon Fonts-->
  <link rel="stylesheet" href="css/icomoon.css">
  <!-- Bootstrap  -->
  <link rel="stylesheet" href="css/bootstrap.css">

  <!-- Magnific Popup -->
  <link rel="stylesheet" href="css/magnific-popup.css">

  <!-- Flexslider  -->
  <link rel="stylesheet" href="css/flexslider.css">

  <!-- Owl Carousel -->
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  
  <!-- Date Picker -->
  <link rel="stylesheet" href="css/bootstrap-datepicker.css">
  <!-- Flaticons  -->
  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

  <!-- Theme style  -->
  <link rel="stylesheet" href="css/style.css">

  <!-- Modernizr JS -->
  <script src="js/modernizr-2.6.2.min.js"></script>
  <!-- FOR IE9 below -->
  <!--[if lt IE 9]>
  <script src="js/respond.min.js"></script>
  <![endif]-->
  </head>
  <body>
    
    <div id="page">
    <nav class="colorlib-nav" role="navigation">
      <div class="top-menu">
        <div class="container-fluid">
          <div class="row">
            <div class="col-xs-2">
              <div id="colorlib-logo"><a href="index.html">Viajes Con Experiencia</a></div>
            </div>
            <div class="col-xs-10 text-right menu-1">
              <ul>
                <li><a href="{{ route('index') }}">Inicio</a></li>
                <li class="has-dropdown">
                  <a href="{{ route('tours') }}">Tours</a>
                  
                </li>
                <li><a href="{{ route('hotels') }}">Hoteles</a></li>
                <li><a href="{{ route('services') }}">Servicios</a></li>
                <li><a href="{{ route('blog') }}">Blog</a></li>
                <li><a href="{{ route('about') }}">Acerca de</a></li>
                <li><a href="{{ route('contact') }}">Contacto</a></li>
                <li class="active"><a href="{{ route('login') }}">Iniciar Sesión</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </nav>
    <!-- END nav -->
    
   <aside id="colorlib-hero">
      <div class="flexslider">
        <ul class="slides">
          <li style="background-image: url(images/cover-img-5.jpg);">
            <div class="overlay"></div>
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
                  <div class="slider-text-inner text-center">
                    <h1>Iniciar sesión</h1>
                  </div>
                </div>
              </div>
            </div>
          </li>
        </aside>
    <!-- END slider -->

    <section class="ftco-section contact-section">

      <div class="container">
        <div class="row block-9 mb-4">
          <div class="col-md-6 pr-md-5 flex-column">
            <div class="row d-block flex-row">
              <h2 class="h4 mb-4">Registrarse</h2>

               <form action="/usuario" method="POST">
                 {{ csrf_field() }}
              <div class="form-group">
                <input type="text" class="form-control" readonly placeholder="ID" value="{{$next_id}}" name="id">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Nombre" value="{{old('nombre')}}" name="nombre">
                {!! $errors->first('nombre','<div class="alert alert-warning" role="alert"><span class="help-block">:message </span></div>') !!} 
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Correo" value="{{old('correo')}}" name="correo">
                {!! $errors->first('correo','<div class="alert alert-warning" role="alert"><span class="help-block">:message </span></div>') !!} 
              </div>
              <div class="form-group">
                <input type="password" class="form-control" placeholder="Password" value="{{old('password')}}" name="password">
                {!! $errors->first('password','<div class="alert alert-warning" role="alert"><span class="help-block">:message </span></div>') !!} 
              </div>
              <center><font color="Green"><b>{{ $message ?? '' }}</b></font></center><br> 
             
              <div class="form-group">
                <center>
                <input type="submit" value="Registrarse" class="btn btn-primary py-9 px-5">
              </center>
              </div>
            </form>
    
            
            </div>
          </div>
          <div class="col-md-6">
             <h2 class="h4 mb-4">Iniciar Sesión</h2>
            <form action="{{ route('valida') }}" method="GET">
               {{ csrf_field() }}
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Correo" value="{{old('correo')}}" name="correo">
                 {!! $errors->first('correo','<div class="alert alert-warning" role="alert"><span class="help-block">:message </span></div>') !!} 


              </div>
              <div class="form-group">
                <input type="Password" class="form-control" placeholder="Password" value="{{old('password')}}" name="password">
                 {!! $errors->first('password','<div class="alert alert-warning" role="alert"><span class="help-block">:message </span></div>') !!} 
              </div>
             
              <center><font color="Red"><b>{{ $mesage ?? '' }}</b></font></center><br> 

              <div class="form-group">
                <center>
                <input type="submit" value="Iniciar Sesión" class="btn btn-primary py-3 px-5"><br>
                <a class="btn btn-warning" href="/recoverpass">¿Olvidaste tu Contraseña?</a>
              </center>
              </div>
              
            </form>
          </div>
        </div>
        <div class="row mt-5">
          <div class="col-md-12" id=""></div>
        </div>
      </div>
    </section>
<footer id="colorlib-footer" role="contentinfo">
      <div class="container">
        <div class="row row-pb-md">
          <div class="col-md-3 colorlib-widget">
            <h4>Agencia de turismo</h4>
            <p>Facilidad para encontrar viajes a cualquier lugar de la República Mexicana!</p>
            <p>
              <ul class="colorlib-social-icons">
                <li><a href="#"><i class="icon-twitter"></i></a></li>
                <li><a href="#"><i class="icon-facebook"></i></a></li>
                <li><a href="#"><i class="icon-linkedin"></i></a></li>
                <li><a href="#"><i class="icon-dribbble"></i></a></li>
              </ul>
            </p>
          </div>
          <div class="col-md-2 colorlib-widget">
            <h4>Reservar ahora</h4>
            <p>
              <ul class="colorlib-footer-links">
                <li>Flight</li>
                <li>Hoteles</li>
                <li>Tour</li>
                <li>Alquiler de automóvil</li>
                <li>Turismo</li>
                <li>Cruceros</li>
              </ul>
            </p>
          </div>
          <div class="col-md-2 colorlib-widget">
            <h4>Ofertas Principales</h4>
            <p>
              <ul class="colorlib-footer-links">
                <li>Hotel</li>
                <li>Suites</li>
                <li>Alcoba</li>
                <li>Piscina</li>
                <li>Hotel Epikk</li>
              </ul>
            </p>
          </div>
          <div class="col-md-2">
            <h4>Entra a nuestro blog</h4>
            <ul class="colorlib-footer-links">
              <li><a href="{{ route('blog') }}">Aquí encontraras información acerca de nuestra página.</a></li>
            </ul>
          </div>

          <div class="col-md-3 col-md-push-1">
            <h4>Información del contacto</h4>
            <ul class="colorlib-footer-links">
              <li>Temoaya<br>Estado de México</li>
              <li><a href="tel://7223608148">+ 7223608148</a></li>
              <li><a href="mailto:al221811702@gmail.com">al221811702@gmail.com</a></li>
              <li><a href="#">viajesconexperiencia.com</a></li>
            </ul>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">
            <p>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
VCE &copy;<script>document.write(new Date().getFullYear());</script> Viajes con Experiencia <i class="icon-heart2" aria-hidden="true"></i> by EGC <a href="https://colorlib.com" target="_blank"></a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></span> 
              
            </p>
          </div>
        </div>
      </div>
    </footer>
  </div>

  <div class="gototop js-top">
    <a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
  </div>

  <!-- jQuery -->
  <script src="js/jquery.min.js"></script>
  <!-- jQuery Easing -->
  <script src="js/jquery.easing.1.3.js"></script>
  <!-- Bootstrap -->
  <script src="js/bootstrap.min.js"></script>
  <!-- Waypoints -->
  <script src="js/jquery.waypoints.min.js"></script>
  <!-- Flexslider -->
  <script src="js/jquery.flexslider-min.js"></script>
  <!-- Owl carousel -->
  <script src="js/owl.carousel.min.js"></script>
  <!-- Magnific Popup -->
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/magnific-popup-options.js"></script>
  <!-- Date Picker -->
  <script src="js/bootstrap-datepicker.js"></script>
  <!-- Stellar Parallax -->
  <script src="js/jquery.stellar.min.js"></script>
  <!-- Main -->
  <script src="js/main.js"></script>
    
  </body>
</html>