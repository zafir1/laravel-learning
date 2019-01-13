<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\projects;

class projectsController extends Controller
{
    public function index()
    {
    	$projects = projects::all();
    	return view('projects.index',
    		[
    		'projects' => $projects,
    	]);
    }

    public function show(){

    }

    public function edit($id){
        $project = projects::find($id);
        return view('projects.edit',[
            'project' => $project,
        ]);
    }

    public function update($id){
        $project = projects::find($id);
        $project->title = request('title');
        $project->description = request('description');
        $project->save();
        return redirect('/projects');
    }

    public function destory(){
        
    }

    public function create(){
    	return view('projects.create');
    }

    public function store(){
        $project = new projects();
        $project->title = request()->title;
        $project->description = request()->description;
        $project->save();
        return redirect('/projects');
    }

    
}