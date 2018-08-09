@extends('layouts.principal')

@section('content')

<div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Tipo de Ingreso</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>

    <!-- FORMULARIO -->
    <div class="panel panel-default">
        <div class="panel-body">
            <div class="row">
                 {!!Form::open(['route'=>'tipoingreso.store','id'=>'contact', 'method'=>'POST'])!!} 
                    {!!Form::label('Descripción del Ingreso')!!}
                    {!!Form::text('descripcion_ingreso', null,['class'=>'form-control', 'placeholder'=>'Descripción del Ingreso'])!!}
                    {!! $errors->first('descripcion_ingreso','<span class="help-block">:message</span>') !!}
                    
                    <br>
                    {!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!} 
                {!!Form::close()!!} 
            </div>
        </div>
    </div>


@stop