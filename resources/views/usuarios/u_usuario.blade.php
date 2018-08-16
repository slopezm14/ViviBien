@extends('layouts.principal')

@section('content')

<div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Usuario</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>

    <!-- FORMULARIO -->
    <div class="panel panel-default">
        <div class="panel-body">
            <div class="row">
                {!!Form::model($usuario,['route'=>['usuario.update',$usuario->id],'method'=>'PUT'])!!}

                    {!!Form::label('Usuario')!!}
                    {!!Form::email('email', null,['class'=>'form-control', 'placeholder'=>'Ingrese Usuario'])!!}
                    {!! $errors->first('email','<span class="help-block">:message</span>') !!}
                    
                    {!!Form::label('Unidad')!!}
                    {!!Form::select('id_unidad', $unidad_trabajo, $usuario->id_unidad_trabajo, ['class' => 'form-control']) !!}

                    {!!Form::label('Id Genero')!!}
                    {!!Form::select('id_genero', $genero, $usuario->id_generos, ['class' => 'form-control']) !!}

                    {!!Form::label('Nombre1')!!}
                    {!!Form::text('name', null,['class'=>'form-control', 'placeholder'=>'Nombre 1'])!!}
                    {!! $errors->first('name','<span class="help-block">:message</span>') !!}

                    
                    {!!Form::label('Nombre2')!!}
                    {!!Form::text('nombre2', null,['class'=>'form-control', 'placeholder'=>'Nombre 2'])!!}
                    {!! $errors->first('nombre2','<span class="help-block">:message</span>') !!}

                                    
                    {!!Form::label('Apellido 1')!!}
                    {!!Form::text('apellido1', null,['class'=>'form-control', 'placeholder'=>'Apellido 1'])!!}
                    {!! $errors->first('apellido1','<span class="help-block">:message</span>') !!}
                    
                    {!!Form::label('Apellido 2')!!}
                    {!!Form::text('apellido2', null,['class'=>'form-control', 'placeholder'=>'Apellido 2'])!!}
                    {!! $errors->first('apellido2','<span class="help-block">:message</span>') !!}


                    {!!Form::label('Estatus')!!}
                    {!!Form::select('estatus', ['01'=>'Estatus1','02'=>'Estatus2'], null, ['class' => 'form-control']) !!}

                    <br>
                    {!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!} 
                {!!Form::close()!!} 
            </div>
        </div>
    </div>


@stop