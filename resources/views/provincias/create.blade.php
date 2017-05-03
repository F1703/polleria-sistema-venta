@extends('layouts.app')
{{-- @section('css')
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/css/bootstrap-datepicker.css" rel="stylesheet">
@endsection --}}
@section('contentheader_title')
    {{-- <div class="page-header"> --}}
        <h3><i class="glyphicon glyphicon-plus"></i> Provincias / Create </h3>
    {{-- </div> --}}
@endsection

@section('main-content')
    @include('error')

    <div class="row">
        <div class="col-md-12">

            <form action="{{ route('provincias.store') }}" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                <label for="idpais">Seleccione pais:</label>
                  <select class="form-control" id="pais" name="idpais">
                    @foreach ($pais as $pai)
                      <option value="{{$pai->id}}">{{$pai->nombre}}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label for="descripcion">Descripcion</label>
                  <input type="text" name="descripcion" class="form-control" >
                </div>


                <div class="well well-sm">
                    <button type="submit" class="btn btn-primary">Create</button>
                    <a class="btn btn-link pull-right" href="{{ route('provincias.index') }}"><i class="glyphicon glyphicon-backward"></i> Back</a>
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
