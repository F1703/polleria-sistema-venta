@extends('layouts.app')
{{-- @section('css')
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/css/bootstrap-datepicker.css" rel="stylesheet">
@endsection --}}
@section('contentheader_title')
    {{-- <div class="page-header"> --}}
        <h3><i class="glyphicon glyphicon-plus"></i> Clientes / Create </h3>
    {{-- </div> --}}
@endsection

@section('main-content')
    @include('error')

    <div class="row">
        <div class="col-md-12">

            <form action="{{ route('clientes.store') }}" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                  {{Form::label('nombre','Nombre')}}
                  {{Form::text('nombre',null,['class'=>'form-control','placeholder'=>'nombre','required'])}}
                </div>
                <div class="form-group">
                  {{Form::label('apellido','Apelllido')}}
                  {{Form::text('apellido',null,['class'=>'form-control','placeholder'=>'apellido','required'])}}
                </div>
                <div class="form-group">
                  {{Form::label('dni','Dni')}}
                  {{Form::text('dni',null,['class'=>'form-control','placeholder'=>'3299881822','required'])}}
                </div>

                <div class="form-group">
                  {{Form::label('email','Email')}}
                  {{Form::text('email',null,['class'=>'form-control','placeholder'=>'nombre@nombre.com','required'])}}
                </div>
                <div class="form-group">
                  {{Form::label('telefono','Telefono')}}
                  {{Form::text('telefono',null,['class'=>'form-control','placeholder'=>'0433234433','required'])}}
                </div>


                <div class="form-group">
                  {{Form::label('pais_id','Pais')}}
                  {{Form::select('pais_id',$pais,null,['class'=>'form-control','placeholder'=>'Seleccione pais'])}}
                </div>
                <div class="form-group">
                  <label for="provincia_id">Provincia</label>
                  <select class="form-control" name="provincia_id" id="provincia_id">
                      <option selected="selected" value="">Seleccione provincia</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="localidad_id">Localidad</label>
                  <select class="form-control" name="localidad_id" id="localidad_id">
                      <option selected="selected" value="">Seleccione localidad</option>
                  </select>
                </div>
                <div class="form-group">
                  {{Form::label('direccion','Direccion')}}
                  {{Form::text('direccion',null,['class'=>'form-control','placeholder'=>'San Juan'])}}
                </div>
                <div class="form-group">
                  {{Form::label('numero','Numero')}}
                  {{Form::text('numero',null,['class'=>'form-control','placeholder'=>'410'])}}
                </div>
                <div class="form-group">
                  {{Form::label('barrio','Barrio')}}
                  {{Form::text('barrio',null,['class'=>'form-control','placeholder'=>'barrio norte'])}}
                </div>






                <div class="well well-sm">
                    <button type="submit" class="btn btn-primary">Create</button>
                    <a class="btn btn-link pull-right" href="{{ route('clientes.index') }}"><i class="glyphicon glyphicon-backward"></i> Back</a>
                </div>
            </form>

        </div>
    </div>

    {{Form::open(['route'=>['provincias.consulta',':IDPAIS'],'method'=>'get','id'=>'form1'])}}
    {{Form::close()}}
    {{Form::open(['route'=>['localidads.consulta',':IDPROVINCIA'],'method'=>'get','id'=>'form2'])}}
    {{Form::close()}}
@endsection
{{-- @section('scripts')
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/js/bootstrap-datepicker.min.js"></script>
  <script>
    $('.date-picker').datepicker({
    });
  </script>
@endsection --}}



@section('scripts')
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script >
 $('#pais_id').click(function(){
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



 $('#provincia_id').click(function(){
   provincia = $('#provincia_id').val();
  //  console.log(pais);
   var form = $('#form2');
   var url = form.attr('action').replace(':IDPROVINCIA',provincia);
  //  console.log(url);
   $.ajax({
     url      : url,
     method   : 'GET',
     datatype : "json"
   }).done(function(datos){
    //  console.log(dato);
      $('#localidad_id').text('');
     $.each(datos,function(index, el) {
       $('#localidad_id').append(
         '<option   value="'+el.id+'">'+el.localidad+'</option>',
       );
      //  console.log(el);
     });
   });
 });



</script>
@endsection
