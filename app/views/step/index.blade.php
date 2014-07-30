@extends('layouts.default')

@section('entete')
	Liste des Étapes
@stop

@section('contenu')
	<h1>Toutes les Étapes</h1>
	@foreach ($steps as $step)
		<dl>
			<h4>{{ $step->title }}</h4>
			<p>Reliée à la tâche {{ $step->task_id }}</p>
			<p>Durée réelle : {{ $step->duration }}</p>
			<dd>
			<?php // TRIM 20 WORDS ?>
			{{ Str::words($step->report, 20) }}
			</dd>
		</dl>
	@endforeach
@stop