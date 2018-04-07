@extends('layout.admin')

@if(Session::has('message'))
<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
  {{Session::get('message')}}
</div>
@endif

@section('content')
<br>
<div class="container-fluid">
  <div class="row">
    <div class="col-md-4 col-sm-4 col-lg-12" ></div>
    <div class="col-md-4 col-sm-4 col-lg-12">
      <div class="panel panel-default">
        <div class="panel-body">
          <!--form start-->
          <form class="form-container">
            <!--<h1>Registro de Usuarios</h1>-->
            <legend>Lista de Adqusiciones</legend>
            <table class="table table-hover">
              <thead>
                <tr>
                  <th>Adquisición</th>
                  <th>Número</th>
                  <th>Región</th>
                  <th>Área</th>
                  <th>Razon Social</th>
                  <th>Acción</th>
                  <th class="col-md-3">Fases de Adquisición</th>
                </tr>
              </thead>
              @foreach($adquisiciones as $adquisicion)
              <tbody>
                <td>{{$adquisicion->nombre_proyecto}}</td>
                <td>{{$adquisicion->numero_proyecto}}</td>
                <td>{{$adquisicion->region}}</td>
                <td>{{$adquisicion->localidad}}</td>
                <td>{{$adquisicion->nombre_empresa}}</td>
                <td>
                  {!!link_to_route('adquisicion.edit', $title='Editar', $parameters = $adquisicion -> id, $attributes=['class'=>'btn btn-primary'])!!}
                </td>
                <td class="col-md-3">
                  {!!link_to_route('adquisicion.edit', $title='Fase 1', $parameters = $adquisicion -> id, $attributes=['class'=>'btn btn-success'])!!}
                  
                  {!!link_to_route('adquisicion.edit', $title='Fase 2', $parameters = $adquisicion -> id, $attributes=['class'=>'btn btn-success'])!!}
                  
                  {!!link_to_route('adquisicion.edit', $title='Fase 3', $parameters = $adquisicion -> id, $attributes=['class'=>'btn btn-success'])!!}
                </td>
              </tbody>
              @endforeach
            </table>
            {!! $adquisiciones -> render() !!}
          </form>
          <!--form end-->
        </div>
      </div>
    </div>
  </div>

  @endsection