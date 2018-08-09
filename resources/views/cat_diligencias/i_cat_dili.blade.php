@extends('layouts.principal')

@section('content')

<div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Unidad de Trabajo</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>

    <!-- FORMULARIO -->
    <div class="panel panel-default">
        <div class="panel-body">
            <div class="row">
                 {!!Form::open(['route'=>'categodili.store','id'=>'contact', 'method'=>'POST'])!!} 

                    {!!Form::label('Unidad de Trabajo')!!}
                    {!!Form::select('id_unidad_trabajo', $unidad, null, ['class' => 'form-control']) !!}

                    {!!Form::label('Descripcion de la Diligencia')!!}
                    {!!Form::textarea('descripcion_diligencia', null,['class'=>'form-control', 'placeholder'=>'Descripción de la Diligencia'])!!}
                    {!! $errors->first('descripcion_diligencia','<span class="help-block">:message</span>') !!}

                    {!!Form::label('Obligatorio')!!}
                    {!!Form::select('obligatorio', ['S'=>'Si','N'=>'No'], null, ['class' => 'form-control']) !!}

                    {!!Form::label('Orden')!!}
                    {!!Form::number('orden', null,['class'=>'form-control'])!!}
                    {!! $errors->first('orden','<span class="help-block">:message</span>') !!}


                    <br>
                    {!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!} 
                {{-- {!!Form::close()!!}  --}}
            </div>
        </div>
    </div>


@stop
