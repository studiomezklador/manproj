@extends('layouts.default')

@section('entete')
	Toutes les tâches à effectuer pour le projet {{ $proj->name }}
@stop

@section('contenu')
	<ol>
	@foreach ($tasks as $task)
		<li>
			<p><strong>{{ $task->title }}</strong></p>
			<p>{{ $task->description }}</p>
			<p>Durée totale prévue = {{ $task->duration }}</p>
			<p>
				@if ($task->complete)
					Tâche terminée.
				@endif
			</p>
			<p>Créé par {{ $task->user_id }} et modifié le {{ $task->updated_at }}</p>
		</li>
	@endforeach
	</ol>
	<!-- <pre>{{ $tasks }}</pre> -->
@stop