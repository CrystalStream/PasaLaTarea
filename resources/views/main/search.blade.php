@extends('home')
@section('main-content')
	<div class="col-xs-12">
		<div class="heading-search has-border-bottom">
			{!! Form::open() !!}
				<button class="btn btn-info has-margin-top">Buscar solo materias <i class="fa fa-book"></i></button>
			{!! Form::close() !!}
			<h3>Materias relacionadas a "{{ $search }}"</h3>
		</div>
	</div>
	<div class="col-xs-12 has-margin-top">
		<a href="{{ url('/home/subject') }}">
			<div class="col-xs-12 col-sm-6 col-md-4">
				<div class="panel panel-primary">
					<div class="panel-heading">Nombre de la materia</div>
					<div class="panel-body">
						<ul class="list-group">
							<li class="list-group-item">
								<i class="fa fa-dot-circle-o fa-1x"></i>
								<span class="info-search">Carrera:</span>
								<span class="label label-success pull-right">Ingenieria en telematica</span>
							</li>
							<li class="list-group-item">
								<i class="fa fa-dot-circle-o fa-1x"></i>
								<span class="info-search">Semestre:</span>
								<span class="label label-success pull-right">2</span>
							</li>
							<li class="list-group-item">
								<i class="fa fa-dot-circle-o fa-1x"></i>
								<span class="info-search">Escuela:</span>
								<span class="label label-success pull-right">Universidad de GDL</span>
							</li>
							<li class="list-group-item">
								<i class="fa fa-dot-circle-o fa-1x"></i>
								<span class="info-search">Nº Tareas</span>
								<span class="label label-success pull-right">20</span>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</a>
		<a href="{{ url('/home/subject') }}">
			<div class="col-xs-12 col-sm-6 col-md-4">
				<div class="panel panel-primary">
					<div class="panel-heading">Nombre de la materia</div>
					<div class="panel-body">
						<ul class="list-group">
							<li class="list-group-item">
								<i class="fa fa-dot-circle-o fa-1x"></i>
								<span class="info-search">Carrera:</span>
								<span class="label label-success pull-right">Ingenieria en telematica</span>
							</li>
							<li class="list-group-item">
								<i class="fa fa-dot-circle-o fa-1x"></i>
								<span class="info-search">Semestre:</span>
								<span class="label label-success pull-right">2</span>
							</li>
							<li class="list-group-item">
								<i class="fa fa-dot-circle-o fa-1x"></i>
								<span class="info-search">Escuela:</span>
								<span class="label label-success pull-right">Universidad de GDL</span>
							</li>
							<li class="list-group-item">
								<i class="fa fa-dot-circle-o fa-1x"></i>
								<span class="info-search">Nº Tareas</span>
								<span class="label label-success pull-right">20</span>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</a>
		<a href="{{ url('/home/subject') }}">
			<div class="col-xs-12 col-sm-6 col-md-4">
				<div class="panel panel-primary">
					<div class="panel-heading">Nombre de la materia</div>
					<div class="panel-body">
						<ul class="list-group">
							<li class="list-group-item">
								<i class="fa fa-dot-circle-o fa-1x"></i>
								<span class="info-search">Carrera:</span>
								<span class="label label-success pull-right">Ingenieria en telematica</span>
							</li>
							<li class="list-group-item">
								<i class="fa fa-dot-circle-o fa-1x"></i>
								<span class="info-search">Semestre:</span>
								<span class="label label-success pull-right">2</span>
							</li>
							<li class="list-group-item">
								<i class="fa fa-dot-circle-o fa-1x"></i>
								<span class="info-search">Escuela:</span>
								<span class="label label-success pull-right">Universidad de GDL</span>
							</li>
							<li class="list-group-item">
								<i class="fa fa-dot-circle-o fa-1x"></i>
								<span class="info-search">Nº Tareas</span>
								<span class="label label-success pull-right">20</span>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</a>
	</div>
	<div class="col-xs-12 has-margin-top">
		<div class="heading-search has-border-bottom">
			{!! Form::open() !!}
				<button class="btn btn-info ">Buscar solo carreras <i class="fa fa-graduation-cap"></i></button>
			{!! Form::close() !!}
			<h3 >Carreras relacionadas a "{{ $search }}"</h3>
		</div>
	</div>
	<div class="col-xs-12 has-margin-top">
		<a href="#">
			<div class="col-xs-12 col-sm-4 col-md-3">
				<div class="panel panel-success">
					<div class="panel-heading">Nombre de la carrera</div>
					<div class="panel-body">
						<ul class="list-group">
							<li class="list-group-item">
								<i class="fa fa-dot-circle-o fa-1x"></i>
								<span class="info-search">Materias registradas:</span>
								<span class="label label-success pull-right">15</span>
							</li>
							<li class="list-group-item">
								<i class="fa fa-dot-circle-o fa-1x"></i>
								<span class="info-search">Escuela:</span>
								<span class="label label-success pull-right">Universidad de GDL</span>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</a>
		<a href="#">
			<div class="col-xs-12 col-sm-4 col-md-3">
				<div class="panel panel-success">
					<div class="panel-heading">Nombre de la carrera</div>
					<div class="panel-body">
						<ul class="list-group">
							<li class="list-group-item">
								<i class="fa fa-dot-circle-o fa-1x"></i>
								<span class="info-search">Materias registradas:</span>
								<span class="label label-success pull-right">15</span>
							</li>
							<li class="list-group-item">
								<i class="fa fa-dot-circle-o fa-1x"></i>
								<span class="info-search">Escuela:</span>
								<span class="label label-success pull-right">Universidad de GDL</span>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</a>
		<a href="#">
			<div class="col-xs-12 col-sm-4 col-md-3">
				<div class="panel panel-success">
					<div class="panel-heading">Nombre de la carrera</div>
					<div class="panel-body">
						<ul class="list-group">
							<li class="list-group-item">
								<i class="fa fa-dot-circle-o fa-1x"></i>
								<span class="info-search">Materias registradas:</span>
								<span class="label label-success pull-right">15</span>
							</li>
							<li class="list-group-item">
								<i class="fa fa-dot-circle-o fa-1x"></i>
								<span class="info-search">Escuela:</span>
								<span class="label label-success pull-right">Universidad de GDL</span>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</a>
		<a href="#">
			<div class="col-xs-12 col-sm-4 col-md-3">
				<div class="panel panel-success">
					<div class="panel-heading">Nombre de la carrera</div>
					<div class="panel-body">
						<ul class="list-group">
							<li class="list-group-item">
								<i class="fa fa-dot-circle-o fa-1x"></i>
								<span class="info-search">Materias registradas:</span>
								<span class="label label-success pull-right">15</span>
							</li>
							<li class="list-group-item">
								<i class="fa fa-dot-circle-o fa-1x"></i>
								<span class="info-search">Escuela:</span>
								<span class="label label-success pull-right">Universidad de GDL</span>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</a>
		<a href="#">
			<div class="col-xs-12 col-sm-4 col-md-3">
				<div class="panel panel-success">
					<div class="panel-heading">Nombre de la carrera</div>
					<div class="panel-body">
						<ul class="list-group">
							<li class="list-group-item">
								<i class="fa fa-dot-circle-o fa-1x"></i>
								<span class="info-search">Materias registradas:</span>
								<span class="label label-success pull-right">15</span>
							</li>
							<li class="list-group-item">
								<i class="fa fa-dot-circle-o fa-1x"></i>
								<span class="info-search">Escuela:</span>
								<span class="label label-success pull-right">Universidad de GDL</span>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</a>
	</div>
@endsection