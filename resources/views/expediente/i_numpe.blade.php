@extends('layouts.principal')

@section('content')

<div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Numero de Personas</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>

    <!-- FORMULARIO -->
    <div class="panel panel-default">
        <div class="panel-body">
            <div class="row">
                 {!!Form::open(['route'=>'second','id'=>'contact', 'method'=>'POST'])!!} 
                 
                    {!!Form::label('Número de Personas')!!}
                    {!!Form::number('numero', null,['class'=>'form-control', 'placeholder'=>'Numero Personas'])!!}
                    {!! $errors->first('numero','<span class="help-block">:message</span>') !!}
                    
                    <br>
                    {!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!} 
                {!!Form::close()!!} 
            </div>
        </div>
    </div>


@stop