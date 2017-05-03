@extends('layouts.app')

@section('contentheader_title')
    {{-- <div class="page-header clearfix">
        <h1>
            <i class="glyphicon glyphicon-align-justify"></i> Proveedors --}}
            <a class="btn btn-success pull-left" href="{{ route('proveedors.create') }}"><i class="glyphicon glyphicon-plus"></i> Create</a>
{{--
          </h1>
    </div> --}}
@endsection

@section('main-content')
    <div class="row">
        <div class="col-md-12">
            @if($proveedors->count())
                <table class="table table-condensed table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>

                            <th class="text-right">OPTIONS</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($proveedors as $proveedor)
                            <tr>
                                <td>{{$proveedor->id}}</td>

                                <td class="text-right">
                                    <a class="btn btn-xs btn-primary" href="{{ route('proveedors.show', $proveedor->id) }}"><i class="glyphicon glyphicon-eye-open"></i> View</a>
                                    <a class="btn btn-xs btn-warning" href="{{ route('proveedors.edit', $proveedor->id) }}"><i class="glyphicon glyphicon-edit"></i> Edit</a>
                                    <form action="{{ route('proveedors.destroy', $proveedor->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <button type="submit" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i> Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {!! $proveedors->render() !!}
            @else
                <h3 class="text-center alert alert-info">Empty!</h3>
            @endif

        </div>
    </div>

@endsection
