<?php

Route::resource('project', 'ProjectController');
Route::resource('task', 'TaskController');
Route::resource('step', 'StepController');

Route::get('/', function()
{
	$dt = Carbon::now();
	setlocale(LC_TIME, 'french');
	return $dt->formatLocalized('%A %d %B %Y');
});


