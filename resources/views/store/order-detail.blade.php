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
						<td>{{ $item->price }}</td>
						<td>{{ $item->quantity }}</td>
						<td>{{ $item->price * $item->quantity }}</td>
					</tr>
				@endforeach
			</tbody>
		</table>
		<hr>
			<h3>Total: ${{ $total, 3 }}</h3>
			<br>
			@php
				$api = "4Vj8eK4rloUd272L48hsrarnUA";
				$merchantID = "508029";
				$references = rand();
				$amount = $total;
				$signature = md5($api."~".$merchantID."~".$references."~".$amount."~USD");
			@endphp
			<p>
				<a href="{{ route('inicio') }}" class="btn btn-warning">Regresar</a>
				<form method="post" action="https://sandbox.checkout.payulatam.com/ppp-web-gateway-payu/">
				  <input name="merchantId"    type="hidden"  value="{{$merchantID}}"   >
				  <input name="accountId"     type="hidden"  value="512321" >
				  <input name="description"   type="hidden"  value="Mi Tienda"  >
				  <input name="referenceCode" type="hidden"  value="{{$references}}" >
				  <input name="amount"        type="hidden"  value="{{$amount}}"   >
				  <input name="tax"           type="hidden"  value="19"  >
				  <input name="taxReturnBase" type="hidden"  value="19" >
				  <input name="currency"      type="hidden"  value="USD" >
				  <input name="signature"     type="hidden"  value="{{$signature}}"  >
				  <input name="test"          type="hidden"  value="1" >
				  <input name="buyerEmail"    type="hidden"  value="{{ Auth::user()->email }}" >
				  <input name="responseUrl"    type="hidden"  value="{{'http://127.0.0.1:8000/responsePayu'}}" >
				  <input name="confirmationUrl"    type="hidden"  value="{{ '/confirmPayu' }}" >
				  <input name="Submit"        type="submit"  value="Pagar" class="btn btn-success">
				</form>			
			</p>	
	</div>	
@stop