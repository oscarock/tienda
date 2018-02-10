@extends('store.template')

@section('content')
	@if(count($cart))
		<div class="container text-center">
		<header class="col-md-12 text-center">
			<h1>Mis Compras</h1>
			<br>
		</header>
		<a href="{{ route('cart-trash') }}" class="btn btn-danger">Vaciar Carrito.</a>
		<br>
		<br>
		<table class="table table-striped table-hover table-bordered">
			<thead>
				<tr>
					<th>Imagen</th>
					<th>Producto</th>
					<th>Precio</th>
					<th>Cantidad</th>
					<th>Subtotal</th>
					<th>Quitar</th>
				</tr>
			</thead>
			<tbody>
				@foreach($cart as $item)
					<tr>
						<td><img src="{{ $item->image }}" width="50"></td>
						<td>{{ $item->name }}</td>
						<td>{{ number_format($item->price, 3) }}</td>
						<td>
						<input type="number" min="1" max="100" value="{{ $item->quantity }}" id="product_{{ $item->id }}">
						<a href="#" class="btn-update-item" data-href="{{ route('cart-update', $item) }}" data-id="{{ $item->id }}"><span class="glyphicon glyphicon-refresh"></span></a>
						</td>
						<td>{{ number_format($item->price * $item->quantity, 3) }}</td>
						<td>
							<a href="{{ route('cart-delete', $item->id) }}" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></a>
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
		<br>
		<hr>
			<h3>Total: ${{ number_format($total, 3) }}</h3>
			<br>
		<p>
			<a href="{{ route('inicio') }}" class="btn btn-primary">Seguir Comprando</a>
			<a href="{{ route('order-detail') }}" class="btn btn-success">Continuar</a>
		</p>
	@else
		<div class="container text-center">
		<header class="col-md-12 text-center">
			<h1>No hay articulos en tu carrito :(</h1>
			<br>
		</header>
		</div>
	@endif		
@stop