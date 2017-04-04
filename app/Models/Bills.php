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
    //
	// // public function type_payment()
    // // {
    // //     return $this->belongsTo('App\Models\Type_payment');
    // // }
    //
    // public function payments_people()
    // {
    //     return $this->belongsToMany('App\Models\Person', 'payments_people','payment_id','person_id');
    // }

}
