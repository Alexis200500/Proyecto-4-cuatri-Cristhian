@extends('indexadmin')

@section('contenido')	
  
<div class="table-responsive">
  <table class="table" class="display table table-hover dataTable table-striped w-full" data-plugin="dataTable">
    <thead >
      <tr>
        <th scope="col" ALIGN=CENTER>Clave</th>
        
        <th scope="col" ALIGN=CENTER>Destino</th>
        <th scope="col" ALIGN=CENTER>Fecha de Inicio</th>
        <th scope="col" ALIGN=CENTER>Categoria</th>
        <th scope="col" ALIGN=CENTER>Fecha de Creacion</th>
        
        <th scope="col" ALIGN=CENTER>Operaciones</th>

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
        <td>

        <a class="btn btn-outline-warning" href="{{ url('/crucero/'.$c->id.'/edit') }}">Editar</a>

            <form action="{{url('/crucero/'.$c->id) }}" method="POST">
                {{csrf_field() }}
				{{ method_field('DELETE') }}
                <button class="btn btn-outline-danger">Eliminar</button>
            </form>

        </td>
      </tr>
      @endforeach

      <div align="left"><a class="btn btn-outline-success" href="{{ url('crucero/create') }}">Agregar Crucero</a></div>
      <div align="left">
        <a href="{{ url('cruceros/pdf') }}" >
          <img src="https://img2.freepng.es/20180802/ezo/kisspng-pdf-computer-file-clip-art-file-format-document-international-conference-on-materials-energy-april-5b630034a89c51.9879975015332147726906.jpg"  width="75px" height="50px">
        </a>
      </div>
      <div align="left">
        <a href="{{ url('cruceros/excel') }}" >
          <img src="https://img2.freepng.es/20180418/jde/kisspng-microsoft-excel-training-computer-software-microso-excel-5ad7d9f121bed2.0123007315240954731382.jpg"  width="75px" height="50px">
        </a>
      </div>
    </tbody>
  </table>
  
  </div>
@stop