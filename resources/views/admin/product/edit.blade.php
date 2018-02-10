@extends('admin.template')

@section('content')
	<div class="container text-center">
		<h2>Editar Producto</h2>
		<br>
		<br>
    <form class="form-horizontal" method="POST" action="{{ route('product.update', $product->id) }}">
    <input name="_method" type="hidden" value="PUT">
        {{ csrf_field() }}

      <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
          <div class="col-md-6 col-md-offset-3">
              <input id="name" type="text" class="form-control" name="name" value="{{ $product->name }}" placeholder="Nombre" required autofocus>

              @if ($errors->has('name'))
                  <span class="help-block">
                      <strong>{{ $errors->first('name') }}</strong>
                  </span>
              @endif
          </div>
      </div>

      <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
          <div class="col-md-6 col-md-offset-3">
            <textarea class="form-control" rows="4" cols="50" name="description" placeholder="Descripcion">{{ $product->description }}</textarea>
              
              @if ($errors->has('description'))
                  <span class="help-block">
                      <strong>{{ $errors->first('description') }}</strong>
                  </span>
              @endif
          </div>
      </div>

      <div class="form-group{{ $errors->has('price') ? ' has-error' : '' }}">
          <div class="col-md-6 col-md-offset-3">
              <input id="price" type="number" class="form-control" name="price" value="{{ $product->price }}" placeholder="Precio" required autofocus>

              @if ($errors->has('price'))
                  <span class="help-block">
                      <strong>{{ $errors->first('price') }}</strong>
                  </span>
              @endif
          </div>
      </div>

      <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
          <div class="col-md-6 col-md-offset-3">
            <textarea class="form-control" rows="4" cols="50" name="image" placeholder="Link Imagen" required>{{ $product->image }}</textarea>
              
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
                <option value="1" {{ $product->state == 1 ? 'selected="selected"' : ''}}>Activo</option>
                <option value="2" {{ $product->state == 2 ? 'selected="selected"' : ''}}>Inactivo</option>
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
                  <option value="{{ $category->id }}" {{ $category->id == $product->category_id ? 'selected="selected"' : ''}}>{{ $category->name }}</option>
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
                  Editar
              </button>
          </div>
      </div>
    </form>
  </div>  	
@stop
