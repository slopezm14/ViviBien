@extends('layouts.principal')

@section('content')

<div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Roles</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>

    <!-- FORMULARIO -->
    <div class="panel panel-default">
        <div class="panel-body">
            <div class="row">
                 {!!Form::open(['route'=>'rol.store','id'=>'contact', 'method'=>'POST'])!!} 
                 
                 {!!Form::label('Short desc')!!}
                    {!!Form::text('short_desc', null,['class'=>'form-control', 'placeholder'=>'Descripcion corta'])!!}
                    {!! $errors->first('short_desc','<span class="help-block">:message</span>') !!}

                    {!!Form::label('Descripción del Rol')!!}
                    {!!Form::text('descripcion_rol', null,['class'=>'form-control', 'placeholder'=>'Descripción del Rol'])!!}
                    {!! $errors->first('descripcion_rol','<span class="help-block">:message</span>') !!}
                    
                    <br>
                    {!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!} 
                {!!Form::close()!!} 
            </div>
        </div>
    </div>


@stop