
<!DOCTYPE HTML>
<html>

@include('templates.partials._head', [])

<body>

<a name="ancre"></a>

<!-- CACHE -->
<div class="cache"></div>

<!-- HEADER -->

@include('templates.partials._header', [])

<!-- NAVBAR -->

@include('templates.partials._navbar', [])




<!-- PORTFOLIO -->

	@yield('content')	


	@include('templates.partials._footer', [])



<!-- SCRIPT -->

	@include('templates.partials._scripts', [])


</body>


</html>
