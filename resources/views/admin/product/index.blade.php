@extends('admin.template')

@section('content')
	<div class="container text-center">
	<h2>Productos Registrados</h2>
	<br>
	<br>
	<a href="{{ route('product.create') }}" class="btn btn-success">Registrar Producto</a>
	<br>
	<br>
	@if(\Session::has('message'))
		<div class="alert alert-dismissible alert-success">
  		<button type="button" class="close" data-dismiss="alert">&times;</button>
  		<h3>{{ \Session::get('message') }}</h3>
		</div>
	@endif
	<br>
	<br>
	<table class="table table-striped table-hover table-bordered">
		<thead>
			<tr>
				<th class="text-center">Imagen</th>
				<th class="text-center">Nombre</th>
				<th class="text-center">Descripcion</th>
				<th class="text-center">Precio</th>
				<th class="text-center">Estado</th>
				<th class="text-center">Categoria</th>
				<th class="text-center">Fecha Creado</th>
				<th class="text-center">Acciones</th>
			</tr>	
		</thead>
		<tbody>
			@foreach($products as $product)
				<tr>
					<td class="text-center"><img src="{{ $product->image }}" width="50"></td>
					<td class="text-center">{{ $product->name }}</td>
					<td class="text-center">{{ $product->description }}</td>
					<td class="text-center">{{ $product->price }}</td>
					<td class="text-center">{{ ($product->state == 1) ? "Activo" : "Inactivo"  }}</td>
					<td class="text-center">{{ $product->category_id }}</td>
					<td class="text-center">{{ $product->created_at }}</td>
					<td>
						<a href="{{ route('product.edit', $product) }}"><span class="glyphicon glyphicon-edit"></span></a>
						<br>
						<br>
						<form id="delete-form" action="{{ route('product.destroy', $product->id) }}" method="POST" style="display: block;">{{ csrf_field() }}
						<input name="_method" type="hidden" value="DELETE">	
						<button onClick="return confirm('Eliminar registro?')" class="btn btn-link"><span class="glyphicon glyphicon-trash"></span></button>
						</form>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>		
@stop
