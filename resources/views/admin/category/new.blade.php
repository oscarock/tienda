@extends('admin.template')

@section('content')
	<div class="container text-center">
		<h2>Registrar Categoria</h2>
		<br>
		<br>
    <form class="form-horizontal" method="POST" action="{{ route('category.store') }}">
        {{ csrf_field() }}

      <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
          <div class="col-md-6 col-md-offset-3">
              <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Nombre" required autofocus>

              @if ($errors->has('name'))
                  <span class="help-block">
                      <strong>{{ $errors->first('name') }}</strong>
                  </span>
              @endif
          </div>
      </div>

      <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
          <div class="col-md-6 col-md-offset-3">
          	<textarea class="form-control" rows="4" cols="50" name="description" placeholder="Descripcion"></textarea>
              
			@if ($errors->has('description'))
                  <span class="help-block">
                      <strong>{{ $errors->first('description') }}</strong>
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
@stop
