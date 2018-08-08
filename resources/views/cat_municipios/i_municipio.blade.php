@extends('layouts.principal')

@section('content')

<div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Municipios</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>

    <!-- FORMULARIO -->
    <div class="panel panel-default">
        <div class="panel-body">
            <div class="row">
                 {{-- {!!Form::open(['route'=>'#','id'=>'contact', 'method'=>'GET'])!!}  --}}

                    {!!Form::label('Departamento')!!}
                    {!!Form::select('id_departamento', ['01'=>'Jutiapa','02'=>'Jalapa','03'=>'Santa Rosa'], null, ['class' => 'form-control']) !!}
                    <br>
                    {!!Form::label('Descripción del Municipio')!!}
                    {!!Form::text('descripcion_municipio', null,['class'=>'form-control', 'placeholder'=>'Descripción del Municipio'])!!}
                    {!! $errors->first('descripcion_municipio','<span class="help-block">:message</span>') !!}
                    
                    <br>
                    {!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!} 
                {{-- {!!Form::close()!!}  --}}
            </div>
        </div>
    </div>


@stop