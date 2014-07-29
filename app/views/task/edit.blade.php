@extends('layouts.default')

@section('entete')
	Tâche : édition
@stop

@section('contenu')
	<h1>Mise à jour de la Tâche</h1>
	{{ Form::open(['routes' => 'task.index', 'method' => 'post']) }}
		<div class="form-group">
			<h3>Titre de la tâche</h3>
			{{ Form::text('task_title', null, ['class' => 'form-control']) }}
		</div>

		<div class="form-group">
			<h3>Description de la tâche</h3>
			{{ Form::textarea('task_desc', null, ['class' => 'form-control']) }}
		</div>

		<div class="form-group">
			<h3>Durée de la tâche</h3>
			{{ Form::input('time', 'task_duration', null, ['class' => 'form-control']) }}
		</div>

		<div class="form-group">
			<h3>Étapes de la tâche</h3>
			{{ Form::input('number', 'task_state', null, ['class' => 'form-control']) }}
		</div>

		<div class="form-group">
			<h3>Tâche terminée ?</h3>
			{{ Form::input('checkbox', 'task_complete', null, ['class' => 'form-control']) }}
		</div>

		{{ Form::submit('Modifier cette tâche', ['class' => 'btn btn-info']) }}
@stop