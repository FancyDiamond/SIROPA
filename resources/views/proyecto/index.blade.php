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
            <legend>Lista de Proyectos</legend>
            <table class="table table-hover">
              <thead>
                <tr>
                  <th>Proyecto</th>
                  <th>Número</th>
                  <th>Región</th>
                  <th>Localidad</th>
                  <th>Constructora</th>
                  <th>Acción</th>
                  <th class="col-md-3">Fases del Proyecto</th>
                </tr>
              </thead>
              @foreach($proyectos as $proyecto)
              <tbody>
                <td>{{$proyecto->nombre_proyecto}}</td>
                <td>{{$proyecto->numero_proyecto}}</td>
                <td>{{$proyecto->region}}</td>
                <td>{{$proyecto->localidad}}</td>
                <td>{{$proyecto->nombre_constructora}}</td>
                <td>
                  {!!link_to_route('proyecto.edit', $title='Editar', $parameters = $proyecto -> id, $attributes=['class'=>'btn btn-primary'])!!}
                </td>
                <td class="col-md-3">
                  {!!link_to_route('proyecto.edit', $title='Fase 1', $parameters = $proyecto -> id, $attributes=['class'=>'btn btn-success'])!!}
                  
                  {!!link_to_route('proyecto.edit', $title='Fase 2', $parameters = $proyecto -> id, $attributes=['class'=>'btn btn-success'])!!}

                  {!!link_to_route('proyecto.edit', $title='Fase 3', $parameters = $proyecto -> id, $attributes=['class'=>'btn btn-success'])!!}
                </td>
              </tbody>
              @endforeach
            </table>
            {!! $proyectos -> render() !!}
          </form>
          <!--form end-->
        </div>
      </div>
    </div>
  </div>
</div>
</div>

@endsection