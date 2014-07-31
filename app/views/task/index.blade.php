@extends('layouts.default')

@section('entete')
	Liste des Tâches
@stop

@section('contenu')
	<h1>Toutes les Tâches</h1>
		@foreach ($tasks as $task)
		<dl>
			<h4>{{ $task->title }}</h4>
			<p>Reliée au projet <strong>{{ $task->project->name }}</strong></p>
			<p>Durée initiale : {{ $task->duration }}</p>
			<dt>Avancée dans le projet = {{ $task->state }}</dt>
			<dd>
			{{ Str::words($task->description, 20) }}
			</dd>
		</dl>

		@if ($task->steps)

		<ol>

			@foreach ($task->steps as $step)

				<li>
					<p>{{ $step->title }}</p>
					<p>Durée réelle = {{ $step->duration }}</p>
					<p>Dernière mise à jour : {{ $step->updated_at }}, par {{ $step->user_id }}</p>
				</li>

			@endforeach

		</ol>

		@endif

	<hr />

	@endforeach
@stop