@extends('layouts.principal')

@section('content')

<div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">CREAR TIPOS DE TELEFONO</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>

    <!-- FORMULARIO -->
    <div class="panel panel-default">
        <div class="panel-body">
            <div class="row">
                 {{-- {!!Form::open(['route'=>'#','id'=>'contact', 'method'=>'GET'])!!}  --}}

                    {!!Form::label('Municipio del Proyecto')!!}
                    {!!Form::select('id_municipio_proyecto', ['01'=>'Jutiapa','02'=>'El Progreso','03'=>'San José Acatempa'], null, ['class' => 'form-control']) !!}
                    
                    {!!Form::label('Desarrollador')!!}
                    {!!Form::select('id_desarrollador', ['01'=>'Desarrollador1','02'=>'Desarrollador2','03'=>'Desarrollador3'], null, ['class' => 'form-control']) !!}
                    
                    {!!Form::label('Departamento')!!}
                    {!!Form::select('id_departamento', ['01'=>'Jutiapa','02'=>'Jalapa','03'=>'Santa Rosa'], null, ['class' => 'form-control']) !!}

                    {!!Form::label('Nombre del Proyecto')!!}
                    {!!Form::text('nombre_proyecto', null,['class'=>'form-control', 'placeholder'=>'Nombre del Proyecto'])!!}
                    {!! $errors->first('nombre_proyecto','<span class="help-block">:message</span>') !!}
                    
                    {!!Form::label('Nombre del Proyecto')!!}
                    {!!Form::text('nombre_proyecto', null,['class'=>'form-control', 'placeholder'=>'Nombre del Proyecto'])!!}
                    {!! $errors->first('nombre_proyecto','<span class="help-block">:message</span>') !!}

                    {!!Form::label('Longitud del Proyecto')!!}
                    {!!Form::number('longitud_proyecto', null,['class'=>'form-control', 'placeholder'=>'Longitud del Proyecto'])!!}
                    {!! $errors->first('longitud_proyecto','<span class="help-block">:message</span>') !!}

                    {!!Form::label('Latitud del Proyecto')!!}
                    {!!Form::number('latitud_proyecto', null,['class'=>'form-control', 'placeholder'=>'Latitud del Proyecto'])!!}
                    {!! $errors->first('latitud_proyecto','<span class="help-block">:message</span>') !!}

                    {!!Form::label('Monto del Proyecto')!!}
                    {!!Form::number('monto_proyecto', null,['class'=>'form-control', 'placeholder'=>'Monto del Proyecto'])!!}
                    {!! $errors->first('monto_proyecto','<span class="help-block">:message</span>') !!}

                    {!!Form::label('Inicio del Proyecto')!!}
                    {!!Form::date('fecha_inicio_trabajos', \Carbon\Carbon::now(),['class'=>'form-control'])!!}
                    {!! $errors->first('fecha_inicio_trabajos','<span class="help-block">:message</span>') !!}

                    <br>
                    {!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!} 
                {{-- {!!Form::close()!!}  --}}
            </div>
        </div>
    </div>


@stop