<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
	protected $fillable = ['event_name_id'];
	
	public function newQuery(){
	    return parent::newQuery()->where('user_id',auth()->id());
	}
    function user(){
    	return $this->belongsTo('App\User','user_id');
    }

    function event_name(){
    	return $this->belongsTo('App\Event_name','event_name_id');
    }
    
}
