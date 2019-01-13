@extends('layout')
@section('title','Projects | Home')
@section('content')
	
	<div class="float-right">
		<a href="projects/create" class="btn btn-success"> <i class="fas fa-folder-plus"> </i> Create new</a>
	</div>
	<br>

	<table class="table">
		<thead>
			<th>Title</th>
			<th>Description</th>
			<th>Action</th>
		</thead>
		@foreach($projects as $project)
			<tr>
				<td> {{ $project->title }} </td>
				<td> {{ $project->desscription }} </td>
				<td> <a href="" class="btn btn-danger"> Delete </a> </td>
			</tr>
		@endforeach
	</table>
@endsection