@extends('layouts.app')
{{-- @section('css')
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/css/bootstrap-datepicker.css" rel="stylesheet">
@endsection --}}
@section('contentheader_title')
    {{-- <div class="page-header"> --}}
        <h3><i class="glyphicon glyphicon-plus"></i> Empleados / Create </h3>
    {{-- </div> --}}
@endsection

@section('main-content')
    @include('error')

    <form action="{{ route('empleados.store') }}" method="POST">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

    <div class="row">

        <div class="col-md-12">


                <div class="form-group">
                  {{Form::label('nombre','Nombre')}}
                  {{Form::text('nombre',null,['class'=>'form-control','placeholder'=>'nombre','required'])}}
                </div>

                <div class="form-group">
                  {{Form::label('apellido','Apellido')}}
                  {{Form::text('apellido',null,['class'=>'form-control','placeholder'=>'apellido','required'])}}
                </div>

                <div class="form-group">
                  {{Form::label('dni','Dni')}}
                  {{Form::text('dni',null,['class'=>'form-control','placeholder'=>'dni','required'])}}
                </div>

                <div class="form-group">
                  {{Form::label('cuil','Cuil')}}
                  {{Form::text('cuil',null,['class'=>'form-control','placeholder'=>'cuil','required'])}}
                </div>

                <div class="form-group">
                  {{Form::label('sexo','Sexo')}}<br>
                  {{ Form::radio('sexo', 'masculino') }} Masculino<br>
                  {{ Form::radio('sexo', 'femenino') }} Femenino
                </div>

                <div class="form-group">
                  {{Form::label('cargo','Cargo')}}
                  {{Form::text('cargo',null,['class'=>'form-control','placeholder'=>'cargo','required'])}}
                </div>

                <div class="form-group">
                  {{Form::label('turno','Turno')}}
                  {{Form::text('turno',null,['class'=>'form-control','placeholder'=>'turno','required'])}}
                </div>

                <div class="form-group">
                  {{Form::label('email','Email')}}
                  {{Form::text('email',null,['class'=>'form-control','placeholder'=>'email','required'])}}
                </div>

                <div class="form-group">
                  {{Form::label('telefono','Telefono')}}
                  {{Form::text('telefono',null,['class'=>'form-control','placeholder'=>'telefono','required'])}}
                </div>

                <div class="form-group">
                  {{Form::label('fechanacimiento','Fecha de Nacimiento')}}
                  {{Form::text('fechanacimiento',null,['class'=>'form-control','placeholder'=>'fecha de nacimiento','required'])}}
                </div>



                <div class="form-group">
                  {{Form::label('direccion','Direccion')}}
                  {{Form::text('direccion',null,['class'=>'form-control','placeholder'=>'direccion','required'])}}
                </div>

                <div class="form-group">
                  {{Form::label('numero','Numero')}}
                  {{Form::text('numero',null,['class'=>'form-control','placeholder'=>'numero','required'])}}
                </div>

                <div class="form-group">
                  {{Form::label('barrio','Barrio')}}
                  {{Form::text('barrio',null,['class'=>'form-control','placeholder'=>'barrio','required'])}}
                </div>

                <div class="form-group">
                  {{Form::label('localidad','Localidad')}}
                  {{Form::text('localidad',null,['class'=>'form-control','placeholder'=>'localidad','required'])}}
                </div>

                <div class="form-group">
                  {{Form::label('provincia','Provincia')}}
                  {{Form::text('provincia',null,['class'=>'form-control','placeholder'=>'provincia','required'])}}
                </div>


                <div class="form-group">
                  {{Form::label('codigopostal','Codigopostal')}}
                  {{Form::text('codigopostal',null,['class'=>'form-control','placeholder'=>'codigopostal','required'])}}
                </div>

                <div class="form-group">
                  {{Form::label('pais','Pais')}}
                  {{Form::text('pais',null,['class'=>'form-control','placeholder'=>'pais','required'])}}
                </div>

        </div>

        <div class="well well-sm">
            <button type="submit" class="btn btn-primary">Create</button>
            <a class="btn btn-link pull-right" href="{{ route('empleados.index') }}"><i class="glyphicon glyphicon-backward"></i> Back</a>
        </div>
      </div>
        </form>


@endsection
@section('scripts')
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/js/bootstrap-datepicker.min.js"></script>
  <script>
    $('.date-picker').datepicker({
    });
  </script>
@endsection
