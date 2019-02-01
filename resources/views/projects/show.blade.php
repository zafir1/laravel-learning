@extends('layouts.main')

@section('title')
	{{ $project->title }}
@endsection

@section('content')
	<div>
		<div class="row">
			<div class="col-sm-10">
				<div class="h4">
					{{ $project->title }}
				</div>
				<div class="small text-primary"> {{ $project->description }} </div>
			</div>
			<div class="col-sm-2">
				<a href="/projects/{{ $project->id }}/edit" class="btn btn-success"> <i class="far fa-edit"> </i>
				</a>
				<form action="/projects/{{ $project->id }}" method="POST">
					{{ method_field('DELETE') }}
					{{ csrf_field() }}
					<button type="submit" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
				</form>
			</div>
		</div>
		<br>
		
		{{-- Tasklist associated to this Project --}}
		@if($project->task()->count())
			<div class="card">
				<h5 class="card-header">Task Associated with {{ $project->title }}</h5>
				<div class="card-body">
				@foreach($project->task as $task)
					<div>
						<form action="/tasks/{{ $task->id }}" method="POST">
							@method('PATCH')
							@csrf
							<label for="completed">
								<input type="checkbox" name="completed" class="form-check-label" onchange="this.form.submit()" {{ $task->completed ? 'checked' : '' }} >
								@if($task->completed)
									<del>{{ $task->description }}</del>
								@else
									{{ $task->description }}
								@endif

							</label>
						</form>
					</div>		
				@endforeach
				</div>
			</div>
		@endif
		{{-- Tasklist associated to this Project end --}}
		<br>
		<div class="card">
			<h4 class="card-header"><b>Add a new Task</b></h4>
			<div class="card-body">
				<form action="/projects/{{ $project->id }}/task" method="POST" autocomplete="off" class="form-group">
					@csrf
					<div class="row">
						<div class="col-sm-10">
							<input value="{{ old('description') }}" class="form-control" name="description" type="text" placeholder="Enter a Task name:">
							@if($errors->count())
								@foreach($errors->all() as $error)
									<div class="text-danger small"> {{ $error }} </div>
								@endforeach
							@endif
						</div>
						<div class="col-sm-2">
							<input type="submit" class="btn btn-primary" value="Add Task">
						</div>
					</div>
				</form>   	
			</div>
		</div>

	</div>
@endsection