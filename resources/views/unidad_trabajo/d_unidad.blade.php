@extends('layouts.principal')
@if(Session::has('message'))
<div class="alert alert-info alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  {{Session::get('message')}}
</div>
@endif

@section('content')
<a href="{{url('unidadtrabajo/create')}}">Creación Unidad de Trabajo</a>
<div id="page-content-wrapper">
<div align="center">
    <table class="table table-bordered">
    <thead>
        <th align="center">ID</th>
        <th align="center">Descripcion Unidad</th>
    </thead>
     @forelse($unidades as $u)
    <tbody>
        <td align="center">{{$u->id_unidad_trabajo}}</td>
        <td align="center">{{$u->descripcion_unidad}}</td>
        <td align="center"></td>
        <td align="center">{!!link_to_route('unidadtrabajo.edit', $title = 'Actualizar', $parameter = $u->id_unidad_trabajo, $attributes = ['class'=>'btn btn-warning']) !!}</td>    
    </tbody>
    @empty
    <h1>NO HAY DATOS</h1>
    @endforelse() 
</table>
    
</div>
</div>



@stop