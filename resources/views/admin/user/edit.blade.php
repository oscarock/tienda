@extends('admin.template')

@section('content')
<div class="container text-center">
    <h2>Registrar Usuarios</h2>
    <br>
    <br>
      <form class="form-horizontal" method="POST" action="{{ route('user.update', $user->id) }}">
        <input name="_method" type="hidden" value="PUT">
          {{ csrf_field() }}

          <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
              <div class="col-md-6 col-md-offset-3">
                  <input id="name" type="text" class="form-control" name="name" placeholder="Nombre" value="{{ $user->name }}" required autofocus>

                  @if ($errors->has('name'))
                      <span class="help-block">
                          <strong>{{ $errors->first('name') }}</strong>
                      </span>
                  @endif
              </div>
          </div>

          <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
              <div class="col-md-6 col-md-offset-3">
                  <input id="last_name" type="text" class="form-control" name="last_name" placeholder="Apellido" value="{{ $user->last_name }}" required autofocus>

                  @if ($errors->has('last_name'))
                      <span class="help-block">
                          <strong>{{ $errors->first('last_name') }}</strong>
                      </span>
                  @endif
              </div>
          </div>

          <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
              <div class="col-md-6 col-md-offset-3">
                  <input id="email" type="email" class="form-control" name="email" placeholder="Email" value="{{ $user->email }}" required>

                  @if ($errors->has('email'))
                      <span class="help-block">
                          <strong>{{ $errors->first('email') }}</strong>
                      </span>
                  @endif
              </div>
          </div>

          <div class="form-group{{ $errors->has('profile') ? ' has-error' : '' }}">
              <div class="col-md-6 col-md-offset-3">
                  <select name="profile" class="form-control">
                    <option value="">--Seleccionar--</option>
                    <option value="admin" {{ $user->profile == 'admin' ? 'selected="selected"' : ''}}>Administrador</option>
                    <option value="user" {{ $user->profile == 'user' ? 'selected="selected"' : ''}}>Usuario</option>
                  </select>

                  @if ($errors->has('profile'))
                      <span class="help-block">
                          <strong>{{ $errors->first('profile') }}</strong>
                      </span>
                  @endif
              </div>
          </div>

           <div class="form-group{{ $errors->has('active') ? ' has-error' : '' }}">
              <div class="col-md-6 col-md-offset-3">
                  <select name="active" class="form-control">
                    <option value="">--Seleccionar--</option>
                    <option value="1" {{ $user->active == 1 ? 'selected="selected"' : ''}}>Activo</option>
                    <option value="2" {{ $user->active == 2 ? 'selected="selected"' : ''}}>Inactivo</option>
                  </select>

                  @if ($errors->has('active'))
                      <span class="help-block">
                          <strong>{{ $errors->first('active') }}</strong>
                      </span>
                  @endif
              </div>
          </div>


          <div class="form-group{{ $errors->has(' address') ? ' has-error' : '' }}">
              <div class="col-md-6 col-md-offset-3">
                  <input id="address" type="text" class="form-control" name="address" placeholder="Direccion" value="{{ $user->address }}" required autofocus>

                  @if ($errors->has('address'))
                      <span class="help-block">
                          <strong>{{ $errors->first('address') }}</strong>
                      </span>
                  @endif
              </div>
          </div>

          <div class="form-group">
              <div class="col-md-6 col-md-offset-3">
                  <button type="submit" class="btn btn-success">
                      Register
                  </button>
              </div>
          </div>
      </form>
  </div>    
@endsection