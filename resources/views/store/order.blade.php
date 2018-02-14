@extends('store.template')

@section('content')
	<div class="container text-center">
		<h2>Mis Ordenes</h2>
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
	<div>			
@stop
