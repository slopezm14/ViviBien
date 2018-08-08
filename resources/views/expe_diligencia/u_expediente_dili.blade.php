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
                 {{-- {!!Form::open(['route'=>'#','id'=>'contact', 'method'=>'GET'])!!}  --}}

                    {!!Form::label('Expediente')!!}
                    {!!Form::select('expediente', ['01'=>'Expediente1','02'=>'Expediente2','03'=>'Expediente3'], null, ['class' => 'form-control']) !!}

                    {!!Form::label('Id. Diligencia')!!}
                    {!!Form::select('id_diligencia', ['01'=>'Diligencia1','02'=>'Diligencia2','03'=>'Diligencia3'], null, ['class' => 'form-control']) !!}

                    {!!Form::label('Id. Usuario')!!}
                    {!!Form::select('id_ususario', ['01'=>'User1','02'=>'User2','03'=>'User3'], null, ['class' => 'form-control']) !!}

                     {!!Form::label('Id. docDigitalizado')!!}
                    {!!Form::select('id_Docdigitalizado', ['01'=>'idDoc1','02'=>'idDoc2','03'=>'idDoc3'], null, ['class' => 'form-control']) !!}

                    {!!Form::label('Fecha Diligencia')!!}
                    {!!Form::date('fecha_diligencia', \Carbon\Carbon::now(),['class'=>'form-control'])!!}
                    {!! $errors->first('fecha_diligencia','<span class="help-block">:message</span>') !!}

                    {!!Form::label('Resultado Diligencia')!!}
                    {!!Form::textarea('resultado_diligencia', null,['class'=>'form-control', 'placeholder'=>'Resultado de la Diligencia'])!!}
                    {!! $errors->first('resultado_diligencia','<span class="help-block">:message</span>') !!}

                    {!!Form::label('Diligencia Finalizada')!!}
                    <br>
                    {!!Form::label('Si')!!}
                    {!!Form::checkbox('diligencia_finalizada', '1', false);!!}
                    <br>
                    {!!Form::label('No')!!}
                    {!!Form::checkbox('diligencia_finalizada', '0', false);!!}




                   


                    <br>
                    {!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!} 
                {{-- {!!Form::close()!!}  --}}
            </div>
        </div>
    </div>


@stop
