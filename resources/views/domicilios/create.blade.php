@extends('layouts.app')
{{-- @section('css')
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/css/bootstrap-datepicker.css" rel="stylesheet">
@endsection --}}
@section('contentheader_title')
    {{-- <div class="page-header"> --}}
        <h3><i class="glyphicon glyphicon-plus"></i> Domicilios / Create </h3>
    {{-- </div> --}}
@endsection

@section('main-content')
    @include('error')

    <div class="row">
        <div class="col-md-12">

            <form action="{{ route('domicilios.store') }}" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group">
                  {{ Form::label('calle','Calle')}}
                  {{ Form::text('calle',null,['class'=>'form-control','placeholder'=>'nombre de la calle','required'])}}
                </div>
                <div class="form-group">
                  {{ Form::label('numero','Numero')}}
                  {{ Form::text('numero',null,['class'=>'form-control','placeholder'=>'numero de calle','required'])}}
                </div>
                <div class="form-group">
                  {{ Form::label('barrio','Barrio')}}
                  {{ Form::text('barrio',null,['class'=>'form-control','placeholder'=>'nombre del barrio','required'])}}
                </div>
                {{-- <div class="form-group">
                  {{ Form::label('localidad','Localidad')}}
                  {{ Form::select('localidad[]',null,['class'=>'form-control','placeholder'=>'nombre de la calle','required'])}}
                </div> --}}
                <div class="form-group">
                  {{ Form::hidden('idlocalidad','')}}
                  {{-- {{ Form::text('calle',null,['class'=>'form-control','placeholder'=>'nombre de la calle','required'])}} --}}
                </div>
                <div class="well well-sm">
                    <button type="submit" class="btn btn-primary">Create</button>
                    <a class="btn btn-link pull-right" href="{{ route('domicilios.index') }}"><i class="glyphicon glyphicon-backward"></i> Back</a>
                </div>
            </form>

        </div>
    </div>
@endsection
{{-- @section('scripts')
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/js/bootstrap-datepicker.min.js"></script>
  <script>
    $('.date-picker').datepicker({
    });
  </script>
@endsection --}}
