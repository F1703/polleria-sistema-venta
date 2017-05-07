@extends('layouts.app')
{{-- @section('css')
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/css/bootstrap-datepicker.css" rel="stylesheet">
@endsection --}}
@section('contentheader_title')
    <div class="page-header">
        <h1><i class="glyphicon glyphicon-plus"></i> Ventas / Create </h1>
    </div>
@endsection

@section('main-content')
    @include('error')

    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('ventas.store') }}" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="row">

                  <div class="col-lg-6">

                    <label for="descripcion">Buscar producto</label>
                    <div class="input-group">
                        <input id="descripcion" onkeypress="buscar(event)" type="text" class="form-control" placeholder="buscar producto">
                        <p id="dato"></p>
                        <span class="input-group-btn">
                          <button id="button1" class="btn btn-default" type="button">Agregar </button>
                        </span>
                    </div><!-- /input-group -->
                  </div><!-- /.col-lg-6 -->

                  <div class="col-lg-6">
                    <label for="cantidad">Cantidad producto</label>
                    <div class="input-group">
                        <input id="cantidad" type="text" class="form-control" placeholder="cantidad producto">
                        <span class="input-group-btn">
                          <button class="btn btn-default" type="button">Agregar</button>
                        </span>
                    </div><!-- /input-group -->
                  </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->



                <div class="panel panel-default">
                  {{-- <div class="panel-heading">Lista de productos</div> --}}
                  <div class="table  ">
                    <table class="table table-bordered table-condensed table-hover table-responsive">
                      <thead>
                        <tr>
                          <th>Codigo</th>
                          <th>Descripcion</th>
                          <th>Tipo</th>
                          <th>Categoria</th>
                          <th>Precio</th>
                          <th>Subtotal</th>
                        </tr>
                      </thead>
                      <tbody>
                        <td>111</td>
                        <td>aceite</td>
                        <td>unidad</td>
                        <td>lacteos</td>
                        <td>33</td>
                        <td>50</td>
                      </tbody>
                    </table>

                  </div>
                </div>



                <div class="well well-sm">
                    <button type="submit" class="btn btn-primary">Create</button>
                    <a class="btn btn-link pull-right" href="{{ route('ventas.index') }}"><i class="glyphicon glyphicon-backward"></i> Back</a>
                </div>
            </form>

        </div>
    </div>


    {{Form::open(['route'=>['productos.consulta',':ID'],'method'=>'get','id'=>'form1'])}}
    {{Form::close()}}
    {{Form::open(['route'=>['localidads.consulta',':IDPROVINCIA'],'method'=>'get','id'=>'form2'])}}
    {{Form::close()}}
@endsection


@section('scripts')
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <script >


  $('#descripcion').click(function(){
   pais = $('#pais_id').val();
  //  console.log(pais);
   var form = $('#form1');
   var url = form.attr('action').replace(':IDPAIS',pais);
  //  console.log(url);
   $.ajax({
     url      : url,
     method   : 'GET',
     datatype : "json"
   }).done(function(dato){
    //  console.log(dato);
      $('#provincia_id').text('');
      $('#localidad_id').text('');
     $.each(dato,function(index, el) {
       $('#provincia_id').append(
         '<option   value="'+el.id+'">'+el.provincia+'</option>',
       );
      //  console.log(el);
     });
   });
  });


</script>

@endsection
