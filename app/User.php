<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    function event_names(){
        return $this->hasMany('App\Event_name');
    }
    function events(){
        return $this->hasMany('App\Event');
    }
    function categories(){
        return $this->hasMany('App\Category');
    }
    
    function addEvent(Event $event){
        $this->events()->save($event);
    }
    function addEventName(Event_name $event_name){
        $this->event_names()->save($event_name);
    }
    function addCategory(Category $category){
        $this->events()->save($category);
    }
}
