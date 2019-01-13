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

    public function create(){
    	return view('projects.create');
    }

    public function store(){
        $project = new projects();
        $project->title = request()->title;
        $project->desscription = request()->description;
        $project->save();
        return redirect('/projects');
    }

    
}