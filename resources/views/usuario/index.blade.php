@extends('indexadmin')

@section('contenido')	
  
<div class="table-responsive">
  <table class="table" class="display table table-hover dataTable table-striped w-full" data-plugin="dataTable">
    <thead >
      <tr>
        <th scope="col" ALIGN=CENTER>Clave</th>
        
        <th scope="col" ALIGN=CENTER>Nombre</th>
        <th scope="col" ALIGN=CENTER>Correo</th>
        <th scope="col" ALIGN=CENTER>Contraseña</th>
        <th scope="col" ALIGN=CENTER>Fecha de Creacion</th>
        
        <th scope="col" ALIGN=CENTER>Operaciones</th>

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
        <td>

        <a class="btn btn-outline-warning" href="{{ url('/usuario/'.$u->id.'/edit') }}">Editar</a>

            <form action="{{url('/usuario/'.$u->id) }}" method="POST">
                {{csrf_field() }}
				{{ method_field('DELETE') }}
                <button class="btn btn-outline-danger">Eliminar</button>
            </form>

        </td>
      </tr>
      @endforeach

      <div align="left"><a class="btn btn-outline-success" href="{{ url('usuario/create') }}">Agregar Usuario</a></div>
      <div align="left">
        <a href="{{ url('usuarios/pdf') }}" >
          <img src="https://img2.freepng.es/20180802/ezo/kisspng-pdf-computer-file-clip-art-file-format-document-international-conference-on-materials-energy-april-5b630034a89c51.9879975015332147726906.jpg"  width="75px" height="50px">
        </a>
      </div>
      <div align="left">
        <a href="{{ url('usuarios/excel') }}" >
          <img src="https://img2.freepng.es/20180418/jde/kisspng-microsoft-excel-training-computer-software-microso-excel-5ad7d9f121bed2.0123007315240954731382.jpg"  width="75px" height="50px">
        </a>
      </div>

    </tbody>
  </table>
  
  </div>
  <script type="text/javascript">
    $(document).ready(function(){
      $('#Eliminar').click(function(){
        alert('Eliminacion Exitosa');
      });
      $('#Restaurar').click(function(){
        alert('Restauracion Exitosa');
      });
    });
  </script>
@stop