@extends('layouts.default')

@section('entete')
	Liste des Étapes
@stop

@section('contenu')
	<h1>Toutes les Étapes</h1>
	@foreach ($steps as $step)
		<dl>
			<h4>{{ $step->title }}</h4>
			<p>Durée : {{ $step->duration }}</p>
			<dd>
			<?php // TRIM 20 WORDS ?>
			<?= implode(' ', array_slice(explode(' ', $step->report), 0, 20)).'...'; ?>
			</dd>
		</dl>
	@endforeach
@stop