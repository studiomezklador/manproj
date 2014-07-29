@extends('layouts.default')

@section('entete')
	Projet : édition
@stop

@section('contenu')
	<h1>Mise à jour du Projet</h1>
	<div class="row">
		{{ Form::open(['routes' => 'project.index', 'method' => 'post']) }}

			<h3>Nom du projet</h3>
			{{ Form::text('project_title', null, ['class' => 'form-control']) }}

			<h3>Description</h3>
			{{ Form::textarea('project_desc', null, ['class' => 'form-control']) }}

			<h3>Étapes du projet</h3>
			{{ Form::input('number', 'project_state', null, ['class' => 'form-control']) }}

			<br />

			{{ Form::submit('Modifier ce projet', ['class' => 'btn btn-info']) }}

		{{ Form::close() }}
	</div>
@stop