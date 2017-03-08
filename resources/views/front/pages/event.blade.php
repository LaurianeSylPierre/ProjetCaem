{{----CALLING THE DEFAULT LAYOUT--}}
@extends('front.layouts.default')
{{--------------------------------}}




{{---HEAD TITLE :---}}
@section('pageTitle')
CAEM - Évenements
@endsection
{{------------------}}




{{--HEAD OGTAGS :--}}
@section('ogtags')
    @include('front.includes.og_tags', ['title' => $event->title, 'image' => $event->image, 'description' => strip_tags(mb_strimwidth($event->content, 0, 75, "..."))])
		{{-- you can precise title, type, url, image, description--}}
@stop
{{------------------}}




{{--MAIN CONTENT :--}}
@section('pageContent')
<main id="event" class="container">

  <section class="row">
  	<figure class="col-sm-6 text-center">
  		<img class="img-responsive center-block" src="{{ url('images_resize/600/'.str_replace("/","@",$event->image)) }}" alt="">
  	</figure>
  	<div class="col-sm-6">
  		<h1 class="col-sm-12">{{ $event->title }}<a class="pull-right" href="javascript:history.back()"><img src="{{ asset('images/back.svg')}}" alt=""></a></h1>
  		<time class="col-sm-12" datetime="{{ $event->date }}">{{ $event->formatDate }}</time>
  		<div class="description">
  			{!! $event->content !!}
  		</div>
      <div class="col-sm-12 share">
        <!-- Your share button code -->
        <a href="https://www.facebook.com/sharer/sharer.php?u={{ str_replace('http://', 'https://', Request::url()) }}" title="Partager sur Facebook" target="_blank" class="button"><img src="{{ asset('images/facebook_logo.svg')}}" alt=""> Facebook</a>
        <!-- Your share button code -->
        <a class="twitter-share-button button" target="_blank" title="Partager sur Twitter"
        href="https://twitter.com/share"
        data-text="@CaemBesancon"
        data-url="{{  str_replace('http://', 'https://', Request::url()) }}"
        data-hashtags="caem,musique"
        data-via="caembesancon"
        data-related="caembesancon">
        <img src="{{ asset('images/twitter_logo.svg')}}" />
        Twitter</a>
      </div>
  	</div>
  </section>
</main>
@endsection
{{------------------}}
