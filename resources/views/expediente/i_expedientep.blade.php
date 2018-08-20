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
            <h1 class="page-header">Expediente Personal</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>

    <!-- FORMULARIO -->
    <div class="panel panel-default">
        <div class="panel-body">
            <div class="row">
                 {!!Form::open(['route'=>'personal.store','id'=>'contact', 'method'=>'POST','files' => true])!!} 

                    <h3>Expediente</h3>
                    {!!Form::label('Id proyecto')!!}
                    {!!Form::select('id_proyecto', $proyecto, null, ['class' => 'form-control']) !!}

                    {!!Form::label('Id Tipo Solicitud Subsidio')!!}
                    {!!Form::select('id_tipo_solicitud_subsidio', $destino, null, ['class' => 'form-control']) !!}

                    {!!Form::label('Inicio del Proyecto')!!}
                    {!!Form::date('fecha_registro', \Carbon\Carbon::now(),['class'=>'form-control'])!!}
                    {!! $errors->first('fecha_registro','<span class="help-block">:message</span>') !!}
                    
                    {!!Form::label('Observaciones')!!}
                    {!!Form::textarea('observaciones_expediente', null,['class'=>'form-control', 'placeholder'=>'Observaciones'])!!}
                    {!! $errors->first('observaciones_expediente','<span class="help-block">:message</span>') !!}

                    {!!Form::label('Monto Solicitado')!!}
                    {!!Form::number('monto_solicitado', null,['class'=>'form-control', 'placeholder'=>'Monto'])!!}
                    {!! $errors->first('monto_solicitado','<span class="help-block">:message</span>') !!}

                    {!!Form::label('Num. Expediente')!!}
                    {!!Form::number('numero_expediente', $num,['class'=>'form-control', 'disabled' => 'disabled', 'placeholder'=>'Numero de Expediente'])!!}
                    {!! $errors->first('numero_expediente','<span class="help-block">:message</span>') !!}

                    {!!Form::label('Año Expediente')!!}
                    {!!Form::number('anio_expediente', \Carbon\Carbon::now()->year,['class'=>'form-control'])!!}
                    {!! $errors->first('anio_expediente','<span class="help-block">:message</span>') !!}

                    <h3>Info. Persona Involucrada</h3>
                    <hr>
                    {!!Form::label('Relación Familiar')!!}
                    {!!Form::select('id_relacion', $relacion, null, ['class' => 'form-control']) !!}

                    <hr>

                    {!!Form::label('Genero')!!}
                    {!!Form::select('id_genero', $genero, null, ['class' => 'form-control']) !!}

                    {!!Form::label('Número de Documento')!!}
                    {!!Form::text('numero_documento', null,['class'=>'form-control', 'placeholder'=>'Número de Documento'])!!}
                    {!! $errors->first('numero_documento','<span class="help-block">:message</span>') !!}

                    {!!Form::label('Número de Telefono')!!}
                    {!!Form::text('numero_telefono', null,['class'=>'form-control', 'placeholder'=>'Número de Documento'])!!}
                    {!! $errors->first('numero_telefono','<span class="help-block">:message</span>') !!}

                    {!!Form::label('Primer Nombre')!!}
                    {!!Form::text('nombre1', null,['class'=>'form-control', 'placeholder'=>'Primer Nombre'])!!}
                    {!! $errors->first('nombre1','<span class="help-block">:message</span>') !!}

                    {!!Form::label('Segundo Nombre')!!}
                    {!!Form::text('nombre2', null,['class'=>'form-control', 'placeholder'=>'Segundo Nombre'])!!}
                    {!! $errors->first('nombre2','<span class="help-block">:message</span>') !!}

                    {!!Form::label('Primer Apellido')!!}
                    {!!Form::text('apellido1', null,['class'=>'form-control', 'placeholder'=>'Primer apellido'])!!}
                    {!! $errors->first('apellido1','<span class="help-block">:message</span>') !!}

                    {!!Form::label('Segundo Apellido')!!}
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
                    
                    <hr>
                    <h3>Reequisitos</h3>

                    
                    @forelse($requisitos as $requisito)
                        
                        {!!Form::label('Nombre Archivo - '.$requisito->descripcion_requisito)!!}
                        {!!Form::file('archivo_'.$requisito->id_requisito, null, ['class' => 'form-control']) !!}
                        @empty
                        No hay!!!!
                    @endforelse 
                    <br>
                    {!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!} 
                {!!Form::close()!!} 
            </div>
        </div>
    </div>


@stop
