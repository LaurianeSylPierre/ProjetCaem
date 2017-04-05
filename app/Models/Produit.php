<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;

class Produit extends Model
{
    use CrudTrait;


		  protected $fillable = [
        'name',
        'price',
        'activity_id'
    ];



 public function activity(){
        return $this->belongsTo('App\Models\Activity');
    }

    public function bills(){
        return $this->belongsTo('App\Models\Bills');
    }
}
