@extends('layouts.app')

@section('contentheader_title')
    {{-- <div class="page-header clearfix">
        <h1>
            <i class="glyphicon glyphicon-align-justify"></i> Localidads --}}
            <h3> Localidad</h3>
              <a class="btn btn-success pull-left" href="{{ route('localidads.create') }}"><i class="glyphicon glyphicon-plus"></i> Create </a>

        {{-- </h1>

    </div> --}}
@endsection

@section('main-content')
    <div class="row">
        <div class="col-md-12">
            @if($localidads->count())
                <table class="table table-condensed table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Localidad</th>
                            <th>IDProvincia</th>

                            <th class="text-right">OPTIONS</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($localidads as $localidad)
                            <tr>
                                <td>{{$localidad->id}}</td>
                                <td>{{$localidad->localidad}}</td>
                                <td>{{$localidad->idprovincia}}</td>

                                <td class="text-right">
                                    <a class="btn btn-xs btn-primary" href="{{ route('localidads.show', $localidad->id) }}"><i class="glyphicon glyphicon-eye-open"></i> View</a>
                                    <a class="btn btn-xs btn-warning" href="{{ route('localidads.edit', $localidad->id) }}"><i class="glyphicon glyphicon-edit"></i> Edit</a>
                                    <form action="{{ route('localidads.destroy', $localidad->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <button type="submit" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i> Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {!! $localidads->render() !!}
            @else
                <h3 class="text-center alert alert-info">Empty!</h3>
            @endif

        </div>
    </div>

@endsection
