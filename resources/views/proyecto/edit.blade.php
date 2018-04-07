@extends('layout.admin')

@section('content')

@include('alerts.request')

<br>
<div class="row">
  <div class="col-md-6">
    <div class="panel panel-default">
      <div class="panel-body">

        {!! Form::model($proyecto,['route'=>['proyecto.update', $proyecto->id], 'method'=>'PUT']) !!}

        <legend>Editar Proyecto</legend>

        <div class="form-group">
          {!! Form::label('Nombre','Nombre del Proyecto') !!}
          {!! Form::text('nombre_proyecto',null,['class'=>'form-control', 'placeholder'=>'Nombre del Proyecto']) !!}
        </div>

        <div class="form-group">
          {!! Form::label('Numero','Número del Proyecto') !!}
          {!! Form::text('numero_proyecto',null,['class'=>'form-control', 'placeholder'=>'Número del Proyecto']) !!}
        </div>

        <div class="form-group">
          {!! Form::label('Region','Región') !!}
          {!! Form::number('region',null,['class'=>'form-control', 'placeholder'=>'Región']) !!}
        </div>

        <div class="form-group">
          {!! Form::label('Localidad','Localidad') !!}
          {!! Form::text('localidad',null,['class'=>'form-control', 'placeholder'=>'Localidad']) !!}
        </div>

        <div class="form-group">
          {!! Form::label('Nombre_Constructora','Nombre de la Constructora') !!}
          {!! Form::text('nombre_constructora',null,['class'=>'form-control', 'placeholder'=>'Nombre de la Constructora']) !!}
        </div>

        {!! Form::hidden('direccion','real_path',['class'=>'form-control']) !!}

        <div class="form-group">
          {!! Form::label('Municipio','Municipio') !!}
          {!! Form::select('municipio_id', $municipios) !!}
        </div>

        {!! Form::submit('Actualizar',['class'=>'btn btn-success']) !!}

        {!! Form::close() !!}


        {!! Form::open(['route'=> ['proyecto.destroy', $proyecto->id], 'method'=>'DELETE']) !!}
        <br>
        {!! Form::submit('Eliminar',['class'=>'btn btn-danger']) !!}

        {!! Form::close() !!}
      </div>
    </div>
  </div>
</div>

@endsection