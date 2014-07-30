@extends('layouts.default')

@section('entete')
	Liste des Tâches
@stop

@section('contenu')
	<h1>Toutes les Tâches</h1>
		@foreach ($tasks as $task)
		<dl>
			<h4>{{ $task->title }}</h4>
			<p>Reliée au projet {{ $task->project_id }}</p>
			<p>Durée initiale : {{ $task->duration }}</p>
			<dt>Avancée dans le projet = {{ $task->state }}</dt>
			<dd>
			{{ Str::words($task->description, 20) }}
			</dd>
		</dl>
	@endforeach
@stop