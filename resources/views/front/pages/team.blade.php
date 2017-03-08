{{----CALLING THE DEFAULT LAYOUT--}}
@extends('front.layouts.default')
{{--------------------------------}}




{{---HEAD TITLE :---}}
@section('pageTitle')
CAEM - L'équipe
@endsection
{{------------------}}




{{--HEAD OGTAGS :--}}
@section('ogtags')
    @include('front.includes.og_tags', ['title' => 'CAEM Besançon École de musique - Équipe'])
		{{-- you can precise title, type, url, image, description--}}
@stop
{{------------------}}




{{--MAIN CONTENT :--}}
@section('pageContent')
<main class="container mainEquipe">


	<section class="col-md-12">

		<h2>Intervenants</h2>

		@foreach($professeurs as $professeur)
		<div class="col-md-3">

			<article>

				<figure>
					@if($professeur->picture != null)
					<img src="{{ url('images_fit/250x250/'.str_replace('/','@',$professeur->picture)) }}">
					@else
					<img src="{{ asset('images/placeholder.png')}}">
					@endif
				</figure>

				<figcaption>
					<h3>{{ $professeur->firstname }} {{ $professeur->name }}</h3>
					<p>{{ $professeur->instrument }}</p>
				</figcaption>

			</article>

		</div>
		@endforeach

	</section>


	<section class="col-md-12">

		<h2>Salariés administration</h2>

		@foreach($bureaux as $bureau)
		<div class="col-md-3">

			<article>

				<figure>
					@if($bureau->picture != null)
					<img src="{{ url('images_fit/250x250/'.str_replace('/','@',$bureau->picture)) }}">
					@else
					<img src="{{ asset('images/placeholder.png')}}">
					@endif
				</figure>

				<figcaption>
					<h3>{{ $bureau->firstname }} {{ $bureau->name }}</h3>
					<p>{{ $bureau->instrument }}</p>
				</figcaption>

			</article>

		</div>
		@endforeach

	</section>


	<section class="col-md-12">

		<h2>Conseil d'Administration</h2>

		@foreach($administrations as $administration)
		<div class="col-md-3">

			<article>
				<figure>
					@if($administration->picture != null)
					<img src="{{ url('images_fit/250x250/'.str_replace('/','@',$administration->picture)) }}">
					@else
					<img src="{{ asset('images/placeholder.png')}}">
					@endif
				</figure>

				<figcaption>
					<h3>{{ $administration->firstname }} {{ $administration->name }}</h3>
					<p>{{ $administration->instrument }}</p>
				</figcaption>

			</article>

		</div>
		@endforeach
	</section>


	<section class="col-md-12">
		<h2>Autres membres</h2>
		@foreach($autres as $autre)
		<h3>{{ $autre->firstname }} {{ $autre->name }}</h3>
		@endforeach
	</section>


</main>
@endsection
{{------------------}}
