<?php

namespace App\Http\Controllers\Front;
use \App\Models\Article;
use \App\Http\Controllers\Controller;

class PagesController extends Controller
{

public function index()
{
  // $typeActualities['Actualités'] = \App\Models\Article::news(); // get news
  $typeActualities['Actualités'] = \App\Models\Article::feature()->get(); // get news
  foreach ($typeActualities['Actualités'] as $actuality) {
    $actuality->formatDate = Article::carbon($actuality->date);
  }

	return view('front.pages.index',compact(['typeActualities']));
}

public function course()
{

	$typeActivities = \App\Models\Types_activity::with('activities_web')->get();

	return view('front.pages.course', ['typeActivities' => $typeActivities]);

}

public function prices()
{

	$priceActivities = \App\Models\Types_activity::with('activities_web')->get();

	return view('front.pages.prices', ['priceActivities' => $priceActivities]);
}

public function events()
{
  // $typeActualities['A venir'] = \App\Models\Article::news(); // get news
  // $typeActualities['Actualités'] = \App\Models\Article::coming(); // get news


  $typeActualities['Evenements proche'] = Article::actualities()->get();
  foreach ($typeActualities['Evenements proche'] as $actuality) {
    $actuality->formatDate = Article::carbon($actuality->date);
  }

  $typeActualities['Evenements à venir'] = Article::futureActualities()->get();
  foreach ($typeActualities['Evenements à venir'] as $actuality) {
    $actuality->formatDate = Article::carbon($actuality->date);
  }

  $typeActualities['Evenements passés'] = Article::oldActualities()->get();
  foreach ($typeActualities['Evenements passés'] as $actuality) {
    $actuality->formatDate = Article::carbon($actuality->date);
  }

	return view('front.pages.events',compact(['typeActualities']));
}

public function event($id){
  $event = Article::find($id);
  $event->formatDate = Article::carbon($event->date);
  return view('front.pages.event',compact(['event']));
}

public function team()
{
	$professeurs= \App\Models\Team::where('type', 'Professeur' )->get();
	$bureaux= \App\Models\Team::where('type', 'Bureau' )->get();
	$administrations= \App\Models\Team::where('type', 'Administration' )->get();
	$autres= \App\Models\Team::where('type', 'Autre' )->get();

	return view('front.pages.team', ['professeurs' => $professeurs, 'bureaux' => $bureaux, 'administrations' => $administrations, 'autres' => $autres]);
}

public function association()
{
	return view('front.pages.association');
}

public function credits()
{
	return view('front.pages.credits');
}

public function legacy_mention()
{
	return view('front.pages.legacy_mention');
}

public function contact()
{
	return view('front.pages.contact');
}



}
