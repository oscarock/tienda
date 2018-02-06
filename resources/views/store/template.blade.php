<!DOCTYPE html>
<html>
<head>
	<title>@yield('title', 'Tienda Virtual')</title>
	<link rel="stylesheet" type="text/css" href="https://bootswatch.com/3/darkly/bootstrap.min.css">
</head>
<body>
	@include('store.partials.nav')

	@yield('content') 

	@include('store.partials.footer')

	<script
	  src="http://code.jquery.com/jquery-3.3.1.min.js"
	  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
	  crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
</body>
</html>