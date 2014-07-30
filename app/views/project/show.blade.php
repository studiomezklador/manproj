@extends('layouts.default')

@section('entete')
	Projet : {{ $out->name }}
@stop

@section('contenu')
	<h3>Progrès = {{ $out->state }}</h3>
	<p>{{ $out->description }}</p>
	<p>Créé par <strong>{{ $out->user }}</strong>, le {{ $out->created_at }}</p>
	<p>Dernière modification : {{ $out->updated_at }}</p>

@stop