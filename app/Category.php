<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name'];
	public function newQuery(){
	    return parent::newQuery()->where('user_id',auth()->id());
	}
  	function user(){
    	return $this->belongsTo('App\User','user_id');
    }

    function events(){
    	return $this->hasMany('App\Event');
    }
    function event_names(){
    	return $this->hasMany('App\Event_Name');
    }
}
