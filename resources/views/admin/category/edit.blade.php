@extends('admin.template')

@section('content')
	<div class="container text-center">
		<h2>Editar Categoria</h2>
		<br>
		<br>
    <form class="form-horizontal" method="POST" action="{{ route('category.update', $category->id) }}">
    <input name="_method" type="hidden" value="PUT">
        {{ csrf_field() }}

      <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
          <div class="col-md-6 col-md-offset-3">
              <input id="name" type="text" class="form-control" name="name" value="{{ $category->name }}" placeholder="Nombre" required autofocus>

              @if ($errors->has('name'))
                  <span class="help-block">
                      <strong>{{ $errors->first('name') }}</strong>
                  </span>
              @endif
          </div>
      </div>

      <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
          <div class="col-md-6 col-md-offset-3">
          	<textarea class="form-control" rows="4" cols="50" name="description" placeholder="Descripcion">{{ $category->description }}</textarea>
              
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
                  Editar
              </button>
          </div>
      </div>
    </form>
  </div>  	
@stop
