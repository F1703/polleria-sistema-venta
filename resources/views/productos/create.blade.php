@extends('layouts.app')
{{-- @section('css')
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/css/bootstrap-datepicker.css" rel="stylesheet">
@endsection --}}
@section('contentheader_title')
    {{-- <div class="page-header"> --}}
        <h3><i class="glyphicon glyphicon-plus"></i> Productos / Create </h3>
    {{-- </div> --}}
@endsection

@section('main-content')
    @include('error')

    <div class="row">
        <div class="col-md-12">

            <form action="{{ route('productos.store') }}" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group">
                  {{Form::label('descripcion','Descripcion')}}
                  {{Form::text('descripcion',null,['class'=>'form-control','placeholder'=>'descripcion','required'])}}
                </div>

                <div class="form-group">
                  {{Form::label('codigo','Codigo')}}
                  {{Form::text('codigo',null,['class'=>'form-control','placeholder'=>'Codigo','required'])}}
                </div>

                <div class="form-group">
                  {{Form::label('stock','Stock')}}
                  {{Form::text('stock',null,['class'=>'form-control','placeholder'=>'stock','required'])}}
                </div>

                <div class="form-group">
                  {{Form::label('stockminimo','Stock minimo')}}
                  {{Form::text('stockminimo',null,['class'=>'form-control','placeholder'=>'stockminimo','required'])}}
                </div>

                <div class="form-group">
                  {{Form::label('tipo','Tipo')}}<br>
                  {{ Form::radio('tipo', 'unidad') }} Unidad<br>
                  {{ Form::radio('tipo', 'kilo') }} Kilo
                </div>

                <div class="form-group">
                  {{Form::label('categoria','Categoria')}}
                  {{Form::text('categoria',null,['class'=>'form-control','placeholder'=>'categoria','required'])}}
                </div>

                <div class="form-group">
                  {{Form::label('preciocompra','Precio de compra')}}
                  {{Form::text('preciocompra',null,['class'=>'form-control','placeholder'=>'preciocompra','required'])}}
                </div>

                <div class="form-group">
                  {{Form::label('precioventa','Precio de venta')}}
                  {{Form::text('precioventa',null,['class'=>'form-control','placeholder'=>'precioventa','required'])}}
                </div>
                <div class="form-group">
                  {{Form::label('fechavencimiento','Fecha de vencimiento')}}
                  {{Form::text('fechavencimiento',null,['class'=>'form-control','placeholder'=>'fechavencimiento','required'])}}
                </div>


                <div class="well well-sm">
                    <button type="submit" class="btn btn-primary">Create</button>
                    <a class="btn btn-link pull-right" href="{{ route('productos.index') }}"><i class="glyphicon glyphicon-backward"></i> Back</a>
                </div>
            </form>

        </div>
    </div>
@endsection
@section('scripts')
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/js/bootstrap-datepicker.min.js"></script>
  <script>
    $('.date-picker').datepicker({
    });
  </script>
@endsection
