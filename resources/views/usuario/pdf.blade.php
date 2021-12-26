<!DOCTYPE html>
<html lang="en">
<head>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
   <title>Reporte de Usuarios</title>
</head>
<body>
<div class="page-content">
    <div class="panel">
        <h4 align="center">Viajes con Experiencia</h4><br>
        <h4 align="center">Reporte de Usuarios</h4><br><br>
        <div class="table-responsive">
  <table class="table" border="1" class="display table table-hover dataTable table-striped w-full" data-plugin="dataTable">
    <thead >
      <tr>
        <th scope="col" ALIGN=CENTER>Clave</th>
        
        <th scope="col" ALIGN=CENTER>Nombre</th>
        <th scope="col" ALIGN=CENTER>Correo</th>
        <th scope="col" ALIGN=CENTER>Contraseña</th>
        <th scope="col" ALIGN=CENTER>Fecha de Creacion</th>

      </tr>
    </thead>
    <tbody class="tbody-light">
    @foreach($usuarios as $u)
      <tr>
        <td scope="row">{{$u->id}}</td>
        <td>{{$u->nombre}}</td>
        <td>{{$u->correo}}</td>
        <td>{{$u->password}}</td>
        <td>{{$u->created_at}}</td>
      </tr>
      @endforeach
      </tbody>
  </table>
  
  </div>
    </div>
</div>
</body>
</html>



