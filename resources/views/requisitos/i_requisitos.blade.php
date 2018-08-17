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
            <h1 class="page-header">Requisitos</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>

    <!-- FORMULARIO -->
    <div class="panel panel-default">
        <div class="panel-body">
            <div class="row">
                 {!!Form::open(['route'=>'requisito.store','id'=>'contact', 'method'=>'POST'])!!} 

                    {!!Form::label('Id. Tipo de Ingreso')!!}
                    {!!Form::select('id_tipo_ingreso', $tipoingreso, null, ['class' => 'form-control']) !!}

                    {!!Form::label('Descripción del Requisito')!!}
                    {!!Form::text('descripcion_requisito', null,['class'=>'form-control', 'placeholder'=>'Descripción del Requisito'])!!}
                    {!! $errors->first('descripcion_requisito','<span class="help-block">:message</span>') !!}

                    {!!Form::label('Observaciones')!!}
                    {!!Form::text('observaciones', null,['class'=>'form-control', 'placeholder'=>'Observaciones'])!!}

                    {!!Form::label('Obligatorio')!!}
                    {!!Form::select('obligatorio', ['S'=>'SI','N'=>'NO'], null, ['class' => 'form-control']) !!}
                    
                    <br>
                    {!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!} 
                {!!Form::close()!!} 
            </div>
        </div>
    </div>


@stop