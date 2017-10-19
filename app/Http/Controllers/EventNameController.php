<?php

namespace App\Http\Controllers;

use App\{Event_name,Category};
use Illuminate\Http\Request;

class EventNameController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $eventNames = Event_name::latest()->get();
        
        return view('eventNames.index',compact('eventNames'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('eventNames.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(request(),[
            'name'=>'required',
            'category_id'=>'required',
        ]);
        auth()->user()->addEventName(new Event_name(request(['name','category_id'])));
        return redirect('/eventNames');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\event_name  $event_name
     * @return \Illuminate\Http\Response
     */
    public function show(Event_name $eventName)
    {
        return view('eventNames.show',compact('eventName'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\event_name  $event_name
     * @return \Illuminate\Http\Response
     */
    public function edit(Event_name $eventName)
    {
        $categories = Category::all();
        return view('eventNames.edit',compact('eventName','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\event_name  $event_name
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event_name $eventName)
    {
        $this->validate(request(),[
            'name'=>'required',
            'category_id'=>'required',
        ]);
        $eventName->name = $request->name;
        $eventName->category_id = $request->category_id;
        $eventName->save();
        return redirect('/eventNames/'.$eventName->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\event_name  $event_name
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event_name $event_name)
    {
        $event_name->delete();
        return redirect('/');
    }
}
