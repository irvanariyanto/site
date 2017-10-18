@extends('layouts.master')


@section('content')
	

	<h1>Create </h1>

	<form action="/blog" method="post" accept-charset="utf-8">
		<input type="text" name="title" value="{{old('title')}}" placeholder=""><br>
		@if($errors->has('title'))
		<p>
			{{$errors->first('title')}}
		</p>
		@endif
		<textarea name="description">{{old('description')}}</textarea><br>
		@if($errors->has('description'))
		<p>
			{{$errors->first('description')}}
		</p>
		@endif
		<input type="submit" name="submit" value="Create">
		{{csrf_field()}}
		
	</form>

@endsection
