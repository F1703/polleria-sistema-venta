@extends('layouts.app')

@section('contentheader_title')
            <a class="btn btn-success pull-left" href="{{ route('productos.create') }}"><i class="glyphicon glyphicon-plus"></i> Create</a>

@endsection

@section('main-content')
    <div class="row">
        <div class="col-md-12">
            @if($productos->count())
                <table class="table table-condensed table-striped">
                    <thead>
                        <tr>

                            <th>ID</th>
                            <th>Codigo</th>
                            <th>Descripcion</th>
                            <th>Stock</th>
                            <th>Stockminimo</th>
                            <th>Stocktipo</th>
                            <th>Categoria</th>
                            <th>PrecioV</th>
                            <th>PrecioC</th>
                            <th>Vencimiento</th>

                            <th class="text-right">OPTIONS</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($productos as $producto)
                            <tr>
                                <td>{{$producto->id}}</td>
                                <td>{{$producto->codigo}}</td>
                                <td>{{$producto->descripcion}}</td>
                                <td>{{$producto->stock}}</td>
                                <td>{{$producto->stockminimo}}</td>
                                <td>{{$producto->tipo}}</td>
                                <td>{{$producto->categoria->categoria}}</td>
                                <td>{{$producto->descripcionproducto->preciocompra}}</td>
                                <td>{{$producto->descripcionproducto->precioventa}}</td>
                                <td>{{$producto->descripcionproducto->vencimiento}}</td>

                                <td class="text-right">
                                    <a class="btn btn-xs btn-primary" href="{{ route('productos.show', $producto->id) }}"><i class="glyphicon glyphicon-eye-open"></i> View</a>
                                    <a class="btn btn-xs btn-warning" href="{{ route('productos.edit', $producto->id) }}"><i class="glyphicon glyphicon-edit"></i> Edit</a>
                                    <form action="{{ route('productos.destroy', $producto->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <button type="submit" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i> Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {!! $productos->render() !!}
            @else
                <h3 class="text-center alert alert-info">Empty!</h3>
            @endif

        </div>
    </div>

@endsection
