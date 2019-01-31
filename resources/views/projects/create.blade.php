@extends('layouts.main')

@section('content')
	<form action="/projects" method="POST" class="form-group">
		{{-- {{ csrf_field() }} --}}
		@csrf
		<b>Title: </b> 
		<br>
		<input type="text" name='title' class="form-control" placeholder="Enter the title of the project..." 
				required="true">
		<br>
			<b>Description: </b> <br>
			{{-- <textarea name="description" placeholder="Description goes here..." class=""></textarea> --}}
  			<textarea name='description' class="form-control z-depth-1" rows="5" placeholder="Write something here..." required="true"></textarea>
			<br>
			<button type="submit" class="btn btn-success"><i class="fas fa-folder-plus"> </i> Add Project</button>
		</form>
@endsection

