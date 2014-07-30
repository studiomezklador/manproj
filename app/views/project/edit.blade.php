@extends('layouts.default')

@section('entete')
	Projet : modification
@stop

@section('contenu')
	<h1>Mise à jour du Projet</h1>
	<div class="row">
		{{ Form::model($out, ['method' => 'PATCH', 'route' => ['project.update', $out->id]]) }}

			<h3>Nom du projet</h3>
			{{ Form::text('name', null, ['class' => 'form-control']) }}

			<h3>Description</h3>
			{{ Form::textarea('description', null, ['class' => 'form-control']) }}

			<h3>Étapes du projet</h3>
			{{ Form::input('number', 'state', null, ['class' => 'form-control']) }}

			<br />

			{{ Form::submit('Modifier ce projet', ['class' => 'btn btn-info']) }}

		{{ Form::close() }}
	</div>
@stop