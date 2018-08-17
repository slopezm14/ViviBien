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
            <h1 class="page-header">Requisitos de Expedientes</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>

    <!-- FORMULARIO -->
    <div class="panel panel-default">
        <div class="panel-body">
            <div class="row">
                 {{-- {!!Form::open(['route'=>'#','id'=>'contact', 'method'=>'GET'])!!}  --}}

                    

                    {!!Form::label('Id. Requisito')!!}
                    {!!Form::select('id_requisito', ['01'=>'Reguisito1','02'=>'Requisito2','03'=>'Requisito3'], null, ['class' => 'form-control']) !!}

                   
                    {!!Form::label('Expediente')!!}
                    {!!Form::select('id_tipo_solicitud_subsidio', ['01'=>'Expediente1','02'=>'Expediente2','03'=>'Expediente3'], null, ['class' => 'form-control']) !!}

                    {!!Form::label('Fecha de Presentacion')!!}
                    {!!Form::date('fecha_presentacion', \Carbon\Carbon::now(),['class'=>'form-control'])!!}
                    {!! $errors->first('fecha_presentacion','<span class="help-block">:message</span>') !!}

                     {!!Form::label('Id. Usuario')!!}
                    {!!Form::select('id_ususario', ['01'=>'User1','02'=>'User2','03'=>'User3'], null, ['class' => 'form-control']) !!}



                    {!!Form::label('Aceptado o Rechazado')!!}
                    <br>
                    {!!Form::label('Aceptado')!!}
                    {!!Form::checkbox('aceptado', '1', false);!!}
                    <br>
                    {!!Form::label('Rechazado')!!}
                    {!!Form::checkbox('aceptado', '0', false);!!}

                    <br>
                    {!!Form::label('Comentario')!!}
                    {!!Form::textarea('motivo_rechazo', null,['class'=>'form-control', 'placeholder'=>'Observaciones'])!!}
                    {!! $errors->first('motivo_rechazo','<span class="help-block">:message</span>') !!}

                    <br>
                    {!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!} 
                {{-- {!!Form::close()!!}  --}}
            </div>
        </div>
    </div>


@stop
