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
								<li class="active"><a href="{{ route('index') }}">Inicio</a></li>
								<li class="has-dropdown">
									<a href="{{ route('tours') }}">Tours</a>
									
								</li>
								<li><a href="{{ route('hotels') }}">Hoteles</a></li>
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
			   	<li style="background-image: url(images/img_bg_1.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<h2>2 Dias de Tour</h2>
				   					<h1>Increíble gira de Islas</h1>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			   	<li style="background-image: url(images/img_bg_2.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<h2>10 Dias de Crucero</h2>
				   					<h1>De México a Mazatlán</h1>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			   	<li style="background-image: url(home/images/img_bg_5.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluids">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<h2>Explora nuestra agencia de viajes</h2>
				   					<h1>Nuestra Agencia de Viajes</h1>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			   	<li style="background-image: url(images/img_bg_4.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<h2>Experimentar el</h2>
				   					<h1>Mejor viaje de todos</h1>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>	   	
			  	</ul>
		  	</div>
		</aside>
		<div id="colorlib-reservation">
			<!-- <div class="container"> -->
				<div class="row">
					<div class="search-wrap">
						<div class="container">
							<ul class="nav nav-tabs">
								<li class="active"><a data-toggle="tab" href="#flight"><i class="flaticon-plane"></i> Vuelo</a></li>
								<li><a data-toggle="tab" href="#hotel"><i class="flaticon-resort"></i> Hotel</a></li>
								<li><a data-toggle="tab" href="#car"><i class="flaticon-car"></i> Alquiler de automóvil</a></li>
								<li><a data-toggle="tab" href="#cruises"><i class="flaticon-boat"></i> Cruceros</a></li>
							</ul>
						</div>
						<div class="tab-content">
							<div id="flight" class="tab-pane fade in active">
								<form action="/vuelo" method="POST" class="colorlib-form">
									@csrf
				              	<div class="row">
				              		<div class="col-md-2">
				              	 	<div class="form-group">
				                    <label for="date">Id Vuelo:</label>
				                    <div class="form-field">
				                      <input value="{{$id_vuelo}}" readonly type="text" name="idvuelo" onblur="fieldSizeID()" id="idvuelo" pattern="[0-9]+" class="form-control" placeholder="Id Vuelo"><p id="error1"></p>
				                    </div>
				                  </div>
				              	 </div>
				              	 <div class="col-md-2">
				              	 	<div class="form-group">
				                    <label for="date">Donde:</label>
				                    <div class="form-field">
				                      <input type="text" name="localizacion" onblur="fieldSizeV()" id="localizacion" pattern="[a-zA-Z]+" class="form-control" placeholder="Buscar localización"><p id="error1"></p>
				                    </div>
				                  </div>
				              	 </div>
				                <div class="col-md-2">
				                  <div class="form-group">
				                    <label for="date">Registro:</label>
				                    <div class="form-field">
				                      <i class="icon icon-calendar2"></i>
				                      <input type="date" name="registro" onblur="fieldSizeRegistro()" id="registro" pattern="[0-9\/]+" class="form-control" placeholder="Verificar fecha"><p id="error2"></p>
				                    </div>
				                  </div>
				                </div>
				                <div class="col-md-2">
				                  <div class="form-group">
				                    <label for="date">Revisar:</label>
				                    <div class="form-field">
				                      <i class="icon icon-calendar2"></i>
				                      <input type="date" name="revisar" onblur="fieldSizeRevisar()" id="revisar" pattern="[0-9\/]+" class="form-control" placeholder="Verificar fecha"><p id="error3"></p>
				                    </div>
				                  </div>
				                </div>
				                <div class="col-md-1">
				                  <div class="form-group">
				                    <label for="guests">Invitado</label>
				                    <div class="form-field">
				                      <i class="icon icon-arrow-down3"></i>
				                      <select name="personas" onblur="fieldSizePersonas()" id="personas" pattern="[0-9]+" class="form-control">
				                        <option value="1">1</option>
				                        <option value="2">2</option>
				                        <option value="3">3</option>
				                        <option value="4">4</option>
				                        <option value="5+">5+</option>
				                      </select>
								      <p id="error4"></p>
				                    </div>
				                  </div>
				                </div>
				                <div class="col-md-2">
				                  <input type="submit" name="submit" id="submit" value="Encontrar vuelo" class="btn btn-primary btn-block">
				                </div>
				                <div class="col-md-1">
				                   <input type="reset" id="cancelar" name="cancelar" value="Cancelar" class="btn btn-danger btn-block">
				                </div>
				              </div>
				            </form>
				         </div>
				         <div id="hotel" class="tab-pane fade">
						      <form action="/hotel" method="POST" class="colorlib-form">
						      	@csrf
				              	<div class="row">
				              	 <div class="col-md-2">
				              	 	<div class="booknow">
				              	 		<h2>Reservar ahora</h2>
					              	 	<span>Mejor precio en línea</span>
				              	 	</div>
				              	 </div>
				              	 <div class="col-md-2">
				              	 	<div class="form-group">
				                    <label for="date">Id Hotel:</label>
				                    <div class="form-field">
				                      <input value="{{$id_hotel}}" readonly type="text" name="idhotel" onblur="fieldSizeID()" id="idhotel" pattern="[0-9]+" class="form-control" placeholder="Id Hotel"><p id="error1"></p>
				                    </div>
				                  </div>
				              	 </div>
				                <div class="col-md-2">
				                  <div class="form-group">
				                    <label for="date">Registro:</label>
				                    <div class="form-field">
				                      <i class="icon icon-calendar2"></i>
				                      <input type="date" name="registroh" onblur="fieldSizeRegistroH()" id="registroh" pattern="[0-9\/]+" class="form-control" placeholder="Verificar fecha"><p id="errorRH"></p>
				                    </div>
				                  </div>
				                </div>
				                <div class="col-md-2">
				                  <div class="form-group">
				                    <label for="date">Revisa:</label>
				                    <div class="form-field">
				                      <i class="icon icon-calendar2"></i>
				                      <input type="date" name="revisarH" onblur="fieldSizeRevisarH()" id="revisarH" pattern="[0-9\/]+" class="form-control" placeholder="Verificar fecha"><p id="errorREH"></p>
				                    </div>
				                  </div>
				                </div>
				                <div class="col-md-1">
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
				                      </select>
				                      <p id="errorInvitado"></p>
				                    </div>
				                  </div>
				                </div>
				                <div class="col-md-2">
				                  <input type="submit" name="submit" id="submit" value="Encuentra Hotel" class="btn btn-primary btn-block">
				                </div>
				                <div class="col-md-2">
				                   <input type="reset" id="cancelar" name="cancelar" value="Cancelar" class="btn btn-danger btn-block">
				                </div>
				              </div>
				            </form>
						   </div>
						   <div id="car" class="tab-pane fade">
						   	<form action="/alquiler" method="POST" class="colorlib-form">
						   		@csrf
				              	<div class="row">
				              		<div class="col-md-2">
				              	 	<div class="form-group">
				                    <label for="date">Id Alquila:</label>
				                    <div class="form-field">
				                      <input value="{{$id_alquila}}" readonly type="text" name="idalquila" onblur="fieldSizeID()" id="idalquila" pattern="[0-9]+" class="form-control" placeholder="Id Alquila"><p id="error1"></p>
				                    </div>
				                  </div>
				              	 </div>
				              	 <div class="col-md-2">
				              	 	<div class="form-group">
				                    <label for="date">Donde:</label>
				                    <div class="form-field">
				                      <input type="text" name="alquila" onblur="fieldSizeAlquila()" id="alquila" pattern="[a-zA-Z]+" class="form-control" placeholder="Buscar localización"><p id="errorAlquila"></p>
				                    </div>
				                  </div>
				              	 </div>
				                <div class="col-md-2">
				                  <div class="form-group">
				                    <label for="date">Fecha de Inicio:</label>
				                    <div class="form-field">
				                      <i class="icon icon-calendar2"></i>
				                      <input type="date" name="inicio" onblur="fieldSizeInicio()" id="inicio" pattern="[0-9\/]+" class="form-control" placeholder="Verificar Fecha"><p id="errorInicio"></p>
				                    </div>
				                  </div>
				                </div>
				                <div class="col-md-2">
				                  <div class="form-group">
				                    <label for="date">Fecha de Regreso:</label>
				                    <div class="form-field">
				                      <i class="icon icon-calendar2"></i>
				                      <input type="date" name="fin" onblur="fieldSizeFin()" id="fin" pattern="[0-9\/]+" class="form-control" placeholder="Verificar Fecha"><p id="errorFin"></p>
				                    </div>
				                  </div>
				                </div>
				                <div class="col-md-2">
				                  <input type="submit" name="submit" id="submit" value="Encontrar automóvil" class="btn btn-primary btn-block">
				                </div>
				                <div class="col-md-2">
				                   <input type="reset" id="cancelar" name="cancelar" value="Cancelar" class="btn btn-danger btn-block">
				                </div>
				              </div>
				            </form>
						   </div>
						   <div id="cruises" class="tab-pane fade">
						      <form action="/crucero" method="POST" class="colorlib-form">
						      	@csrf
				              	<div class="row">
				              		<div class="col-md-2">
				              	 	<div class="form-group">
				                    <label for="date">Id Crucero:</label>
				                    <div class="form-field">
				                      <input value="{{$id_crucero}}" readonly type="text" name="idcrucero" onblur="fieldSizeIDcrucero()" id="idcrucero" pattern="[0-9]+" class="form-control" placeholder="Id Crucero"><p id="error1"></p>
				                    </div>
				                  </div>
				              	 </div>
				              	 <div class="col-md-2">
				              	 	<div class="form-group">
				                    <label for="date">Donde:</label>
				                    <div class="form-field">
				                      <input type="text" name="crucero" onblur="fieldSizeCrucero()" id="crucero" pattern="[a-zA-Z]+" class="form-control" placeholder="Buscar localización"><p id="errorCrucero"></p>
				                    </div>
				                  </div>
				              	 </div>
				                <div class="col-md-2">
				                  <div class="form-group">
				                    <label for="date">Fecha de Inicio:</label>
				                    <div class="form-field">
				                      <i class="icon icon-calendar2"></i>
				                      <input type="date" name="fecha" onblur="fieldSizeFecha()" id="fecha" pattern="[0-9\/]+" class="form-control" placeholder="Verificar Fecha"><p id="errorFecha"></p>
				                    </div>
				                  </div>
				                </div>
				                <div class="col-md-2">
				                  <div class="form-group">
				                    <label for="guests">Categorias</label>
				                    <div class="form-field">
				                      <i class="icon icon-arrow-down3"></i>
				                      <select name="categoria" onblur="fieldSizeCategoria()" id="categoria" pattern="[a-zA-Z]+" class="form-control">
				                        <option value="Suite">Suite</option>
				                        <option value="Super Deluxe">Super Deluxe</option>
				                        <option value="Balcón">Balcón</option>
				                        <option value="Economía">Economía</option>
				                        <option value="Lujo">Lujo</option>
				                      </select><p id="errorCategoria"></p>
				                    </div>
				                  </div>
				                </div>
				                <div class="col-md-2">
				                  <input type="submit" name="submit" id="submit" value="Encuentra Cruceros" class="btn btn-primary btn-block">
				                </div>
				                <div class="col-md-2">
				                   <input type="reset" id="cancelar" name="cancelar" value="Cancelar" class="btn btn-danger btn-block">
				                </div>
				              </div>
				            </form>
						   </div>
			         </div>
					</div>
				</div>
			</div>
		</div>

		<div id="colorlib-services">
			<div class="container">
				<div class="row no-gutters">
					<div class="col-md-3 animate-box text-center aside-stretch">
						<div class="services">
							<span class="icon">
								<i class="flaticon-around"></i>
							</span>
							<h3>Viaje Asombroso</h3>
							<p>El Malecón de Mazatlán está muy bien cuidado. Es ideal para salir a caminar o trotar, tanto a la mañana o a la tardecita. De hecho verás muchísima gente haciendo eso. También es ideal para ver pulmonías (típico taxis de Mazatlán) e, incluso, tomarse uno para hacer la recorrida hasta un extremo del paseo y regresar caminando. Son en total unos 7 kilómetros.</p>
						</div>
					</div>
					<div class="col-md-3 animate-box text-center">
						<div class="services">
							<span class="icon">
								<i class="flaticon-boat"></i>
							</span>
							<h3>Nuestros Cruceros</h3>
							<p>El crucero “Pullmantur” es conocido como uno de los mejores que se pueden encontrar en todo México para realizar un excelente viaje. Este crucero realiza escalas en Acapulco, y también en  Navegación, Mazatlán, Cabo San Lucas, Puerto Vallarta y Manzanillo. Finalmente termina desembarcando nuevamente en Acapulco, ofreciendo una maravillosa experiencia a los viajeros.</p>
						</div>
					</div>
					<div class="col-md-3 animate-box text-center">
						<div class="services">
							<span class="icon">
								<i class="flaticon-car"></i>
							</span>
							<h3>Reserve su Viaje</h3>
							<p>Disfruta de las ventajas de este tour que se realiza en grupos pequeños, ya que te brinda la atención personalizada de un equipo que estará al pendiente de ti en todo momento</p>
						</div>
					</div>
					<div class="col-md-3 animate-box text-center">
						<div class="services">
							<span class="icon">
								<i class="flaticon-postcard"></i>
							</span>
							<h3>Administrador de Lugares</h3>
							<p>Desde el abordo del avión disfrutarás de la experiencia de una hermosas vacaciones, pues tendrás a tu mano consejos prácticos, eventos importantes en esa fecha y los mejores lugares para visitar durante tu extancia en el lugar.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
<center>
<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_xclick-subscriptions">
<input type="hidden" name="business" value="alex0430@live.com.mx">
<input type="hidden" name="lc" value="MX">
<input type="hidden" name="item_name" value="Paquetes">
<input type="hidden" name="no_note" value="1">
<input type="hidden" name="src" value="1">
<input type="hidden" name="currency_code" value="USD">
<input type="hidden" name="bn" value="PP-SubscriptionsBF:btn_subscribeCC_LG.gif:NonHostedGuest">
<table>
<tr><td><input type="hidden" name="on0" value="Paquetes">Paquetes</td></tr><tr><td><select name="os0">
	<option value="Vuelo">Vuelo : $100.00 USD - a diario</option>
	<option value="Hotel">Hotel : $230.00 USD - a diario</option>
	<option value="Alquiler de Automovil">Alquiler de Automovil : $200.00 USD - a diario</option>
	<option value="Crucero">Crucero : $310.00 USD - a diario</option>
</select> </td></tr>
</table>
<input type="hidden" name="option_select0" value="Vuelo">
<input type="hidden" name="option_amount0" value="100.00">
<input type="hidden" name="option_period0" value="D">
<input type="hidden" name="option_frequency0" value="1">
<input type="hidden" name="option_select1" value="Hotel">
<input type="hidden" name="option_amount1" value="230.00">
<input type="hidden" name="option_period1" value="D">
<input type="hidden" name="option_frequency1" value="1">
<input type="hidden" name="option_select2" value="Alquiler de Automovil">
<input type="hidden" name="option_amount2" value="200.00">
<input type="hidden" name="option_period2" value="D">
<input type="hidden" name="option_frequency2" value="1">
<input type="hidden" name="option_select3" value="Crucero">
<input type="hidden" name="option_amount3" value="310.00">
<input type="hidden" name="option_period3" value="D">
<input type="hidden" name="option_frequency3" value="1">
<input type="hidden" name="option_index" value="0">
<input type="image" src="https://www.paypalobjects.com/es_XC/MX/i/btn/btn_subscribeCC_LG.gif" border="0" name="submit" alt="PayPal, la forma más segura y rápida de pagar en línea.">
<img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1">
</form>
</center>

		<div class="colorlib-tour colorlib-light-grey">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center colorlib-heading animate-box">
						<h2>Destino Popular</h2>
						<p>Nos encanta decir que nuestro éxito,es muy lejos, detrás de la palabra montañas, lejos de los países Cánada y Francia, viven los textos ciegos...</p>
					</div>
				</div>
			</div>
			<div class="tour-wrap">
				<a 	 class="tour-entry animate-box">
					<div class="tour-img" style="background-image: url(images/ma.jpg);">
					</div>
					<span class="desc">
						<p class="star"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span> 545 comentarios</p>
						<h2>Hotel mas visitado</h2>
						<span class="city">Mazatlàn, Sinaloa</span>
						<span class="price">$450</span>
					</span>
				</a>
				<a  class="tour-entry animate-box">
					<div class="tour-img" style="background-image: url(images/acapulco.jpg);">
					</div>
					<span class="desc">
						<p class="star"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span> 545 comentarios</p>
						<h2>Gira familiar en Acapulco</h2>
						<span class="city">Acapulco</span>
						<span class="price">$450</span>
					</span>
				</a>
				<a  class="tour-entry animate-box">
					<div class="tour-img" style="background-image: url(images/chiapas.jpg);">
					</div>
					<span class="desc">
						<p class="star"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span> 545 comentarios</p>
						<h2>Gira familiar en Chiapas</h2>
						<span class="city">Palenque, Chiapas</span>
						<span class="price">$450</span>
					</span>
				</a>
				<a  class="tour-entry animate-box">
					<div class="tour-img" style="background-image: url(images/cabos.jpg);">
					</div>
					<span class="desc">
						<p class="star"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span> 545 comentarios</p>
						<h2>El mejor rato familiar</h2>
						<span class="city">Los Cabos, San Lucas</span>
						<span class="price">$450</span>
					</span>
				</a>
				<a  class="tour-entry animate-box">
					<div class="tour-img" style="background-image: url(images/allende.jpg);">
					</div>
					<span class="desc">
						<p class="star"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span> 545 comentarios</p>
						<h2>Gira familiar en san miguel</h2>
						<span class="city">San Miguel de Allende</span>
						<span class="price">$450</span>
					</span>
				</a>
				<a  class="tour-entry animate-box">
					<div class="tour-img" style="background-image: url(images/guerrero.jpg);">
					</div>
					<span class="desc">
						<p class="star"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span> 545 comentarios</p>
						<h2>Gira familiar en guerrero</h2>
						<span class="city"> Las Grutas de Cacahuamilpa, Guerrero</span>
						<span class="price">$450</span>
					</span>
				</a>
				<a  class="tour-entry animate-box">
					<div class="tour-img" style="background-image: url(images/cascadas.jpg);">
					</div>
					<span class="desc">
						<p class="star"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span> 545 comentarios</p>
						<h2>Paseo familiar en chiapas</h2>
						<span class="city">Cascadas de agua azul, Chiapas</span>
						<span class="price">$450</span>
					</span>
				</a>
				<a  class="tour-entry animate-box">
					<div class="tour-img" style="background-image: url(images/cenotes.jpg);">
					</div>
					<span class="desc">
						<p class="star"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span> 545 comentarios</p>
						<h2>Paseo familiar en cenotes</h2>
						<span class="city">Cenotes, Tamaulipas</span>
						<span class="price">$450</span>
					</span>
				</a>
			</div>
		</div>


		<div id="colorlib-blog">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center colorlib-heading animate-box">
						<h2>Blog Reciente</h2>
						<p>Tu vida sólo se vive una vez, no dejes pasar la oportunidad de conocer el lugar de tus sueños.</p>
					</div>
				</div>
				<div class="blog-flex">
					<div class="f-entry-img" style="background-image: url(images/blog-3.jpg);">
					</div>
					<div class="blog-entry aside-stretch-right">
						<div class="row">
							<div class="col-md-12 animate-box">
								<a  class="blog-post">
									<span class="img" style="background-image: url(images/blog-1.jpg);"></span>
									<div class="desc">
										<span class="date">Feb 22, 2020</span>
										<h3>Una guía definitiva para los mejores restaurantes</h3>
										<span class="cat">Actividades</span>
									</div>
								</a>
							</div>
							<div class="col-md-12 animate-box">
								<a  class="blog-post">
									<span class="img" style="background-image: url(images/blog-2.jpg);"></span>
									<div class="desc">
										<span class="date">Feb 22, 2020</span>
										<h3>Cómo estas 5 personas encontraron el camino hacia el viaje de sus sueños</h3>
										<span class="cat">Actividades</span>
									</div>
								</a>
							</div>
							<div class="col-md-12 animate-box">
								<a  class="blog-post">
									<span class="img" style="background-image: url(images/blog-4.jpg);"></span>
									<div class="desc">
										<span class="date">Feb 22, 2020</span>
										<h3>Nuestro tour en barco por la isla secreta es solo para ti</h3>
										<span class="cat">Actividades</span>
									</div>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div id="colorlib-intro" class="intro-img" style="background-image: url(images/cover-img-1.jpg);" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-6 animate-box">
						<div class="intro-desc">
							<div class="text-salebox">
								<div class="text-lefts">
									<div class="sale-box">
										<div class="sale-box-top">
											<h2 class="number">45</h2>
											<span class="sup-1">%</span>
											<span class="sup-2">Off</span>
										</div>
										<h2 class="text-sale">Sale</h2>
									</div>
								</div>
								<div class="text-rights">
									<h3 class="title">¡Solo date prisa oferta limitada!</h3>
									<p>Separados viven en Bookmarksgrove justo en la costa de la Semántica, un gran océano de idiomas.</p>
									<p><a href="#" class="btn btn-primary">Reservar ahora</a> <a href="#" class="btn btn-primary btn-outline">Lee mas</a></p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6 animate-box">
						<div class="video-wrap">
							<div class="video colorlib-video" style="background-image: url(images/img_bg_2.jpg);">
								<a href="https://www.youtube.com/watch?v=GQJ1MwG9Gfc" class="popup-vimeo"><i class="icon-video"></i></a>
								<div class="video-overlay"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div id="colorlib-hotel">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center colorlib-heading animate-box">
						<h2>Hoteles Recomendados</h2>
						<p>Viajes Experienciales ofrece todo lo que usted y su familia necesitan de una agencia de viajes para las mejores vacaciones; incluyendo descuentos en boletos de avión, las mejores tarifas y ofertas en Hoteles, Renta de Autos, Traslados Aeropuerto-hotel-Aeropuerto, así como Tours a todos los puntos de interés Cancún, Playa del Carmen, la Riviera Maya, Acapulco y muchos sitios más</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 animate-box">
						<div class="owl-carousel">
							<div class="item">
								<div class="hotel-entry">
									<a  class="hotel-img" style="background-image: url(images/hotel-1.jpg);">
										<p class="price"><span>$850</span><small> /noche</small></p>
									</a>
									<div class="desc">
										<p class="star"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span> 545 comentarios</p>
										<h3>Hotel Park</h3>
										<span class="place">Mazatlán, México</span>
										<p>Un pequeño río llamado Duden fluye por su lugar.</p>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="hotel-entry">
									<a  class="hotel-img" style="background-image: url(images/hotel-2.jpg);">
										<p class="price"><span>$600</span><small> /noche</small></p>
									</a>
									<div class="desc">
										<p class="star"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span> 545 Reviews</p>
										<h3>Hotel 3 Estrellas</h3>
										<span class="place">Chiapas</span>
										<p>Un hermoso lugar turistico.</p>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="hotel-entry">
									<a  class="hotel-img" style="background-image: url(images/hotel-3.jpg);">
										<p class="price"><span>$740</span><small> /noche</small></p>
									</a>
									<div class="desc">
										<p class="star"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span> 545 Reviews</p>
										<h3>Hotel Edison</h3>
										<span class="place">Estado de México</span>
										<p>Hermoso hotel, por su grandioso diseño.</p>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="hotel-entry">
									<a  class="hotel-img" style="background-image: url(images/hotel-4.jpg);">
										<p class="price"><span>$550</span><small> /noche</small></p>
									</a>
									<div class="desc">
										<p class="star"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span> 545 Reviews</p>
										<h3>Hotel Casa Grande</h3>
						<span class="place">Acapulco</span>
										<p>Hermosa vista al mar.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="colorlib-tour">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center colorlib-heading animate-box">
						<h2>Lugares de viaje más populares</h2>
						<p>Los lugares mas visitados por los turistas.</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="f-tour">
							<div class="row row-pb-md">
								<div class="col-md-6">
									<div class="row">
										<div class="col-md-6 animate-box">
											<a   class="f-tour-img" style="background-image: url(images/tour-1.jpg);">
												<div class="desc">
													<h3>Mazatlán - 5 Dias</h3>
													<p class="price"><span>$800</span> <small>/ persona</small></p>
												</div>
											</a>
										</div>
										<div class="col-md-6 animate-box">
											<a   class="f-tour-img" style="background-image: url(images/tour-2.jpg);">
												<div class="desc">
													<h3>Mazatlán - 5 Dias</h3>
													<p class="price"><span>$800</span> <small>/ persona</small></p>
												</div>
											</a>
										</div>
										<div class="col-md-6 animate-box">
											<a   class="f-tour-img" style="background-image: url(images/tour-3.jpg);">
												<div class="desc">
													<h3>Mazatlán - 5 Dias</h3>
													<p class="price"><span>$800</span> <small>/ persona</small></p>
												</div>
											</a>
										</div>
										<div class="col-md-6 animate-box">
											<a   class="f-tour-img" style="background-image: url(images/tour-4.jpg);">
												<div class="desc">
													<h3>Mazatlán - 5 Dias</h3>
													<p class="price"><span>$800</span> <small>/ persona</small></p>
												</div>
											</a>
										</div>
									</div>
								</div>
								<div class="col-md-6 animate-box">
									<div class="desc">
										<div class="row">
											<div class="col-md-12">
												<h3>Mazatlán, México</h3>
												<p>Mazatlán es un balneario mexicano de la costa del Pacífico en el estado de Sinaloa. Las playas de arena bordean su malecón de 21 km de largo y el lugar es famoso por la pesca de altura. En su Centro Histórico, o Viejo Mazatlán, los sitios icónicos del siglo XIX incluyen el Teatro Ángela Peralta y la altísima basílica de la Inmaculada Concepción.</p><br>
											</div>
											<div class="col-md-12">
												<h4>MEJOR TOURS DE LA CIUDAD</h4>
												<div class="row">
													<div class="col-md-4 col-sm-4 col-xs-4">
														<ul>
															<li><a href="#">Tirolina</a></li>
															<li><a href="#">Visita historia</a></li>
															<li><a href="#">Santuario de tortugas</a></li>
															<li><a href="#">Ronda Compartida</a></li>
														</ul>
													</div>
													<div class="col-md-4 col-sm-4 col-xs-4">
														<ul>
															<li><a href="#">Tour en cuatrimoto</a></li>
															<li><a href="#">Recorrido en Segway</a></li>
															<li><a href="#">Vista turistica a la playa</a></li>
															<li><a href="#">Visita cultural</a></li>
														</ul>
													</div>
													<div class="col-md-4 col-sm-4 col-xs-4">
														<ul>
															<li><a href="#">Recorrido gastronómico</a></li>
															<li><a href="#">Stone Island y ATV</a></li>
															<li><a href="#">Compras en Mazatlán</a></li>
															<li><a href="#">Visita a la Isla Deer</a></li>
														</ul>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="f-tour">
							<div class="row">
								<div class="col-md-6 col-md-push-6">
									<div class="row">
										<div class="col-md-6 animate-box">
											<a class="f-tour-img" style="background-image: url(images/tour-5.jpg);">
												<div class="desc">
													<h3>México - 5 Dias</h3>
													<p class="price"><span>$950</span> <small>/ persona</small></p>
												</div>
											</a>
										</div>
										<div class="col-md-6 animate-box">
											<a class="f-tour-img" style="background-image: url(images/tour-6.jpg);">
												<div class="desc">
													<h3>México - 5 Dias</h3>
													<p class="price"><span>$950</span> <small>/ persona</small></p>
												</div>
											</a>
										</div>
										<div class="col-md-6 animate-box">
											<a class="f-tour-img" style="background-image: url(images/tour-7.jpg);">
												<div class="desc">
													<h3>México - 5 Dias</h3>
													<p class="price"><span>$950</span> <small>/ persona</small></p>
												</div>
											</a>
										</div>
										<div class="col-md-6 animate-box">
											<a class="f-tour-img" style="background-image: url(images/tour-8.jpg);">
												<div class="desc">
													<h3>México - 5 Dias</h3>
													<p class="price"><span>$950</span> <small>/ persona</small></p>
												</div>
											</a>
										</div>
									</div>
								</div>
								<div class="col-md-6 animate-box col-md-pull-6 text-right">
									<div class="desc">
										<div class="row">
											<div class="col-md-12">
												<h3>México</h3>
												<p>México es un país entre los Estados Unidos y América Central, conocido por las playas en el Pacífico y el golfo de México, y su diverso paisaje de montañas, desiertos y selvas. Las ruinas antiguas, como Teotihuacán y la ciudad maya de Chichén Itzá, se distribuyen por el país, al igual que las ciudades de la época colonial española. </p><br>
											</div>
											<div class="col-md-12">
												<h4>MEJOR TOURS DE LA CIUDAD</h4>
												<div class="row">
													<div class="col-md-4 col-sm-4 col-xs-4">
														<ul>
															<li><a href="#">Acapulco</a></li>
															<li><a href="#">Teotihuacan</a></li>
															<li><a href="#">Chiapas</a></li>
															<li><a href="#">Cancún</a></li>
														</ul>
													</div>
													<div class="col-md-4 col-sm-4 col-xs-4">
														<ul>
															<li><a href="#">Tulum</a></li>
															<li><a href="#">Rivera Maya</a></li>
															<li><a href="#">El Norte, Isla Mujeres</a></li>
															<li><a href="#">Balandra, La Paz</a></li>
														</ul>
													</div>
													<div class="col-md-4 col-sm-4 col-xs-4">
														<ul>
															<li><a href="#">Parque Nacional Nevado de Toluca</a></li>
															<li><a href="#">Palenque</a></li>
															<li><a href="#">Feria de Primavera Jerez</a></li>
															<li><a href="#">Monte Albán</a></li>
														</ul>
													</div>
												</div>
												</div>
										</div>
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
										<input type="text" class="form-control" id="email"  placeholder="Introduce tu correo electrónico">
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

	//---------------Vuelo-----------------------------------------------------------------------------------------

	<script type="text/javascript">
    const $input1 = document.querySelector("#localizacion");
    const patron1 = /[a-zA-Z]+/;

    $input1.addEventListener("keydown", event => {
      if (patron1.test(event.key)){
        document.getElementById('localizacion').style.border = "1px solid #49AF13";
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
    function fieldSizeV() {
      var loc = document.getElementById('localizacion').value;
      if (loc.length>=3 && loc.length<=30) {
        document.getElementById('error1').innerHTML = "";
      }
      else {
        document.getElementById('error1').innerHTML = "Error: Tamaño del texto.";
        document.getElementById('localizacion').style.border = "1px solid #EF0D0D";
      }
    }
    </script>

    <script type="text/javascript">
    const $input2 = document.querySelector("#registro");
    const patron2 = /[0-9\/]+/;

    $input2.addEventListener("keydown", event => {
      if (patron2.test(event.key)){
        document.getElementById('registro').style.border = "1px solid #49AF13";
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
    function fieldSizeRegistro() {
      var registro = document.getElementById('registro').value;
      if (registro.length>=10 && registro.length==10) {
        document.getElementById('error2').innerHTML = "";
      }
      else {
        document.getElementById('error2').innerHTML = "Error: Tamaño del texto.";
        document.getElementById('registro').style.border = "1px solid #EF0D0D";
      }
    }
    </script>

    <script type="text/javascript">
    const $input3 = document.querySelector("#revisar");
    const patron3 = /[0-9\/]+/;

    $input3.addEventListener("keydown", event => {
      if (patron3.test(event.key)){
        document.getElementById('revisar').style.border = "1px solid #49AF13";
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
    function fieldSizeRevisar() {
      var revisar = document.getElementById('revisar').value;
      if (revisar.length>=10 && revisar.length==10) {
        document.getElementById('error3').innerHTML = "";
      }
      else {
        document.getElementById('error3').innerHTML = "Error: Tamaño del texto.";
        document.getElementById('revisar').style.border = "1px solid #EF0D0D";
      }
    }
    </script>

    <script type="text/javascript">
    const $input4 = document.querySelector("#personas");
    const patron4 = /[0-9]/;

    $input4.addEventListener("keydown", event => {
      if (patron4.test(event.key)){
        document.getElementById('personas').style.border = "1px solid #49AF13";
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
    function fieldSize() {
      var tam = document.getElementById('personas').value;
      if (tam>=1) {
        document.getElementById('error').innerHTML = "";
      }
      else {
        document.getElementById('error').innerHTML = "Error: Tamaño del texto.";
        document.getElementById('personas').style.border = "1px solid #EF0D0D";
      }
    }
    </script>

    //-----------------Hotel---------------------------------------------------------------------------
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

    //-----------------Alquiler---------------------------------------------------------------------------

    <script type="text/javascript">
    const $inputA = document.querySelector("#alquila");
    const patronA = /[a-zA-Z]+/;

    $inputA.addEventListener("keydown", event => {
      if (patronA.test(event.key)){
        document.getElementById('alquila').style.border = "1px solid #49AF13";
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
    function fieldSizeAlquila() {
      var alq = document.getElementById('alquila').value;
      if (alq.length>=3 && alq.length<=30) {
        document.getElementById('errorAlquila').innerHTML = "";
      }
      else {
        document.getElementById('errorAlquila').innerHTML = "Error: Tamaño del texto.";
        document.getElementById('alquila').style.border = "1px solid #EF0D0D";
      }
    }
    </script>

    <script type="text/javascript">
    const $inputInicio = document.querySelector("#inicio");
    const patronInicio = /[0-9\/]+/;

    $inputInicio.addEventListener("keydown", event => {
      if (patronInicio.test(event.key)){
        document.getElementById('inicio').style.border = "1px solid #49AF13";
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
    function fieldSizeInicio() {
      var inicio = document.getElementById('inicio').value;
      if (inicio.length>=10 && inicio.length==10) {
        document.getElementById('errorInicio').innerHTML = "";
      }
      else {
        document.getElementById('errorInicio').innerHTML = "Error: Tamaño del texto.";
        document.getElementById('inicio').style.border = "1px solid #EF0D0D";
      }
    }
    </script>

    <script type="text/javascript">
    const $inputFin = document.querySelector("#fin");
    const patronFin = /[0-9\/]+/;

    $inputFin.addEventListener("keydown", event => {
      if (patronFin.test(event.key)){
        document.getElementById('fin').style.border = "1px solid #49AF13";
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
    function fieldSizeFin() {
      var fin = document.getElementById('fin').value;
      if (fin.length>=10 && fin.length==10) {
        document.getElementById('errorFin').innerHTML = "";
      }
      else {
        document.getElementById('errorFin').innerHTML = "Error: Tamaño del texto.";
        document.getElementById('fin').style.border = "1px solid #EF0D0D";
      }
    }
    </script>

    //-----------------Crucero---------------------------------------------------------------------------------

 	<script type="text/javascript">
    const $inputCrucero = document.querySelector("#crucero");
    const patronCrucero = /[a-zA-Z]+/;

    $inputCrucero.addEventListener("keydown", event => {
      if (patronCrucero.test(event.key)){
        document.getElementById('crucero').style.border = "1px solid #49AF13";
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
    function fieldSizeCrucero() {
      var loc = document.getElementById('crucero').value;
      if (loc.length>=3 && loc.length<=30) {
        document.getElementById('errorCrucero').innerHTML = "";
      }
      else {
        document.getElementById('errorCrucero').innerHTML = "Error: Tamaño del texto.";
        document.getElementById('crucero').style.border = "1px solid #EF0D0D";
      }
    }
    </script>

    <script type="text/javascript">
    const $inputFecha = document.querySelector("#fecha");
    const patronFecha = /[0-9\/]+/;

    $inputFecha.addEventListener("keydown", event => {
      if (patronFecha.test(event.key)){
        document.getElementById('fecha').style.border = "1px solid #49AF13";
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
    function fieldSizeFecha () {
      var fecha = document.getElementById('fecha').value;
      if (fecha.length>=10 && fecha.length==10) {
        document.getElementById('errorFecha').innerHTML = "";
      }
      else {
        document.getElementById('errorFecha').innerHTML = "Error: Tamaño del texto.";
        document.getElementById('fecha').style.border = "1px solid #EF0D0D";
      }
    }
    </script>

    <script type="text/javascript">
    const $inputCategoria = document.querySelector("#categoria");
    const patronCategoria = /[0-9]/;

    $inputCategoria.addEventListener("keydown", event => {
      if (patronCategoria.test(event.key)){
        document.getElementById('categoria').style.border = "1px solid #49AF13";
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
    function fieldSize() {
      var tam = document.getElementById('categoria').value;
      if (tam.length>=10 && tam.length<=10) {
        document.getElementById('errorCategoria').innerHTML = "";
      }
      else {
        document.getElementById('errorCategoria').innerHTML = "Error: Tamaño del texto.";
        document.getElementById('categoria').style.border = "1px solid #EF0D0D";
      }
    }
    </script>


	</body>
</html>

