@extends('layouts.app')

@section('contentheader_title')
    {{-- <div class="page-header clearfix">
        <h1>
            <i class="glyphicon glyphicon-align-justify"></i> Domicilios --}}
            <h3>Domicilio</h3>
            <a class="btn btn-success pull-left" href="{{ route('domicilios.create') }}"><i class="glyphicon glyphicon-plus"></i> Create</a>
        {{-- </h1>

    </div> --}}
@endsection

@section('main-content')
    <div class="row">
        <div class="col-md-12">
            @if($domicilios->count())
                <table class="table table-condensed table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>

                            <th class="text-right">OPTIONS</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($domicilios as $domicilio)
                            <tr>
                                <td>{{$domicilio->id}}</td>

                                <td class="text-right">
                                    <a class="btn btn-xs btn-primary" href="{{ route('domicilios.show', $domicilio->id) }}"><i class="glyphicon glyphicon-eye-open"></i> View</a>
                                    <a class="btn btn-xs btn-warning" href="{{ route('domicilios.edit', $domicilio->id) }}"><i class="glyphicon glyphicon-edit"></i> Edit</a>
                                    <form action="{{ route('domicilios.destroy', $domicilio->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <button type="submit" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i> Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {!! $domicilios->render() !!}
            @else
                <h3 class="text-center alert alert-info">Empty!</h3>
            @endif

        </div>
    </div>

@endsection
