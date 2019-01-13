@extends('layout')

@section('title')
	Blog | Home
@endsection

@section('content')
	<h2>
		Welcome to Home
	</h2>
	<ul>
		@foreach($tasks as $task)
			<li>{{$task}}</li>
		@endforeach
	</ul>
@endsection