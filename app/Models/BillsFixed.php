<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;

class BillsFixed extends Model
{
    use CrudTrait;

    public function bills(){
        return $this->hasMany('App\Models\Bills.php');
    }

}
