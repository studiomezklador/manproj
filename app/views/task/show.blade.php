@extends('layouts.default')

@section('entete')
	Tâche : {{ $out->title }}
@stop

@section('contenu')
	<h3>Progrès = {{ $out->state }}</h3>
	<h5>Reliée au projet {{ $out->project->name }}</h5>
	<p>Durée : {{ $out->duration }}</p>
	<p>{{ $out->description }}</p>
	<hr />
	<p>Créée par <strong>{{ $out->user }}</strong>, le {{ $out->created_at }}</p>
	<p>Modifiée le {{ $out->updated_at }}</p>
	@if ($out->complete)
		<p>Tâche terminée !</p>
	@endif

@stop