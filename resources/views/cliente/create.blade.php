@extends('indexadmin')

@section('contenido')	
<form action="{{ url('cliente')}}" method="POST" enctype="multipart/form-data">
	{{ csrf_field() }}

<div class="col-md-12 padding-bottom">
    <div class="col-md-12">
		<label for="fname">Nombre (s)</label>
		
		<input type="text" name="nombre" class="form-control" onblur="fieldSize1()" id="nombre" pattern="[a-zA-Z]+" placeholder="Escribe tu nombre(s)">
	</div>
	<div class="col-md-12">
		<label for="lname">Apellido Paterno</label>
		<input type="text" name="app" onblur="fieldSize2()" id="app" pattern="[a-zA-Z]+" class="form-control" placeholder="Escribe tu Apellido"><p id="error2"></p>
	</div>
	<div class="col-md-12">
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
		<label for="subject">Teléfono:</label>
		<input  type="text" name="telefono" onblur="fieldSize6()" id="telefono" pattern="[10 []]+" class="form-control" placeholder="Escriba su número de teléfono"><p id="error6"></p>
	</div>
</div>
    
    <a class="btn btn-primary" href="{{ url('usuario') }} "> Regresar </a>
    
    <input type="submit" class="btn btn-success" value="Agregar">
</form>

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
        document.getElementById('error1').innerHTML = "Error: Tamaño del texto.";
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
        document.getElementById('error2').innerHTML = "Error: Tamaño del texto.";
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
        document.getElementById('error3').innerHTML = "Error: Tamaño del texto.";
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
        document.getElementById('error4').innerHTML = "Error: Tamaño del texto.";
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
        document.getElementById('error5').innerHTML = "Error: Selecciona una opción.";
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
        document.getElementById('error6').innerHTML = "Error: Tamaño del texto.";
        document.getElementById('celular').style.border = "1px solid #EF0D0D";
      }
    }
    </script>

@stop