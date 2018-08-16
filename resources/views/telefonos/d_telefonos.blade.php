@extends('layouts.principal')
@if(Session::has('message'))
<div class="alert alert-info alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  {{Session::get('message')}}
</div>
@endif

@section('content')

<div id="page-content-wrapper">
<div align="center">
    <table class="table table-bordered">
    <thead>
        <th align="center">ID</th>
        <th align="center">Numero</th>
        <th align="center">Nombre Desarrollador</th>
        <th align="center">Tipo Telefono</th>
    </thead>
     @forelse($telefonos as $t)
    <tbody>
        <td align="center">{{$t->id_telefono}}</td>
        <td align="center">{{$t->numero_telefono}}</td>
        <td align="center">{{$t->nombre_desarrollador}}</td>
        <td align="center"></td>
        <td align="center">{!!link_to_route('telefono.edit', $title = 'Actualizar', $parameter = $t->id_telefono, $attributes = ['class'=>'btn btn-warning']) !!}</td>    
    </tbody>
    @empty
    <h1>NO HAY DATOS</h1>
    @endforelse() 
</table>
    
</div>
</div>



@stop