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
        {{ Form::hidden('numero', $hidden) }}
        {{ Form::hidden('numero', $choose) }}
    <table class="table table-bordered">
    <thead>
        <th align="center">ID</th>
        <th align="center">Descripcion Diligencias</th>
    </thead>
     @forelse($diligencias as $d)
    <tbody>
        <td align="center">{{$d->id_diligencia}}</td>
        <td align="center">{{$d->descripcion_diligencia}}</td>
        <td align="center">{!!link_to_route('expdili.edit', $title = 'Checkear', $parameter = $d->id_diligencia, $attributes = ['class'=>'btn btn-warning']) !!}</td>    
    </tbody>
    @empty
    <h1>NO HAY DATOS</h1>
    @endforelse() 
</table>
    
</div>
</div>



@stop