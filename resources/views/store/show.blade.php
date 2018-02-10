@extends('store.template')

@section('content')
	<div class="container">
		<div class="row">
			<header class="col-md-12 text-center">
				<h1>Detalle del Producto</h1>
				<br>
			</header>
				<div class="col-md-6 col-md-offset-3">
					<div class="panel panel-default">
					  <div class="panel-heading">
					    <h2 class="panel-title text-center">{{ $product->name }}</h2>
					  </div>
					  <div class="panel-body">
					    <p class="text-justify">{{ $product->description }}</p>
					    <br>
					    <img class="img-responsive center-block" src="{{ $product->image }}" width="250">
					    <br>
					    <h4 class="text-center">Precio: ${{ number_format($product->price,3) }}</h4>
					    <br>
					    <p class="text-center">
						  	<a class="btn btn-warning" href="{{ route('inicio') }}">Regresar</a>
						  	<a class="btn btn-success" href="{{ route('cart-add', $product) }}">La quiero</a>
						  </p>
						</div>
					</div>
				</div>
		</div>
	</div>				
@stop	