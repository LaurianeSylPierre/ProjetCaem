{{----CALLING THE DEFAULT LAYOUT--}}
@extends('front.layouts.errors')
{{------------------------------}}


{{--HEAD TITLE :--}}
@section('pageTitle')
CAEM - 404
@endsection
{{----------------}}


{{--MAIN CONTENT :--}}
@section('pageContent')
<main class="main404">

	<h1>404 - La page n'existe pas ou a été déplacée</h1>

	<figure>
		<a href="/"><img src="{{ asset('images/logo_CAEM.svg')}}" alt="Logo CAEM" /></a>
	</figure>

	<a id="btnRetour" href="/">retour à la page d'accueil</a>

</main>
@endsection
{{------------------}}
