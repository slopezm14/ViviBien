@extends('layouts.principal')
@if(Session::has('message'))
<div class="alert alert-info alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  {{Session::get('message')}}
</div>
@endif

@section('content')
<a href="{{url('municipio/create')}}">Creación Tipo Ingreso</a>
<div id="page-content-wrapper">
<div align="center">
    <table class="table table-bordered">
    <thead>
        <th align="center">ID</th>
        <th align="center">Tipo Ingreso</th>
    </thead>
     @forelse($tipoingreso as $t)
    <tbody>
        <td align="center">{{$t->id_tipo_ingreso}}</td>
        <td align="center">{{$t->descripcion_ingreso}}</td>
        <td align="center"></td>
        <td align="center">{!!link_to_route('tipoingreso.edit', $title = 'Actualizar', $parameter = $t->id_tipo_ingreso, $attributes = ['class'=>'btn btn-warning']) !!}</td>    
    </tbody>
    @empty
    <h1>NO HAY DATOS</h1>
    @endforelse() 
</table>
    
</div>
</div>



@stop