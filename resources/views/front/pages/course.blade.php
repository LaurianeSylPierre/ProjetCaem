{{----CALLING THE DEFAULT LAYOUT--}}
@extends('front.layouts.default')
{{--------------------------------}}




{{---HEAD TITLE :---}}
@section('pageTitle')
CAEM - Mon parcours musical
@endsection
{{------------------}}




{{--HEAD OGTAGS :--}}
@section('ogtags')
    @include('front.includes.og_tags', ['title' => 'CAEM Besançon École de musique - Mon parcours musical'])
		{{-- you can precise title, type, url, image, description--}}
@stop
{{------------------}}




{{--MAIN CONTENT :--}}
@section('pageContent')
<main class="container mainParcoursMusical">


<!--selection column :-->
	<aside class="col-md-3 col-sm-3 hidden-xs container">
		<section id="sectionInterest">

			<h2>Qu'est-ce qui vous intéresse ?</h2>

			@foreach($typeActivities as $typeActivity)
				<section>

					<h3>{{ $typeActivity->name }}</h3>

					@foreach($typeActivity->activities_web as $activity)
					<label onclick="displayActivity();">
						<p>{{ $activity->name }}</p>
						<input class="activityCheckbox" type="checkbox" value="{{ $activity->id }}">
					</label>
					@endforeach

				</section>
			@endforeach
		</section>
	</aside>


<!--selected instrument / atelier / activites :-->
	<div class="col-md-9 col-sm-9">

		@foreach($typeActivities as $typeActivity)
		@foreach($typeActivity->activities_web as $activity)
		<section id="{{ $activity->id }}" class="activitiesClass col-md-12">

			<header id="headerParcours" class="col-md-12">
				<h3>{{ $activity->name }}</h3>
			</header>

			<main class="col-md-12">
				<article>
					{{ $activity->description }}
				</article>
			</main>

			<footer class="col-md-12">

				<div class="col-md-6">
					<h4>Quand ?</h4>
					<p>{{ $activity->when }}</p>
				</div>

				<div class="col-md-6">
					<h4>Tarifs :</h4>
					<p>{{ $activity->price }}</p>
				</div>

				<figure class="col-md-12">

					<div class="col-md-6 center-block">
						<img src="{{ url('images_fit/400x200/'.str_replace("/","@",$activity->picture_1)) }}" />
					</div>

					<div class="col-md-6 center-block">
						<img src="{{ url('images_fit/400x200/'.str_replace("/","@",$activity->picture_2)) }}" />
					</div>

				</figure>

			</footer>

		</section>
		@endforeach
		@endforeach

	</div>


</main>
@endsection
{{------------------}}




{{--SCRIPT RELATED TO THE PAGE :--}}
@section('pageScript')
<script>

var btnActivity = document.querySelectorAll(".activityCheckbox");

function displayActivity()
	{
		var count = 0;

		for (i=0 ; btnActivity[i] ; i++)
			{
				activityId = btnActivity[i].value;
				document.getElementById(activityId).classList.add("activityHide");

				if(btnActivity[i].checked)
					{
						count++;
						document.getElementById(activityId).classList.remove("activityHide");
					}

			}


		if(count == 0)
			{
				for(i=0 ; btnActivity[i] ; i++)
					{
						activityId = btnActivity[i].value;
						document.getElementById(activityId).classList.remove("activityHide");
					}
			}
	}
	</script>
@endsection
{{------------------}}
