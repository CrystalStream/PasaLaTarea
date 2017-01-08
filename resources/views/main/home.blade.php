@extends('home')
@section('main-content')
	<div class="col-xs-12">
		{!! Form::open() !!}
		<div class="col-xs-12">
			<div class="input-group">
				<div class="input-group-addon"> <i class="fa fa-search fa-fw"></i></div>
				{!! Form::text('searchterm', null, array('class'=>'form-control', 'placeholder'=>'Busca por materia o por carrera' )) !!}
			</div>
		</div>
		{!! Form::close() !!}
	</div>
	<div class="hidden-xs col-xs-12 text-center has-margin-top">
		<div class="panel panel-success">
			<div class="panel-heading">
				<h2 class="white-text">Bienvenido!</h2>
			</div>
			<div class="panel-body">
				<p class="body-text">
				¿Listo para sacar puro 100? Con esta plataforma es super facil!. Tienes un menu a la izquierda, este menu te sirve para navegar sobre toda tu cuenta. <br>
				Las tareas que estan aqui posteadas se dividen en <a href="#">Materias</a>, y ala vez las materias estan dividas en 
				<a href="#">Carreras*</a>. Arriba tienes un buscador que te sirve para filtrar o buscar tus tareas.
				Puedes tener materias favoritas, de esta manera cada que se suba alguna tareas a esa materia, te llegara un correo para que te encuentres actualizado y no te agarren las prisas.</p>
			</div>
			<div class="panel-footer text-left">
				<small>*Si no vez la carrera en la que estas es probable que nadie haya subido ni una tarea. Puedes <a href="#">contactarnos</a> para dar de alta una carrera nueva.</small>
			</div>

		</div>

	</div>
	
@endsection