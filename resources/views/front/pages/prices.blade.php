{{----CALLING THE DEFAULT LAYOUT--}}
@extends('front.layouts.default')
{{--------------------------------}}




{{---HEAD TITLE :---}}
@section('pageTitle')
CAEM - Tarifs &amp; Inscriptions
@endsection
{{------------------}}




{{--HEAD OGTAGS :--}}
@section('ogtags')
    @include('front.includes.og_tags', ['title' => 'CAEM Besançon École de musique - Tarifs'])
		{{-- you can precise title, type, url, image, description--}}
@stop
{{------------------}}




{{--MAIN CONTENT :--}}
@section('pageContent')
<main class="mainTarifs container">


	<section class="tarifsInformations col-md-12">

		<h2>L'inscription est possible toute l'année</h2>

		<p>Pré-inscriptions par email ou téléphone. Inscriptions au bureau du CAEM avec Sonia du lundi au jeudi de 9h15 à 16h00. Pour le règlement des activités, nous vous donnons la possibilité de choisir le mode de paiement qui vous convient le mieux : mensualisation en prélèvement automatique sur 12 mois, paiement par chèque en plusieurs fois, chèques vacances...</p>

	</section>


	<section class="tarifsActivitees row col-md-8">
	@foreach($priceActivities as $typeActivity)

	<h2>{{ $typeActivity->name }}</h2>

		@foreach($typeActivity->activities_web as $activity)
		<div>

			<h3>{{ $activity->name }}</h3>

			<p>{{ $activity->price }}</p>

		</div>
		@endforeach

	@endforeach
	</section>


	<section class="tarifsFormules col-md-4">

		<h2>Nos formules</h2>

		<div>
			<p>Cours d'instrument en groupe</p>
			<p class="enchanced">+</p>
			<p>Ateliers thématiques</p>
			<p class="enchanced">=</p>
			<p>-50% sur l'atelier</p>
		</div>

		<div>
			<p>Cours d'instrument en groupe</p>
			<p class="enchanced">+</p>
			<p>Pratique collective &amp; Expression corporelle</p>
			<p class="enchanced">=</p>
			<p>-50% sur l'activité</p>
		</div>


	</section>

</main>
@endsection
{{------------------}}
