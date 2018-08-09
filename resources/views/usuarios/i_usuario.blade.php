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
                 {!!Form::open(['route'=>'usuario.store','id'=>'contact', 'method'=>'POST'])!!}s 

                    {!!Form::label('Usuario')!!}
                    {!!Form::email('usuario', null,['class'=>'form-control', 'placeholder'=>'Ingrese Usuario'])!!}
                    {!! $errors->first('usuario','<span class="help-block">:message</span>') !!}

                    {!!Form::label('Rol')!!}
                    {!!Form::select('id_rol', $roles, null, ['class' => 'form-control']) !!}
                    
                    {!!Form::label('Unidad')!!}
                    {!!Form::select('id_unidad', $unidad_trabajo, null, ['class' => 'form-control']) !!}

                    {!!Form::label('Id Genero')!!}
                    {!!Form::select('id_genero', $genero, null, ['class' => 'form-control']) !!}

                    {!!Form::label('Nombre1')!!}
                    {!!Form::text('nombre1', null,['class'=>'form-control', 'placeholder'=>'Nombre 1'])!!}
                    {!! $errors->first('nombre1','<span class="help-block">:message</span>') !!}

                    
                    {!!Form::label('Nombre2')!!}
                    {!!Form::text('nombre2', null,['class'=>'form-control', 'placeholder'=>'Nombre 2'])!!}
                    {!! $errors->first('nombre2','<span class="help-block">:message</span>') !!}

                    
                    {!!Form::label('Nombre3')!!}
                    {!!Form::text('nombre3', null,['class'=>'form-control', 'placeholder'=>'Nombre 3'])!!}
                    {!! $errors->first('nombre3','<span class="help-block">:message</span>') !!}

                    
                    {!!Form::label('Apellido 1')!!}
                    {!!Form::text('apellido1', null,['class'=>'form-control', 'placeholder'=>'Apellido 1'])!!}
                    {!! $errors->first('apellido1','<span class="help-block">:message</span>') !!}

                    
                    {!!Form::label('Apellido 2')!!}
                    {!!Form::text('apellido2', null,['class'=>'form-control', 'placeholder'=>'Apellido 2'])!!}
                    {!! $errors->first('apellido2','<span class="help-block">:message</span>') !!}

                    
                    {!!Form::label('Apellido 3')!!}
                    {!!Form::text('apellido3', null,['class'=>'form-control', 'placeholder'=>'Apellido 3'])!!}
                    {!! $errors->first('apellido3','<span class="help-block">:message</span>') !!}

                    {!!Form::label('Estatus')!!}
                    {!!Form::select('estatus', ['A'=>'Activo','I'=>'Inactivo'], null, ['class' => 'form-control']) !!}
                    
                    {!!Form::label('Clave')!!}
                    {!!Form::password('clave',['class'=>'form-control'])!!}
                    {!! $errors->first('clave','<span class="help-block">:message</span>') !!}

                    <br>
                    {!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!} 
                {!!Form::close()!!} 
            </div>
        </div>
    </div>


@stop