<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Maintenance extends Model
{
    protected $table="maintenances";

    public function groups(){
    	return $this->hasMany('App\Group');
    }
}
