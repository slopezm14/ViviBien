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
            <h1 class="page-header">Expediente Grupo</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>

    <!-- FORMULARIO -->
    <div class="panel panel-default">
        <div class="panel-body">
            <div class="row">
                 {!!Form::open(['route'=>'grupo.store','id'=>'contact', 'method'=>'POST','files' => true])!!} 

                 {{ Form::hidden('numero', $holi) }}

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
                 {!!Form::number('numero_expediente', $num,['class'=>'form-control', 'disabled' => 'disabled', 'placeholder'=>'Num. de Expediente'])!!}
                 {!! $errors->first('numero_expediente','<span class="help-block">:message</span>') !!}

                 {!!Form::label('Año Expediente')!!}
                 {!!Form::number('anio_expediente', \Carbon\Carbon::now()->year,['class'=>'form-control'])!!}
                 {!! $errors->first('anio_expediente','<span class="help-block">:message</span>') !!}

                    <br>
                    @for ($i = 1; $i <= $holi; $i++)
                    <h5>Persona No.{{$i}}</h5>
                    <hr>
                    {!!Form::label('Relación Familiar')!!}
                    {!!Form::select($i.'id_relacion', $relacion, null, ['class' => 'form-control']) !!}

                    {!!Form::label('Genero')!!}
                    {!!Form::select($i.'id_genero', $genero, null, ['class' => 'form-control']) !!}

                    {!!Form::label('Número de Documento')!!}
                    {!!Form::text($i.'numero_documento', null,['class'=>'form-control', 'placeholder'=>'Número de Documento'])!!}
                    {!! $errors->first('numero_documento','<span class="help-block">:message</span>') !!}

                    {!!Form::label('Número de Telefono')!!}
                    {!!Form::text($i.'numero_telefono', null,['class'=>'form-control', 'placeholder'=>'Número de Documento'])!!}
                    {!! $errors->first('numero_telefono','<span class="help-block">:message</span>') !!}

                    {!!Form::label('Primer Nombre')!!}
                    {!!Form::text($i.'nombre1', null,['class'=>'form-control', 'placeholder'=>'Primer Nombre'])!!}
                    {!! $errors->first('nombre1','<span class="help-block">:message</span>') !!}

                    {!!Form::label('Segundo Nombre')!!}
                    {!!Form::text($i.'nombre2', null,['class'=>'form-control', 'placeholder'=>'Segundo Nombre'])!!}
                    {!! $errors->first('nombre2','<span class="help-block">:message</span>') !!}

                    {!!Form::label('Primer Nombre')!!}
                    {!!Form::text($i.'apellido1', null,['class'=>'form-control', 'placeholder'=>'Primer Apellido'])!!}
                    {!! $errors->first('apellido1','<span class="help-block">:message</span>') !!}

                    {!!Form::label('Segundo Nombre')!!}
                    {!!Form::text($i.'apellido2', null,['class'=>'form-control', 'placeholder'=>'Segundo Apellido'])!!}
                    {!! $errors->first('apellido2','<span class="help-block">:message</span>') !!}

                    {!!Form::label('Apellido de Casada')!!}
                    {!!Form::text($i.'apellidoCasada', null,['class'=>'form-control', 'placeholder'=>'Apellido de Casada'])!!}
                    {!! $errors->first('apellidoCasada','<span class="help-block">:message</span>') !!}

                    {!!Form::label('Fecha de Nacimiento')!!}
                    {!!Form::date($i.'fecha_nacimiento', \Carbon\Carbon::now(),['class'=>'form-control'])!!}
                    {!! $errors->first('fecha_nacimiento','<span class="help-block">:message</span>') !!}

                    {!!Form::label('Dirección')!!}
                    {!!Form::text($i.'direccion', null,['class'=>'form-control', 'placeholder'=>'Dirección'])!!}
                    {!! $errors->first('direccion','<span class="help-block">:message</span>') !!}

                    @forelse($requisitos as $requisito)
                        
                        {!!Form::label('Nombre Archivo - '.$requisito->descripcion_requisito)!!}
                        {!!Form::file('p'.$i.'archivo_'.$requisito->id_requisito, null, ['class' => 'form-control']) !!}
                        @empty
                        No hay!!!!
                    @endforelse 

                    @endfor
                        


                    <br>
                    {!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!} 
                {!!Form::close()!!} 
            </div>
        </div>
    </div>


@stop
