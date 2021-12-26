<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Viajes con Experiencia | Hoteles</title>
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
								<li class="active"><a href="{{ route('hotels') }}">Hoteles</a></li>
								<li><a href="{{ route('services') }}">Servicios</a></li>
								<li><a href="{{ route('blog') }}">Blog</a></li>
								<li><a href="{{ route('about') }}">Acerca de</a></li>
								<li><a href="{{ route('contact') }}">Contacto</a></li>
								<li><a href="{{ route('login') }}">Iniciar Sesión</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</nav>
		<aside id="colorlib-hero">
			<div class="flexslider">
				<ul class="slides">
			   	<li style="background-image: url(home/images/cover-img-4.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<h2>by viajesconexperiencia.com</h2>
				   					<h1>Encontrar Hotel</h1>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			  	</ul>
		  	</div>
		</aside>

		<div class="colorlib-wrap">
			<div class="container">
				<div class="row">
					<div class="col-md-9">
						<div class="row">
							<div class="wrap-division">
								<div class="col-md-6 col-sm-6 animate-box">
									<div class="hotel-entry">
										<a class="hotel-img" style="background-image: url(images/hotel-1.jpg);">
											<p class="price"><span>$900</span><small> /noceh</small></p>
										</a>
										<div class="desc">
											<p class="star"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span> 545 Comentarios</p>
											<h3>Hotel Vista</h3>
											<span class="place">Acapulco, México</span>
											<p>Una hermosa vista al mar, que hasta te asombrará al amanecer.</p>
										</div>
									</div>
								</div>

								<div class="col-md-6 col-sm-6 animate-box">
									<div class="hotel-entry">
										<a class="hotel-img" style="background-image: url(images/hotel-2.jpg);">
											<p class="price"><span>$750</span><small> /noche</small></p>
										</a>
										<div class="desc">
											<p class="star"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span> 545 Comentarios</p>
											<h3>Hotel No Vacancy</h3>
											<span class="place">México</span>
											<p>Es un hotel muy grande, el cual su diseño es muy arqueológico.</p>
										</div>
									</div>
								</div>

								<div class="col-md-6 col-sm-6 animate-box">
									<div class="hotel-entry">
										<a class="hotel-img" style="background-image: url(images/hotel-3.jpg);">
											<p class="price"><span>$850</span><small> /noche</small></p>
										</a>
										<div class="desc">
											<p class="star"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span> 545 Comentarios</p>
											<h3>Hotel Edison</h3>
											<span class="place">Toluca, Estado de México</span>
											<p>El hotel habla por si solo, porque hace recordar a las construcciones pasadas.</p>
										</div>
									</div>
								</div>

								<div class="col-md-6 col-sm-6 animate-box">
									<div class="hotel-entry">
										<a class="hotel-img" style="background-image: url(images/hotel-4.jpg);">
											<p class="price"><span>$850</span><small> /noche</small></p>
										</a>
										<div class="desc">
											<p class="star"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span> 545 Comentarios</p>
											<h3>Hotel Nelligan</h3>
											<span class="place">México</span>
											<p>Su estructura de este hotel es muy eficaz para los turiscos que desean algo comodo.</p>
										</div>
									</div>
								</div>

								<div class="col-md-6 col-sm-6 animate-box">
									<div class="hotel-entry">
										<a class="hotel-img" style="background-image: url(images/hotel-5.jpg);">
											<p class="price"><span>$850</span><small> /noche</small></p>
										</a>
										<div class="desc">
											<p class="star"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span> 545 Comentarios</p>
											<h3>Hotel Night</h3>
											<span class="place">Acapulco</span>
											<p>Es un hotel, que por las noches nos deslumbra el atardecer.</p>
										</div>
									</div>
								</div>

								<div class="col-md-6 col-sm-6 animate-box">
									<div class="hotel-entry">
										<a class="hotel-img" style="background-image: url(images/hotel-6.jpg);">
											<p class="price"><span>$900</span><small> /noche</small></p>
										</a>
										<div class="desc">
											<p class="star"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span> 545 Comentarios</p>
											<h3>Hotel Casa Grande</h3>
											<span class="place">Chiapas</span>
											<p>Este hotel es muy famoso por su grandiosa piscina, para tomar un buen descanso.</p>
										</div>
									</div>
								</div>

								<div class="col-md-6 col-sm-6 animate-box">
									<div class="hotel-entry">
										<a class="hotel-img" style="background-image: url(images/hotel-7.jpg);">
											<p class="price"><span>$980</span><small> /noche</small></p>
										</a>
										<div class="desc">
											<p class="star"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span> 545 Comentarios</p>
											<h3>Hotel Carpa</h3>
											<span class="place">Acapulco</span>
											<p>En este hotel tomas el sol, con buen relajamiento.</p>
										</div>
									</div>
								</div>

								<div class="col-md-6 col-sm-6 animate-box">
									<div class="hotel-entry">
										<a class="hotel-img" style="background-image: url(images/hotel-8.jpg);">
											<p class="price"><span>$1400</span><small> /noche</small></p>
										</a>
										<div class="desc">
											<p class="star"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span> 545 Comentarios</p>
											<h3>Hotel 5 Estrellas</h3>
											<span class="place">México</span>
											<p>Este hotel es uno de los mas populares, porque cuenta con todo tipo de servicio que el cliente decida.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						
					</div>

					<!-- SIDEBAR-->
					<div class="col-md-3">
						<div class="sidebar-wrap">
							<div class="side search-wrap animate-box">
								<h3 class="sidebar-heading">Encuentre su hotel</h3>
								<form class="colorlib-form" class="content" action="/hotel" method="POST">
									@csrf
				              	<div class="row">

				                <div class="col-md-12">
				                	<div class="form-group">
				                    <label for="date">Id Hotel:</label>
				                    <div class="form-field">
				                      <input type="text" value="{{$next_id}}" readonly name="idhotel" onblur="fieldSizeIdH()" id="idhotel" pattern="[10 []]+" placeholder="Id Hotel" class="form-control">
				                    </div>
				                </div>
				                  <div class="form-group">
				                    <label for="date">Comprobar fecha:</label>
				                    <div class="form-field">
				                      <i class="icon icon-calendar2"></i>
				                      <input type="date" name="registroh" onblur="fieldSizeRegistroH()" id="registroh" pattern="[0-9\/]+" class="form-control" placeholder="Verificar fecha"><p id="errorRH"></p>
				                    </div>
				                  </div>
				                </div>
				                <div class="col-md-12">
				                  <div class="form-group">
				                    <label for="date">Revise su fecha:</label>
				                    <div class="form-field">
				                      <i class="icon icon-calendar2"></i>
				                      <input type="date" name="revisarH" onblur="fieldSizeRevisarH()" id="revisarH" pattern="[0-9\/]+" class="form-control" placeholder="Verificar fecha"><p id="errorREH"></p>
				                    </div>
				                  </div>
				                </div>
				                <div class="col-md-12">
				                  <div class="form-group">
				                    <label for="guests">Invitado</label>
				                    <div class="form-field">
				                      <i class="icon icon-arrow-down3"></i>
				                      <select name="invitado" onblur="fieldSizeInvitado()" id="invitado" pattern="[0-9]+" class="form-control">
				                        <option value="1">1</option>
				                        <option value="2">2</option>
				                        <option value="3">3</option>
				                        <option value="4">4</option>
				                        <option value="5+">5+</option>
				                      </select><p id="errorInvitado"></p>
				                    </div>
				                  </div>
				                </div>
				                <div class="col-md-12">
				                  <input type="submit" name="submit" id="submit" value="Registrar Hotel" class="btn btn-primary btn-block">
				                </div>
				                <div class="col-md-12">
				                   <input type="reset" id="cancelar" name="cancelar" value="Cancelar" class="btn btn-danger btn-block">
				                </div>
				              </div>
				            </form>
							</div>
							<div class="side animate-box">
								<div class="row">
									<div class="col-md-12">
										<h3 class="sidebar-heading">Rando de precios</h3>
										<form method="post" class="colorlib-form-2">
						              	<div class="row">
						                <div class="col-md-6">
						                  <div class="form-group">
						                    <label for="guests">Pricios desde:</label>
						                    <div class="form-field">
						                      <i class="icon icon-arrow-down3"></i>
						                      <select name="people" id="people" class="form-control">
						                        <option value="#">1</option>
						                        <option value="#">200</option>
						                        <option value="#">300</option>
						                        <option value="#">400</option>
						                        <option value="#">1000</option>
						                      </select>
						                    </div>
						                  </div>
						                </div>
						                <div class="col-md-6">
						                  <div class="form-group">
						                    <label for="guests">Pricios a:</label>
						                    <div class="form-field">
						                      <i class="icon icon-arrow-down3"></i>
						                      <select name="people" id="people" class="form-control">
						                        <option value="#">2000</option>
						                        <option value="#">4000</option>
						                        <option value="#">6000</option>
						                        <option value="#">8000</option>
						                        <option value="#">10000</option>
						                      </select>
						                    </div>
						                  </div>
						                </div>
						              </div>
						            </form>
					            </div>
								</div>
							</div>
							<div class="side animate-box">
								<div class="row">
									<div class="col-md-12">
										<h3 class="sidebar-heading">Calificación de revisión</h3>
										<form method="post" class="colorlib-form-2">
										   <div class="form-check">
												<input type="checkbox" class="form-check-input" id="exampleCheck1">
												<label class="form-check-label" for="exampleCheck1">
													<p class="rate"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span></p>
												</label>
										   </div>
										   <div class="form-check">
										      <input type="checkbox" class="form-check-input" id="exampleCheck1">
										      <label class="form-check-label" for="exampleCheck1">
										    	   <p class="rate"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span></p>
										      </label>
										   </div>
										   <div class="form-check">
										      <input type="checkbox" class="form-check-input" id="exampleCheck1">
										      <label class="form-check-label" for="exampleCheck1">
										      	<p class="rate"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span></p>
										     </label>
										   </div>
										   <div class="form-check">
										      <input type="checkbox" class="form-check-input" id="exampleCheck1">
										      <label class="form-check-label" for="exampleCheck1">
										      	<p class="rate"><span><i class="icon-star-full"></i><i class="icon-star-full"></i></span></p>
										     </label>
										   </div>
										   <div class="form-check">
										      <input type="checkbox" class="form-check-input" id="exampleCheck1">
										      <label class="form-check-label" for="exampleCheck1">
										      	<p class="rate"><span><i class="icon-star-full"></i></span></p>
										     </label>
										   </div>
										</form>
									</div>
								</div>
							</div>
							<div class="side animate-box">
								<div class="row">
									<div class="col-md-12">
										<h3 class="sidebar-heading">Categorias</h3>
										<form method="post" class="colorlib-form-2">
										   <div class="form-check">
												<input type="checkbox" class="form-check-input" id="exampleCheck1">
												<label class="form-check-label" for="exampleCheck1">
													<h4 class="place">Apartamento</h4>
												</label>
										   </div>
										   <div class="form-check">
										      <input type="checkbox" class="form-check-input" id="exampleCheck1">
										      <label class="form-check-label" for="exampleCheck1">
													<h4 class="place">Hotel</h4>
												</label>
										   </div>
										   <div class="form-check">
										      <input type="checkbox" class="form-check-input" id="exampleCheck1">
										      <label class="form-check-label" for="exampleCheck1">
													<h4 class="place">Hostel</h4>
												</label>
										   </div>
										   <div class="form-check">
										      <input type="checkbox" class="form-check-input" id="exampleCheck1">
										      <label class="form-check-label" for="exampleCheck1">
													<h4 class="place">Posada</h4>
												</label>
										   </div>
										   <div class="form-check">
										      <input type="checkbox" class="form-check-input" id="exampleCheck1">
										      <label class="form-check-label" for="exampleCheck1">
													<h4 class="place">Villa</h4>
												</label>
										   </div>
										</form>
									</div>
								</div>
							</div>
							<div class="side animate-box">
								<div class="row">
									<div class="col-md-12">
										<h3 class="sidebar-heading">Ubicación</h3>
										<form method="post" class="colorlib-form-2">
										   <div class="form-check">
												<input type="checkbox" class="form-check-input" id="exampleCheck1">
												<label class="form-check-label" for="exampleCheck1">
													<h4 class="place">México</h4>
												</label>
										   </div>
										   <div class="form-check">
										      <input type="checkbox" class="form-check-input" id="exampleCheck1">
										      <label class="form-check-label" for="exampleCheck1">
													<h4 class="place">Acapulco</h4>
												</label>
										   </div>
										   <div class="form-check">
										      <input type="checkbox" class="form-check-input" id="exampleCheck1">
										      <label class="form-check-label" for="exampleCheck1">
													<h4 class="place">Mazatlán</h4>
												</label>
										   </div>
										   <div class="form-check">
										      <input type="checkbox" class="form-check-input" id="exampleCheck1">
										      <label class="form-check-label" for="exampleCheck1">
													<h4 class="place">Chiapas</h4>
												</label>
										   </div>
										   <div class="form-check">
										      <input type="checkbox" class="form-check-input" id="exampleCheck1">
										      <label class="form-check-label" for="exampleCheck1">
													<h4 class="place">Quintana Roo</h4>
												</label>
										   </div>
										</form>
									</div>
								</div>
							</div>
							<div class="side animate-box">
								<div class="row">
									<div class="col-md-12">
										<h3 class="sidebar-heading">Instalaciones</h3>
										<form method="post" class="colorlib-form-2">
										   <div class="form-check">
												<input type="checkbox" class="form-check-input" id="exampleCheck1">
												<label class="form-check-label" for="exampleCheck1">
													<h4 class="place">Transferencia de aeropuerto</h4>
												</label>
										   </div>
										   <div class="form-check">
										      <input type="checkbox" class="form-check-input" id="exampleCheck1">
										      <label class="form-check-label" for="exampleCheck1">
													<h4 class="place">Resto Bar</h4>
												</label>
										   </div>
										   <div class="form-check">
										      <input type="checkbox" class="form-check-input" id="exampleCheck1">
										      <label class="form-check-label" for="exampleCheck1">
													<h4 class="place">Restaurante</h4>
												</label>
										   </div>
										   <div class="form-check">
										      <input type="checkbox" class="form-check-input" id="exampleCheck1">
										      <label class="form-check-label" for="exampleCheck1">
													<h4 class="place">Piscina</h4>
												</label>
										   </div>
										   <div class="form-check">
										      <input type="checkbox" class="form-check-input" id="exampleCheck1">
										      <label class="form-check-label" for="exampleCheck1">
													<h4 class="place">Suites</h4>
												</label>
										   </div>
										</form>
									</div>
								</div>
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
						<h2>Regístrese para recibir un boletín informativo</h2>
						<p>Regístrese en nuestra lista de correo para obtener las últimas actualizaciones y ofertas.</p>
						<form class="form-inline qbstp-header-subscribe">
							<div class="row">
								<div class="col-md-12 col-md-offset-0">
									<div class="form-group">
										<input type="text" class="form-control" id="email" placeholder="Introduce tu correo electrónico">
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


	<script type="text/javascript">
    const $inputRH = document.querySelector("#registroh");
    const patronRH = /[0-9\/]+/;

    $inputRH.addEventListener("keydown", event => {
      if (patronRH.test(event.key)){
        document.getElementById('registroh').style.border = "1px solid #49AF13";
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
    function fieldSizeRegistroH() {
      var registroh = document.getElementById('registroh').value;
      if (registroh.length>=10 && registroh.length==10) {
        document.getElementById('errorRH').innerHTML = "";
      }
      else {
        document.getElementById('errorRH').innerHTML = "Error: Tamaño del texto.";
        document.getElementById('registroh').style.border = "1px solid #EF0D0D";
      }
    }
    </script>

    <script type="text/javascript">
    const $inputREH = document.querySelector("#revisarH");
    const patronREH = /[0-9\/]+/;

    $inputREH.addEventListener("keydown", event => {
      if (patronREH.test(event.key)){
        document.getElementById('revisarH').style.border = "1px solid #49AF13";
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
    function fieldSizeRevisarH() {
      var revisarH = document.getElementById('revisarH').value;
      if (revisarH.length>=10 && revisarH.length==10) {
        document.getElementById('errorREH').innerHTML = "";
      }
      else {
        document.getElementById('errorREH').innerHTML = "Error: Tamaño del texto.";
        document.getElementById('revisarH').style.border = "1px solid #EF0D0D";
      }
    }
    </script>

    <script type="text/javascript">
    const $inputIn = document.querySelector("#invitado");
    const patronIn = /[0-9]/;

    $inputIn.addEventListener("keydown", event => {
      if (patronIn.test(event.key)){
        document.getElementById('invitado').style.border = "1px solid #49AF13";
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
    function fieldSizeInvitado() {
      var tam = document.getElementById('invitado').value;
      if (tam>=1) {
        document.getElementById('error').innerHTML = "";
      }
      else {
        document.getElementById('error').innerHTML = "Error: Tamaño del texto.";
        document.getElementById('invitado').style.border = "1px solid #EF0D0D";
      }
    }
    </script>


	</body>
</html>

