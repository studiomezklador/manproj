@extends('layouts.default')

@section('entete')
	Liste des Étapes
@stop

@section('contenu')

	@foreach ($steps as $step)

		<dl>

			<dt>
				<h4>{{ $step->id }}. {{ $step->title }} | tâche -> {{ $step->task->title }}</h4>
			</dt>

			<dd>
				<p>Durée réelle : {{ $step->duration }}</p>
				<p>{{ Str::words($step->report, 20) }}</p>
				<p>Dernière mise à jour : {{ $step->updated_at }}</p>
			</dd>

		</dl>
	<hr />
	@endforeach

@stop