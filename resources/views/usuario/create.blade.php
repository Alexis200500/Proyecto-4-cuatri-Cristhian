@extends('indexadmin')

@section('contenido')	
<form action="{{ url('usuario')}}" method="POST" enctype="multipart/form-data">
	{{ csrf_field() }}
<div class="form-group">
  <input type="text" onblur="nom()" class="form-control" id="Nombre" placeholder="Nombre" name="nombre">
  {!! $errors->first('nombre','<div class="alert alert-warning" role="alert"><span class="help-block">:message </span></div>') !!} 
</div>
<div id="namerror"></div>

<div class="form-group">
  <input type="text" onblur="cor()" class="form-control" id="Correo" placeholder="Correo" name="correo">
  {!! $errors->first('correo','<div class="alert alert-warning" role="alert"><span class="help-block">:message </span></div>') !!} 
</div>
<div id="corerror"></div>

<div class="form-group">
  <input type="password" onblur="pass()" class="form-control" id="Password" placeholder="Password" name="password">
  {!! $errors->first('password','<div class="alert alert-warning" role="alert"><span class="help-block">:message </span></div>') !!} 
</div>
<div id="passerror"></div>
    
    <a class="btn btn-primary" href="{{ url('usuario') }} "> Regresar </a>
    
    <input type="submit" class="btn btn-success" value="Agregar">
</form>

	<script type="text/javascript">

		const $nombre = document.querySelector("#Nombre");
		const patronnom = /[A-Za-z -]+/;
		$nombre.addEventListener("keydown", event => {
			if (patronnom.test(event.key)) {
				document.getElementById('Nombre').style.border = "3px solid #00cc00";
			} else {
				if (event.keyCode == 0) {
					//alert("backspace");
				} else {
					event.preventDefault();
					//var tcla=event.keyCode;
					//alert(tcla);
				}

			}
		});
		function nom() {
			var tam = document.getElementById("Nombre").value;
			while (tam == 0) {
				document.getElementById('namerror').innerHTML = "<i>EL campo Nombre es requerido</i>";
				
				return false;
			}
			if (tam.length >= 3 && tam.length <= 30) {
				document.getElementById("namerror").innerHTML = "";
			} else {
				document.getElementById('Nombre').style.border = "3px solid #FF0000";
				
				document.getElementById('namerror').innerHTML = "<i>Error: Debe de Tener un Minimo de 3 caracteres y Maximo de 30 caracteres</i>";
				return false;
			}
		}

		const $inputesp = document.querySelector("#Correo");
		const patronesp = /[A-Za-z0-9@. -]/;
		$inputesp.addEventListener("keydown", event => {
			if (patronesp.test(event.key)) {
				document.getElementById('Correo').style.border = "3px solid #00cc00";
			} else {
				if (event.keyCode == 0) {
					//alert("backspace");
				} else {
					event.preventDefault();
					//var tcla=event.keyCode;
					//alert(tcla);
				}

			}
		});
		function cor() {
			var tam = document.getElementById("Correo").value;
			while (tam == 0) {
				document.getElementById('corerror').innerHTML = "<i>EL campo Correo es requerido</i>";
				
				return false;
			}
			if (tam.length >= 5 && tam.length <= 50) {
				document.getElementById("corerror").innerHTML = "";
			} else {
				document.getElementById('Correo').style.border = "3px solid #FF0000";
				
				document.getElementById('corerror').innerHTML = "<i>Error: Debe de Tener un Minimo de 5 caracteres y Maximo de 50 caracteres</i>";
				return false;
			}
		}

		const $inputed = document.querySelector("#Password");
		const patroned = /[A-Za-z0-9 -]/;
		$inputed.addEventListener("keydown", event => {
			if (patroned.test(event.key)) {
				document.getElementById('Password').style.border = "3px solid #00cc00";
			} else {
				if (event.keyCode == 0) {
					//alert("backspace");
				} else {
					event.preventDefault();
					//var tcla=event.keyCode;
					//alert(tcla);
				}
			}
		});
		function pass() {
			var tam = document.getElementById("Password").value;
			while (tam == 0) {
				document.getElementById('passerror').innerHTML = "<i>EL campo Status es requerido</i>";
				
				return false;
			}
			if (tam.length >= 8 && tam.length <= 50) {
				document.getElementById("passerror").innerHTML = "";
			
			} else {
				document.getElementById('Password').style.border = "3px solid #FF0000";
				
				document.getElementById('passerror').innerHTML = "<i>Error: Debe de Tener un Minimo de 8 caracteres y Maximo de 50 caracteres</i>";
				return false;
			}
		}

	</script>

@stop