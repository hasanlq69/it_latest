<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Daily extends Model
{
    protected $table= "dailies";
    protected $fillable = ['act_id', 'day', 'note', 'pic', 'status', 'maintener', 'created_at', 'updated_at'];

    public function activity(){
    	return $this->belongsTo('App\Activity', 'act_id');
    }
}
