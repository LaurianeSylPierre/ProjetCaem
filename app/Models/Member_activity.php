<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;

class Member_activity extends Model
{
    use CrudTrait;

	public function people_activity()
    {
        return $this->belongsToMany('App\Models\Activity', 'member_activities','activity_id','person_id');
    }

    public function bills(){
        return $this->belongsTo('App\Models\Bills');
    }

}
