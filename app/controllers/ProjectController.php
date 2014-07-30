<?php

class ProjectController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$projects = Project::all();
		$tasks = $projects->tasks();
		return View::make('project.index', compact('projects', 'tasks'));
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('project.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		// New row in database
		$project = new Project;
		// data injections
		$project->name = Input::get('project_title');
		$project->user_id = 1;
		$project->description = Input::get('project_desc');
		$project->state = Input::get('project_state');
		// then save into database
		$project->save();

		// redirection to index
		return Redirect::route('project.index');
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$out = Project::where('id', '=',$id)->first();
		return View::make('project.show', compact('out'));
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$out = Project::where('id', '=',$id)->first();
		return View::make('project.edit', compact('out'));
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$upto = Project::findOrFail($id);

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
