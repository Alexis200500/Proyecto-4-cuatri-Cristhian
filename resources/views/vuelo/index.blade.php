@extends('indexadmin')

@section('contenido')	
  
<div class="table-responsive">
  <table class="table" class="display table table-hover dataTable table-striped w-full" data-plugin="dataTable">
    <thead >
      <tr>
        <th scope="col" ALIGN=CENTER>Clave</th>
        
        <th scope="col" ALIGN=CENTER>Destino</th>
        <th scope="col" ALIGN=CENTER>Fecha de Registro</th>
        <th scope="col" ALIGN=CENTER>Fecha de Revision</th>
        <th scope="col" ALIGN=CENTER>Invitados</th>
        <th scope="col" ALIGN=CENTER>Fecha de Creacion</th>
        
        <th scope="col" ALIGN=CENTER>Operaciones</th>

      </tr>
    </thead>
    <tbody class="tbody-light">
    @foreach($vuelos as $v)
      <tr>
        <td scope="row">{{$v->id}}</td>
        <td>{{$v->donde}}</td>
        <td>{{$v->registro}}</td>
        <td>{{$v->revisar}}</td>
        <td>{{$v->invitado}}</td>
        <td>{{$v->created_at}}</td>
        <td>

        <a class="btn btn-outline-warning" href="{{ url('/vuelo/'.$v->id.'/edit') }}">Editar</a>

            <form action="{{url('/vuelo/'.$v->id) }}" method="POST">
                {{csrf_field() }}
				{{ method_field('DELETE') }}
                <button class="btn btn-outline-danger">Eliminar</button>
            </form>

        </td>
      </tr>
      @endforeach

      <div align="left"><a class="btn btn-outline-success" href="{{ url('vuelo/create') }}">Agregar Vuelo</a></div>
      <div align="left">
        <a href="{{ url('vuelos/pdf') }}" >
          <img src="https://img2.freepng.es/20180802/ezo/kisspng-pdf-computer-file-clip-art-file-format-document-international-conference-on-materials-energy-april-5b630034a89c51.9879975015332147726906.jpg"  width="75px" height="50px">
        </a>
      </div>
      <div align="left">
        <a href="{{ url('vuelos/excel') }}" >
          <img src="https://img2.freepng.es/20180418/jde/kisspng-microsoft-excel-training-computer-software-microso-excel-5ad7d9f121bed2.0123007315240954731382.jpg"  width="75px" height="50px">
        </a>
      </div>
    </tbody>
  </table>
  
  </div>
@stop