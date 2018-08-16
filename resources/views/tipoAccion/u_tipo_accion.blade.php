@extends('layouts.principal')

@section('content')

<div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Tipo Accion</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>

    <!-- FORMULARIO -->
    <div class="panel panel-default">
        <div class="panel-body">
            <div class="row">
                {!!Form::model($tipoaccion,['route'=>['tipoaccion.update',$tipoaccion->id_accion],'method'=>'PUT'])!!}



                    {!!Form::label('Descripcion de Accion')!!}
                    {!!Form::text('descripcion_accion', null,['class'=>'form-control', 'placeholder'=>'Descripcion de Accion'])!!}
                    {!! $errors->first('descripAccion','<span class="help-block">:message</span>') !!}

                    
                   

                    <br>
                    {!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!} 
                {!!Form::close()!!} 
            </div>
        </div>
    </div>


@stop