@extends('layouts.principal')

@section('content')

<div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Departamento</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>

    <!-- FORMULARIO -->
    <div class="panel panel-default">
        <div class="panel-body">
            <div class="row">
                 {!!Form::open(['route'=>'list','id'=>'contact', 'method'=>'POST'])!!}
                    
                    {!!Form::label('Proyecto')!!}
                    {!!Form::select('choose', $proyecto, null, ['class' => 'form-control']) !!}
                    {!! $errors->first('choose','<span class="help-block">:message</span>') !!}
                    
                    <br>
                    {!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!} 
                {!!Form::close()!!}
            </div>
        </div>
    </div>


@stop