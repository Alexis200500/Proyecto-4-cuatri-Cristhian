@extends('indexadmin')

@section('contenido')	
<form action="{{ url('/hotel/' .$hotel->id) }}" method="POST" enctype="multipart/form-data">
	{{ csrf_field() }}
	{{ method_field('PUT') }}

    <div class="col-md-12">
	  <div class="form-group">
	    <label for="date">Fecha de Registro:</label>
	    <div class="form-field">
	      <i class="icon icon-calendar2"></i>
	      <input type="date" value="{{$hotel->registro}}" name="registroh" onblur="fieldSizeRegistroH()" id="registroh" pattern="[0-9\/]+" class="form-control" placeholder="Verificar fecha"><p id="errorRH"></p>
	    </div>
	  </div>
	</div>
	<div class="col-md-12">
	  <div class="form-group">
	    <label for="date">Fecha de Revision:</label>
	    <div class="form-field">
	      <i class="icon icon-calendar2"></i>
	      <input type="date" value="{{$hotel->revisa}}" name="revisarH" onblur="fieldSizeRevisarH()" id="revisarH" pattern="[0-9\/]+" class="form-control" placeholder="Verificar fecha"><p id="errorREH"></p>
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
	      </select>
	      <p id="errorInvitado"></p>
	    </div>
	  </div>
	</div>
    
    <a class="btn btn-primary" href="{{ url('hotel') }} "> Regresar </a>
    
    <input type="submit" class="btn btn-success" value="Modificar">
</form>

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
    
@stop