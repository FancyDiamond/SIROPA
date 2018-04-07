@extends('layout.admin')

@section('content')

@include('alerts.request')
<br>
<div class="row">
  <div class="col-md-6">
    <div class="panel panel-default">
      <div class="panel-body">

        {!! Form::open(['route'=>'adquisicion.store', 'method'=>'POST']) !!}

        <legend>Crear Adquisición</legend>

        <div class="form-group">
          {!! Form::label('Nombre','Nombre de la Adquisición') !!}
          {!! Form::text('nombre_proyecto',null,['class'=>'form-control', 'placeholder'=>'Nombre de la Adquisición']) !!}
        </div>

        <div class="form-group">
          {!! Form::label('Numero','Número de la Adquisición') !!}
          {!! Form::text('numero_proyecto',null,['class'=>'form-control', 'placeholder'=>'Número de la Adquisición']) !!}
        </div>

        <div class="form-group">
          {!! Form::label('Region','Región') !!}
          {!! Form::number('region',null,['class'=>'form-control', 'placeholder'=>'Región']) !!}
        </div>

        <div class="form-group">
          {!! Form::label('Localidad','Área') !!}
          {!! Form::text('localidad',null,['class'=>'form-control', 'placeholder'=>'Área']) !!}
        </div>

        <div class="form-group">
          {!! Form::label('Nombre_Empresa','Nombre de la Empresa') !!}
          {!! Form::text('nombre_empresa',null,['class'=>'form-control', 'placeholder'=>'Nombre de la Empresa']) !!}
        </div>

        {!! Form::hidden('direccion','real_path',['class'=>'form-control']) !!}

        <div class="form-group">
          {!! Form::label('Municipio','Municipio') !!}
          {!! Form::select('municipio_id', $municipios) !!}
        </div>

        {!! Form::submit('Registrar',['class'=>'btn btn-success']) !!}

        {!! Form::close() !!}
      </div>
    </div>
  </div>
</div>

@endsection