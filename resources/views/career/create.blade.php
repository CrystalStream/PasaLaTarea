@extends('partials.admin')

@section('content')
	<h1>Agregar Carrera</h1>
	
	<form action="/admin/career" method="POST">
		<input type="text" name="name">
		<input type="submit" value="Agregar">
	</form>

@endsection