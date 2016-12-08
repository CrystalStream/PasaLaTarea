<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Pasa La Tarea</title>

	<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
</head>
<body>

	<nav class="navbar navbar-default">
	  <div class="container-fluid">
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a class="navbar-brand" href="#">Brand</a>
	    </div>

	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      <ul class="nav navbar-nav">
	        @if ( Auth::check() )
	        <li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
	          <ul class="dropdown-menu" role="menu">
	          	<li><a href="#">Mi cuenta</a></li>
	          	<li class="divider"></li>
	            <li><a href="#">Salir</a></li>
	          </ul>
	        </li>
	        @else
						<li><a href="{{ url('/login') }}">Login</a></li>
						<li><a href="{{ url('/register') }}">Registrate</a></li>
	        @endif
	      </ul>
	    </div>
	  </div>
	</nav>

	
	@yield('content')


	<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>