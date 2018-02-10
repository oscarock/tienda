@extends('admin.template')

@section('content')
	<div class="container text-center">
		<h2>Registrar Producto</h2>
		<br>
		<br>
    <form class="form-horizontal" method="POST" action="{{ route('product.store') }}">
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

      <div class="form-group{{ $errors->has('price') ? ' has-error' : '' }}">
          <div class="col-md-6 col-md-offset-3">
              <input id="price" type="number" class="form-control" name="price" value="{{ old('price') }}" placeholder="Precio" required autofocus>

              @if ($errors->has('price'))
                  <span class="help-block">
                      <strong>{{ $errors->first('price') }}</strong>
                  </span>
              @endif
          </div>
      </div>

      <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
          <div class="col-md-6 col-md-offset-3">
          	<textarea class="form-control" rows="4" cols="50" name="image" placeholder="Link Imagen" required></textarea>
              
			@if ($errors->has('image'))
                  <span class="help-block">
                      <strong>{{ $errors->first('image') }}</strong>
                  </span>
              @endif
          </div>
      </div>

       <div class="form-group{{ $errors->has('state') ? ' has-error' : '' }}">
          <div class="col-md-6 col-md-offset-3">
              <select name="state" class="form-control">
              	<option value="1">Activo</option>
              	<option value="2">Inactivo</option>
              </select>

              @if ($errors->has('state'))
                  <span class="help-block">
                      <strong>{{ $errors->first('state') }}</strong>
                  </span>
              @endif
          </div>
      </div>

       <div class="form-group{{ $errors->has('category_id') ? ' has-error' : '' }}">
          <div class="col-md-6 col-md-offset-3">
              <select name="category_id" class="form-control" required>
              		<option value="">--Seleccionar--</option>
              	@foreach($categories as $category)
              		<option value="{{ $category->id }}">{{ $category->name }}</option>
              	@endforeach
              </select>

              @if ($errors->has('category_id'))
                  <span class="help-block">
                      <strong>{{ $errors->first('category_id') }}</strong>
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
