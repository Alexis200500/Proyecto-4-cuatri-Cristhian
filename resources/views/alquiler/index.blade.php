@extends('indexadmin')

@section('contenido')	
  
<div class="table-responsive">
  <table class="table" class="display table table-hover dataTable table-striped w-full" data-plugin="dataTable">
    <thead >
      <tr>
        <th scope="col" ALIGN=CENTER>Clave</th>
        
        <th scope="col" ALIGN=CENTER>Destino</th>
        <th scope="col" ALIGN=CENTER>Fecha de Inicio</th>
        <th scope="col" ALIGN=CENTER>Fecha de Regreso</th>
        <th scope="col" ALIGN=CENTER>Fecha de Creacion</th>
        
        <th scope="col" ALIGN=CENTER>Operaciones</th>

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
        <td>

        <a class="btn btn-outline-warning" href="{{ url('/alquiler/'.$a->id.'/edit') }}">Editar</a>

            <form action="{{url('/alquiler/'.$a->id) }}" method="POST">
                {{csrf_field() }}
				        {{ method_field('DELETE') }}
                <button class="btn btn-outline-danger">Eliminar</button>
            </form>

        </td>
      </tr>
      @endforeach

      <div align="left"><a class="btn btn-outline-success" href="{{ url('alquiler/create') }}">Agregar Alquiler</a></div>
      <div align="left">
        <a href="{{ url('alquileres/pdf') }}" >
          <img src="https://img2.freepng.es/20180802/ezo/kisspng-pdf-computer-file-clip-art-file-format-document-international-conference-on-materials-energy-april-5b630034a89c51.9879975015332147726906.jpg"  width="75px" height="50px">
        </a>
      </div>
      <div align="left">
        <a href="{{ url('alquileres/excel') }}" >
          <img src="https://img2.freepng.es/20180418/jde/kisspng-microsoft-excel-training-computer-software-microso-excel-5ad7d9f121bed2.0123007315240954731382.jpg"  width="75px" height="50px">
        </a>
      </div>
    
    </tbody>
  </table>
  
  </div>
@stop