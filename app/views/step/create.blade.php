@extends('layouts.default')

@section('entete')
	Étape : nouveau
@stop

@section('contenu')
	<h1>Créer une nouvelle Étape</h1>
	{{ Form::open(['routes' => 'step.index', 'method' => 'post']) }}

		<div class="form-group">
			<h3>Intitulé de l'étape</h3>
			{{ Form::text('step_title', null, ['class' => 'form-control']) }}
		</div>

		<div class="form-group">
			<h3>Rapport d'activités</h3>
			{{ Form::textarea('step_report', null, ['class' => 'form-control']) }}
		</div>

		<div class="form-group">
			<h3>Durée de cette étape</h3>
			{{ Form::input('time', 'step_duration', null, ['class' => 'form-control']) }}
		</div>

		<br />

		{{ Form::submit('Créer cette étape', ['class' => 'btn btn-info']) }}

	{{ Form::close() }}
@stop