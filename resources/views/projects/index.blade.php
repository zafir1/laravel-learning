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
			<th>Description</th>
			<th>Action</th>
		</thead>
		@foreach($projects as $project)
			<tr>
				<td> {{ $project->title }} </td>
				<td> {{ $project->description }} </td>
				<td>
					{{ csrf_field() }}
					<a href="/projects/{{ $project->id }}/edit" class="btn btn-danger"> <i class="far fa-edit"></i> </a>
					<a href="/projects/{{ $project->id }}/delete" class="btn btn-success"> <i class="far fa-trash-alt"></i> </a>
				</td>
			</tr>
		@endforeach
	</table>
@endsection