<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use App\projects;

class projectTasksController extends Controller
{
    
    public function index()
    {
        return redirect('/');
    }

    
    public function create()
    {
        return redirect('/');
    }

    
    public function store(projects $project)
    {
        $project->addTask(request('description'));
        return back();
    }

    
    public function show()
    {
        return redirect('/');
    }

    
    public function edit($id)
    {
        return redirect('/');
    }

    
    public function update(Task $task)
    {
        $method = request()->has('completed') ? 'complete' : 'incomplete';
        $task->$method();
        return back();
    }

    
    public function destroy($id)
    {
        return redirect('/');
    }
}
