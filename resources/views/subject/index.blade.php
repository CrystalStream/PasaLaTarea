<ul>
@foreach($subjects as $subject)
	<li>Nombre: {{ $subject->name }}</li>
	<li>Carrera: {{ $subject->career }}</li>
	<li>Semester: {{ $subject->semester }}</li>
	<li>Profesor: {{ $subject->teacher }}</li>`
@endforeach
</ul>