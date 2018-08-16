@extends('layouts.principal')

@section('content')

<div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Destino Subsidio</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>

    <!-- FORMULARIO -->
    <div class="panel panel-default">
        <div class="panel-body">
            <div class="row">
                {!!Form::model($relacion,['route'=>['destinosub.update',$relacion->id_tipo_solicitud_subsidio],'method'=>'PUT'])!!}
                    {!!Form::label('Descripción del Tipo de Subsidio')!!}
                    {!!Form::text('descripcion', null,['class'=>'form-control', 'placeholder'=>'Descripción del Tipo de Subsidio'])!!}
                    {!! $errors->first('descripcion','<span class="help-block">:message</span>') !!}
                    
                    <br>
                    {!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!} 
               {!!Form::close()!!}  
            </div>
        </div>
    </div>


@stop