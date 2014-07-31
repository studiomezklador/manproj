<?php

class TaskController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		// $tasks = Task::all(); <-- récupère toutes les données de la base, sans les liaisons...

		/**
		* Récupération de toutes les données de la base, avec les relations one->many (steps) et many->one (project)
		*/
		$tasks = Task::with('steps', 'project')->get();
		return View::make('task.index',compact('tasks'));
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('task.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		// New row in database
		$task = new Task;
		// data injections
		$task->project_id = 1;
		$task->title = Input::get('task_title');
		$task->user_id = 1;
		$task->description = Input::get('task_desc');
		$task->state = Input::get('task_state');
		$task->duration = Input::get('task_duration');
		$task->state = Input::get('task_state');
		if (!Input::get('task_complete')) {
			$complete = false;
		} else {$complete = true;}
		$task->complete = $complete;
		// then save into database
		$task->save();

		// redirection to index
		return Redirect::route('task.index')->withMessage('Tâche créée avec succès !');
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$out = Task::where('id', '=',$id)->first();
		return View::make('task.show', compact('out'));
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$out = Task::where('id', '=',$id)->first();
		return View::make('task.edit', compact('out'));
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$upto = Task::findOrFail($id);

		$upto->update(Input::all());

		return Redirect::back();
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
