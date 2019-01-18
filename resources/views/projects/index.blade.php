@extends('layout')
@section('title','Projects | Home')
@section('content')
	
	<div class="float-right">
		<a href="projects/create" class="btn btn-success"> <i class="fas fa-folder-plus"> </i> Create new</a>
	</div>
	<br>
	{{-- {{ $projects->count() }} --}}
	<table class="table">
		<thead>
			<th>Title</th>
			<th>Action</th>
		</thead>
		@foreach($projects as $project)
			<tr>
				<td> <a href="/projects/{{ $project->id }}">{{ $project->title }}</a> </td>
				<td>
					{{ csrf_field() }}
					<a href="/projects/{{ $project->id }}/edit" class="btn btn-success"> <i class="far fa-edit"></i> </a>
					{{-- <a href="/projects/{{ $project->id }}/delete" class="btn btn-success"> <i class="far fa-trash-alt"></i> </a> --}}
					<form action="/projects/{{ $project->id }}" method="POST">
					{{ method_field('DELETE') }}
					{{ csrf_field() }}
					<button type="submit" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
					</form>
				</td>
			</tr>
		@endforeach
	</table>
@endsection