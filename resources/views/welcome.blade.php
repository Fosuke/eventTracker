@extends('layouts.app')

@section('content')
          <div class="row">
            <div class="col-md">
                @if ($count>0)
                    <h2>Last Event: {{$latest->event_name->name}} {{$latest->created_at->diffForHumans()}}</h2>
                @else
                    <h2>Ready for First Event</h2>
                @endif
            </div>
          </div>
          
            @foreach($event_names as $event_name)
            <div class="inner cover mb-1">
             <form method="POST" action="/events">
                  {{ csrf_field() }}
                <input id="event_name_id" name="event_name_id" value={{$event_name->id}} hidden>
                <button class="btn btn-lg btn-secondary">add {{$event_name->name}}</button>
              </form>
            </div>
          @endforeach
@endsection