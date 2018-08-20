@extends('layouts.principal')
@if(Session::has('message'))
<div class="alert alert-info alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  {{Session::get('message')}}
</div>
@endif
@section('content')

<div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Digitalizacion</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>

    <!-- FORMULARIO -->
    <div class="panel panel-default">
        <div class="panel-body">
            <div class="row">
                 {{-- {!!Form::open(['route'=>'#','id'=>'contact', 'method'=>'GET'])!!}  --}}

                    

                    {!!Form::label('Id Expediente')!!}
                    {!!Form::select('id_expediente_requisito', ['01'=>'Expediente1','02'=>'Expediente2','03'=>'Expediente3'], null, ['class' => 'form-control']) !!}


                    {!!Form::label('Id usuario')!!}
                    {!!Form::select('id_usuario', ['01'=>'Usuario1','02'=>'Usuario2','03'=>'Usuario3'], null, ['class' => 'form-control']) !!}


                    {!!Form::label('Expediente Requisito')!!}
                    {!!Form::select('id_expediente_requisito', ['01'=>'Id1','02'=>'Id2','03'=>'Id3'], null, ['class' => 'form-control']) !!}

                    {!!Form::label('Nombre Archivo')!!}
                    {!!Form::file('nombre_archivo', null, ['class' => 'form-control']) !!}
                    
                    {!!Form::label('Fecha Escaneo')!!}
                    {!!Form::date('fecha_escaneo', \Carbon\Carbon::now(),['class'=>'form-control'])!!}
                    {!! $errors->first('fecha_escaneo','<span class="help-block">:message</span>') !!}

                    <br>
                    {!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!} 
                {{-- {!!Form::close()!!}  --}}
            </div>
        </div>
    </div>


@stop
