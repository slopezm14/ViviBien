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
            <h1 class="page-header">Desarrollador</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>

    <!-- FORMULARIO -->
    <div class="panel panel-default">
        <div class="panel-body">
            <div class="row">
                 {!!Form::open(['route'=>'desarrollador.store','id'=>'contact', 'method'=>'POST'])!!} 

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

                    {!!Form::label('Dueño')!!}
                    {!!Form::text('nombre_owner',null, ['class'=>'form-control', 'placeholder'=>'Nombre del Dueño'] )!!}
                    {!! $errors->first('nombre_owner','<span class="help-block">:message</span>') !!}

                    <br>

                     {!!Form::label('Telefono1')!!}
                    {!!Form::text('Num_Tel1',null, ['class'=>'form-control', 'placeholder'=>'Numero Telefono 1'] )!!}
                    {!! $errors->first('Num_Tel1','<span class="help-block">:message</span>') !!}

                    {!!Form::label('Tipo Telefono de Telefono1')!!}
                    {!!Form::select('tipotelefono1', $tipotelefonos, null, ['class' => 'form-control']) !!}

                    <br>

                        {!!Form::label('Telefono2')!!}
                    {!!Form::text('Num_Tel2',null, ['class'=>'form-control', 'placeholder'=>'Numero Telefono 2'] )!!}
                    {!! $errors->first('Num_Tel2','<span class="help-block">:message</span>') !!}

                    {!!Form::label('Tipo Telefono de Telefono2')!!}
                    {!!Form::select('tipotelefono2', $tipotelefonos, null, ['class' => 'form-control']) !!}

                    <br>
                    
                        {!!Form::label('Telefono3')!!}
                    {!!Form::text('Num_Tel3',null, ['class'=>'form-control', 'placeholder'=>'Numero Telefono 3'] )!!}
                    {!! $errors->first('Num_Tel3','<span class="help-block">:message</span>') !!}

                    {!!Form::label('Tipo Telefono de Telefono3')!!}
                    {!!Form::select('tipotelefono3', $tipotelefonos, null, ['class' => 'form-control']) !!}

            
                    <br>
                    {!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!} 
                {!!Form::close()!!} 
            </div>
        </div>
    </div>


@stop