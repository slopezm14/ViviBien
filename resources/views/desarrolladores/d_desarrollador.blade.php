@extends('layouts.principal')
@if(Session::has('message'))
<div class="alert alert-info alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  {{Session::get('message')}}
</div>
@endif

@section('content')

<div id="page-content-wrapper">
<a href="{{url('desarrollador/create')}}">Creación de Desarrollador</a>
<div align="center">
    <table class="table table-bordered">
    <thead>
        <th align="center">ID</th>
        <th align="center">Nombre</th>
        <th align="center">Correo</th>
    </thead>
     @forelse($desarrolladores as $d)
    <tbody>
        <td align="center">{{$d->id_desarrollador}}</td>
        <td align="center">{{$d->nombre_desarrollador}}</td>
        <td align="center">{{$d->correo_electronico}}</td>
        <td align="center">{!!link_to_route('desarrollador.edit', $title = 'Actualizar', $parameter = $d->id_desarrollador, $attributes = ['class'=>'btn btn-warning']) !!}</td>    
    </tbody>
    @empty
    <h1>NO HAY DATOS</h1>
    @endforelse() 
</table>
    
</div>
</div>



@stop