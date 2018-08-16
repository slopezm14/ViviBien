@extends('layouts.principal')
@if(Session::has('message'))
<div class="alert alert-info alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  {{Session::get('message')}}
</div>
@endif

@section('content')

<div id="page-content-wrapper">
<a href="{{url('genero/create')}}">Creación Genero</a>
<div align="center">
    <table class="table table-bordered">
    <thead>
        <th align="center">ID</th>
        <th align="center">Genero</th>
    </thead>
     @forelse($genero as $g)
    <tbody>
        <td align="center">{{$g->id_generos}}</td>
        <td align="center">{{$g->descripcion_genero}}</td>
        <td align="center">{!!link_to_route('genero.edit', $title = 'Actualizar', $parameter = $g->id_generos, $attributes = ['class'=>'btn btn-warning']) !!}</td>    
    </tbody>
    @empty
    <h1>NO HAY DATOS</h1>
    @endforelse() 
</table>
    
</div>
</div>



@stop