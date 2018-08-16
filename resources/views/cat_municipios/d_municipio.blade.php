@extends('layouts.principal')
@if(Session::has('message'))
<div class="alert alert-info alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  {{Session::get('message')}}
</div>
@endif

@section('content')

<div id="page-content-wrapper">
<a href="{{url('municipio/create')}}">Creación Municipio</a>
<div align="center">
    <table class="table table-bordered">
    <thead>
        <th align="center">ID</th>
        <th align="center">Departamento</th>
        <th align="center">Municipio</th>
    </thead>
     @forelse($municipios as $m)
    <tbody>
        <td align="center">{{$m->id_municipio}}</td>
        <td align="center">{{$m->descripcion_departamento}}</td>
        <td align="center">{{$m->descripcion_municipio}}</td>
        <td align="center">{!!link_to_route('municipio.edit', $title = 'Actualizar', $parameter = $m->id_municipio, $attributes = ['class'=>'btn btn-warning']) !!}</td>    
    </tbody>
    @empty
    <h1>NO HAY DATOS</h1>
    @endforelse() 
</table>
    
</div>
</div>



@stop