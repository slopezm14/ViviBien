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
            <h1 class="page-header">Unidad de Trabajo</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>

    <!-- FORMULARIO -->
    <div class="panel panel-default">
        <div class="panel-body">
            <div class="row">
                 {!!Form::open(['route'=>'unidadtrabajo.store','id'=>'contact', 'method'=>'POST'])!!} 

        
                    {!!Form::label('Unidad de Trabajo')!!}
                    {!!Form::text('descripcion_unidad', null,['class'=>'form-control', 'placeholder'=>'Descripcion Unidad'])!!}
                    {!! $errors->first('descripcion_unidad','<span class="help-block">:message</span>') !!}

                    <br>
                    {!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!} 
                {!!Form::close()!!} 
            </div>
        </div>
    </div>


@stop
