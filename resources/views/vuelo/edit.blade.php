@extends('indexadmin')

@section('contenido')	
<form action="{{ url('/vuelo/' .$vuelos->id) }}" method="POST" enctype="multipart/form-data">
	{{ csrf_field() }}
	{{ method_field('PUT') }}

    <div class="row">
	    <div class="col-md-12">
	        <div class="form-group">
	            <label for="date">Destino:</label>
	            <div class="form-field">
	                <input type="text" value="{{$vuelos->donde}}" name="localizacion" onblur="fieldSizeV()" id="localizacion" pattern="[a-zA-Z]+" class="form-control" placeholder="Buscar localización"><p id="error1"></p>
	            </div>
	        </div>
	    </div>
	    <div class="col-md-12">
	      <div class="form-group">
	        <label for="date">Fecha de Registro:</label>
	        <div class="form-field">
	          <i class="icon icon-calendar2"></i>
	          <input type="date" value="{{$vuelos->registro}}" name="registro" onblur="fieldSizeRegistro()" id="registro" pattern="[0-9\/]+" class="form-control" placeholder="Verificar fecha"><p id="error2"></p>
	        </div>
	      </div>
	    </div>
	    <div class="col-md-12">
	      <div class="form-group">
	        <label for="date">Fecha de Revision:</label>
	        <div class="form-field">
	          <i class="icon icon-calendar2"></i>
	          <input type="date" value="{{$vuelos->revisar}}" name="revisar" onblur="fieldSizeRevisar()" id="revisar" pattern="[0-9\/]+" class="form-control" placeholder="Verificar fecha"><p id="error3"></p>
	        </div>
	      </div>
	    </div>
	    <div class="col-md-12">
	      <div class="form-group">
	        <label for="guests">Invitados:</label>
	        <div class="form-field">
	          <i class="icon icon-arrow-down3"></i>
	          <select name="personas" onblur="fieldSizePersonas()" id="personas" pattern="[0-9]+" class="form-control">
	            <option value="1">1</option>
	            <option value="2">2</option>
	            <option value="3">3</option>
	            <option value="4">4</option>
	            <option value="5+">5+</option>
	          </select><p id="error4"></p>
	        </div>
	      </div>
	    </div>
    </div>
    
    <a class="btn btn-primary" href="{{ url('vuelo') }} "> Regresar </a>
    
    <input type="submit" class="btn btn-success" value="Modificar">
</form>

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
    
@stop