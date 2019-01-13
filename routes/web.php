<?php

Route::get('/','pagesController@home');
Route::get('/about','pagesController@about');
Route::get('/contact','pagesController@contact');

// Projects
Route::get('/projects','projectsController@index');
Route::get('/projects/create','projectsController@create');
Route::post('/projects','projectsController@store');





/*Route::get('/', function () {
	$tasks = [
		"Go to Market",
		"Go to store",
		"Buy a Pizza",

	];
    return view('welcome',[
    	'tasks'=>$tasks,
    ]);
});*/

/*Route::get('about', function() {
    return view('about');
});

Route::get('contact', function() {
    return view('contact',[
    	'foo'=> request('username','Zafir Ahmad')
    ]);
});*/