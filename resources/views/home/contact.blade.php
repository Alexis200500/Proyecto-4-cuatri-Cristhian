<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Viajes con Experiencia</title>
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
		
	<div class="colorlib-loader"></div>

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
								<li class="active"><a href="{{ route('contact') }}">Contacto</a></li>
								<li><a href="{{ route('login') }}">Iniciar Sesi??n</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</nav>
		<aside id="colorlib-hero">
			<div class="flexslider">
				<ul class="slides">
			   	<li style="background-image: url(home/images/cover-img-3.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<h2>by viajesconexperiencia.com</h2>
				   					<h1>Contacta con nostros</h1>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			  	</ul>
		  	</div>
		</aside>

		<div id="colorlib-contact">
			<div class="container">
				<div class="row">
					<div class="col-md-10 col-md-offset-1 animate-box">
						<h3>Ponerse en contacto</h3>
						<form class="content" action="/cliente" method="POST">
      @csrf
							<div class="row form-group">
								<div class="col-md-6 padding-bottom">
									<label for="fname">id Cliente</label>
									<input type="text" value="{{$next_id}}" readonly name="idcliente" onblur="fieldSize()" id="idcliente" pattern="[10 []]+" placeholder="Id Cliente" class="form-control">
								</div>
								<div class="col-md-6 padding-bottom">
									<label for="fname">Nombre (s)</label>
									
									<input type="text" name="nombre" class="form-control" onblur="fieldSize1()" id="nombre" pattern="[a-zA-Z]+" placeholder="Escribe tu nombre(s)">
								</div>
								<div class="col-md-6">
									<label for="lname">Apellido Paterno</label>
									<input type="text" name="app" onblur="fieldSize2()" id="app" pattern="[a-zA-Z]+" class="form-control" placeholder="Escribe tu Apellido"><p id="error2"></p>
								</div>
								<div class="col-md-6">
									<label for="lname">Apellido Materno</label>
									<input type="text" name="apm" onblur="fieldSize2()" id="apm" pattern="[a-zA-Z]+" class="form-control" placeholder="Escribe tu Apellido"><p id="error3"></p>
								</div>
							</div>

							<div class="row form-group">
								<div class="col-md-6" class="form-group">
				                    <label for="date">Fecha de Nacimiento:</label>
				                    <div class="form-field">
				                      <input class="form-control" type="date" name="fn" onblur="fieldSize4()" id="fn" pattern="[0-9\/]+" placeholder="Fecha de Nacimiento"><p id="error4"></p>
				                    </div>
				                  </div>
				                  <div class="col-md-6" class="form-group">
				                    <label for="date">Genero:</label>
				                    <div class="form-field">
				                      <select name="genero" onblur="fieldSize5()" id="genero" pattern="[F]|[M]+" class="form-control">
				                        <option>Genero</option>
				                        <option value="Femenino">Femenino</option>
				                        <option value="Masculino">Masculino</option>
				                        <p id="error5"></p>
				                      </select>
				                    </div>
				                  </div>
							</div>

							<div class="row form-group">
								<div class="col-md-12">
									<label for="subject">Tel??fono:</label>
									<input  type="text" name="telefono" onblur="fieldSize6()" id="telefono" pattern="[10 []]+" class="form-control" placeholder="Escriba su n??mero de tel??fono"><p id="error6"></p>
								</div>
							</div>
 
							<div class="form-group text-center">
								<input type="submit" value="Enviar" class="btn btn-primary">
                                <button type="reset" id="cancelar" name="cancelar" class="btn btn-danger">Cancelar</button>
							</div>

						</form>		
					</div>
					<div class="col-md-10 col-md-offset-1 animate-box">
						<h3>Informaci??n del contacto</h3>
						<div class="row contact-info-wrap">
							<div class="col-md-3">
								<p><span><i class="icon-location"></i></span> Temoaya <br> Estado de M??xico</p>
							</div>
							<div class="col-md-3">
								<p><span><i class="icon-phone3"></i></span> <a href="tel://7223608148">+ 7223608148</a></p>
							</div>
							<div class="col-md-3">
								<p><span><i class="icon-paperplane"></i></span> <a href="mailto:viajesconexperiencia@gmail.com">viajesconexperiencia@<gmail class="com"></gmail></a></p>
							</div>
							<div class="col-md-3">
								<p><span><i class="icon-globe"></i></span> <a href="#">viajesconexperiencia.com</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		
	
		<div id="colorlib-subscribe" style="background-image: url(images/img_bg_2.jpg);" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center colorlib-heading animate-box">
						<h2>Reg??strese para recibir un bolet??n informativo</h2>
						<p>Reg??strese en nuestra lista de correo para obtener las ??ltimas actualizaciones y ofertas.</p>
						<form class="form-inline qbstp-header-subscribe">
							<div class="row">
								<div class="col-md-12 col-md-offset-0">
									<div class="form-group">
										<input type="text" class="form-control" id="email" placeholder="Introduce tu correo electr??nico">
										<button type="submit" class="btn btn-primary"><a href="mailto:al221811702@gmail.com">Subscribirse</a></button><p>Subscribirse</p>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>

		<footer id="colorlib-footer" role="contentinfo">
      <div class="container">
        <div class="row row-pb-md">
          <div class="col-md-3 colorlib-widget">
            <h4>Agencia de turismo</h4>
            <p>Facilidad para encontrar viajes a cualquier lugar de la Rep??blica Mexicana!</p>
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
                <li>Alquiler de autom??vil</li>
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
              <li><a href="{{ route('blog') }}">Aqu?? encontraras informaci??n acerca de nuestra p??gina.</a></li>
            </ul>
          </div>

          <div class="col-md-3 col-md-push-1">
            <h4>Informaci??n del contacto</h4>
            <ul class="colorlib-footer-links">
              <li>Temoaya<br>Estado de M??xico</li>
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
	<!-- Google Map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"></script>
	<script src="js/google_map.js"></script>

	<!-- Main -->
	<script src="js/main.js"></script>

 <script type="text/javascript">
    const $input1 = document.querySelector("#nombre");
    const patron1 = /[a-zA-Z]+/;

    $input1.addEventListener("keydown", event => {
      if (patron1.test(event.key)){
        document.getElementById('nombre').style.border = "1px solid #49AF13";
      }
      else {
        if (event.keyCode==8) {
          //console.log("backspace");
        }
        else {
          event.preventDefault();
          //var tcla = event.keyCode;
          //console.log(tcla);
        }
      }
    });

    //------------------------------------
    function fieldSize1() {
      var nom = document.getElementById('nombre').value;
      if (nom.length>=3 && nom.length<=30) {
        document.getElementById('error1').innerHTML = "";
      }
      else {
        document.getElementById('error1').innerHTML = "Error: Tama??o del texto.";
        document.getElementById('nombre').style.border = "1px solid #EF0D0D";
      }
    }
    </script>

    <script type="text/javascript">
    const $input2 = document.querySelector("#app");
    const patron2 = /[a-zA-Z]+/;

    $input2.addEventListener("keydown", event => {
      if (patron2.test(event.key)){
        document.getElementById('app').style.border = "1px solid #49AF13";
      }
      else {
        if (event.keyCode==8) {
          //console.log("backspace");
        }
        else {
          event.preventDefault();
          //var tcla = event.keyCode;
          //console.log(tcla);
        }
      }
    });

    //------------------------------------
    function fieldSize2() {
      var app = document.getElementById('app').value;
      if (app.length>=5 && app.length<=30) {
        document.getElementById('error2').innerHTML = "";
      }
      else {
        document.getElementById('error2').innerHTML = "Error: Tama??o del texto.";
        document.getElementById('app').style.border = "1px solid #EF0D0D";
      }
    }
    </script>

    <script type="text/javascript">
    const $input3 = document.querySelector("#apm");
    const patron3 = /[a-zA-Z]+/;

    $input3.addEventListener("keydown", event => {
      if (patron3.test(event.key)){
        document.getElementById('apm').style.border = "1px solid #49AF13";
      }
      else {
        if (event.keyCode==8) {
          //console.log("backspace");
        }
        else {
          event.preventDefault();
          //var tcla = event.keyCode;
          //console.log(tcla);
        }
      }
    });

    //------------------------------------
    function fieldSize3() {
      var apm = document.getElementById('apm').value;
      if (apm.length>=5 && apm.length<=30) {
        document.getElementById('error3').innerHTML = "";
      }
      else {
        document.getElementById('error3').innerHTML = "Error: Tama??o del texto.";
        document.getElementById('apm').style.border = "1px solid #EF0D0D";
      }
    }
    </script>

    <script type="text/javascript">
    const $input4 = document.querySelector("#fn");
    const patron4 = /[0-9\/]+/;

    $input4.addEventListener("keydown", event => {
      if (patron4.test(event.key)){
        document.getElementById('fn').style.border = "1px solid #49AF13";
      }
      else {
        if (event.keyCode==8) {
          //console.log("backspace");
        }
        else {
          event.preventDefault();
          //var tcla = event.keyCode;
          //console.log(tcla);
        }
      }
    });

    //------------------------------------
    function fieldSize4() {
      var fn = document.getElementById('fn').value;
      if (fn.length>=10 && fn.length==10) {
        document.getElementById('error4').innerHTML = "";
      }
      else {
        document.getElementById('error4').innerHTML = "Error: Tama??o del texto.";
        document.getElementById('fn').style.border = "1px solid #EF0D0D";
      }
    }
    </script>

    <script type="text/javascript">
    const $input5 = document.querySelector("#genero");
    const patron5 = /[F]|[M]/;

    $input5.addEventListener("keydown", event => {
      if (patron5.test(event.key)){
        document.getElementById('genero').style.border = "1px solid #49AF13";
      }
      else {
        if (event.keyCode==8) {
          //console.log("backspace");
        }
        else {
          event.preventDefault();
          //var tcla = event.keyCode;
          //console.log(tcla);
        }
      }
    });

    //------------------------------------
    function fieldSize5() {
      var genero = document.getElementById('genero').value;
      if (genero==F && genero==M) {
        document.getElementById('error5').innerHTML = "";
      }
      else {
        document.getElementById('error5').innerHTML = "Error: Selecciona una opci??n.";
        document.getElementById('genero').style.border = "1px solid #EF0D0D";
      }
    }
    </script>

    <script type="text/javascript">
    const $input6 = document.querySelector("#telefono");
    const patron6 = /[0-9\/]+/;

    $input6.addEventListener("keydown", event => {
      if (patron6.test(event.key)){
        document.getElementById('telefono').style.border = "1px solid #49AF13";
      }
      else {
        if (event.keyCode==8) {
          //console.log("backspace");
        }
        else {
          event.preventDefault();
          //var tcla = event.keyCode;
          //console.log(tcla);
        }
      }
    });

    //------------------------------------
    function fieldSize6() {
      var tel = document.getElementById('telefono').value;
      if (tel==10) {
        document.getElementById('error6').innerHTML = "";
      }
      else {
        document.getElementById('error6').innerHTML = "Error: Tama??o del texto.";
        document.getElementById('celular').style.border = "1px solid #EF0D0D";
      }
    }
    </script>

	</body>
</html>

