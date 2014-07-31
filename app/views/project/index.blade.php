@extends('layouts.default')

@section('entete')
	Liste des Projets
@stop

@section('contenu')

	@if($projects)

		<h1>Tous les Projets</h1>
		<hr />

		@foreach ($projects as $project)
			<dl>
				<h4>{{ $project->name }}</h4>
				<dt>
					<p>Avancée du projet = {{ $project->state }}</p>
				</dt>
				<dd>
				{{ Str::words($project->description, 20) }}
				</dd>
			</dl>

			@if ($project->tasks != [])

				<h3>Tâches</h3>

				<ol>
					@foreach ($project->tasks as $task)
						<li>
							<p><strong>{{ $task->title }}</strong></p>
							<p>durée : {{ $task->duration }}</p>
							<p>Progression : {{ $task->state }}</p>
							@if ($task->complete)
								<p><strong>Tâche complétée</strong></p>
							@endif
						</li>
					@endforeach

				</ol>

			@endif

		<hr />

		@endforeach

	@else
		<h1>Désolé...</h1>
		<p>Aucun projet en cours, pour le moment...</p>
	@endif
	<!-- <pre><code>{{ $projects }}</code></pre> -->
@stop