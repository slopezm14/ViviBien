@extends('layouts.principal')

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
                 {{-- {!!Form::open(['route'=>'#','id'=>'contact', 'method'=>'GET'])!!}  --}}

                    {!!Form::label('Id. Tipo de Ingreso')!!}
                    {!!Form::select('id_tipo_ingreso', ['01'=>'Tipo1','02'=>'Tipo2','03'=>'Tipo3'], null, ['class' => 'form-control']) !!}

                    {!!Form::label('Descripción del Requisito')!!}
                    {!!Form::text('descripcion_requisito', null,['class'=>'form-control', 'placeholder'=>'Descripción del Requisito'])!!}
                    {!! $errors->first('descripcion_requisito','<span class="help-block">:message</span>') !!}

                    {!!Form::label('Observaciones')!!}
                    {!!Form::text('observaciones', null,['class'=>'form-control', 'placeholder'=>'Observaciones'])!!}

                    {!!Form::label('Obligatorio')!!}
                    {!!Form::checkbox('si', 'si')!!}
                    {!!Form::checkbox('no', 'no')!!}
                    
                    <br>
                    {!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!} 
                {{-- {!!Form::close()!!}  --}}
            </div>
        </div>
    </div>


@stop