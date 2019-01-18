@extends('layouts.main')

@section('title')
	{{ $project->title }}
@endsection

@section('content')
	<h3>
		{{ $project->title }}
	</h3>
	<div>
		<p>
			{{ $project->description }}
		</p>
		<p>
		<a href="/projects/{{ $project->id }}/edit" class="btn btn-success"> <i class="far fa-edit"> </i> Edit </a>
		<form action="/projects/{{ $project->id }}" method="POST">
			{{ method_field('DELETE') }}
			{{ csrf_field() }}
			<button type="submit" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
		</form>
		</p>

	</div>
@endsection

