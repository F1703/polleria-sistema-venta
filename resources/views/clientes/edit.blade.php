@extends('layouts.app')
{{-- @section('css')
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/css/bootstrap-datepicker.css" rel="stylesheet">
@endsection --}}
@section('contentheader_title')
    {{-- <div class="page-header"> --}}
        <h3><i class="glyphicon glyphicon-edit"></i> Clientes / Edit #{{$cliente->id}}</h3>
    {{-- </div> --}}
@endsection

@section('main-content')
    @include('error')

    <div class="row">
        <div class="col-md-12">

            <form action="{{ route('clientes.update', $cliente->id) }}" method="POST">
                <input type="hidden" name="_method" value="PUT">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">


                <div class="well well-sm">
                    <button type="submit" class="btn btn-primary">Save</button>
                    <a class="btn btn-link pull-right" href="{{ route('clientes.index') }}"><i class="glyphicon glyphicon-backward"></i>  Back</a>
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
