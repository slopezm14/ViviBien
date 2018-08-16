@extends('layouts.principal')
@if(Session::has('message'))
<div class="alert alert-info alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  {{Session::get('message')}}
</div>
@endif

@section('content')

<div id="page-content-wrapper">
<a href="{{url('relacionfam/create')}}">Creación Relacion Familiar</a>
<div align="center">
    <table class="table table-bordered">
    <thead>
        <th align="center">ID</th>
        <th align="center">Relación Familiar</th>
    </thead>
     @forelse($relacion as $r)
    <tbody>
        <td align="center">{{$r->id_relacion_familiar}}</td>
        <td align="center">{{$r->descripcion}}</td>
        <td align="center">{!!link_to_route('relacionfam.edit', $title = 'Actualizar', $parameter = $r->id_relacion_familiar, $attributes = ['class'=>'btn btn-warning']) !!}</td>    
    </tbody>
    @empty
    <h1>NO HAY DATOS</h1>
    @endforelse() 
</table>
    
</div>
</div>



@stop