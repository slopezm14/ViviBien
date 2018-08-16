@extends('layouts.principal')
@if(Session::has('message'))
<div class="alert alert-info alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  {{Session::get('message')}}
</div>
@endif

@section('content')
<a href="{{url('tipoaccion/create')}}">Creación de Tipo de Acción</a>
<div id="page-content-wrapper">
<div align="center">
    <table class="table table-bordered">
    <thead>
        <th align="center">ID</th>
        <th align="center">Descripcion</th>
    </thead>
     @forelse($tiposacciones as $t)
    <tbody>
        <td align="center">{{$t->id_accion}}</td>
        <td align="center">{{$t->descripcion_accion}}</td>
        <td align="center"></td>
        <td align="center">{!!link_to_route('tipoaccion.edit', $title = 'Actualizar', $parameter = $t->id_accion, $attributes = ['class'=>'btn btn-warning']) !!}</td>    
    </tbody>
    @empty
    <h1>NO HAY DATOS</h1>
    @endforelse() 
</table>
    
</div>
</div>



@stop