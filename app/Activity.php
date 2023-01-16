<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    protected $table = "activities";

    public function group(){
    	return $this->belongsTo('App\Group', 'group_id');
    }

    public function dailies(){
    	return $this->hasMany('App\Daily', 'act_id', 'id');
    }
}
