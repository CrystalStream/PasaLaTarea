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