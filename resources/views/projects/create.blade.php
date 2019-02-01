@extends('layouts.main')

@section('content')
	<form action="/projects" method="POST" class="form-group">
		{{-- {{ csrf_field() }} --}}
		@csrf
		<b>Title: </b> 
		<br>
		<input type="text" name='title' class="form-control" placeholder="Enter the title of the project..." 
				value="{{ old('title') }}">
		<br>
			<b>Description: </b> <br>
  			<textarea name='description' class="form-control z-depth-1" rows="5" placeholder="Write something here...">{{ old('description') }}</textarea>
			<br>
			<button type="submit" class="btn btn-success"><i class="fas fa-folder-plus"> </i> Add Project</button>
		</form>
		
		@if($errors->count())
			<ul>
				@foreach($errors->all() as $error)
					<li class="alert alert-danger">
						{{ $error }}
					</li>
				@endforeach
			</ul>
		@endif
@endsection

