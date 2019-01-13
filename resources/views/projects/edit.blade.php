@extends('layouts.main')

@section('title','project-edit')

@section('content')
	<div class="title h1">Edit Project</div>
	<form action="/projects/{{ $project->id }}" method="POST" class="form-group">
		{{ method_field('PATCH') }}
		{{ csrf_field() }}
		<b>Title: </b><br>
		<input type="text" name="title" class="form-control" autocomplete="off" value="{{ $project->title }}"><br>
		<b>Description: </b> <br>
		<textarea name='description' class="form-control z-depth-1" rows="5" placeholder="Write something here..." required="true"> {{ $project->description }} </textarea><br>
		<button type="submit" class="btn btn-success"><i class="fas fa-check-square"></i> Done Editing</button>
	</form>
@endsection