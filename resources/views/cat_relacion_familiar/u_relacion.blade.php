@extends('layouts.principal')

@section('content')

<div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Relación Familiar</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>

    <!-- FORMULARIO -->
    <div class="panel panel-default">
        <div class="panel-body">
            <div class="row">
                {!!Form::model($relacion,['route'=>['relacionfam.update',$relacion->id_relacion_familiar],'method'=>'PUT'])!!}
                    {!!Form::label('Descripción de la Relación')!!}
                    {!!Form::text('descripcion', null,['class'=>'form-control', 'placeholder'=>'Descripción de la Relación'])!!}
                    {!! $errors->first('descripcion','<span class="help-block">:message</span>') !!}
                    
                    <br>
                    {!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!} 
                {!!Form::close()!!} 
            </div>
        </div>
    </div>


@stop