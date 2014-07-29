@extends('layouts.default')

@section('entete')
	Liste des Projets
@stop

@section('contenu')
	<h1>Tous les Projets</h1>

	@foreach ($projects as $project)
		<dl>
			<h4>{{ $project->name }}</h4>
			<dt>{{ $project->state }}</dt>
			<dd>
			<?php // TRIM 20 WORDS ?>
			<?= implode(' ', array_slice(explode(' ', $project->description), 0, 20)).'...'; ?>
			</dd>
		</dl>
	@endforeach

@stop