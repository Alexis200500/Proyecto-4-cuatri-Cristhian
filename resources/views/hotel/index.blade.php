@extends('indexadmin')

@section('contenido')	
  
<div class="table-responsive">
  <table class="table" class="display table table-hover dataTable table-striped w-full" data-plugin="dataTable">
    <thead >
      <tr>
        <th scope="col" ALIGN=CENTER>Clave</th>
        
        <th scope="col" ALIGN=CENTER>Fecha de Registro</th>
        <th scope="col" ALIGN=CENTER>Fecha de Revision</th>
        <th scope="col" ALIGN=CENTER>Invitados</th>
        <th scope="col" ALIGN=CENTER>Fecha de Creacion</th>
        
        <th scope="col" ALIGN=CENTER>Operaciones</th>

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
        <td>

        <a class="btn btn-outline-warning" href="{{ url('/hotel/'.$h->id.'/edit') }}">Editar</a>

            <form action="{{url('/hotel/'.$h->id) }}" method="POST">
                {{csrf_field() }}
				{{ method_field('DELETE') }}
                <button class="btn btn-outline-danger">Eliminar</button>
            </form>

        </td>
      </tr>
      @endforeach

      <div align="left"><a class="btn btn-outline-success" href="{{ url('hotel/create') }}">Agregar Hotel</a></div>
      <div align="left">
        <a href="{{ url('hoteles/pdf') }}" >
          <img src="https://img2.freepng.es/20180802/ezo/kisspng-pdf-computer-file-clip-art-file-format-document-international-conference-on-materials-energy-april-5b630034a89c51.9879975015332147726906.jpg"  width="75px" height="50px">
        </a>
      </div>
      <div align="left">
        <a href="{{ url('hoteles/excel') }}" >
          <img src="https://img2.freepng.es/20180418/jde/kisspng-microsoft-excel-training-computer-software-microso-excel-5ad7d9f121bed2.0123007315240954731382.jpg"  width="75px" height="50px">
        </a>
      </div>
    </tbody>
  </table>
  
  </div>
@stop