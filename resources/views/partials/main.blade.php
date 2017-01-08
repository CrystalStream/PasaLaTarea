<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Pasa La Tarea</title>

	<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/main.css') }}">
	<link rel="icon" type="image/png" href="{{ asset('img/favicon.png') }}" />
	<link href="https://fonts.googleapis.com/css?family=Londrina+Shadow" rel="stylesheet"> 

</head>
<body>
	<div class="wrapper">
		<nav class="navbar navbar-inverse has-no-margin-bot">
		  <div class="container-fluid">
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" href="/"><img src="{{ asset('img/brand.png')}}" alt="Brand" class="img-responsive" width="120"></a>
		    </div>

		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      <ul class="nav navbar-nav navbar-right">
		        @if ( Auth::check() )
		        <li class="dropdown">
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
		          <ul class="dropdown-menu" role="menu">
		          	<li><a href="#"><i class="fa fa-user fa-fw"></i>&nbsp;Mi cuenta</a></li>
		          	<li class="divider"></li>
		            <li><a href="{{ url('/logout') }}"><i class="fa fa-sign-out fa-fw"></i>&nbsp;Salir</a></li>
		          </ul>
		        </li>
		        @else
							<li><a href="#" data-toggle="modal" data-target="#modal-login">Login</a></li>
							<li><a href="{{ url('/register') }}">Registrate</a></li>
		        @endif
		      </ul>
		    </div>
		  </div>
		</nav>
		
		<div class="all-height">
			@yield('content')
		</div>

		<footer class="col-xs-12">
			<div class="container-fluid">
				<div class="flex-center-all">
					<p>Pasa La Tarea &copy;</p>
					<div class="flex-right">
						<ul class="social styless">
							<li><a href="#"><i class="fa fa-facebook-official"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</footer>

		<div class="modal fade" id="modal-login">
		  <div class="modal-dialog">
		    <div class="modal-content">
		      <div class="modal-body">
			      <div class="row has-margin-top">
		      		<div class="col-xs-12 col-md-6 has-margin-top flex-vertical">
		      			<div class="col-xs-12">
									<button class="btn btn-primary btn-block">
										<div class="icon-btn">
											<i class="fa fa-facebook"></i>
										</div>
										Ingresa con Facebook
									</button>
		      			</div>
		      			<div class="col-xs-12 has-margin-top to-end">
									<button class="btn btn-info btn-block">
										<div class="icon-btn">
											<i class="fa fa-twitter"></i>
										</div>
										Ingresa con Twitter
									</button>
		      			</div>
		      			<p class="hidden-xs has-margin-top has-margin-bot">* Solo tomaremos tu correo electronico y tu nombre de usuario,
									creemos en la confidencialidad de los datos. No publicamos nada en ningun muro </p>
		      		</div>
	      			<div class="col-xs-12 col-md-6 has-left-top-borde">
	      				<h3>Ya tienes una cuenta? Ingresa con tu email y contrasena</h3>
	      				{!!Form::open(array('url' => '/login', 'method' => 'POST', 'class' => 'has-margin-top'))!!}
									<div class="form-group">
									<label> Email: </label>
										<div class="input-group">
											<div class="input-group-addon">
												<i class="fa fa-user"></i>
											</div>
											{!!Form::text('email',null,array('class' => 'form-control', 'placeholder' => 'Email'))!!}
										</div>
									</div>
									<div class="form-group">
									<label> Contrasena</label>
										<div class="input-group">
											<div class="input-group-addon">
												<i class="fa fa-lock"></i>
											</div>
											{!!Form::password('password',array('class' => 'form-control', 'placeholder' => 'Password'))!!}
										</div>
									</div>
									<div class="form-group">
										{!!Form::submit('Entrar', array('class' => 'btn btn-success btn-block'))!!}
									</div>
								{!!Form::close()!!}
	      			</div>
	      		</div>
		      </div>
		    </div>
		  </div>
		</div>
	</div>

	<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="https://unpkg.com/scrollreveal@3.3.2/dist/scrollreveal.min.js"></script>
	<script src="{{ asset('/js/app.js') }}"></script>
</body>
</html>