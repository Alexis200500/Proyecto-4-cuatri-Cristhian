<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="viewport" content="width=device-width" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Cambio de Contraseña</title>
<link href="styles.css" media="all" rel="stylesheet" type="text/css" />
</head>

<body itemscope itemtype="http://schema.org/EmailMessage">

<table class="body-wrap">
	<tr>
		<td></td>
		<td class="container" width="600">
			<div class="content">
				<table class="main" width="100%" cellpadding="0" cellspacing="0" itemprop="action" itemscope itemtype="http://schema.org/ConfirmAction">
					<tr>
						<td class="content-wrap">
							<meta itemprop="name" content="Confirm Email"/>
							<table width="100%" cellpadding="0" cellspacing="0">
								<tr>
									<td class="content-block">
										Recuperacion de Contraseña
									</td>
								</tr>
								<tr>
									<td class="content-block">
										Has recibido este correo para cambiar tu contraseña en nuestro sistema, haz click en el boton inferior para seguir el procedimiento de cambio de contraseña.
									</td>
								</tr>
								<tr>
									<td class="content-block" itemprop="handler" itemscope itemtype="http://schema.org/HttpActionHandler">
										<a href="localhost:8000/recover/{{$usuario->id}}" class="btn-primary" itemprop="url">Cambiar Contraseña</a>
									</td>
								</tr>
								<tr>
									<td class="content-block">
										&mdash; Viajes Con Experiencia
									</td>
								</tr>
							</table>
						</td>
					</tr>
				</table>
				<div class="footer">
					<table width="100%">
						<tr>
							<td class="aligncenter content-block">Visita nuestra pagina web <a href="localhost:8000/index">Viajes</a> Con Experiencias.</td>
						</tr>
					</table>
				</div></div>
		</td>
		<td></td>
	</tr>
</table>

</body>
</html>