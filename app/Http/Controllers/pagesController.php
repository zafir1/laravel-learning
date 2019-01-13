<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagesController extends Controller
{
    public function home(){
    	$tasks = [
		"Go to Market",
		"Go to store",
		"Buy a Pizza",

		];
	    return view('welcome',[
	    	'tasks'=>$tasks,
	    ]);
    }

    public function about(){
    	return view('about');
    }

    public function contact(){
    	return view('contact',[
    		'foo'=> request('username','Zafir Ahmad'),
    	]);
    }
}
