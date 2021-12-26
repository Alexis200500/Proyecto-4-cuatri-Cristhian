@extends('indexadmin')

@section('contenido')	
<form action="{{ url('/alquiler/' .$alquiler->id) }}" method="POST" enctype="multipart/form-data">
	{{ csrf_field() }}
	{{ method_field('PUT') }}
<div class="form-group">
<input type="text" value="{{$alquiler->donde}}" name="alquila" onblur="fieldSizeAlquila()" id="alquila" pattern="[a-zA-Z]+" class="form-control" placeholder="Localización"><p id="errorAlquila"></p>
</div>

<div class="form-group">
<input type="date" value="{{$alquiler->fechadeinicio}}" name="inicio" onblur="fieldSizeInicio()" id="inicio" pattern="[0-9\/]+" class="form-control" placeholder="Verificar Fecha"><p id="errorInicio"></p>
</div>

<div class="form-group">
<input type="date" value="{{$alquiler->fechaderegreso}}" name="fin" onblur="fieldSizeFin()" id="fin" pattern="[0-9\/]+" class="form-control" placeholder="Verificar Fecha"><p id="errorFin"></p>
</div>
    
    <a class="btn btn-primary" href="{{ url('alquiler') }} "> Regresar </a>
    
    <input type="submit" class="btn btn-success" value="Modificar">
</form>

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

@stop