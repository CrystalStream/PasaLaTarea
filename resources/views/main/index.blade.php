@extends('partials.main')

@section('content')
<div class="container-fluid has-backgroung-img flex-center-all white-text">
	<img src="{{ asset('img/background.jpg') }}" alt="" class="back-img">
	<div class="above-100">
		<h1 class="white-text">Pasa La Tarea!!</h1>
		<p class="init-p">
			La plataforma hechas por estudiantes para estudiantes!
		</p>
		<p class="init-p">Unete a esta gran red de estudiantes y pasa todas tus materias con excelencia!</p>
	</div>
</div>
<div class="container text-center reveal">
	<div class="row">
		<div class="col-xs-12 header-section">
			<h2>¿Como funciona?</h2>
		</div>
	</div>
	<div class="row">
		<div class="flex-strech-all has-margin-top">
			<div class="col-xs-12 col-sm-6 col-md-3 how-it-work">
				<div class="col-xs-12 icon-work red">
					<i class="fa fa-search fa-4x"></i>
					<p>Busca tu tarea</p>
				</div>
				<div class="col-xs-12 text-center has-margin-top">
					<ul class="styless list-work">
						<li>Busca por diferentes parametros o palabras clave:</li>
						<li>Por Materia</li>
						<li>Por Semestre</li>
						<li>Por Carrera</li>
						<li>
							<button class="btn btn-primary btn-block">Empezar a Buscar</button>
						</li>
					</ul>
				</div>
			</div>

			<div class="col-xs-12 col-sm-6 col-md-3 how-it-work">
				<div class="col-xs-12 icon-work purple">
					<i class="fa fa-files-o fa-4x"></i>
					<p>Haz tu trabajo</p>
				</div>
				<div class="col-xs-12 text-center has-margin-top text-justify">
					<p>¿Ya encontraste lo que buscabas? <br>
						Al ser una plataforma hecha por y para estudiantes
						pensamos que la revision de tareas tendria que ser justa,
						Si encuentras el trabajo que te dejaron justamente igual
						sientete libre de copiar y pegar!
						Si dejan las mismas tareas, entonces que reciban los mismo trabajos!
					</p>
					<small>*Puede que para algunos trabajos tengas que hecharle de tu propia salsa</small>
				</div>
			</div>

			<div class="col-xs-12 col-sm-6 col-md-3 how-it-work">
				<div class="col-xs-12 icon-work green">
					<i class="fa fa-check fa-4x"></i>
					<p>Preparate para sacar 100</p>
				</div>
				<div class="col-xs-12 text-center has-margin-top text-justify">
					<p>¡FELICIDADES! <br>
						¿Listo para pedir ese regalo a tus padres por ese gran 100?
						Todas las tareas estan calificadas por estudiantes que ya las usaron, asi que ten confianza y prepara
						la fiesta	si la tarea que buscas tiene un calificacion alta!. <br>
						Recuerda calificar la tarea que usaste (sirva o no) para que los demas tambien puedan festejar! ( o no xD).
					</p>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container-fluid has-margin-top white-back text-center has-padding-bot reveal">
	<div class="container">
			<div class="row">
		<div class="col-xs-12 header-section">
			<h2>Gana por tus tareas!</h2>
		</div>
		<div class=" col-xs-12 has-margin-top">
			<div class="col-xs-12 col-md-6 flex-center-all">
				<div class="row">
					<div class="col-xs-12">
						<i class="fa fa-usd fa-4x"></i>
					</div>
					<div class="col-xs-12">
						<ul class="styless list-work">
							<li><h4>¿Tienes trabajos con 100?</h4></li>
							<li><h4>¿Eres de fuera pero chambeador y ocupas dinero?</h4></li>
							<li><h4>¿No lloras por que te copien tu trabajo?</h4></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-6 has-left-top-borde text-justify">
				<h3 class="text-center">Esta es tu oportunidad!!!!</h3>
				<p>Registrate, sube tus tareas y puedes recibir donaciones, aparte de bonos si tus trabajos son 
				los que tienen mas rate durante el mes
				<br>
				Lo unico que tienes que hacer es lo que ya estas haciendo! Ayuda a los demas subiendo tus tareas</p>
				<a href="{{ url('/register') }}" class="btn btn-success btn-block">Registrarme y empezar a subir</a>
			</div>
		</div>
	</div>
	</div>
</div>

<div class="container text-center reveal">
	<div class="row">
		<div class="col-xs-12 header-section">
			<h2>Nuestros Usuarios</h2>
		</div>
	</div>
	<div class="flex-strech-all col-xs-12">
		<div class="col-xs-12 col-md-3 has-margin-top has-padding-bot our-users">
			<div class="col-xs-12 col-md-3">
				<img src="{{ asset('/img/avatar.png') }}" alt="" class="img-responsive img-our-users">
			</div>
			<div class="col-xs-12 col-md-7 has-left-top-borde has-no-pad-top">
				<b>@sodvnogn</b> <br>
				<p class="blockquote">{{ str_limit('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta a amet dicta eaque aliquam culpa excepturi omnis, atque, laudantium optio non nulla expedita, porro vero.', $limit =100, $end = '...') }}</p>
			</div>
		</div>

		<div class="col-xs-12 col-md-3 has-margin-top has-padding-bot our-users">
			<div class="col-xs-12 col-md-3">
				<img src="{{ asset('/img/avatar.png') }}" alt="" class="img-responsive img-our-users">
			</div>
			<div class="col-xs-12 col-md-7 has-left-top-borde has-no-pad-top">
				<b>@sodvnogn</b> <br>
				<p class="blockquote">{{ str_limit('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta a amet dicta eaque aliquam culpa excepturi omnis, atque, laudantium optio non nulla expedita, porro vero.', $limit =100, $end = '...') }}</p>
			</div>
		</div>

		<div class="col-xs-12 col-md-3 has-margin-top has-padding-bot our-users">
			<div class="col-xs-12 col-md-3">
				<img src="{{ asset('/img/avatar.png') }}" alt="" class="img-responsive img-our-users">
			</div>
			<div class="col-xs-12 col-md-7 has-left-top-borde has-no-pad-top">
				<b>@sodvnogn</b> <br>
				<p class="blockquote">{{ str_limit('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta a amet dicta eaque aliquam culpa excepturi omnis, atque, laudantium optio non nulla expedita, porro vero.', $limit =100, $end = '...') }}</p>
			</div>
		</div>
	
	</div>
</div>
@endsection