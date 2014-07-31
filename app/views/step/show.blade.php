@extends('layouts.default')

@section('entete')
	Étape : {{ $out->title }}
@stop

@section('contenu')
	<h3>Durée = {{ $out->duration }}</h3>
	<h4>Faisant partie de la tâche {{ $out->task->title }}</h4>
	<p>{{ $out->report }}</p>
	<p>Créé par {{ $out->user }}, le {{ $out->created_at }}</p>
	<p>Modifié le {{ $out->updated_at }}</p>
@stop