<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <link rel="shortcut icon" href="img/logo1.png" />
  <title>@yield('title') | APABENA</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Bootstrap 3 template for corporate business" />
  @include('partials._css')
  @yield('style')
</head>
<body>



<div id="wrapper">
	<!-- start header -->
	@include('partials._header')
	<!-- end header -->
	@yield('content')
	
	@include('partials._footer')
</div>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>

<!-- Placed at the end of the document so the pages load faster -->
@include('partials._js')
@yield('javascript')

	
</body>
</html>