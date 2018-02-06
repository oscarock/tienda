<h1>Listado Productos</h1>
@foreach($products as $product)
	<h3>{{ $product->name }}</h3>
	<img src="{{ $product->image }}" width="250">
@endforeach