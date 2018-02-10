@extends('admin.template')

@section('content')
	<div class="container text-center">
	<h2>Usuarios Registrados</h2>
	<br>
	<br>
	<a href="{{ route('user.create') }}" class="btn btn-success">Registrar Usuario</a>
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
				<th class="text-center">Apellido</th>
				<th class="text-center">Email</th>
				<th class="text-center">Perfil</th>
				<th class="text-center">Estado</th>
				<th class="text-center">Direccion</th>
				<th class="text-center">Fecha Creacion</th>
				<th class="text-center">Acciones</th>
			</tr>	
		</thead>
		<tbody>
			@foreach($users as $user)
				<tr>
					<td class="text-center">{{ $user->name }}</td>
					<td class="text-center">{{ $user->last_name }}</td>
					<td class="text-center">{{ $user->email }}</td>
					<td class="text-center">{{ $user->profile}}</td>
					<td class="text-center">{{ ($user->active == 1) ? 'Activo' : 'Inactivo' }}</td>
					<td class="text-center">{{ $user->address }}</td>
					<td class="text-center">{{ $user->created_at }}</td>
					<td class="text-center">
						<a href="{{ route('user.edit', $user) }}"><span class="glyphicon glyphicon-edit"></span></a>
						<br>
						<br>
						<form id="delete-form" action="{{ route('user.destroy', $user->id) }}" method="POST" style="display: block;">{{ csrf_field() }}
						<input name="_method" type="hidden" value="DELETE">	
						<button onClick="return confirm('Eliminar registro?')" class="btn btn-link"><span class="glyphicon glyphicon-trash"></span></button>
						</form>	
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>		
@stop
