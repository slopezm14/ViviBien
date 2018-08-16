@extends('layouts.principal')
@if(Session::has('message'))
<div class="alert alert-info alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  {{Session::get('message')}}
</div>
@endif

@section('content')

<div id="page-content-wrapper">
<a href="{{url('tipotelefono/create')}}">Creación Tipo Telefono</a>
<div align="center">
    <table class="table table-bordered">
    <thead>
        <th align="center">ID</th>
        <th align="center">Tipo Telefono</th>
    </thead>
     @forelse($tipostelefonos as $t)
    <tbody>
        <td align="center">{{$t->id_tipotelefono}}</td>
        <td align="center">{{$t->descripcion_tipotelefono}}</td>
        <td align="center">{!!link_to_route('tipotelefono.edit', $title = 'Actualizar', $parameter = $t->id_tipotelefono, $attributes = ['class'=>'btn btn-warning']) !!}</td>    
    </tbody>
    @empty
    <h1>NO HAY DATOS</h1>
    @endforelse() 
</table>
    
</div>
</div>



@stop