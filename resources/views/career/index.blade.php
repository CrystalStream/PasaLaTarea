@extends('partials.admin')

@section('content')
	@foreach($careers as $career)
		<p>{{ $career->name }}</p>
	@endforeach
@endsection