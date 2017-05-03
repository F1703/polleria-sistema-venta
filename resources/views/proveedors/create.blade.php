@extends('layouts.app')
{{-- @section('css')
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/css/bootstrap-datepicker.css" rel="stylesheet">
@endsection --}}
@section('contentheader_title')
    {{-- <div class="page-header"> --}}
        <h3><i class="glyphicon glyphicon-plus"></i> Proveedors / Create </h3>
    {{-- </div> --}}
@endsection

@section('main-content')
    @include('error')

    <div class="row">
        <div class="col-md-12">

            <form action="{{ route('proveedors.store') }}" method="POST">
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
                  {{Form::label('cuit','Cuit')}}
                  {{Form::text('cuit',null,['class'=>'form-control','placeholder'=>'cuit','required'])}}
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
                  {{Form::label('idpais','Pais')}}
                  {{Form::select('idpais',$pais,null,['class'=>'form-control','placeholder'=>'Seleccione pais'])}}
                </div>

                <div class="form-group">
                  <label for="idprovincia">Provincia</label>
                  <select class="form-control" name="idprovincia" id="idprovincia">
                      <option selected="selected" value="">Seleccione provincia</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="idlocalidad">Localidad</label>
                  <select class="form-control" name="idlocalidad" id="idlocalidad">
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
                    <a class="btn btn-link pull-right" href="{{ route('proveedors.index') }}"><i class="glyphicon glyphicon-backward"></i> Back</a>
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
 $('#idpais').click(function(){
   pais = $('#idpais').val();
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
      $('#idprovincia').text('');
      $('#idlocalidad').text('');
     $.each(dato,function(index, el) {
       $('#idprovincia').append(
         '<option   value="'+el.id+'">'+el.provincia+'</option>',
       );
      //  console.log(el);
     });
   });
 });



 $('#idprovincia').click(function(){
   provincia = $('#idprovincia').val();
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
      $('#idlocalidad').text('');
     $.each(datos,function(index, el) {
       $('#idlocalidad').append(
         '<option   value="'+el.id+'">'+el.localidad+'</option>',
       );
      //  console.log(el);
     });
   });
 });



</script>
@endsection
