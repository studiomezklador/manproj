<?php

class StepController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		// $steps = Step::all();
		$steps = Step::with('task')->get();
		return View::make('step.index',compact('steps'));
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('step.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$step = new Step;

		$step->task_id = 1;
		$step->user_id = 1;
		$step->title = Input::get('step_title');
		$step->report = Input::get('step_report');
		$step->duration = Input::get('step_duration');

		$step->save();

		return Redirect::route('step.index')->withMessage('Étapes créée avec succès !');
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$out = Step::where('id', '=',$id)->first();
		return View::make('step.show', compact('out'));
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$out = Step::where('id', '=',$id)->first();
		return View::make('step.edit', compact('out'));
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$upto = Step::findOrFail($id);

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
