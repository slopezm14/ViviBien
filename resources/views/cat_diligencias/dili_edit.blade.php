@extends('layouts.principal')

@section('content')

<div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">CHEQUEO DE DILIGENCIA</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>

    <!-- FORMULARIO -->
    <div class="panel panel-default">
        <div class="panel-body">
            <div class="row">
                    {!!Form::model($diligencias,['route'=>['expdili.update',$diligencias->id_diligencia],'method'=>'PUT'])!!}
                    <h2>Estas Chequeando una diligencia</h2>
                    <br>
                    {!!Form::submit('Checkear',['class'=>'btn btn-primary'])!!} 
                {!!Form::close()!!} 
            </div>
        </div>
    </div>


@stop