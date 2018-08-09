@extends('layouts.principal')

@section('content')

<div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Genero</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>

    <!-- FORMULARIO -->
    <div class="panel panel-default">
        <div class="panel-body">
            <div class="row">
                 {!!Form::open(['route'=>'genero.store','id'=>'contact', 'method'=>'POST'])!!} 



                    {!!Form::label('Genero')!!}
                    {!!Form::text('genero', null,['class'=>'form-control', 'placeholder'=>'Genero'])!!}
                    {!! $errors->first('genero','<span class="help-block">:message</span>') !!}

                    
                   

                    <br>
                    {!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!} 
                {!!Form::close()!!} 
            </div>
        </div>
    </div>


@stop