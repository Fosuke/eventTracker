@extends('layouts.app')


@section('content')
	<h1>Create an Event</h1>

	<hr>

	<form method="POST" action="/events/{{$event->id}}">
		{{ csrf_field() }}
		{{ method_field('PUT') }}
		<div class="form-group">
			<label for="event_name_id">Event Name:</label>
			<select class="form-control" id="event_name_id" name="event_name_id" >
				@foreach($eventNames as $eventName)
					<option value={{$eventName->id}} @if($event->event_name_id == $eventName->id) selected @endif>{{$eventName->name}}</option>
				@endforeach
			</select>
		</div>
		
		<div class="form-group">
			<button type="submit" class="btn btn-primary">Submit</button>
		</div>
		<div class="form-group">
			@include('layouts.errors')
		</div>
	</form>

@endsection