<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;
use Carbon\Carbon;

class Person extends Model
{
    use CrudTrait;

    protected $fillable = [
        'gender',
        'name',
        'family_name',
        'mail',
        'tel_fix',
        'tel_mob',
        'postal_code',
        'adress',
        'birthday',
        'observation',
        'code_analytique',
        'image_right',
        'city_id',
        'district_id',
        'familly_id',
        'status'
    ];

	public function city()
    {
        return $this->belongsTo('App\Models\City');
    }

    public function district()
    {
        return $this->belongsTo('App\Models\District');
    }

    public function familly()
    {
        return $this->belongsTo('App\Models\Familly');
    }

    public function people_people()
    {
        return $this->belongsToMany('App\Models\Person', 'person_people','person_id','people_link_id');
    }

    public function type_people()
    {
        return $this->belongsToMany('App\Models\Type_person', 'people_types_people','person_id','type_person_id');

    }

    public function membership()
    {
        return $this->belongsTo('App\Models\Membership');
    }

	public function getFullNameAttribute()
    {
   		return $this->family_name.' '.$this->name;
    }

    public function instruments()
    {
        return $this->belongsToMany('App\Models\Instrument', 'people_instruments','person_id','instrument_id');

    }

    public function getyearsold()
    {
        $born = Carbon::parse($this->birthday);
        return $born->diff(Carbon::now())->format('%y');
    }

    public function people_activities()
    {
        return $this->belongsToMany('App\Models\Activity', 'member_activities','person_id','activity_id');
    }

    public function bills(){
        return $this->belongsTo('App\Models\Bills');
    }

}
