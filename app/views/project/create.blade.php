@extends('layouts.default')

@section('entete')
	Projet : nouveau
@stop

@section('contenu')
	<h1>Créer un nouveau Projet</h1>
	<div class="row">
		{{ Form::open(['route' => 'project.store', 'method' => 'post']) }}

			<h3>Nom du projet</h3>
			{{ Form::text('project_title', null, ['class' => 'form-control']) }}

			<h3>Description</h3>
			{{ Form::textarea('project_desc', null, ['class' => 'form-control']) }}

			<h3>Étapes du projet</h3>
			{{ Form::input('number', 'project_state', null, ['class' => 'form-control']) }}

			<br />

			{{ Form::submit('Créer le projet', ['class' => 'btn btn-info']) }}

		{{ Form::close() }}
	</div>
@stop