@extends('home')

@section('main-content')
	<div class="has-back-img hidden-xs">
		<span class="subject-title">
			Matematicas
		</span>
	</div>
	<div class="has-back-img-m hidden-sm hidden-md hidden-lg">
		<span class="subject-title">
			Matematicas
		</span>
	</div>
	<div class="has-margin-top_2x">
		<div class="col-xs-12">
			<div class="title-semester has-border-bottom">
				<h4>Primer Semestre</h4>
			</div>
			<div class="all-subjects" style="background:#BFF2C5;">
				<div class="col-xs-12 col-md-3 has-margin-top">
					<ul class="list-group">
						<li class="list-group-item text-center"><b>Ecuaciones Diferenciales</b></li>
						<li class="list-group-item">
							Tareas: <span class="pull-right"><span class="label label-primary">10</span></span>
						</li>
						<li class="list-group-item text-center">
							<a  href="#" class="btn btn-success btn-xs">Ver mas...</a>
						</li>						
					</ul>
				</div>
				<div class="col-xs-12 col-md-3 has-margin-top">
					<ul class="list-group">
						<li class="list-group-item text-center"><b>Ecuaciones Diferenciales</b></li>
						<li class="list-group-item">
							Tareas: <span class="pull-right"><span class="label label-primary">10</span></span>
						</li>
						<li class="list-group-item text-center">
							<a  href="#" class="btn btn-success btn-xs">Ver mas...</a>
						</li>						
					</ul>
				</div>
				<div class="col-xs-12 col-md-3 has-margin-top">
					<ul class="list-group">
						<li class="list-group-item text-center"><b>Ecuaciones Diferenciales</b></li>
						<li class="list-group-item">
							Tareas: <span class="pull-right"><span class="label label-primary">10</span></span>
						</li>
						<li class="list-group-item text-center">
							<a  href="#" class="btn btn-success btn-xs">Ver mas...</a>
						</li>						
					</ul>
				</div>
				<div class="col-xs-12 col-md-3 has-margin-top last-subject">
					<a href="/home/subject/04/semester/1">
						<span class="more-subject">
							<b>VER MAS...</b>
						</span>
					</a>
					<ul class="list-group">
						<li class="list-group-item text-center"><b>Ecuaciones Diferenciales</b></li>
						<li class="list-group-item">
							Tareas: <span class="pull-right"><span class="label label-primary">10</span></span>
						</li>
						<li class="list-group-item text-center">
							<a  href="#" class="btn btn-success btn-xs">Ver mas...</a>
						</li>						
					</ul>
				</div>

			</div>
		</div>

		<div class="col-xs-12 has-margin-top">
			<div class="title-semester has-border-bottom">
				<h4>Segundo Semestre</h4>
			</div>
			<div class="all-subjects" style="background:#E9F2B7;">
				<div class="col-xs-12 col-md-3 has-margin-top">
					<ul class="list-group">
						<li class="list-group-item text-center"><b>Ecuaciones Diferenciales</b></li>
						<li class="list-group-item">
							Tareas: <span class="pull-right"><span class="label label-primary">10</span></span>
						</li>
						<li class="list-group-item text-center">
							<a  href="#" class="btn btn-success btn-xs">Ver mas...</a>
						</li>						
					</ul>
				</div>
			</div>
		</div>

		<div class="col-xs-12 has-margin-top">
			<div class="title-semester has-border-bottom">
				<h4>Tercer Semestre</h4>
			</div>
			<div class="all-subjects" style="background:#A3F3DB;">
				<div class="col-xs-12 col-md-3 has-margin-top">
					<ul class="list-group">
						<li class="list-group-item text-center"><b>Ecuaciones Diferenciales</b></li>
						<li class="list-group-item">
							Tareas: <span class="pull-right"><span class="label label-primary">10</span></span>
						</li>
						<li class="list-group-item text-center">
							<a  href="#" class="btn btn-success btn-xs">Ver mas...</a>
						</li>						
					</ul>
				</div>
			</div>
		</div>

	</div>
	<ul>
@foreach($subjects as $subject)
	<li>Nombre: {{ $subject->name }}</li>
	<li>Carrera: {{ $subject->career }}</li>
	<li>Semester: {{ $subject->semester }}</li>
	<li>Profesor: {{ $subject->teacher }}</li>`
@endforeach
</ul>
@endsection