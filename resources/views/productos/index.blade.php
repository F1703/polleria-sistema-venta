@extends('layouts.app')

@section('contentheader_title')
    {{-- <div class="page-header clearfix">
        <h1>
<<<<<<< HEAD
             <i class="glyphicon glyphicon-align-justify"></i> Productos
            <a class="btn btn-success pull-right" href="{{ route('productos.create') }}"><i class="glyphicon glyphicon-plus"></i> Create</a>
        </h1>
=======
            <i class="glyphicon glyphicon-align-justify"></i> Productos --}}
            <a class="btn btn-success pull-left" href="{{ route('productos.create') }}"><i class="glyphicon glyphicon-plus"></i> Create</a>
        {{-- </h1>
>>>>>>> 7ce17b564de3c527725e0ee66c8c18c117cd7568

    </div> --}}
@endsection

@section('main-content')
    <div class="row">
        <div class="col-md-12">
            @if($productos->count())
                <table class="table table-condensed table-striped">
                    <thead>
                        <tr>
<<<<<<< HEAD
=======
                            <th>ID</th>
>>>>>>> 7ce17b564de3c527725e0ee66c8c18c117cd7568

                            <th class="text-right">OPTIONS</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($productos as $producto)
                            <tr>
<<<<<<< HEAD
=======
                                <td>{{$producto->id}}</td>
                                <td>{{$producto->descripcion}}</td>
                                <td>{{$producto->codigo}}</td>
                                <td>{{$producto->stock}}</td>
                                <td>{{$producto->stockminimo}}</td>
                                <td>{{$producto->tipo}}</td>
                                <td>{{$producto->categoria}}</td>
>>>>>>> 7ce17b564de3c527725e0ee66c8c18c117cd7568

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
