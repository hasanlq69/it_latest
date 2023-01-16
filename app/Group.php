<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $table = "groups";

    public function activities(){
    	return $this->hasMany('App\Activity');
    }

    public function maintenance(){
    	return $this->belongsTo('App\Maintenance', 'maintenance_id');
    }
}
