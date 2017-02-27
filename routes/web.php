<?php

use App\Task;

Route::get('/tasks', function () {
	//$tasks = DB::table('tasks')->latest()->get();
	$tasks = Task::all();
    return view('tasks.index', compact('tasks'));
});

ROUTE::get('/tasks/{task}', function($id) {
	//$task = DB::table('tasks')->find($id);
	$task = Task::find($id);
	return view('tasks.show', compact('task'));
});