@extends('layouts.principal')
@if(Session::has('message'))
<div class="alert alert-info alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  {{Session::get('message')}}
</div>
@endif

@section('content')

<div id="page-content-wrapper">
<a href="{{url('destinosub/create')}}">Creación Destino de Subsidio</a>
<div align="center">
    <table class="table table-bordered">
    <thead>
        <th align="center">ID</th>
        <th align="center">Destino Subsidio</th>
    </thead>
     @forelse($destinos as $m)
    <tbody>
        <td align="center">{{$m->id_tipo_solicitud_subsidio}}</td>
        <td align="center">{{$m->descripcion}}</td>
        <td align="center">{!!link_to_route('destinosub.edit', $title = 'Actualizar', $parameter = $m->id_tipo_solicitud_subsidio, $attributes = ['class'=>'btn btn-warning']) !!}</td>    
    </tbody>
    @empty
    <h1>NO HAY DATOS</h1>
    @endforelse() 
</table>
    
</div>
</div>



@stop