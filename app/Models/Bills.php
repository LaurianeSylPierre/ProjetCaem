<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;

class Bills extends Model
{
    use CrudTrait;



    protected $fillable = [
        'price',
        'date',
        'type_payment_id'
    ];

    public function products(){
        return $this->hasMany('App\Models\Produit.php');
    }

    public function person(){
        return $this->hasMany('App\Models\Person.php');
    }

    public function member_activities(){
        return $this->hasMany('App\Models\Member_activity.php');
    }

}
