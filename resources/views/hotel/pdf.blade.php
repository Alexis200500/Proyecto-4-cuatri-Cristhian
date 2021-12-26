<!DOCTYPE html>
<html lang="en">
<head>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
   <title>Reporte de Hoteles</title>
</head>
<body>
<div class="page-content">
    <div class="panel">
        <h4 align="center">Viajes con Experiencia</h4><br>
        <h4 align="center">Reporte de Hoteles</h4><br><br>
        <div class="table-responsive">
  <table class="table" border="1" class="display table table-hover dataTable table-striped w-full" data-plugin="dataTable">
    <thead >
      <tr>
        <th scope="col" ALIGN=CENTER>Clave</th>
        
        <th scope="col" ALIGN=CENTER>Fecha de Registro</th>
        <th scope="col" ALIGN=CENTER>Fecha de Revision</th>
        <th scope="col" ALIGN=CENTER>Invitados</th>
        <th scope="col" ALIGN=CENTER>Fecha de Creacion</th>

      </tr>
    </thead>
    <tbody class="tbody-light">
    @foreach($hoteles as $h)
      <tr>
        <td scope="row">{{$h->id}}</td>
        <td>{{$h->registro}}</td>
        <td>{{$h->revisa}}</td>
        <td>{{$h->invitado}}</td>
        <td>{{$h->created_at}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
  
  </div>
    </div>
</div>
</body>
</html>



