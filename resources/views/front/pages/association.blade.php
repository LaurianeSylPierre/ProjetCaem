{{----CALLING THE DEFAULT LAYOUT--}}
@extends('front.layouts.default')
{{--------------------------------}}




{{---HEAD TITLE :---}}
@section('pageTitle')
CAEM - L'association
@endsection
{{------------------}}




{{--HEAD OGTAGS :--}}
@section('ogtags')
    @include('front.includes.og_tags', ['title' => 'CAEM Besançon École de musique - Assocation'])
		{{-- you can precise title, type, url, image, description --}}
@stop
{{------------------}}




{{--MAIN CONTENT :--}}
@section('pageContent')
<main class="container mainAssociation">


	<h2>Une école de musique à votre écoute.</h2>
		<p>Le Carrefour d'Animation et d'Expression Musicales est une association née en 1992 proposant des activités musicales pour tous.</p>
		<p>Spécialisé dans les musiques actuelles, le CAEM est une école pour apprendre, pratiquer la musique en groupe et se perfectionner. Nous proposons des ateliers et des cours de musique ouverts à tous sans condition d’âge ni de niveau!</p>
		<p>Composé de 421 adhérents, le CAEM a été reconnu école de musique structurante par la Communauté d’Agglomération du Grand Besançon. Elle appartient à la Fédération nationale des Centre Musicaux Ruraux. La Fédération nationale des CMR a pour mission de rendre la musique accessible au plus grand nombre, quelles que soient les situations sociales, géographiques et culturelles des bénéficiaires.</p>


	<h2>Nos valeurs :</h2>
	<ul>
		<li>Vous proposer un parcours personnalisé</li>
		<li>Favoriser la rencontre, la mixité, et l’échange</li>
		<li>Privilégier le jeu et la dynamique de groupe</li>
		<li>Vous faire vivre l’expérience de la scène</li>
	</ul>

	<p>Tout au long de l’année, le CAEM participe à l’animation musicale du territoire du Grand Besançon en programmant de nombreuses manifestations.</p>

</main>
@endsection
{{------------------}}
