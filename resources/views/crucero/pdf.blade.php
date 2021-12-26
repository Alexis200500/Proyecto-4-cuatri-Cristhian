<!DOCTYPE html>
<html lang="en">
<head>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
   <title>Reporte de Cruceros</title>
</head>
<body>
<div class="page-content">
    <div class="panel">
        <h4 align="center">Viajes con Experiencia</h4><br>
        <h4 align="center">Reporte de Cruceros</h4><br><br>
        <div class="table-responsive">
  <table class="table" border="1" class="display table table-hover dataTable table-striped w-full" data-plugin="dataTable">
    <thead >
      <tr>
        <th scope="col" ALIGN=CENTER>Clave</th>
        
        <th scope="col" ALIGN=CENTER>Destino</th>
        <th scope="col" ALIGN=CENTER>Fecha de Inicio</th>
        <th scope="col" ALIGN=CENTER>Categoria</th>
        <th scope="col" ALIGN=CENTER>Fecha de Creacion</th>

      </tr>
    </thead>
    <tbody class="tbody-light">
    @foreach($cruceros as $c)
      <tr>
        <td scope="row">{{$c->id}}</td>
        <td>{{$c->donde}}</td>
        <td>{{$c->fechadeinicio}}</td>
        <td>{{$c->categorias}}</td>
        <td>{{$c->created_at}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
  
  </div>
    </div>
</div>
</body>
</html>



