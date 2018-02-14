@extends('admin.template')

@section('content')
	<div class="container text-center">
		<h2>Ordenes Registradas</h2>
		<br>
		<br>
		<table class="table table-striped table-hover table-bordered">
			<thead>
				<tr>
					<th class="text-center">ID</th>
					<th class="text-center">Numero de Orden</th>
					<th class="text-center">Subtotal</th>
					<th class="text-center">Estado Transaccion</th>
					<th class="text-center">Tipo de Tarjeta</th>
					<th class="text-center">Tipo de Pago</th>
					<th class="text-center">Fecha de la Compra</th>
				</tr>	
			</thead>
			<tbody>
				@foreach($orders as $order)
					<tr>
						<td class="text-center">{{ $order->id }}</td>
						<td class="text-center">{{ $order->order_number }}</td>
						<td class="text-center">{{ $order->subtotal }}</td>
						<td class="text-center">{{ $order->state_transaccion }}</td>
						<td class="text-center">{{ $order->type_card }}</td>
						<td class="text-center">{{ $order->type_pay }}</td>
						<td class="text-center">{{ $order->date_pay }}</td>
					</tr>
				@endforeach
			</tbody>
		</table>
		<br>
		<br>
		<hr>
		<h2>Detalle Ordenes</h2>
		<br>
		<br>
		<table class="table table-striped table-hover table-bordered">
			<thead>
				<tr>
					<th class="text-center">Precio</th>
					<th class="text-center">Cantidad</th>
					<th class="text-center">Orden ID</th>
					<th class="text-center">Producto ID</th>
					<th class="text-center">Fecha Creado</th>
				</tr>	
			</thead>
			<tbody>
				@foreach($orderItems as $orderItem)
					<tr>
						<td class="text-center">{{ $orderItem->price }}</td>
						<td class="text-center">{{ $orderItem->quantity }}</td>
						<td class="text-center">{{ $orderItem->order_id }}</td>
						<td class="text-center">{{ $orderItem->product_id }}</td>
						<td class="text-center">{{ $orderItem->created_at }}</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	<div>			
@stop
