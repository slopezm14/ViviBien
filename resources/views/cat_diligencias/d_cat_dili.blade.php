@extends('layouts.principal')
@if(Session::has('message'))
<div class="alert alert-info alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  {{Session::get('message')}}
</div>
@endif

@section('content')

<div id="page-content-wrapper">
<a href="{{url('municipio/create')}}">Creación Categoria de Diligencia</a>
<div align="center">
    <table class="table table-bordered">
    <thead>
        <th align="center">ID</th>
        <th align="center">Descripcion Diligencias</th>
        <th align="center">Unidad</th>
    </thead>
     @forelse($diligencias as $d)
    <tbody>
        <td align="center">{{$d->id_diligencia}}</td>
        <td align="center">{{$d->descripcion_diligencia}}</td>
        <td align="center">{{$d->descripcion_unidad}}</td>
        <td align="center">{!!link_to_route('categodili.edit', $title = 'Actualizar', $parameter = $d->id_diligencia, $attributes = ['class'=>'btn btn-warning']) !!}</td>    
    </tbody>
    @empty
    <h1>NO HAY DATOS</h1>
    @endforelse() 
</table>
    
</div>
</div>



@stop