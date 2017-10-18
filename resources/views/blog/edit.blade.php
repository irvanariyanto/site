@extends('layouts.master')


@section('content')
	<h1>Edit </h1>

	<form action="/blog/{{$blog->id}}" method="post" accept-charset="utf-8">
		<input type="text" name="title" value="{{$blog->title}}" placeholder=""><br>
		<textarea name="description">{{$blog->description}}</textarea><br>
		<input type="submit" name="submit" value="edit">
		{{csrf_field()}}
		<input type="hidden" name="_method" value="PUT" placeholder="">
	</form>
	<h2> {{ $blog->title }} </h2>

	<hr>

	<p>
		{{ $blog->description }}
	</p>
@endsection
