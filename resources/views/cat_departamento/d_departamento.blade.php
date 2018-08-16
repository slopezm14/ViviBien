@extends('layouts.principal')
@if(Session::has('message'))
<div class="alert alert-info alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  {{Session::get('message')}}
</div>
@endif

@section('content')

<div id="page-content-wrapper">
<a href="{{url('departamento/create')}}">Creación Departamento</a>
<div align="center">
    <table class="table table-bordered">
    <thead>
        <th align="center">ID</th>
        <th align="center">Descripcion</th>
    </thead>
     @forelse($departamentos as $d)
    <tbody>
        <td align="center">{{$d->id_departamento}}</td>
        <td align="center">{{$d->descripcion_departamento}}</td>
        <td align="center">{!!link_to_route('departamento.edit', $title = 'Actualizar', $parameter = $d->id_departamento, $attributes = ['class'=>'btn btn-warning']) !!}</td>    
    </tbody>
    @empty
    <h1>NO HAY DATOS</h1>
    @endforelse() 
</table>
    
</div>
</div>



@stop