@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Primer Nombre</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('nombre2') ? ' has-error' : '' }}">
                            <label for="nombre2" class="col-md-4 control-label">Segundo Nombre</label>

                            <div class="col-md-6">
                                <input id="nombre2" type="text" class="form-control" name="nombre2" value="{{ old('nombre2') }}" autofocus>

                                @if ($errors->has('nombre2'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nombre2') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('apellido1') ? ' has-error' : '' }}">
                            <label for="nombre2" class="col-md-4 control-label">Segundo Nombre</label>

                            <div class="col-md-6">
                                <input id="apellido1" type="text" class="form-control" name="apellido1" value="{{ old('apellido1') }}" autofocus>

                                @if ($errors->has('apellido1'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('apellido1') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('apellido2') ? ' has-error' : '' }}">
                            <label for="apellido2" class="col-md-4 control-label">Segundo Nombre</label>

                            <div class="col-md-6">
                                <input id="apellido2" type="text" class="form-control" name="apellido2" value="{{ old('apellido2') }}" autofocus>

                                @if ($errors->has('apellido2'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('apellido2') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('id_rol') ? ' has-error' : '' }}">
                            <label for="id_rol" class="col-md-4 control-label">Rol</label>
                            <select class="form-control" id="sel1">
                                @foreach ($roles as $rol)
                                        <option value={{$rol->id_rol}}>{{$rol->descripcion_rol}}</option>
                                @endforeach
                            </select>
                            <div class="col-md-6">
                                
                                @if ($errors->has('id_rol'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('id_rol') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('id_unidad') ? ' has-error' : '' }}">
                            <label for="id_unidad" class="col-md-4 control-label">Rol</label>
                            <select class="form-control" id="sel1">
                                @foreach ($unidades as $unidad)
                                        <option value={{$unidad->id_unidad}}>{{$unidad->descripcion_unidad}}</option>
                                @endforeach
                            </select>
                            <div class="col-md-6">
                                
                                @if ($errors->has('id_unidad'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('id_unidad') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('id_genero') ? ' has-error' : '' }}">
                            <label for="id_genero" class="col-md-4 control-label">Rol</label>
                            <select class="form-control" id="sel1">
                                @foreach ($generos as $genero)
                                        <option value={{$genero->id_genero}}>{{$genero->descripcion_genero}}</option>
                                @endforeach
                            </select>
                            <div class="col-md-6">
                                
                                @if ($errors->has('id_genero'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('id_genero') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
