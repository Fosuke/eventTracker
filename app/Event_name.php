<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event_name extends Model
{
    protected $fillable = ['name','category_id'];
	public function newQuery(){
	    return parent::newQuery()->where('user_id',auth()->id());
	}
    function user(){
    	return $this->belongsTo('App\User','user_id');
    }

    function events(){
    	return $this->hasMany('App\Event');
    }
    function category(){
    	return $this->belongsTo('App\Category','category_id');
    }
}
