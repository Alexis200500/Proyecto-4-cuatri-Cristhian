<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Registro de Cliente</title>
    <style type="text/css">
      
      * {
        margin:0px;
        padding:0px;
      }
      h1 {font-size:14px; background-color: yellow; }
      
      #header {
        margin:auto;
        width:500px;
        font-family:Arial, Helvetica, sans-serif;
      }
      
      ul, ol {
        list-style:none;
      }
      
      .nav > li {
        float:left;
      }
      
      .nav li a {
        background-color:#000;
        color:#fff;
        text-decoration:none;
        padding:10px 12px;
        display:block;
      }
      
      .nav li a:hover {
        background-color:#434343;
      }
      
      .nav li ul {
        display:none;
        position:absolute;
        min-width:140px;
      }
      
      .nav li:hover > ul {
        display:block;
      }
      
      .nav li ul li {
        position:relative;
      }
      
      .nav li ul li ul {
        right:-140px;
        top:0px;
      }
      
    </style>
  </head>
  <body>
    <br><br><br><br>
     <div class="container-fluid">
            <div class="row-fluid">
                
                <!--/span-->
              <div class="span9" id="content">
                      <!-- morris stacked chart -->
                 <!-- validation -->
                    <div class="row-fluid">
                         <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                
                            </div>
                            <div class="block-content collapse in">
                            <div class="span12">
    <form class="content" action="{{route('guardarvuelo')}}" method="POST">
      @csrf
      <center>
      <h1>Registro de Vuelo</h1><br><br>
      Id Vuelo: <input type="text" name="idvuelo" onblur="fieldSize()" id="idvuelo" pattern="[10 []]+" placeholder="Id Vuelo"><br><br>
      <p id="error"></p>
      Donde: <input type="text" name="localizacion" onblur="fieldSize1()" id="localizacion" pattern="[a-zA-Z]+" placeholder="Nombre(s)"><br><br>
      <p id="error1"></p>
      Registro: <input type="date" name="registro" onblur="fieldSize2()" id="app" pattern="[a-zA-Z]+" placeholder="Registro"><br><br>
      <p id="error2"></p>
      Revisar: <input type="date" name="revisar" onblur="fieldSize3()" id="revisar" pattern="[a-zA-Z]+" placeholder="Revisar"><br><br>
      <p id="error3"></p>
      <select name="personas" onblur="fieldSize5()" id="personas" pattern="[F]|[M]+"><br><br>
        <option> Género </option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5+">5+</option>
      </select><br><br>
      <p id="error5"></p>
      <input type="submit" value="Registrar">
      <button type="reset" id="cancelar" name="cancelar" class="btn btn-danger">Cancelar</button>
      </center>
    </form>

    <script type="text/javascript">
    const $input = document.querySelector("#idcliente");
    const patron = /[0-9]/;

    $input.addEventListener("keydown", event => {
      if (patron.test(event.key)){
        document.getElementById('idcliente').style.border = "1px solid #49AF13";
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
      var tam = document.getElementById('idcliente').value;
      if (tam>=1) {
        document.getElementById('error').innerHTML = "";
      }
      else {
        document.getElementById('error').innerHTML = "Error: Tamaño del texto.";
        document.getElementById('idcliente').style.border = "1px solid #EF0D0D";
      }
    }
    </script>

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
      var apellido = document.getElementById('app').value;
      if (apellido.length>=5 && apellido.length<=30) {
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

    <script type="text/javascript">
    const $input7 = document.querySelector("#celular");
    const patron7 = /[0-9 \/]+/;

    $input7.addEventListener("keydown", event => {
      if (patron7.test(event.key)){
        document.getElementById('celular').style.border = "1px solid #49AF13";
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
    function fieldSize7() {
      var cel = document.getElementById('celular').value;
      if (cel==10) {
        document.getElementById('error7').innerHTML = "";
      }
      else {
        document.getElementById('error7').innerHTML = "Error: Tamaño del texto.";
        document.getElementById('celular').style.border = "1px solid #EF0D0D";
      }
    }
    </script>

    <script type="text/javascript">
    const $input8 = document.querySelector("#email");
    const patron8 = /[a-zA-Z0-9\/.*@]/;

    $input8.addEventListener("keydown", event => {
      if (patron8.test(event.key)){
        document.getElementById('email').style.border = "1px solid #49AF13";
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
    function fieldSize8() {
      var email = document.getElementById('email').value;
      if (email.length>=10 && email.length<=30) {
        document.getElementById('error8').innerHTML = "";
      }
      else {
        document.getElementById('error8').innerHTML = "Error: Tamaño del texto.";
        document.getElementById('email').style.border = "1px solid #EF0D0D";
      }
    }
    </script>

    <script type="text/javascript">
    const $input9 = document.querySelector("#password");
    const patron9 = /[a-zA-Z0-9]+/;

    $input9.addEventListener("keydown", event => {
      if (patron9.test(event.key)){
        document.getElementById('password').style.border = "1px solid #49AF13";
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
    function fieldSize9() {
      var password = document.getElementById('password').value;
      if (password.length>=8 && password.length<=12) {
        document.getElementById('error9').innerHTML = "";
      }
      else {
        document.getElementById('error9').innerHTML = "Error: Tamaño del texto.";
        document.getElementById('password').style.border = "1px solid #EF0D0D";
      }
    }
    </script>

  </body>
</html>
