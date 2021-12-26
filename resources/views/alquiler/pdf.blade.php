<!DOCTYPE html>
<html lang="en">
<head>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
   <title>Reporte de Alquileres</title>
</head>
<body>
<div class="page-content">
    <div class="panel">
        <h4 align="center">Viajes con Experiencia</h4><br>
        <h4 align="center">Reporte de Alquileres</h4><br><br>
        <div class="table-responsive">
  <table class="table" border="1" class="display table table-hover dataTable table-striped w-full" data-plugin="dataTable">
    <thead >
      <tr>
        <th scope="col" ALIGN=CENTER>Clave</th>
        
        <th scope="col" ALIGN=CENTER>Destino</th>
        <th scope="col" ALIGN=CENTER>Fecha de Inicio</th>
        <th scope="col" ALIGN=CENTER>Fecha de Regreso</th>
        <th scope="col" ALIGN=CENTER>Fecha de Creacion</th>

      </tr>
    </thead>
    <tbody class="tbody-light">
    @foreach($alquileres as $a)
      <tr>
        <td scope="row">{{$a->id}}</td>
        <td>{{$a->donde}}</td>
        <td>{{$a->fechadeinicio}}</td>
        <td>{{$a->fechaderegreso}}</td>
        <td>{{$a->created_at}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
  
  </div>
    </div>
</div>
</body>
</html>



