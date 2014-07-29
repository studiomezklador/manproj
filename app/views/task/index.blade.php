@extends('layouts.default')

@section('entete')
	Liste des Tâches
@stop

@section('contenu')
	<h1>Toutes les Tâches</h1>
		@foreach ($tasks as $task)
		<dl>
			<h4>{{ $task->name }}</h4>
			<dt>{{ $task->state }}</dt>
			<dd>
			<?php // TRIM 20 WORDS ?>
			<?= implode(' ', array_slice(explode(' ', $task->description), 0, 20)).'...'; ?>
			</dd>
		</dl>
	@endforeach
@stop