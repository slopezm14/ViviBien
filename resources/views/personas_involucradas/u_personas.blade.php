@extends('layouts.principal')

@section('content')

<div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Personas Involucradas</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>

    <!-- FORMULARIO -->
    <div class="panel panel-default">
        <div class="panel-body">
            <div class="row">
                 {{-- {!!Form::open(['route'=>'#','id'=>'contact', 'method'=>'GET'])!!}  --}}

                    {!!Form::label('Requisito de Expediente')!!}
                    {!!Form::select('id_expediente_requisito', ['01'=>'Requisito1','02'=>'Requisito2','03'=>'Requisito2'], null, ['class' => 'form-control']) !!}
                    
                    {!!Form::label('Relación Familiar')!!}
                    {!!Form::select('id_relacion_familiar', ['01'=>'Relacion1','02'=>'Relacion2','03'=>'Relacion3'], null, ['class' => 'form-control']) !!}

                        {!!Form::label('Id Genero')!!}
                    {!!Form::select('id_genero', ['01'=>'Genero1','02'=>'Genero2','03'=>'Genero3'], null, ['class' => 'form-control']) !!}

        

                    {!!Form::label('Número de Documento')!!}
                    {!!Form::text('numero_documento', null,['class'=>'form-control', 'placeholder'=>'Número de Documento'])!!}
                    {!! $errors->first('numero_documento','<span class="help-block">:message</span>') !!}

                    {!!Form::label('Primer Nombre')!!}
                    {!!Form::text('nombre1', null,['class'=>'form-control', 'placeholder'=>'Primer Nombre'])!!}
                    {!! $errors->first('nombre1','<span class="help-block">:message</span>') !!}

                    {!!Form::label('Segundo Nombre')!!}
                    {!!Form::text('nombre2', null,['class'=>'form-control', 'placeholder'=>'Segundo Nombre'])!!}
                    {!! $errors->first('nombre2','<span class="help-block">:message</span>') !!}

                    {!!Form::label('Primer Nombre')!!}
                    {!!Form::text('apellido1', null,['class'=>'form-control', 'placeholder'=>'Primer Apellido'])!!}
                    {!! $errors->first('apellido1','<span class="help-block">:message</span>') !!}

                    {!!Form::label('Segundo Nombre')!!}
                    {!!Form::text('apellido2', null,['class'=>'form-control', 'placeholder'=>'Segundo Apellido'])!!}
                    {!! $errors->first('apellido2','<span class="help-block">:message</span>') !!}

                    {!!Form::label('Apellido de Casada')!!}
                    {!!Form::text('apellidoCasada', null,['class'=>'form-control', 'placeholder'=>'Apellido de Casada'])!!}
                    {!! $errors->first('apellidoCasada','<span class="help-block">:message</span>') !!}

                    {!!Form::label('Fecha de Nacimiento')!!}
                    {!!Form::date('fecha_nacimiento', \Carbon\Carbon::now(),['class'=>'form-control'])!!}
                    {!! $errors->first('fecha_nacimiento','<span class="help-block">:message</span>') !!}

                    {!!Form::label('Dirección')!!}
                    {!!Form::text('direccion', null,['class'=>'form-control', 'placeholder'=>'Dirección'])!!}
                    {!! $errors->first('direccion','<span class="help-block">:message</span>') !!}

                    {!!Form::label('Teléfono 1')!!}
                    {!!Form::text('telefono1', null,['class'=>'form-control', 'placeholder'=>'Teléfono 1'])!!}
                    {!! $errors->first('telefono1','<span class="help-block">:message</span>') !!}

                     {!!Form::label('Teléfono 2')!!}
                    {!!Form::text('telefono2', null,['class'=>'form-control', 'placeholder'=>'Teléfono 2'])!!}
                    {!! $errors->first('telefono2','<span class="help-block">:message</span>') !!}

                     {!!Form::label('Teléfono 3')!!}
                    {!!Form::text('telefono3', null,['class'=>'form-control', 'placeholder'=>'Teléfono 3'])!!}
                    {!! $errors->first('telefono3','<span class="help-block">:message</span>') !!}


                    
                    <br>
                    {!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!} 
                {{-- {!!Form::close()!!}  --}}
            </div>
        </div>
    </div>


@stop