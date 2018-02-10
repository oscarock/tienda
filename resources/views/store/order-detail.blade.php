@extends('store.template')

@section('content')
	<div class="container text-center">
		<h2>Detalles del Pedido.</h2>
		<br>
		<br>

		<h3>Datos del Usuario.</h3>
		<table class="table table-striped table-hover table-bordered">
			<tr><td>Nombre:</td><td>{{ Auth::user()->name . " " . Auth::user()->last_name }}</td></tr>
			<tr><td>Email:</td><td>{{ Auth::user()->email }}</td></tr>
			<tr><td>Direccion:</td><td>{{ Auth::user()->address }}</td></tr>
		</table>
		<hr>
		<h3>Datos del Pedido.</h3>
		<table class="table table-striped table-hover table-bordered">
			<thead>
				<tr>
					<th>Producto</th>
					<th>Precio</th>
					<th>Cantidad</th>
					<th>Subtotal</th>
				</tr>
			</thead>
			<tbody>
				@foreach($cart as $item)
					<tr>
						<td>{{ $item->name }}</td>
						<td>{{ number_format($item->price, 3) }}</td>
						<td>{{ $item->quantity }}</td>
						<td>{{ number_format($item->price * $item->quantity, 3) }}</td>
					</tr>
				@endforeach
			</tbody>
		</table>
		<hr>
			<h3>Total: ${{ number_format($total, 3) }}</h3>
			<br>
			<p>
				<a href="{{ route('inicio') }}" class="btn btn-warning">Regresar</a>
				<a href="#" class="btn btn-success">Pagar</a>				
			</p>	
	</div>	
@stop