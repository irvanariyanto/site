@extends('layouts.master')


@section('content')
	<h2> {{ $blog->title }} </h2>

	<hr>

	<p>
		{{ $blog->description }}
	</p>
@endsection
