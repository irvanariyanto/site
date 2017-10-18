@extends('layouts.master')

@section('title','Irvan Ariyanto')

@section('content')
	<h1>Selamat Datang di Blog</h1>
	
	@foreach($blogs as $blog)
		<li><a href="/blog/{{$blog->id}}" title=""> {{ $blog->title }}</a>
		<form action="/blog/{{$blog->id}}" method="post" accept-charset="utf-8">
		<input type="submit" name="submit" value="delete">
		{{csrf_field()}}
		<input type="hidden" name="_method" value="DELETE" placeholder="">
	</form>
		</li>
	@endforeach

@endsection