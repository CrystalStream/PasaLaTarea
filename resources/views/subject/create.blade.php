<h1>Agregar materias</h1>

<form action="/admin/subject" method="POST">
	<select name="career_id">
		@foreach($careers as $career)
			<option value="{{ $career->id }}">{{ $career->name }}</option>
		@endforeach
	</select>

	<input type="text" name="name">

	<input type="text" name="teacher">

	<select name="semester_id">
		@foreach($semesters as $semester)
			<option value="{{ $semester->id }}">{{ $semester->semester }}</option>
		@endforeach
	</select>

	<input type="submit" value="Guardar">


</form>