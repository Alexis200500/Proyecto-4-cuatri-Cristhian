<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Registro de Hotel</title>
    <style type="text/css">
      
      * {
        margin:0px;
        padding:0px;
      }
      
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
    <div id="header">
      <ul class="nav">
        <li><a href="cliente">Cliente</a>
          <ul>
            <li><a href="">Submenu1</a></li>
            <li><a href="">Submenu2</a></li>
          </ul>
        </li>
        <li><a href="hotel">Hotel</a>
          <ul>
            <li><a href="">Submenu1</a></li>
            <li><a href="">Submenu2</a></li>
            </li>
          </ul>
        </li>
        <li><a href="viaje">Viaje</a>
          <ul>
            <li><a href="">Submenu1</a></li>
            <li><a href="">Submenu2</a></li>
          </ul>
        </li>
        <li><a href="aerolina">Aerolina</a>
          <ul>
            <li><a href="">Submenu1</a></li>
            <li><a href="">Submenu2</a></li>
          </ul>
        </li>
        <li><a href="transporte">Transporte</a>
          <ul>
            <li><a href="">Submenu1</a></li>
            <li><a href="">Submenu2</a></li>
          </ul>
        </li>
      </ul>
    </div>
    <br><br><br><br>
    <form class="content" action="/hotel" method="POST">
      @csrf
      <form method="post" class="colorlib-form">
				              	<div class="row">
				                <div class="col-md-12">
                        Id Cliente: <input type="text" name="idhotel" onblur="fieldSize()" id="idhotel" pattern="[10 []]+" placeholder="Id Cliente"><br><br>
      <p id="error"></p>
				                  <div class="form-group">
				                    <label for="date">Comprobar fecha:</label>
				                    <div class="form-field">
				                      <i class="icon icon-calendar2"></i>
				                      <input type="date" name="registroh" onblur="fieldSizeRegistroH()" id="registroh" pattern="[0-9\/]+" class="form-control date" placeholder="Verificar fecha"><p id="errorRH"></p>
				                    </div>
				                  </div>
				                </div>
				                <div class="col-md-12">
				                  <div class="form-group">
				                    <label for="date">Revise su fecha:</label>
				                    <div class="form-field">
				                      <i class="icon icon-calendar2"></i>
				                      <input type="date" name="revisarH" onblur="fieldSizeRevisarH()" id="revisarH" pattern="[0-9\/]+" class="form-control date" placeholder="Verificar fecha"><p id="errorREH"></p>
				                    </div>
				                  </div>
				                </div>
				                <div class="col-md-12">
				                  <div class="form-group">
				                    <label for="guests">Invitado</label>
				                    <div class="form-field">
				                      <i class="icon icon-arrow-down3"></i>
				                      <select name="invitado" onblur="fieldSizeInvitado()" id="invitado" pattern="[0-9]+" class="form-control">
				                        <option value="#">1</option>
				                        <option value="#">2</option>
				                        <option value="#">3</option>
				                        <option value="#">4</option>
				                        <option value="#">5+</option>
				                      </select><p id="errorInvitado"></p>
				                    </div>
				                  </div>
				                </div>
				                <div class="col-md-12">
				                  <input type="submit" name="submit" id="submit" value="Encontrar Hotel" class="btn btn-primary btn-block">
				                </div>
				                <div class="col-md-12">
				                   <input type="reset" id="cancelar" name="cancelar" value="Cancelar" class="btn btn-danger btn-block">
				                </div>
				              </div>
				            </form>

    <script type="text/javascript">
    const $input = document.querySelector("#idhotel");
    const patron = /[0-9]/;

    $input.addEventListener("keydown", event => {
      if (patron.test(event.key)){
        document.getElementById('idhotel').style.border = "1px solid #49AF13";
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
      var tam = document.getElementById('idhotel').value;
      if (tam>=1) {
        document.getElementById('error').innerHTML = "";
      }
      else {
        document.getElementById('error').innerHTML = "Error: Tamaño del texto.";
        document.getElementById('idhotel').style.border = "1px solid #EF0D0D";
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
    const $input2 = document.querySelector("#tipo");
    const patron2 = /[a-zA-Z]+/;

    $input2.addEventListener("keydown", event => {
      if (patron2.test(event.key)){
        document.getElementById('tipo').style.border = "1px solid #49AF13";
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
      var apellido = document.getElementById('tipo').value;
      if (apellido.length>=2 && apellido.length<=30) {
        document.getElementById('error2').innerHTML = "";
      }
      else {
        document.getElementById('error2').innerHTML = "Error: Tamaño del texto.";
        document.getElementById('tipo').style.border = "1px solid #EF0D0D";
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
    const $input4 = document.querySelector("#precio");
    const patron4 = /[0-9\/]+/;

    $input4.addEventListener("keydown", event => {
      if (patron4.test(event.key)){
        document.getElementById('precio').style.border = "1px solid #49AF13";
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
      var precio = document.getElementById('precio').value;
      if (precio>=400) {
        document.getElementById('error4').innerHTML = "";
      }
      else {
        document.getElementById('error4').innerHTML = "Error: Tamaño del texto.";
        document.getElementById('precio').style.border = "1px solid #EF0D0D";
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
    const patron6 = /[0-9]+/;

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
      if (tel.length>=10 && tel.length<=16) {
        document.getElementById('error6').innerHTML = "";
      }
      else {
        document.getElementById('error6').innerHTML = "Error: Tamaño del texto.";
        document.getElementById('telefono').style.border = "1px solid #EF0D0D";
      }
    }
    </script>

    <script type="text/javascript">
    const $input7 = document.querySelector("#celular");
    const patron7 = /[0-9]+/;

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
      if (cel.length>=10 && cel.length<=16) {
        document.getElementById('error7').innerHTML = "";
      }
      else {
        document.getElementById('error7').innerHTML = "Error: Tamaño del texto.";
        document.getElementById('celular').style.border = "1px solid #EF0D0D";
      }
    }
    </script>

    <script type="text/javascript">
    const $input8 = document.querySelector("#ubicacion");
    const patron8 = /[a-zA-Z0-9\/.*@]/;

    $input8.addEventListener("keydown", event => {
      if (patron8.test(event.key)){
        document.getElementById('ubicacion').style.border = "1px solid #49AF13";
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
      var ubicacion = document.getElementById('ubicacion').value;
      if (ubicacion.length>=4 && ubicacion.length<=30) {
        document.getElementById('error8').innerHTML = "";
      }
      else {
        document.getElementById('error8').innerHTML = "Error: Tamaño del texto.";
        document.getElementById('ubicacion').style.border = "1px solid #EF0D0D";
      }
    }
    </script>

    <script type="text/javascript">
    const $input9 = document.querySelector("#ubicacion");
    const patron9 = /[a-zA-Z]+/;

    $input9.addEventListener("keydown", event => {
      if (patron9.test(event.key)){
        document.getElementById('ubicacion').style.border = "1px solid #49AF13";
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
