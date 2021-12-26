@extends('indexadmin')

@section('contenido')	
<form action="{{ url('crucero')}}" method="POST" enctype="multipart/form-data">
	{{ csrf_field() }}

    <div class="col-md-12">
	    <div class="form-group">
	        <label for="date">Destino:</label>
	        <div class="form-field">
	            <input type="text" name="crucero" onblur="fieldSizeCrucero()" id="crucero" pattern="[a-zA-Z]+" class="form-control" placeholder="Buscar localización"><p id="errorCrucero"></p>
	        </div>
	    </div>
	</div>
	<div class="col-md-12">
	  <div class="form-group">
	    <label for="date">Fecha de Inicio:</label>
	    <div class="form-field">
	      <i class="icon icon-calendar2"></i>
	      <input type="date" name="fecha" onblur="fieldSizeFecha()" id="fecha" pattern="[0-9\/]+" class="form-control" placeholder="Verificar Fecha"><p id="errorFecha"></p>
	    </div>
	  </div>
	</div>
	<div class="col-md-12">
	  <div class="form-group">
	    <label for="guests">Categoria</label>
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
    
    <a class="btn btn-primary" href="{{ url('crucero') }} "> Regresar </a>
    
    <input type="submit" class="btn btn-success" value="Agregar">
</form>

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
@stop