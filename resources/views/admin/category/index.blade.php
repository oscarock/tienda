@extends('admin.template')

@section('content')
	<div class="container text-center">
	<h2>Categorias Registradas</h2>
	<br>
	<br>
	<a href="{{ route('category.create') }}" class="btn btn-success">Registrar Categoria</a>
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
				<th class="text-center">Nombre</th>
				<th class="text-center">Descripcion</th>
				<th class="text-center">Fecha Creado</th>
				<th class="text-center">Acciones</th>
			</tr>	
		</thead>
		<tbody>
			@foreach($categories as $category)
				<tr>
					<td class="text-center">{{ $category->name }}</td>
					<td class="text-center">{{ $category->description }}</td>
					<td class="text-center">{{ $category->created_at }}</td>
					<td class="text-center">
						<a href="{{ route('category.edit', $category) }}"><span class="glyphicon glyphicon-edit"></span></a>
						<br>
						<br>
						<form id="delete-form" action="{{ route('category.destroy', $category->id) }}" method="POST" style="display: block;">{{ csrf_field() }}
						<input name="_method" type="hidden" value="DELETE">	
						<button onClick="return confirm('Eliminar registro?')" class="btn btn-link"><span class="glyphicon glyphicon-trash"></span></button>
						</form>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>		
@stop
