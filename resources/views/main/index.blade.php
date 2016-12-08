@extends('partials.main')

@section('content')
	<h1>Pasa la wef</h1>
	@if ( Auth::check() )
		<h2>Successfully logged in</h2>
	@endif
@endsection