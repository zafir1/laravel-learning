<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use App\projects;

class projectTasksController extends Controller
{
    
    public function index()
    {
        
    }

    
    public function create()
    {
        
    }

    
    public function store(projects $project)
    {
        request()->validate([
            'description' => ['required']
        ]);

        Task::create([
            'projects_id' => $project->id,
            'description' => request()->description
        ]);
        return back();
    }

    
    public function show()
    {
        return redirect('/');
    }

    
    public function edit($id)
    {
        
    }

    
    public function update(Task $task)
    {
        // return request()->all();
        $task->update([
            'completed' => request()->has('completed')
        ]);
        return back();
    }

    
    public function destroy($id)
    {
        
    }
}
