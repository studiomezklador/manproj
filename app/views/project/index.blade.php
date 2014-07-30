@extends('layouts.default')

@section('entete')
	Liste des Projets
@stop

@section('contenu')

	@if($projects)

		<h1>Tous les Projets</h1>

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
		@endforeach

	@else
		<h1>Désolé...</h1>
		<p>Aucun projet en cours, pour le moment...</p>
	@endif
	<!-- <pre><code>{{ $projects }}</code></pre> -->
@stop