@extends('layouts.principal')
@if(Session::has('message'))
<div class="alert alert-info alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  {{Session::get('message')}}
</div>
@endif

@section('content')

<div id="page-content-wrapper">
<a href="{{url('requisito/create')}}">Creación Requisito</a>
<div align="center">
    <table class="table table-bordered">
    <thead>
        <th align="center">ID</th>
        <th align="center">Requisito</th>
        <th align="center">Tipo Requisito</th>
    </thead>
     @forelse($requisito as $g)
    <tbody>
            <td align="center">{{$g->id_requisito}}</td>
            <td align="center">{{$g->descripcion_requisito}}</td>
            <td align="center">{{$g->descripcion_requisito}}</td>
            <td align="center">{!!link_to_route('requisito.edit', $title = 'Actualizar', $parameter = $g->id_requisito, $attributes = ['class'=>'btn btn-warning']) !!}</td>
    </tbody>
    @empty
    <h1>NO HAY DATOS</h1>
    @endforelse() 
</table>
    
</div>
</div>



@stop