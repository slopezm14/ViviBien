@extends('layouts.principal')
@if(Session::has('message'))
<div class="alert alert-info alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  {{Session::get('message')}}
</div>
@endif

@section('content')

<div id="page-content-wrapper">
<a href="{{url('proyecto/create')}}">Creación Proyecto</a>
<div align="center">
    <table class="table table-bordered">
    <thead>
        <th align="center">ID</th>
        <th align="center">Nombre Proyecto</th>
        <th align="center">Descripcion Municipio</th>
        <th align="center">Nombre Desarrollador</th>
    </thead>
     @forelse($proyectos as $m)
    <tbody>
        <td align="center">{{$m->id_proyecto}}</td>
        <td align="center">{{$m->nombre_proyecto}}</td>
        <td align="center">{{$m->descripcion_municipio}}</td>
        <td align="center">{{$m->nombre_desarrollador}}</td>
        <td align="center">{!!link_to_route('proyecto.edit', $title = 'Actualizar', $parameter = $m->id_proyecto, $attributes = ['class'=>'btn btn-warning']) !!}</td>    
    </tbody>
    @empty
    <h1>NO HAY DATOS</h1>
    @endforelse() 
</table>
    
</div>
</div>



@stop