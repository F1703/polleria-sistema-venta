@extends('layouts.app')

@section('contentheader_title')
    {{-- <div class="page-header clearfix">
        <h1>
            <i class="glyphicon glyphicon-align-justify"></i> Clientes --}}
            <a class="btn btn-success pull-left" href="{{ route('clientes.create') }}"><i class="glyphicon glyphicon-plus"></i> Create</a>
        {{-- </h1>

    </div> --}}
@endsection

@section('main-content')
    <div class="row">
        <div class="col-md-12">
            @if($clientes->count())
                <table class="table table-condensed table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Dni</th>
                            <th>Email</th>
                            <th>Telefono</th>
                            <th>Direccion</th>
                            <th>Numero</th>
                            <th>Barrio</th>
                            <th>Localidad</th>
                            <th>Provincia</th>
                            <th>Pais</th>

                            <th class="text-right">OPTIONS</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($clientes as $cliente)
                            <tr>
                                <td>{{$cliente->id}}</td>
                                <td>{{$cliente->nombre}}</td>
                                <td>{{$cliente->apellido}}</td>
                                <td>{{$cliente->dni}}</td>
                                <td>{{$cliente->email}}</td>
                                <td>{{$cliente->telefono}}</td>
                                <td>{{$cliente->domicilio->direccion}}</td>
                                <td>{{$cliente->domicilio->numero}}</td>
                                <td>{{$cliente->domicilio->barrio}}</td>
                                <td>{{$cliente->domicilio->localidad->localidad}}</td>
                                <td>{{$cliente->domicilio->localidad->provincia->provincia}}</td>
                                <td>{{$cliente->domicilio->localidad->provincia->pais->pais}}</td>

                                <td class="text-right">
                                    <a class="btn btn-xs btn-primary" href="{{ route('clientes.show', $cliente->id) }}"><i class="glyphicon glyphicon-eye-open"></i> View</a>
                                    <a class="btn btn-xs btn-warning" href="{{ route('clientes.edit', $cliente->id) }}"><i class="glyphicon glyphicon-edit"></i> Edit</a>
                                    <form action="{{ route('clientes.destroy', $cliente->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <button type="submit" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i> Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {!! $clientes->render() !!}
            @else
                <h3 class="text-center alert alert-info">Empty!</h3>
            @endif

        </div>
    </div>

@endsection
