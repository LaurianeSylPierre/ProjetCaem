<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;
use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;
use Carbon\Carbon;

class Article extends Model
{

    use CrudTrait;
    use Sluggable, SluggableScopeHelpers;

    protected $table = 'articles';
    protected $primaryKey = 'id';
    public $timestamps = true;

    protected $fillable = [
        'slug',
        'title',
        'content',
        'image',
        'status',
        'category_id',
        'featured',
        'date'
    ];

    protected $casts = [
        'featured'  => 'boolean',
        'date'      => 'date',
    ];

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'slug_or_title',
            ],
        ];
    }

    public function category()
    {
        return $this->belongsTo('App\Models\Category', 'category_id');
    }

    public function scopePublished($query)
    {
        return $query->where('status', 'PUBLISHED')
                     ->where('date', '<=', date('Y-m-d'))
                     ->orderBy('date', 'DESC');
    }

    public function getSlugOrTitleAttribute()
    {
        if ($this->slug != '') {
            return $this->slug;
        }
        return $this->title;
    }

    /*
    * return the recurent event
    * We need to create a category "A venir" or change the value.
    */
    public static function coming(){

      $coming = static::whereHas('category', function($query){
        $query->where('name','LIKE','A venir');
      })
      ->where('featured',1)
      ->take(4)
      ->get();
      return $coming;
    }

    /*
    * return news who was not coming
    * so news who is not in category 'A venir'
    */
    public static function news(){

      $news = static::whereHas('category', function($query){
        $query->where('name','NOT LIKE','A venir');
      })
      ->where('featured',1)
      ->get();
      return $news;
    }

    /**
    *taker date format and
    *return date french format
    **/
    public static function carbon($date){

      setlocale(LC_TIME, 'fr_FR.utf8');
      return Carbon::parse($date, 'Europe/Paris')->formatLocalized('%A %d %B %Y');

    }

    /*
    * return 4 feature
    */
    public function scopeFeature($query){

      return $query->where('featured', 1)->orderBy('date','desc')->take(4);
    }

    public function scopeFutureActualities($query){

      $date = Carbon::parse('today')->addWeeks(2);
      return $query->where('date','>=',$date)->orderBy('date','desc');
    }

    public function scopeActualities($query){

      $maxDate = Carbon::parse('today')->addWeeks(2);
      $date = Carbon::parse('today');
      return $query->where('date','<=',$maxDate)
            ->where('date','>=',$date)
            ->orderBy('date','desc');
    }

    public function scopeOldActualities($query){

      $minDate = Carbon::parse('today')->subWeeks(7);
      $date = Carbon::parse('today');
      return $query->where('date','>=',$minDate)
      ->where('date','<=',$date)
      ->orderBy('date','desc');
    }
  }
