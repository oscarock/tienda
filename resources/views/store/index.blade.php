@extends('store.template')

@section('content')
	<div class="products">
		@foreach($products as $product)
			<div class="product">
				<h3>{{ $product->name }}</h3>
				<img src="{{ $product->image }}" width="250">
				<div class="product-info">
					<p>{{ $product->extract }}</p>
					<p>Precio: ${{ number_format($product->price,3) }}</p>
					<p>
						<a href="#">La quiero</a>
						<a href="{{ route('product-detail', $product->slug) }}">Ver mas</a>
					</p>
				</div>
			</div>
		@endforeach	
	</div>
@stop	