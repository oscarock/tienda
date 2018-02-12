@extends('store.template')

@section('content')
	<div class="container">
		<div class="row">
			<header class="col-md-12 text-center">
				<h1>Productos</h1>
				<br>
			</header>
			<br>
			<br>
			<br>
			<br>
			<br>
			@if(\Session::has('message'))
				<div class="alert alert-dismissible alert-success">
		  			<button type="button" class="close" data-dismiss="alert">&times;</button>
		  			<h3 class="text-center">{{ \Session::get('message') }}</h3>
				</div>
			@endif
			@foreach($products as $product)
				<div class="col-md-4">
					<div class="panel panel-default">
					  <div class="panel-heading">
					    <h2 class="panel-title text-center">{{ $product->name }}</h2>
					  </div>
					  <div class="panel-body">
					    <p class="text-justify">{{ $product->description }}</p>
					    <br>
					    <img class="img-responsive center-block" src="{{ $product->image }}" width="250">
					    <br>
					    <h4 class="text-center">Precio: ${{ $product->price }}</h4>
					    <br>
					    <p class="text-center">
						  	<a class="btn btn-info" href="{{ route('product-detail', $product->id) }}">Ver mas</a>
						  	<a class="btn btn-success" href="{{ route('cart-add', $product) }}">La quiero</a>
						  </p>
					  </div>
					</div>
				</div>
			@endforeach
		</div>
	</div>				
@stop	

