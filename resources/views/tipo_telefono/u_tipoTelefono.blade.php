@extends('layouts.principal')

@section('content')

<div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Tipo Telefono</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>

    <!-- FORMULARIO -->
    <div class="panel panel-default">
        <div class="panel-body">
            <div class="row">
                {!!Form::model($tipotelefono,['route'=>['tipotelefono.update',$tipotelefono->id_tipotelefono],'method'=>'PUT'])!!}



                    {!!Form::label('Tipo Telefono')!!}
                    {!!Form::text('descripcion_tipotelefono', null,['class'=>'form-control', 'placeholder'=>'Tipo Telefono'])!!}
                    {!! $errors->first('tipo_telefono','<span class="help-block">:message</span>') !!}

                    
                   

                    <br>
                    {!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!} 
                {!!Form::close()!!} 
            </div>
        </div>
    </div>


@stop