@extends('layouts.default')

@section('entete')
	Projet : Sortie du formulaire
@stop

@section('contenu')
	<pre>
		<?= $out; ?>
	</pre>
@stop