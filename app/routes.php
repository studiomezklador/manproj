<?php

Route::resource('project', 'ProjectController');

// MISE EN PLACE D'UNE VUE POUR LISTER LES TACHES RELIEES AU PROJET
Route::get('project/{id}/tasks', function($id)
	{
		$proj = Project::find($id);
		$tasks = $proj->tasks;
		return View::make('project.tasks', compact('proj', 'tasks'));
	});

Route::resource('task', 'TaskController');

// MISE EN PLACE D'UNE VUE POUR LISTER LES TACHES RELIEES AU PROJET
Route::get('task/{id}/steps', function($id)
	{
		$task = Task::find($id);
		$steps = $task->steps;
		return View::make('task.steps', compact('task', 'steps'));
	});

Route::resource('step', 'StepController');

Route::get('/', function()
{
	$dt = Carbon::now();
	setlocale(LC_TIME, 'french');
	return $dt->formatLocalized('%A %d %B %Y');
});


