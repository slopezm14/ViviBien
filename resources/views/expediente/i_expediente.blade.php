@extends('layouts.principal')

@section('content')

<div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Expediente</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>

    <!-- FORMULARIO -->
    <div class="panel panel-default">
        <div class="panel-body">
            <div class="row">
                 {{-- {!!Form::open(['route'=>'#','id'=>'contact', 'method'=>'GET'])!!}  --}}

                    

                   
                    {!!Form::label('Tipo de Ingreso')!!}
                    {!!Form::select('id_tipo_ingreso', ['01'=>'Tipo1','02'=>'Tipo2','03'=>'Tipo3'], null, ['class' => 'form-control']) !!}

                    {!!Form::label('Tipo de Soli. Subsidio')!!}
                    {!!Form::select('id_tipo_solicitud_subsidio', ['01'=>'Tipo1','02'=>'Tipo2','03'=>'Tipo3'], null, ['class' => 'form-control']) !!}

                    {!!Form::label('Id proyecto')!!}
                    {!!Form::select('id_tipo_ingreso', ['01'=>'Tipo1','02'=>'Tipo2','03'=>'Tipo3'], null, ['class' => 'form-control']) !!}

                    {!!Form::label('Inicio del Proyecto')!!}
                    {!!Form::date('fecha_registro', \Carbon\Carbon::now(),['class'=>'form-control'])!!}
                    {!! $errors->first('fecha_registro','<span class="help-block">:message</span>') !!}
                    
                    {!!Form::label('Observaciones')!!}
                    {!!Form::textarea('observaciones_expediente', null,['class'=>'form-control', 'placeholder'=>'Observaciones'])!!}
                    {!! $errors->first('observaciones_expediente','<span class="help-block">:message</span>') !!}

                    {!!Form::label('Monto Solicitado')!!}
                    {!!Form::number('monto_solicitado', null,['class'=>'form-control', 'placeholder'=>'Monto'])!!}
                    {!! $errors->first('monto_solicitado','<span class="help-block">:message</span>') !!}

                    {!!Form::label('Longitud')!!}
                    {!!Form::number('longitud_proyecto', null,['class'=>'form-control', 'placeholder'=>'Longitud del Proyecto'])!!}
                    {!! $errors->first('longitud_proyecto','<span class="help-block">:message</span>') !!}

                    {!!Form::label('Latitud')!!}
                    {!!Form::number('latitud_proyecto', null,['class'=>'form-control', 'placeholder'=>'Latitud del Proyecto'])!!}
                    {!! $errors->first('latitud_proyecto','<span class="help-block">:message</span>') !!}

                    {!!Form::label('Num. Expediente')!!}
                    {!!Form::number('numero_expediente', null,['class'=>'form-control', 'placeholder'=>'Latitud del Proyecto'])!!}
                    {!! $errors->first('numero_expediente','<span class="help-block">:message</span>') !!}

                    {!!Form::label('Año Expediente')!!}
                    {!!Form::number('anio_expediente', \Carbon\Carbon::now()->year,['class'=>'form-control'])!!}
                    {!! $errors->first('anio_expediente','<span class="help-block">:message</span>') !!}


                     {!!Form::label('Id. Usuario')!!}
                    {!!Form::select('id_usuario', ['01'=>'User1','02'=>'User2','03'=>'User3'], null, ['class' => 'form-control']) !!}

                    <br>
                    {!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!} 
                {{-- {!!Form::close()!!}  --}}
            </div>
        </div>
    </div>


@stop
