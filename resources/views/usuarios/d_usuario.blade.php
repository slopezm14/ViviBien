@extends('layouts.principal')
@if(Session::has('message'))
<div class="alert alert-info alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  {{Session::get('message')}}
</div>
@endif

@section('content')
<a href="{{url('usuario/create')}}">Creación de Usuario</a>
<div id="page-content-wrapper">
<div align="center">
    <table class="table table-bordered">
    <thead>
        <th align="center">ID</th>
        <th align="center">Username</th>
        <th align="center">Nombre</th>
        <th align="center">Apellido</th>
    </thead>
     @forelse($usuarios as $u)
    <tbody>
        <td align="center">{{$u->id}}</td>
        <td align="center">{{$u->email}}</td>
        <td align="center">{{$u->name}}</td>
        <td align="center"></td>
        <td align="center">{!!link_to_route('usuario.edit', $title = 'Actualizar', $parameter = $u->id, $attributes = ['class'=>'btn btn-warning']) !!}</td>    
    </tbody>
    @empty
    <h1>NO HAY DATOS</h1>
    @endforelse() 
</table>
    
</div>
</div>



@stop