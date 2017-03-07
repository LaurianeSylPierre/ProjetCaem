{{----CALLING THE DEFAULT LAYOUT--}}
@extends('front.layouts.default')
{{--------------------------------}}




{{---HEAD TITLE :---}}
@section('pageTitle')
CAEM - École de musique
@endsection
{{------------------}}




{{--HEAD OGTAGS :--}}
@section('ogtags')
    @include('front.includes.og_tags', ['title' => 'CAEM Besançon École de musique - Accueil'])
		{{-- you can precise title, type, url, image, description--}}
@stop
{{------------------}}




{{--MAIN CONTENT :--}}
@section('pageContent')
<main class="container">

<!-- START PRENSENTATION CAEM -->
<header class="row" id="presentation">
	<h2 class="text-center">Le Carrefour d'Animation et d'Expression Musicales, qu’est-ce que c’est ?</h2>
	<p class="borderLeftBlue">Un parcours personnalisé</p>
	<p class="borderLeftGreen">Des rencontres, de la mixité et de l’échange</p>
	<p class="borderLeftPink">Du jeu dynamique, en groupe</p>
	<p class="borderLeftOrange">L’expérience de la scène</p>
	<div class="text-center">
		<a href="/parcours" class="">Mon parcours musical</a>
	</div>
</header>
<!-- END PRENSENTATION CAEM -->

<!-- START NEWS -->
	@foreach ($typeActualities as $key => $typeActuality)
	<section class="news">
	<header>
		<h2>{{ $key }}</h2>
	</header>
	<div class="row">
		@foreach ($typeActuality as $actuality)
			<article class="col-md-3">
				<div class="new">
					<figure>
						<figcaption >
							<h2>{{ $actuality->title }}</h2>
							<time datetime="{{ $actuality->date }}">{{ $actuality->formatDate }}</time>
						</figcaption>
            <div class="vertical-center">
              <img class="img-responsive center-block" src="{{ url('images_resize/263/'.str_replace("/","@",$actuality->image)) }}" alt="">
            </div>
          </figure>
					<div class="description">
						{!! $actuality->content !!}
					</div>
					<div class="text-center">
						<a href="evenement/{{ $actuality->id }}">Lire la suite</a>
					</div>
				</div>
			</article>
		@endforeach
	</div>
</section>
	@endforeach
<!--END NEWS -->
</main>
@endsection
{{------------------}}
