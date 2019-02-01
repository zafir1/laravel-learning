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

    public function show(projects $project){
        // return $project;
        // $project =  projects::findOrFail($id);
        return view('/projects.show',[
            'project' => $project,
        ]);
    }

    public function edit(projects $project){
        // $project = projects::find($id);
        return view('projects.edit',[
            'project' => $project,
        ]);
    }
    
    public function update(projects $project){
        // $project = projects::find($id);
        $project->update(request(['title','description']));

        /*$project->title = request('title');
        $project->description = request('description');
        $project->save();*/

        return redirect('/projects');
    }

    public function destroy(projects $project){
        $project->delete();
        return redirect('/projects');
    }

    public function create(){
    	return view('projects.create');
    }

    public function store(){
        $validate = request()->validate([
            'title' => ['required','min:5','max:200'],
            'description' => ['required','min:10','max:50000']
        ]);
        projects::create($validate);
        // projects::create(request(['title','description']));
        return redirect('/projects');

        // 2nd and comparitively short method
        /*projects::create([
            'title' => request('title'),
            'description' => request('description')
        ]);
        return redirect('/projects');*/

        // 1st and very long method
        /*$project = new projects();
        $project->title = request()->title;
        $project->description = request()->description;
        $project->save();
        return redirect('/projects');*/
    }

    
}