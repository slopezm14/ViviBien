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
            <h1 class="page-header">Departamento</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>

    <!-- FORMULARIO -->
    <div class="panel panel-default">
        <div class="panel-body">
            <div class="row">
                 {!!Form::open(['route'=>'departamento.store','id'=>'contact', 'method'=>'POST'])!!}
                    {!!Form::label('Descripción del Departamento')!!}
                    {!!Form::text('descripcion_departamento', null,['class'=>'form-control', 'placeholder'=>'Descripción del Departamento'])!!}
                    {!! $errors->first('descripcion_departamento','<span class="help-block">:message</span>') !!}
                    
                    <br>
                    {!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!} 
                {!!Form::close()!!}
            </div>
        </div>
    </div>


@stop