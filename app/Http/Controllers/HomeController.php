<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $count = Event::count();
        $latest = Event::latest()->first();
        $event_names = \App\Event_name::all();
        return view('welcome',compact('count','latest','event_names'));
    }
}
