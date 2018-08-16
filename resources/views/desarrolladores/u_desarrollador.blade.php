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

                    {!!Form::label('Nombre del Desarrollador')!!}
                    {!!Form::text('nombre_desarrollador', null,['class'=>'form-control', 'placeholder'=>'Nombre del Desarrollador'])!!}
                    {!! $errors->first('nombre_desarrollador','<span class="help-block">:message</span>') !!}

                    {!!Form::label('Nit del Desarrollador')!!}
                    {!!Form::text('nit', null,['class'=>'form-control', 'placeholder'=>'Nit del Desarrollador'])!!}
                    {!! $errors->first('nit','<span class="help-block">:message</span>') !!}

                    {!!Form::label('Dirección')!!}
                    {!!Form::text('direccion_empresa', null,['class'=>'form-control', 'placeholder'=>'Dirección'])!!}
                    {!! $errors->first('direccion_empresa','<span class="help-block">:message</span>') !!}

                    {!!Form::label('Correo Electronico')!!}
                    {!!Form::email('correo_electronico',null, ['class'=>'form-control', 'placeholder'=>'Correo Electronico'] )!!}
                    {!! $errors->first('correo_electronico','<span class="help-block">:message</span>') !!}

                     {!!Form::label('Telefono1')!!}
                    {!!Form::text('Num_Tel',$telefono[0]->numero_telefono, ['class'=>'form-control', 'placeholder'=>'Numero Telefono 1'] )!!}
                    {!! $errors->first('Num_Tel','<span class="help-block">:message</span>') !!}

                    {!!Form::label('Tipo Telefono')!!}
                    {!!Form::select('id_ttelefono1', $tipotelefonos,null, ['class' => 'form-control']) !!}

                        {!!Form::label('Telefono2')!!}
                    {!!Form::text('Num_Tel2',$telefono[1]->numero_telefono, ['class'=>'form-control', 'placeholder'=>'Numero Telefono 2'] )!!}
                    {!! $errors->first('Num_Tel','<span class="help-block">:message</span>') !!}

                    {!!Form::label('Tipo Telefono')!!}
                    {!!Form::select('id_ttelefono2', $tipotelefonos,null, ['class' => 'form-control']) !!}

                        {!!Form::label('Telefono3')!!}
                    {!!Form::text('Num_Tel3',$telefono[2]->numero_telefono, ['class'=>'form-control', 'placeholder'=>'Numero Telefono 3'] )!!}
                    {!! $errors->first('Num_Tel','<span class="help-block">:message</span>') !!}

                    {!!Form::label('Tipo Telefono')!!}
                    {!!Form::select('id_ttelefono1', $tipotelefonos, null, ['class' => 'form-control']) !!}
            
                    <br>
                    {!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!} 
                {{-- {!!Form::close()!!}  --}}
            </div>
        </div>
    </div>


@stop